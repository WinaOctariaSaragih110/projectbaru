<?php 
error_reporting(0);

	class Produk extends ci_controller {
		public function __construct(){
		        parent::__construct();
		        $this->load->model('model_barang');                 
		    }
		public function index(){
			$data['content'] = 'v_produk';
			$this->load->view('v_index',$data);
		}
		public function detail($kode_produk){
			$data['kode_produk']	= $kode_produk;
			$datas['type']			='promosi';
			$data['data']			= $this->db->get_where('tbl_produk',$data);
			$data['dataproduk']			= $this->db->get('tbl_produk',$datas);
			$data['content'] = 'v_detail_produk';
			$this->load->view('v_index',$data);
		}
		public function detail_point($kode_point){
			$table = 'tbl_tukarpoint';
			
			$data['kodeunik'] = $this->model_barang->getkodetranspoint($table); 
			$datab['kode_point']	= $kode_point;
			$datas['type']			='populer';
			$data['data']			= $this->db->get_where('tbl_point',$datab);
			$data['dataproduk']			= $this->db->get('tbl_produk',$datas);
			$data['content'] = 'v_detail_point';
			$this->load->view('v_index',$data);
		}
		public function checkout(){
			$data['content'] = 'v_checkout';
			$this->load->view('v_index',$data);
		}
		public function kategori($nama_kategori){
			$data['nama_kategori']	=	 $nama_kategori;
			$data['data']			= 	$this->db->get_where('tbl_produk',$data);
			$data['content']        = 'v_produk';
			$this->load->view('v_index',$data);
		}
		public function point(){
			if($this->session->userdata('kode_member')){
			$data['data']			= 	$this->db->get('tbl_point');
			$data['content']        = 	'v_point';
			$this->load->view('v_index',$data);
			}else{
				redirect('web/login');
			}
		}
		public function cart(){
			$kode_produk	= $this->input->post('kode_produk');
			$jumlah_beli	= $this->input->post('jumlah_beli');
			$jenis			= $this->input->post('jenis');
			$ukuran			= $this->input->post('id_ukuran');
			$keterangan			= $this->input->post('keterangan');
			/*mengambil query tbl_stok*/
			$sql = "SELECT * from tbl_stok where kode_produk='$kode_produk' and id_ukuran='$ukuran'";
			$rs  = $this->db->query($sql);
			foreach ($rs->result() as $row) {
				
			}
			/*mengitung jumlah beli*/
			$stok = $row->stok;

			$jumlah = $jumlah_beli * $jenis;

			if($stok < $jumlah){
				?>
				<script type="text/javascript">
						alert("maaf Stok Tidak Mencukupi");
				</script>
				<meta http-equiv="refresh" content="0; detail/<?php echo $kode_produk ?>">
				<?php
			}else{


			$data = array(
			'id'      => $kode_produk,
			'qty'     => $jumlah_beli,
			'price'   => $jenis,
			'name'    => $ukuran
			);
			$this->cart->insert($data);
			redirect('web/checkout');
			}//end else jumlah
		}

		public function cart_point(){
			$kode_point  	        = $this->input->post('kode_point');
			$kode_member		    = $this->input->post('kode_member');
			$kode_transaksi			= $this->input->post('kode_transaksi');
			$gambar					= $this->input->post('gambar');
			$point_produk			= $this->input->post('point_produk');
			$point_member			= $this->input->post('point_member');
			$sisa_point             = $point_member - $point_produk;

			$m=date('m');
			$d=date('d');
			$y=date('y');
			$tanggal=$m.'/'.$d.'/'.'20'.$y;
			
			if($point_produk > $point_member){
				?>
				<script type="text/javascript">
						alert("maaf jumlah point anda tidak mencukupi");
				</script>
				<meta http-equiv="refresh" content="0; detail_point/<?php echo $kode_point ?>">

				<?php
			}else{


			$data = array(
					'kode_point'      => $kode_point,
					'kode_member'     => $kode_member,
					'kode_transaksi'  => $kode_transaksi,
					'gambar'		  => $gambar,
					'sisa_point'	  => $sisa_point,
					'tanggal'		  => $tanggal
 			);
			$berhasil=$this->db->insert('tbl_tukarpoint',$data);
			if($berhasil){
				?>



				<script type="text/javascript">
						alert("Terima Kasih Permintaan point anda terkirim, kami akan konfirmasikan melalui email");
				</script>
				<meta http-equiv="refresh" content="0; detail_point/<?php echo $kode_point ?>">
				<?php
			}
			//echo var_dump($data);
			}//end else jumlah
		}
		


	}