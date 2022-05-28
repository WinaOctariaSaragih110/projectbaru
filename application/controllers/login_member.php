<?php 
error_reporting(0);

class Login_member extends ci_controller{

	public function __construct(){
        parent::__construct();
        $this->load->model('model_login');                 
    }

	public function index(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode_member', 'kode_member', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');// disini terdapat callback : callback_check_database. digunakan untuk memanggil function check_database() dibawah.

        		if($this->form_validation->run() == FALSE){
        			//redirect('login?gagal=1','refresh');
        			redirect('web/login/login?gagal=1','refresh');

        		}else{
        			redirect('web','refresh');
        		}
	}

	public function check_database(){
		$kode_member		= $this->input->post('kode_member');
		$password			= $this->input->post('password');

        $this->load->model('model_login');                 
		$result=$this->model_login->member($kode_member,$password);

		if($result){
			foreach($result as $row){
				$this->session->sess_expiration = '11400';// expires in 4 hours
				$this->session->set_userdata('kode_member',$row->kode_member);
			}
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function sigup(){
		$nama_member		= $this->input->post('nama_member');
		$email_member		= $this->input->post('email_member');
		$password_member	= $this->input->post('password_member');
		$no_hp				= $this->input->post('no_hp');
		$alamat				= $this->input->post('alamat');
		$tahun				= $this->input->post('tahun');
		$bulan				= $this->input->post('bulan');

		$data = array('nama_member' 		=> $nama_member ,
					  'email_member' 		=> $email_member,
					  'password_member' 	=> $password_member,
					  'no_hp'			 	=> $no_hp,
					  'bulan'			 	=> $bulan,
					  'tahun'			 	=> $tahun,
					  'alamat'			 	=> $alamat
		 );
			$sukses  = $this->db->insert('tbl_member',$data);
			if($sukses){
				$sql = "SELECT id_member from tbl_member order by id_member desc limit 1";
				$rs=$this->db->query($sql);

				foreach ($rs->result() as $key) {
					$s="INSERT INTO tbl_cart set id_member='$key->id_member'";
					$this->db->query($s);
				}
				$data['data'] = "1";
				$this->load->view('v_login',$data);
			}else{
				$this->load->view('v_login');
			}

	}




public function logout(){
        $this->session->unset_userdata('kode_member');
        redirect('web/login','refresh');
    }
}