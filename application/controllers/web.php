<?php 

error_reporting(0);
	class Web extends ci_controller {
	 public function __construct(){
		        parent::__construct();
		        $this->load->model('model_barang');                 
		    }

		public function index(){
			$data['data'] =  $this->db->query('SELECT * from tbl_kategori order by id_kategori limit 5  ');
			$data['data_point'] =  $this->db->query('SELECT * from tbl_kategori order by id_kategori desc limit 1   ');
			$data['produk'] =  $this->db->get('tbl_produk');
			$this->load->view('home',$data);
		}
		public function about(){
			$data['data']    = $this->db->query("SELECT * FROM tbl_set where id_set='6' ");
			$data['content'] = 'about';
			$this->load->view('v_index',$data);
			
		}

		public function cara_berbelanja(){
			$data['data']    = $this->db->query("SELECT * FROM tbl_set where id_set='3' ");
			$data['content'] = 'cara_belanja';
			$this->load->view('v_index',$data);
		}
		public function tentang_point(){
			$data['data']    = $this->db->query("SELECT * FROM tbl_set where id_set='4' ");
			$data['content'] = 'tentang_point';
			$this->load->view('v_index',$data);
		}

public function member(){
			$data['data']    = $this->db->query("SELECT * FROM tbl_set where id_set='5' ");
			$data['content'] = 'member';
			$this->load->view('v_index',$data);
		}		

		public function account(){
			$data['content'] = 'account';
			$this->load->view('v_index',$data);
		}
		public function order_member(){
			$data['content'] = 'order_member';
			$this->load->view('v_index',$data);
		}
		public function detail_cart($invoice){
			$data['invoice'] = $invoice;
			$data['data']   =  $this->db->get_where('tbl_detailcart',$data);
			$data['content'] = 'detail_cart';
			$this->load->view('v_index',$data);
		}

		public function kontak(){
			$data['content'] = 'kontak';
			$this->load->view('v_index',$data);
		}

		public function karir(){
			$data['data']    = $this->db->query("SELECT * FROM tbl_set where id_set='8' ");
			$data['content'] = 'karir';
			$this->load->view('v_index',$data);
			
		}

		public function patner(){
			$data['data']    = $this->db->query("SELECT * FROM tbl_set where id_set='9' ");
			$data['content'] = 'patner';
			$this->load->view('v_index',$data);
		}
		public function populer(){
			$data['content'] = 'populer';
			$this->load->view('v_index',$data);
		}

		public function new_produk(){
			$data['content'] = 'new_produk';
			$this->load->view('v_index',$data);
		}

		public function promosi(){
			$data['content'] = 'promosi';
			$this->load->view('v_index',$data);
		}
		public function finish(){
			$data['content'] = 'selesai';
			$this->load->view('v_index',$data);
		}
		public function login(){
			$data['content'] = 'v_login';
			$this->load->view('v_index',$data);
		}
		public function register(){
			$data['content'] = 'v_register';
			$this->load->view('v_index',$data);
		}

		public function edit_member(){
			$kode_member	= $this->input->post('kode_member');
			$nama_member	= $this->input->post('nama_member');
			$nama_belakang	= $this->input->post('nama_belakang');
			$username		= $this->input->post('username');
			$password		= $this->input->post('password');
			$email_member	= $this->input->post('email_member');
			$no_hp			= $this->input->post('no_hp');
			$alamat_member	= $this->input->post('alamat_member');
			$data = array('nama_member' 		=> $nama_member ,
						  'nama_belakang'    		=> $nama_belakang,
						  'username'    		=> $username,
						  'password'   	 		=> $password,
						  'email_member'    	=> $email_member,
						  'no_hp'		    	=> $no_hp,
						  'alamat_member'		    	=> $alamat_member,
			 );
			$this->db->where('kode_member',$kode_member);
			$this->db->update('tbl_member',$data);
			redirect('web/account');
		}
		public function sigup(){
			$nama_member	= $this->input->post('nama_member');
			$nama_belakang	= $this->input->post('nama_belakang');
			$username		= $this->input->post('username');
			$password		= $this->input->post('password');
			$email_member	= $this->input->post('email_member');
			$no_hp			= $this->input->post('no_hp');
			$alamat_member	= $this->input->post('alamat_member');
			$data = array('nama_member' 		=> $nama_member ,
						  'nama_belakang'    		=> $nama_belakang,
						  'username'    		=> $username,
						  'password'   	 		=> $password,
						  'email_member'    	=> $email_member,
						  'no_hp'		    	=> $no_hp,
						  'alamat_member'		    	=> $alamat_member,
			 );

			$berhasil=$this->db->insert('tbl_member',$data);
			if($berhasil){
				?>
				<script type="text/javascript">
				alert("Silahkan Cek email anda kami mengirim Kode member ke <?php echo $email_member ?> ");
				window.location='login';
				</script>
				<?php
			}
		}
		

		public function hapus_cart()
		{
			$data = array(
					'rowid' => $this->uri->segment(3),
					'qty'   => 0);
					$this->cart->update($data);
				redirect('web/checkout');
			
		}
		public function checkout(){

			$table = 'tbl_cart';
			$data['kodeunik'] = $this->model_barang->getkodeinvoice($table); 
			$data['content']	 = 'v_checkout';
			$this->load->view('v_index',$data);
		}

		public function selesai(){
			/*data ke tbl_detailcart*/
			//if($this->session->userdata('kode_member')){

			$kode_member	= $this->input->post('kode_member');
			$ongkirnya	= $this->input->post('ongkir');
			$total_berat	= $this->input->post('total_berat');
			$ket_tambah	= $this->input->post('ket_tambah');
			$alamat_member	= $this->input->post('alamat_member');
			$kode_produk	= $this->input->post('kode_produk');
			$jumlah_beli	= $this->input->post('jumlah_beli');
			$jenis			= $this->input->post('jenis');
			$harga			= $this->input->post('harga');
			$gambar			= $this->input->post('gambar');
			$ukuran			= $this->input->post('ukuran');
			$subtotal			= $this->input->post('total');
			/*data ke tbl_cart*/
			$ongkir = $ongkirnya * $total_berat;
			$total	= $this->input->post('totalbelanja');
			$nama			= $this->input->post('nama');
			$email			= $this->input->post('email');
			$no_hp			= $this->input->post('no_hp');
			$invoice		= $this->input->post('invoice');
			$m=date('m');
			$d=date('d');
			$y=date('y');
			$tanggal=$m.'/'.$d.'/'.'20'.$y;
			if($m == 1){
				$bulan = "Januari";
			}elseif($m == 2){
				$bulan = "Febuari";
			}
			elseif($m == 2){
				$bulan = "Febuari";
			}elseif($m == 2){
				$bulan = "Febuari";
			}elseif($m == 3){
				$bulan = "Maret";
			}elseif($m == 4){
				$bulan = "April";
			}elseif($m == 5){
				$bulan = "Mei";
			}elseif($m == 6){
				$bulan = "Juni";
			}elseif($m == 7){
				$bulan = "Juli";
			}elseif($m == 8){
				$bulan = "Agustus";
			}elseif($m == 9){
				$bulan = "Septembar";
			}elseif($m == 10){
				$bulan = "Oktober";
			}elseif($m == 11){
				$bulan = "November";
			}elseif($m == 12){
				$bulan = "Desembar";
			}
			$tgl_order = $d.'&nbsp;'.$bulan.'&nbsp;'.$y;


			/*$data = array('kode_member' => $kode_member ,
						  'kode_produk' => $kode_produk,
						  'jumlah_beli' => $jumlah_beli,
						  'jenis'		=> $jenis,
						  'harga'		=> $harga,
						  'gambar'		=> $gambar,
						  'ukuran'		=> $ukuran,
						  'total'		=> $total
			 );
			echo var_dump($data);*/
			$count = count($kode_produk);
		
			$sql   = "INSERT INTO tbl_detailcart (invoice,
													kode_member,
												    kode_produk,
												    jumlah_beli,
												    jenis,
												    harga,
												    tanggal,
												    gambar,
												    ukuran,
												    ongkir,
												    ket_tambah,
												    total
												    )
					  VALUES ";
			 
			for( $i=0; $i < $count; $i++ )
			{
			 $sql .= "('{$invoice}',
			 			'{$kode_member[$i]}',
			 			'{$kode_produk[$i]}',
			 			'{$jumlah_beli[$i]}',
			 			'{$jenis[$i]}',
			 			'{$harga[$i]}',
			 			'{$tanggal}',
			 			'{$gambar[$i]}',
			 			'{$ukuran[$i]}',
			 			'{$ongkir}',
			 			'{$ket_tambah}',
			 			'{$subtotal[$i]}')";
			 $sql .= ",";
			}
		 
			$sql = rtrim($sql,",");
			 
			$insert = $this->db->query($sql);
			 
			if( !$insert )
			{
			 echo "gagal insert : ".$koneksi->error;
			}else{
				$sql_point = "SELECT * from tbl_set where info='point' ";
				$rs_point  = $this->db->query($sql_point);
				foreach ($rs_point->result() as $key_point) {
					$bagi=$key_point->set;
				}
					$bagi=$key_point->set;

				$point = floor($total / $bagi);
				$datacart = array('invoice' => $invoice ,
						  'kode_member' 	=> $kode_member,
						  'total' 			=> $total,
						  'nama'			=> $nama,
						  'email'			=> $email,
						  'no_hp'			=> $no_hp,
						  'point'			=> $point
						  );
				$this->db->insert('tbl_cart',$datacart);
				
					
								$subject='Rainkidstore';

								   $isi_psn .= "
								 
								  </head>
								  <body >
								  
								     
								      Kepada Yth. Sdr/i.".$nama." ,
								Terima kasih atas kepercayaan Anda Berbelanja di Rainkidstore.com.<br/>
								Kami akan memproses order Anda setelah kami menerima bukti atau pembayaran yang telah Anda lakukan.<br/>
								Bila dalam waktu 1 minggu dari tanggal Order kami tidak menerima bukti atau info pembayaran dari Anda, <br/>
								kami menganggap Anda telah membatalkan order Anda.<br/>
								<br/>
 
								<div style='float:left;color:red'>STATUS:&nbsp; MENUNGGU </div>
								<br/>
								<div style='float:left'>INVOICE :&nbsp; <b>".$invoice."</>
								</div>

								<div style='float:right'>Tanggal Pembelian:&nbsp; ".$tgl_order."
								</div>


								      <table style='width: 100%;
								  border-collapse: collapse;
								 
								  margin-bottom: 20px;' border='1'>
								        <thead>
								          <tr style='background:black;font-family: SourceSansPro; '>
								            <th  style='color: #FFFFFF;background: black;font-family: SourceSansPro; '>No</th>
								            <th style='color: #FFFFFF;background: black;font-family: SourceSansPro; '>Produk</th>
								            <th style='color: #FFFFFF;background:black;font-family: SourceSansPro; '>Jenis</th>
								            <th style='color: #FFFFFF;background: black;font-family: SourceSansPro; '>Harga</th>
								            <th style='color: #FFFFFF;background:black;font-family: SourceSansPro; '>Jumlah</th>
								            <th style='color: #FFFFFF;background: black;font-family: SourceSansPro; '>Subtotal</th>
								          </tr>
								        </thead>
								        <tbody></tbody>
								        <style>
								        </style>
								        <tfoot style=' padding: 10px 20px;background: #FFFFFF;border-bottom: none;font-size: 1.2em;white-space: nowrap; 
								  border-top: 1px solid #AAAAAA; '>
								  ";
								   $datamn = "SELECT * from  tbl_detailcart left join tbl_produk on
								  tbl_detailcart.kode_produk=tbl_produk.kode_produk
								   where tbl_detailcart.invoice='$invoice'";
								  $rsmn   = $this->db->query($datamn);
								  $no=1;
								  $total=0;
								  	foreach ($rsmn->result() as $vi) {
								  	
								  $isi_psn.="

								       
								        <tr>
								          <td>".$no++."</td>
								          <td>".$vi->nama_produk."</td>
								          <td>";
								          		$jn=$vi->jenis;
								          		if( $jn == 1){

								 				 $isi_psn.= "Satuan";
								 				}
								          		elseif($jn == 12){
								 				 $isi_psn.= "Lusin";
								          		}
								          		elseif($jn == 20){
								 				 $isi_psn.= "Kodi";
								          		}

								         $isi_psn.="</td>
								          <td>".$vi->harga."</td>
								          <td>".$vi->jumlah_beli."</td>
								          <td>Rp. ".number_format($vi->total,2)."</td>
								         
								        </tr>";
								        $total+=$vi->total;
								      }
								      //$na=$no++;
								      $datamn = "SELECT * from  tbl_detailcart left join tbl_produk on
								  tbl_detailcart.kode_produk=tbl_produk.kode_produk
								   where tbl_detailcart.invoice='$invoice'";
								  $rsmn   = $this->db->query($datamn);
								  $no=1;
								  $total=0;
								  	foreach ($rsmn->result() as $vi) {
								        $total+=$vi->total;

								  	}
								        $isi_psn.="

								       <tr>
								      <td colspan='5'><b style='float:right'>Total &nbsp; &nbsp; &nbsp;</b></td>
								      <td>
								        Rp. ".number_format($total,2)."      </td>
								     
								     </tr>
								     <tr>
								      <td colspan='5'><b style='float:right'>Jumlah Item &nbsp; &nbsp; &nbsp;</b></td>
								      <td>";
								       
								       	$datamn = "SELECT * from  tbl_detailcart left join tbl_produk on
								  tbl_detailcart.kode_produk=tbl_produk.kode_produk
								   where tbl_detailcart.invoice='$invoice'";
								  $rsmn   = $this->db->query($datamn);
								  $jum = $rsmn->num_rows();
								  
								        $isi_psn.="".$jum." Item";
								      $isi_psn.="   </td>
								    
								     </tr>

								    
								     <tr>
								      <td colspan='5'><b style='float:right'>Total Ongkir &nbsp; &nbsp; &nbsp;</b></td>
								      <td>
								     Rp. ".number_format($vi->ongkir,2)."      </td>
								     
								     </tr>

								     <tr>
								      <td colspan='5'><b style='float:right;color:green'>Gren Total &nbsp; &nbsp; &nbsp;</b></td>
								      <td>
								        <b style='color:green'>Rp. ". number_format($totalseluruh=$total+$vi->ongkir,2)." </b>  
								        </td>
								     
								     </tr>
								        
								      </table>
								      Ket : ".$vi->ket_tambah."
								      Silahkan Transfer ke No Reg BCA <b>2820177536</b> Atas Nama Bunga <br>
								      dan konfirmasikan pembayaran anda dengan mengklik konfirmasi berikut <br>
								      <a href='http://rainkidstore.com/index.php/web/konfirmasi/".$invoice."'>
								      <h2>KONFIRMASI </h2>
								      </a>
								      <div id='thanks'>Terima Kasih!</div>
								    </main>
								    <footer>
								      Invoice ini dibuat oleh sistem kami, sah tanpa tanda tangan dan cap.
								    </footer>
								  </body>
								</html>";
								$to=$email;
								$message="From:$name <br />".$isi_psn;

								$headers = "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

								// More headers
								$headers .= 'From: Rainkidstore.com <admin@rainkidstore.com>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
								$headers .= 'Cc: admin@rainkidstore.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
								@mail($to,$subject,$message,$headers);
								if(@mail)
								{ 
									$this->db->query("DELETE from ci_sessions");
									?>

										<script type="text/javascript">
										alert("Silahkan Cek Email Anda kami Mengirim untuk konfirmasi pembayaran" );
										window.location='web';
										</script>
							<?php
								}
											}

										/*}else{
											redirect('web/login');
										}*/
		}


		public function konfirmasi($invoice){
			$data['invoice'] = $invoice;
			$data['data']	 = $this->db->get_where('tbl_cart',$data);
			$data['content'] = 'v_konfirmasi';
			$this->load->view('v_index',$data);
		}
		public function insert_konfirmasi(){
			$this->load->library('form_validation');
			$no_rekening		= $this->input->post('no_rekening');
			$atas_nama			= $this->input->post('atas_nama');
			$jumlah_transfer	= $this->input->post('jumlah_transfer');
			$nama_bank			= $this->input->post('nama_bank');
			$email				= $this->input->post('email');
			$invoice			= $this->input->post('invoice');
			$keterangan			= $this->input->post('keterangan');
			$gambar 			= $_FILES['userfile']['name'];

			// Konfigurasi Upload Gambar
				$config['upload_path']          = 'assets/images';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']				= '9024';
				$config['max_width']  			= '9600';
				$config['max_height']  			= '9200';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());   
						$data = array('no_rekening'       => $no_rekening ,
									  'atas_nama'   	  => $atas_nama,
									  'jumlah_transfer'   => $jumlah_transfer,
									  'nama_bank'         => $nama_bank,
									  'email' 	          => $email,
									  'invoice'           => $invoice,
									  'keterangan'           => $keterangan,
									  'gambar'            => $gambar
						 );
						$sukses = $this->db->insert('tbl_konfirmasi', $data);
							if($sukses == TRUE){

								$subject='Rainkidstore';

								   $isi_psn .= "
								 
								  </head>
								  <body >
								     Terima kasih atas konfirmasinya,<br/>

								  	Kami beritahukan bahwa kami telah menerima konfirmasi pembayaran anda.<br/>
									Kami baru akan melakukan proses, <br/>
									setelah kami menerima uang transfer dari bank tempat anda transfer.<br/>
									Transfer antar bank kurang lebih memakan waktu 1 hari,<br/>
									sedangkan transfer dalam satu bank yang sama kurang lebih memakan waktu 10 menit.<br/>
									Setelah itu  kami akan mengirimkan email kepada anda,<br/>

							
										<table>

										  <tr>
										    <td>Atas Nama</td>
										    <td>:</td>
										    <td>".$atas_nama."</td>
										  </tr>
										   <tr>
										    <td>BANK</td>
										    <td>:</td>
										    <td>".$nama_bank."</td>
										  </tr>
										  <tr>
										    <td>No Rekening</td>
										    <td>:</td>
										    <td>".$no_rekening."</td>
										  </tr>
										   <tr>
										    <td>Jumlah Transfer</td>
										    <td>:</td>
										    <td>".$jumlah_transfer."</td>
										  </tr>
										    <tr>
										    <td>Gambar</td>
										    <td>:</td>
										    <td>
										    ";
										    $image = array(
										              'src' => 'assets/images/'.$gambar,
										              'class' => 'photo',
										              'width' => '140',
										              'height' => '80',
										              'rel' => 'lightbox',
										            );
										    $isi_psn .="".img($image)."";
										           
										    $isi_psn .=" </td>
										  </tr>
										</table>
								     
								      <div id='thanks'>Terima Kasih!</div>
								    </main>
								   
								  </body>
								</html>";
								$to=$email;

								$message="From:$name <br />".$isi_psn;

								$headers = "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

								// More headers
								$headers .= 'From: Rainkidstore.com <admin@rainkidstore.com>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
								$headers .= 'Cc: admin@rainkidstore.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
								@mail($to,$subject,$message,$headers);
								
								if(@mail)
								{
									redirect('web/');	
								}


							}else{
								return FALSE;
								exit();
								redirect('web/finish','refresh');

							}
	                }

		}

		public function logout(){
        $this->session->unset_userdata('kode_member');
        redirect('ci_admin/','refresh');
    	}


	}