<?php 

error_reporting(0);
class Member extends ci_controller{


	public function konfirmasi($kode_cart){

	if($this->session->userdata('user')){
		$data['kode_cart']		= $kode_cart;
		$data['content']		= 'v_konfirmasi';
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$this->load->view('v_home',$data);
		}else{
			$this->load->view('v_login');
		}

	}

	public function insert_konfirmasi(){
	if($this->session->userdata('user')){

		$kode_cart		= $this->input->post('kode_cart');
		$id_member		= $this->input->post('id_member');
		$no_rekening	= $this->input->post('no_rekening');
		$keterangan		= $this->input->post('keterangan');
		$gambar 		= $_FILES['userfile']['name'];
		$konfirmasi 	= 'n';
		

		// Konfigurasi Upload Gambar
				$config['upload_path']          = './application/views/photo';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']				= '1024';
				$config['max_width']  			= '1600';
				$config['max_height']  			= '1200';

				$this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());        
						$data = array(
										'kode_cart' 	=> $kode_cart,
										'id_member' 	=> $id_member,
										'no_rekening'   => $no_rekening,
										'keterangan'    => $keterangan,
										'konfirmasi'    => $konfirmasi,
										'photo_url'      => $gambar
						);
						$sukses = $this->db->insert('tbl_konfirmasi', $data);
						if($sukses == TRUE){
							$session=$this->session->userdata('user');
							$data['nama_member']=$session['nama_member'];
							$data['info']	= '1';
							$this->load->view('v_biling',$data);
						}else{
							return FALSE;
							exit();
							redirect('ci_admin/view_barang','refresh');

						}
						}
                }else{
				$this->load->view('v_login');
		}

	}

	public function cart(){
	
			$kode_barang 		= $this->input->post('kode_barang');
			$id_member	 		= $this->input->post('id_member');
			$jumlah_barang		= $this->input->post('jumlah_barang');
			$nama_barang		= $this->input->post('nama_barang');
			$harga				= $this->input->post('harga');
			$photo_url			= $this->input->post('photo_url');
			$total 				= $harga * $jumlah_barang;

	if($this->session->userdata('user')){

		if(isset($_POST['chart'])){

				$sql = "SELECT * FROM tbl_cart where id_member='$id_member'";
				$rs = $this->db->query($sql);
				foreach ($rs->result() as $key) {
								$d=date('d');
                                $m=date('m');
                                $y=date('y');
                                $date =$d.$m.$y;
						if($key->date == $date){
							//$data['info']="SILAHKAN BELANJA LAGI BESOK";
							?>
							<script type="text/javascript">
								alert('ANDA BERBELANJA HARI INI SILAHKAN BERBELANJA BESOK TERIMA KASIH');window.location='<?php echo base_url(); ?>index.php/site/biling';
							</script>
							<?php
							
						}else{

							$data = array('kode_barang' 		=>$kode_barang  ,
											'id_member' 		=>$id_member ,
											'jumlah_barang' 	=>$jumlah_barang ,
											'nama_barang' 		=>$nama_barang ,
											'harga' 			=>$harga,
											'total' 			=>$total,
											'tgl'				=> $d=date('d'),
											'photo_url' 		=>$photo_url 

							 );
							$ql="DELETE FROM tbl_cart where harga='0' ";
							$this->db->query($ql); //menghapus  id yang masuk ke tabel cart pertama saat daftar
							$sukses=$this->db->insert('tbl_cart',$data);
									if($sukses){
										redirect('site/v_chart');	
									}else{
											$this->load->view('site');
									}

						}/*end if date*/
				}/*end foreach*/ 
		}/*if isset post cart*/ 
		else{
			$data['nama_member'] = 'login'; //jika tidak login


                $this->load->view('v_biling',$data);

		}/*end session*/
		}/*if isset post cart*/ 
		else{
			$data['nama_member'] = 'login'; //jika tidak login


                $this->load->view('v_login',$data);

		}/*end session*/
		}/*end session*/


		public function biling(){
		if($this->session->userdata('user')){


			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];

			$this->load->view('v_biling',$data);
		}else{
			$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
		}
	}

	public function account(){
		if($this->session->userdata('user')){


			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
			$this->load->view('v_account',$data);
		}else{
			$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
		}
	}

	public function login(){
		if($this->session->userdata('user')){

			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
		$this->load->view('v_login');
	}else{
		$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
	}
	}

	public function checkout(){
		redirect('site/biling');
	}
}



 ?>