<?php 
//error_reporting(0);
error_reporting(0);

	class Laporan extends ci_controller {
		public function index(){
			//$data['content'] = 'admin/v_home';
			$data['content'] = 'admin/v_laporan';
			$this->load->view('admin/v_index',$data);
		}
		public function order(){
			//$data['content'] = 'admin/v_home';
			$data['content'] = 'admin/report_order';
			$this->load->view('admin/v_index',$data);
		}
		public function point(){
			//$data['content'] = 'admin/v_home';
			$data['content'] = 'admin/report_point';
			$this->load->view('admin/v_index',$data);
		}
		public function invoice(){
			//$data['content'] = 'admin/v_home';
			$data['content'] = 'admin/report_invoice';
			$this->load->view('admin/v_index',$data);
		}
		public function stok(){
			$data['data']	 = $this->db->get('tbl_ukuran');
			$data['content'] = 'admin/report_stok';
			$this->load->view('admin/v_index',$data);
		}

		public function v_laporanorder(){
			$tanggal  = $this->input->post('tanggal');
			$sql = "SELECT * FROM tbl_detailcart where tanggal='$tanggal'";
			$data['data']	= $this->db->query($sql);
			$this->load->view('admin/v_laporanorder',$data);
		}
		public function v_laporanstok(){
			$id_ukuran  = $this->input->post('id_ukuran');
			$sql = "SELECT * FROM tbl_stok where id_ukuran='$id_ukuran'";
			$data['data']	= $this->db->query($sql);
			$this->load->view('admin/v_laporanstok',$data);
		}
		public function v_laporaninvoice(){
			$data['data']	 = $this->db->get('tbl_cart');
			$this->load->view('admin/v_laporaninvoice',$data);
		}
		public function konfirmasi(){
			$data['data']	 = $this->db->get('tbl_konfirmasi');
			$this->load->view('admin/v_laporankonfirmasi',$data);
		}
		public function member(){
			$data['data']	 = $this->db->get('tbl_member');
			$this->load->view('admin/v_laporanmember',$data);
		}
		public function all_order(){
			$data['data']	 = $this->db->get('tbl_point');
			$this->load->view('admin/v_laporanpointall',$data);
		}
		
		public function produk(){
			$data['kategori_produk'] = $this->db->get('tbl_kategori');
			$data['content'] = 'admin/report_produk';
			$this->load->view('admin/v_index',$data);
		}
		public function v_laporanproduk(){
			$data['nama_kategori'] = $this->input->post('kategori_produk'); 
			$data['data']	 = $this->db->get_where('tbl_produk',$data);
			$this->load->view('admin/v_laporanproduk',$data);
		}
		public function detail_cart($invoice){
			$invoices['invoice']		     = $invoice;
			$data['data']	 			 = $this->db->get_where('tbl_detailcart',$invoices);
			$data['data_konfirmasi']	 = $this->db->get_where('tbl_konfirmasi',$invoices);
			$this->load->view('admin/print_detail_cart',$data);

		}
		public function v_laporanpoint(){
			$tanggal  = $this->input->post('tanggal');
			$sql = "SELECT * FROM tbl_tukarpoint where tanggal='$tanggal'";
			$data['data']	= $this->db->query($sql);
			$this->load->view('admin/v_laporanpoint',$data);
		}
		
	
}
