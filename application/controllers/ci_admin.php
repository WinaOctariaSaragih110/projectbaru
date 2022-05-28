<?php 
error_reporting(0);

	class Ci_admin extends ci_controller {
		 public function __construct(){
		        parent::__construct();
		        $this->load->model('model_barang');                 
		    }
		    public function login_admin(){
		    	$this->load->view('admin/v_loginadmin');
		    }


		public function index(){
			//$data['content'] = 'admin/v_home';
			$data['content'] = 'admin/v_home';
			$this->load->view('admin/v_index',$data);
		}
		public function profile(){
			$data['data']=$this->db->get('tbl_admin');
			//$data['content'] = 'admin/v_home';
			$data['content'] = 'admin/profile';
			$this->load->view('admin/v_index',$data);
		}
		public function proses_ubah_password(){
			$username =  $this->input->post('username');
			$nama =  $this->input->post('nama');
			$id_admin =  $this->input->post('id_admin');
			$password_lama =  $this->input->post('password_lama');
			$password_lm =  $this->input->post('password_lm');
			$password_baru =  $this->input->post('password_baru');
			$password_konfirmasi =  $this->input->post('password_konfirmasi');

			if($password_lama != $password_lm){
				?>
				<script type="text/javascript">
						alert("Password Lama salah");window.location='profile';
				</script>
				<?php
			}elseif($password_baru != $password_konfirmasi){
				?>
				<script type="text/javascript">
						alert("Konfirmasi Password Salah");window.location='profile';
				</script>
				<?php
			}else{
				$sukses=$this->db->query("UPDATE tbl_admin
									 set
									  username = '$username',
									  nama = '$nama',
									  password = '$password_baru' 
									  WHERE kode =$id_admin
									  ");
				if($sukses){
					?>
				<script type="text/javascript">
						alert("Berhasil Ubah Password");window.location='profile';
				</script>
				<?php
				}
			}
		}
		public function produk(){
			$data['data']	 = $this->db->get('tbl_produk');
			$data['content'] = 'admin/produk';
			$this->load->view('admin/v_index',$data);

		}

		public function ongkos_kirim(){
			//$data['data']	 = $this->db->get('tbl_provinsi');
			$data['content'] = 'admin/provinsi';
			$this->load->view('admin/v_index',$data);

		}
		public function edit_produk($kode_produk){
			$data['kode_produk'] = $kode_produk;
			$data['data'] = $this->db->get_where('tbl_produk',$data);
			$data['kategori_produk'] = $this->db->get('tbl_kategori');
			$data['content'] = 'admin/edit_produk';
			$this->load->view('admin/v_index',$data);
		}
		public function hapus_produk($kode_produk){
			$data['kode_produk']	= $kode_produk;
			$this->db->delete('tbl_produk', $data);
			redirect('ci_admin/produk');
		}
		public function hapus_cart($invoice){
			$data['invoice']	= $invoice;
			$this->db->delete('tbl_cart', $data);
			redirect('ci_admin/cart');
		}
		public function inbox_konfirmasi(){
			$sql = "SELECT * from tbl_konfirmasi order by id_konfirmasi desc";
			$data['data']	 = $this->db->query($sql);
			$data['content'] = 'admin/konfirmasi';
			$this->load->view('admin/v_index',$data);

		}
		public function hapus_konfirmasi($invoice){
			$data['invoice'] = $invoice;
			$this->db->delete('tbl_konfirmasi',$data);
			redirect('ci_admin/inbox_konfirmasi');

		}
		public function hapus_tukarpoint($id_transaksipoint){
			$data['id_transaksipoint'] = $id_transaksipoint;
			$this->db->delete('tbl_tukarpoint',$data);
			redirect('ci_admin/tukar_point');

		}
		public function hapus_member($id_member){
			$data['id_member'] = $id_member;
			$this->db->delete('tbl_member',$data);
			redirect('ci_admin/member');

		}
		public function stok(){
			$data['data']	 = $this->db->get('tbl_stok');
			$data['content'] = 'admin/stok';
			$this->load->view('admin/v_index',$data);

		}
		public function edit_stok($id_stok){
			$data['id_stok'] = $id_stok;
			$data['data'] = $this->db->get_where('tbl_stok',$data);
			$data['content'] = 'admin/edit_stok';
			$this->load->view('admin/v_index',$data);
		}

		public function edit_jenissatuan($id_jenissatuan){
			$data['id_jenissatuan'] = $id_jenissatuan;
			$data['data'] = $this->db->get_where('tbl_jenissatuan',$data);
			$data['content'] = 'admin/edit_jenissatuan';
			$this->load->view('admin/v_index',$data);
		}
		public function hapus_stok($id_stok){
			$data['id_stok']	= $id_stok;
			$this->db->delete('tbl_stok', $data);
			redirect('ci_admin/stok');
		}
		public function tolak($id_konfirmasi){
			$data['id_konfirmasi']	= $id_konfirmasi;
			$this->db->delete('tbl_konfirmasi', $data);
			redirect('ci_admin/cart');
		}
		public function hapus_kategori($id_kategori){
			$data['id_kategori']	= $id_kategori;
			$this->db->delete('tbl_kategori', $data);
			redirect('ci_admin/kategori');
		}

		public function ukuran(){
			$data['data']	 = $this->db->get('tbl_ukuran');
			$data['content'] = 'admin/ukuran';
			$this->load->view('admin/v_index',$data);

		}
		public function tambah_ukuran(){
			$data['content'] = 'admin/tambah_ukuran';
			$this->load->view('admin/v_index',$data);

		}
		public function tambah_via(){
			$data['content'] = 'admin/tambah_via';
			$data['data']    = $this->db->get('tbl_viakirim');
			$this->load->view('admin/v_index',$data);

		}
		public function tambah_provinsi(){
			$data['content'] = 'admin/tambah_provinsi';
			$data['data']    = $this->db->get('tbl_provinsi');
			$this->load->view('admin/v_index',$data);

		}
		public function tambah_kota(){
			$data['content'] = 'admin/tambah_kota';
			$this->load->view('admin/v_index',$data);

		}
		public function edit_ukuran($id_ukuran){
			$data['id_ukuran'] = $id_ukuran;
			$data['data']	 = $this->db->get_where('tbl_ukuran',$data);
			$data['content'] = 'admin/edit_ukuran';
			$this->load->view('admin/v_index',$data);

		}
		public function edit_kota($id_kota){
			$data['id_kota'] = $id_kota;
			$data['data']	 = $this->db->get_where('tbl_kota',$data);
			$data['content'] = 'admin/edit_kota';
			$this->load->view('admin/v_index',$data);

		}
		public function hapus_ukuran($id_ukuran){
			$data['id_ukuran'] = $id_ukuran;
			$this->db->delete('tbl_ukuran',$data);
			redirect('ci_admin/ukuran');


		}
		public function hapus_provinsi($id_provinsi){
			$data['id_provinsi'] = $id_provinsi;
			$this->db->delete('tbl_provinsi',$data);
			redirect('ci_admin/tambah_provinsi');


		}

		

		public function warna(){
			$data['data']	 = $this->db->get('tbl_warna');
			$data['content'] = 'admin/warna';
			$this->load->view('admin/v_index',$data);

		}
		public function tambah_warna(){
			$data['content'] = 'admin/tambah_warna';
			$this->load->view('admin/v_index',$data);

		}
		public function edit_warna($id_warna){
			$data['id_warna'] = $id_warna;
			$data['data']	 = $this->db->get_where('tbl_warna',$data);
			$data['content'] = 'admin/edit_warna';
			$this->load->view('admin/v_index',$data);

		}
		public function hapus_warna($id_warna){
			$data['id_warna'] = $id_warna;
			$this->db->delete('tbl_warna',$data);
			redirect('ci_admin/ukuran');

		}
		public function proses_input_ukuran(){
			$ukuran = $this->input->post('ukuran');
			$data = array('ukuran' => $ukuran );
			$this->db->insert('tbl_ukuran',$data);
			redirect('ci_admin/ukuran');
		}
		public function proses_input_jenissatuan(){
			$satuan = $this->input->post('satuan');
			$nilai = $this->input->post('nilai');
			$data = array('satuan' => $satuan, 'nilai' => $nilai );
			$this->db->insert('tbl_jenissatuan',$data);
			redirect('ci_admin/jenis_satuan');
		}
		
		public function proses_input_via(){
			$via = $this->input->post('via');
			$data = array('via' => $via );
			$this->db->insert('tbl_viakirim',$data);
			redirect('ci_admin/tambah_via');
		}
		public function proses_input_provinsi(){
			$provinsi = $this->input->post('provinsi');
			$data = array('provinsi' => $provinsi );
			$this->db->insert('tbl_provinsi',$data);
			redirect('ci_admin/tambah_provinsi');
		}
		public function proses_input_warna(){
			$warna = $this->input->post('warna');
			$data = array('warna' => $warna );
			$this->db->insert('tbl_warna',$data);
			redirect('ci_admin/warna');
		}
		function proses_input_kota(){
			$id_provinsi   = $this->input->post('id_provinsi');
			
			$kota   = $this->input->post('kota');
			$ongkos   = $this->input->post('ongkos');

			$data = array('id_provinsi' => $id_provinsi , 'kota' => $kota, 'ongkos' => $ongkos );
			$this->db->insert('tbl_kota',$data);
			redirect('ci_admin/tambah_kota');


		}
		function proses_edit_kota(){
			$id_kota 	  = $this->input->post('id_kota');
			$id_provinsi   = $this->input->post('id_provinsi');
			$kota   = $this->input->post('kota');
			$ongkos   = $this->input->post('ongkos');

			$data = array('id_provinsi' => $id_provinsi , 'kota' => $kota, 'ongkos' => $ongkos );
			$this->db->where('id_kota',$id_kota);
			$this->db->update('tbl_kota',$data);
			redirect('ci_admin/ongkos_kirim');


		}
		public function proses_edit_ukuran(){
			$id_ukuran = $this->input->post('id_ukuran');
			$ukuran = $this->input->post('ukuran');
			$data = array('ukuran' => $ukuran );
			$this->db->where('id_ukuran',$id_ukuran);
			$this->db->update('tbl_ukuran',$data);
			redirect('ci_admin/ukuran');
		}
		public function proses_edit_warna(){
			$id_warna = $this->input->post('id_warna');
			$warna = $this->input->post('warna');
			$data = array('warna' => $warna );
			$this->db->where('id_warna',$id_warna);
			$this->db->update('tbl_warna',$data);
			redirect('ci_admin/warna');
		}
		public function proses_edit_jenissatuan(){
			$id_jenissatuan = $this->input->post('id_jenissatuan');
			$satuan = $this->input->post('satuan');
			$nilai = $this->input->post('nilai');
			$data = array('satuan' => $satuan, 'nilai' => $nilai );
			$this->db->where('id_jenissatuan',$id_jenissatuan);
			$this->db->update('tbl_jenissatuan',$data);
			redirect('ci_admin/jenis_satuan');
		}
		
		public function tukar_point(){
			$data['data']	 = $this->db->get('tbl_tukarpoint');
			$data['content'] = 'admin/tukar_point';
			$this->load->view('admin/v_index',$data);

		}
		public function pengaturan(){
			$data['data']	 = $this->db->get('tbl_set');
			$data['content'] = 'admin/set';
			$this->load->view('admin/v_index',$data);

		}

		public function jenis_satuan(){
			$data['data']	 = $this->db->get('tbl_jenissatuan');
			$data['content'] = 'admin/jenissatuan';
			$this->load->view('admin/v_index',$data);
		}
		public function slide(){
			$data['data']	 = $this->db->query("SELECT * FROM tbl_slide order by id_slide asc limit 3");
			$data['content'] = 'admin/slide';
			$this->load->view('admin/v_index',$data);


		}
		
		function edit_set(){
			$id_set = $this->input->post('id_set');
			$info = $this->input->post('info');
			$set = $this->input->post('setingan');
			 $data = array( 'set'             => $set, 'info' => $info );  
                
                	$this->db->where('id_set',$id_set);
                    $sukses=$this->db->update('tbl_set', $data);
                    if($sukses){
                        redirect('index.php/ci_admin/pengaturan');
                        
                    }else{

                redirect('ci_admin/');
                    }
		}

		function proses_edit_slide(){

			$this->load->library('form_validation');

        $file   =   $_FILES['userfile']['name'];
        $id_slide = $this->input->post('id_slide');
        
 	     if($file == '' ){
        // Konf
                        redirect('index.php/ci_admin/slide');

                }else{
                $config['upload_path']          = 'assets/web/images';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '42024';
                $config['max_width']            = '42600';
                $config['max_height']           = '42200';
                $this->load->library('upload', $config);
                    $this->upload->do_upload();
                    $datas = array('slide'                 => $file 
                                  
                            );  
                
                }
                	$this->db->where('id_slide',$id_slide);
                    $sukses=$this->db->update('tbl_slide', $datas);
                    if($sukses){
                        redirect('index.php/ci_admin/slide');
                        
                    }else{

                redirect('index.php/ci_admin/slide');
                    }
    
             
            
        
		}
		public function v_edit_set($id_set){
			$data['id_set'] = $id_set;
			$data['data']   = $this->db->get_where('tbl_set',$data);
			$data['content']= 'admin/v_edit_set';
			$this->load->view('admin/v_index',$data);
		}
		public function v_edit_slide($id_slide){
			$data['id_slide'] = $id_slide;
			$data['data']   = $this->db->get_where('tbl_slide',$data);
			$data['content']= 'admin/v_edit_slide';
			$this->load->view('admin/v_index',$data);
		}
		public function cart(){
			$data['data']	 = $this->db->query("SELECT * FROM tbl_cart order by id_detailcart desc");
			$data['content'] = 'admin/cart';
			$this->load->view('admin/v_index',$data);

		}

		public function detail_cart($invoice){
			$invoices['invoice']		     = $invoice;
			$data['data']	 			 = $this->db->get_where('tbl_detailcart',$invoices);
			$data['data_konfirmasi']	 = $this->db->get_where('tbl_konfirmasi',$invoices);
			$data['content'] = 'admin/detail_cart';
			$this->load->view('admin/v_index',$data);

		}
		public function konfirmasi(){
			$invoice = $this->input->post('invoice');
			$email = $this->input->post('email');
			$no_resi = $this->input->post('no_resi');
			$sql = "SELECT * from tbl_detailcart where invoice='$invoice'";
			$result=$this->db->query($sql);
			foreach ($result->result() as $row) {
			
			}
			$sqlx = "SELECT * from tbl_cart left join tbl_member on
					tbl_cart.kode_member=tbl_member.kode_member 
			 where tbl_cart.invoice='$invoice'";
			$resultx=$this->db->query($sqlx);
			foreach ($resultx->result() as $rowx) {
				
			}
			$sqlv = "SELECT * from tbl_cart where email='$email' and invoice='$invoice'";
			$resultv=$this->db->query($sqlv);
			foreach ($resultv->result() as $rowv) {
				
			}
			$sqls = "SELECT * from tbl_detailcart 
					left join tbl_stok on tbl_detailcart.kode_produk=tbl_stok.kode_produk 
					and tbl_detailcart.ukuran=tbl_stok.id_ukuran 
					where tbl_detailcart.kode_produk='$row->kode_produk'";
			$results=$this->db->query($sqls);
			foreach ($results->result() as $rows) {
				
			}
			$jumlah_beli = $row->jumlah_beli * $row->jenis; 
			$stok 		= $rows->stok - $jumlah_beli;
			$sisa_point = $rowx->point + $rowv->point;

			$mysqls = "UPDATE tbl_stok set stok='$stok' 
						where kode_produk='$row->kode_produk'
						and id_ukuran='$row->ukuran'" ;
						$this->db->query($mysqls);
			$mysqls = "UPDATE tbl_member set point='$sisa_point' 
						where email_member='$email'" ;
						$this->db->query($mysqls);
			$mysql = "UPDATE tbl_cart set status=1, no_resi='$no_resi' 
						where invoice='$invoice' " ;
						$this->db->query($mysql);
			$mysql = "UPDATE tbl_konfirmasi set status=1, no_resi='$no_resi' 
						where invoice='$invoice' " ;
						$this->db->query($mysql);
			$mysql = "UPDATE tbl_detailcart set status=1,  no_resi='$no_resi'
						where invoice='$invoice' " ;
						$this->db->query($mysql);
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

$subject='Rainkidstore';

								   $isi_psn .= "
								 
								  </head>
								  <body >
								  
								     
								  
								Terima kasih atas kepercayaan Anda Berbelanja di Rainkidstore.com.<br/>
								Kami telah Menerima order anda dan siap kirim .<br/>
								<br/>


								<div style='float:left;color:green'>STATUS:&nbsp; TERKONFIRMASI </div>
								<br/>
								<div style='float:left'>INVOICE :&nbsp; <b>".$invoice."</>
								</div>
								<br/>
								<div style='float:left'>No Resi :&nbsp; <b>".$no_resi."</>
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
									redirect('ci_admin/detail_cart/'.$invoice);
								
								}


		}

		public function satuan(){
			$data['data']	 = $this->db->get('tbl_satuan');
			$data['content'] = 'admin/satuan';
			$this->load->view('admin/v_index',$data);

		}
		public function kategori(){
			$data['data']	 = $this->db->get('tbl_kategori');
			$data['content'] = 'admin/kategori';
			$this->load->view('admin/v_index',$data);

		}
		public function member(){
			$data['data']	 = $this->db->get('tbl_member');
			$data['content'] = 'admin/member';
			$this->load->view('admin/v_index',$data);

		}
		
		public function edit_kategori($id_kategori){
			$data['id_kategori']	= $id_kategori;
			$data['data']			= $this->db->get_where('tbl_kategori',$data);
			$data['content'] 		= 'admin/v_editkategori';
			$this->load->view('admin/v_index',$data); 
		}
		public function point(){
			$data['data']	 = $this->db->get('tbl_point');
			$data['content'] = 'admin/point';
			$this->load->view('admin/v_index',$data);

		}
		public function edit_point($kode_point){
			$data['kode_point'] = $kode_point;
			$data['data'] = $this->db->get_where('tbl_point',$data);
			$data['content'] = 'admin/edit_point';
			$this->load->view('admin/v_index',$data);
		}
		public function hapus_point($kode_point){
			$data['kode_point']	= $kode_point;
			$this->db->delete('tbl_point', $data);
			redirect('ci_admin/point');
		}
		public function hapus_jenissatuan($id_jenissatuan){
			$data['id_jenissatuan']	= $id_jenissatuan;
			$this->db->delete('tbl_jenissatuan', $data);
			redirect('ci_admin/jenis_satuan');

		}
		public function hapus_kota($id_kota){
			$data['id_kota']	= $id_kota;
			$this->db->delete('tbl_kota', $data);
			redirect('ci_admin/ongkos_kirim');
		}
		public function tambah_stok(){
			$data['content'] = 'admin/tambah_stok';
			$this->load->view('admin/v_index',$data);

		}
		public function tambah_jenissatuan(){
			$data['content'] = 'admin/tambah_jenissatuan';
			$this->load->view('admin/v_index',$data);

		}
		public function tambah_point(){
			$table = 'tbl_point';
			$data['kodeunik'] = $this->model_barang->getkodepoint($table); 
			$data['content'] = 'admin/tambah_point';
			$this->load->view('admin/v_index',$data);

		}
		public function tambah_satuan(){
			$data['content'] = 'admin/tambah_satuan';
			$this->load->view('admin/v_index',$data);

		}
		public function edit_satuan($id_satuan){
			$data['id_satuan'] = $id_satuan;
			$data['data'] = $this->db->get_where('tbl_satuan',$data);
			$data['content'] = 'admin/edit_satuan';
			$this->load->view('admin/v_index',$data);
		}
		public function hapus_satuan($id_satuan){
			$data['id_satuan']	= $id_satuan;
			$this->db->delete('tbl_satuan', $data);
			redirect('ci_admin/satuan');
		}
		public function tambah_kategori(){
			$data['content'] = 'admin/tambah_kategori';
			$this->load->view('admin/v_index',$data);

		}
		public function tambah_produk(){
			$table = 'tbl_produk';
			$data['kodeunik'] = $this->model_barang->getkodeunik($table); 
			$data['kategori_produk'] = $this->db->get('tbl_kategori');
			$data['content'] = 'admin/tambah_produk';
			$this->load->view('admin/v_index',$data);

		}

		function proses_tambah_produk(){
			  if(isset($_POST['kirim'])){

        $this->load->library('form_validation');

	       
	    $keterangan = $this->input->post('keterangan');
	    $nama_produk = $this->input->post('nama_produk');
	    $kategori_produk = $this->input->post('kategori_produk');
	    $point_produk = $this->input->post('point_produk');
	    $gambar_lama= $this->input->post('gambar_lama');
	    $stock_produk= $this->input->post('stock_produk');
	    $harga_member= $this->input->post('harga_member');
	    $harga_nonmember= $this->input->post('harga_nonmember');
	    $warna      = $this->input->post('warna');
	    $berat      = $this->input->post('berat');
	    $aktif      = $this->input->post('aktif');
	    $jenis      = $this->input->post('jenis');
	    $point      = $this->input->post('point');
        $harga_produk= $this->input->post('harga_produk');
        $stock_produk=$this->input->post('stock_produk');
        $number_of_files = sizeof($_FILES['userfile']['tmp_name']) ;
       	$kode = $this->input->post('kode_produk');
        $file   =   $_FILES['userfile'];
        
        // Konfigurasi Upload Gambar*/
                $config['upload_path']          = 'assets/images';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '42024';
                $config['max_width']            = '42600';
                $config['max_height']           = '42200';
                $this->load->library('upload', $config);

                for ($i=0; $i < $number_of_files; $i++) { 
                    $_FILES['userfile']['name'] = $file['name'][$i];
                    $_FILES['userfile']['type'] = $file['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $file['error'][$i];
                    $_FILES['userfile']['size'] = $file['size'][$i];
                    $this->upload->do_upload();
                    $datas = array('kode_produk'                 => $kode, 
                                      'nama_produk'             => $nama_produk,
                                      'harga_member'            => $harga_member,
                                      'harga_nonmember'         => $harga_nonmember,
                                      'nama_kategori'            => $kategori_produk,
                                      'type'                    => $jenis,
                                      'berat'                   => $berat,
                                      'keterangan	'           => $keterangan,
                                      'aktif'                   => $aktif,
                                      'img1'                    =>  $file['name'][0],
                                      'img2'                    => $file['name'][1],
                                      'img3'                    => $file['name'][2]
                            );  
                }
                    $sukses=$this->db->insert('tbl_produk', $datas);
                    if($sukses){
                        redirect('ci_admin/produk');
                        
                    }else{

                redirect('daftar/pendaftaran');
                    }
    
            }else{
                redirect('daftar/pendaftaran');
                
            }
        }

        public function proses_edit_produk(){
        	 if(isset($_POST['kirim'])){

        $this->load->library('form_validation');

	       
	    $keterangan = $this->input->post('keterangan');
	    $nama_produk = $this->input->post('nama_produk');
	    $kategori_produk = $this->input->post('kategori_produk');
	    $point_produk = $this->input->post('point_produk');
	    $gambar_lama= $this->input->post('gambar_lama');
	    $stock_produk= $this->input->post('stock_produk');
	    $harga_member= $this->input->post('harga_member');
	    $harga_nonmember= $this->input->post('harga_nonmember');
	    $warna      = $this->input->post('warna');
	    $berat      = $this->input->post('berat');
	    $aktif      = $this->input->post('aktif');
	    $jenis      = $this->input->post('jenis');
	    $point      = $this->input->post('point');
        $harga_produk= $this->input->post('harga_produk');
        $stock_produk=$this->input->post('stock_produk');
        $number_of_files = sizeof($_FILES['userfile']['tmp_name']) ;
       	$kode = $this->input->post('kode_produk');
        $file   =   $_FILES['userfile'];
        
 	     if($file['name'][0] == '' and $file['name'][1] == '' and $file['name'][2] == '' ){
        // Konfigurasi Upload Gambar*/
                $config['upload_path']          = 'assets/images';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '42024';
                $config['max_width']            = '42600';
                $config['max_height']           = '42200';
                $this->load->library('upload', $config);

                for ($i=0; $i < $number_of_files; $i++) { 
                    $_FILES['userfile']['name'] = $file['name'][$i];
                    $_FILES['userfile']['type'] = $file['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $file['error'][$i];
                    $_FILES['userfile']['size'] = $file['size'][$i];
                    $this->upload->do_upload();
                    $datas = array('kode_produk'                 => $kode, 
                                      'nama_produk'             => $nama_produk,
                                      'harga_member'            => $harga_member,
                                      'harga_nonmember'         => $harga_nonmember,
                                      'nama_kategori'            => $kategori_produk,
                                      'type'                    => $jenis,
                                      'berat'                   => $berat,
                                      'keterangan	'           => $keterangan,
                                      'aktif'                   => $aktif
                            );  
                }
                }else{
                	  $config['upload_path']          = 'assets/images';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '42024';
                $config['max_width']            = '42600';
                $config['max_height']           = '42200';
                $this->load->library('upload', $config);

                for ($i=0; $i < $number_of_files; $i++) { 
                    $_FILES['userfile']['name'] = $file['name'][$i];
                    $_FILES['userfile']['type'] = $file['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $file['error'][$i];
                    $_FILES['userfile']['size'] = $file['size'][$i];
                    $this->upload->do_upload();
                    $datas = array('kode_produk'                 => $kode, 
                                      'nama_produk'             => $nama_produk,
                                      'harga_member'            => $harga_member,
                                      'harga_nonmember'         => $harga_nonmember,
                                      'nama_kategori'            => $kategori_produk,
                                      'type'                    => $jenis,
                                      'berat'                   => $berat,
                                      'keterangan	'           => $keterangan,
                                      'aktif'                   => $aktif,
                                      'img1'                    =>  $file['name'][0],
                                      'img2'                    => $file['name'][1],
                                      'img3'                    => $file['name'][2]
                            );  
                }
                }
                	$this->db->where('kode_produk',$kode);
                    $sukses=$this->db->update('tbl_produk', $datas);
                    if($sukses){
                        redirect('ci_admin/produk');
                        
                    }else{

                redirect('daftar/pendaftaran');
                    }
    
            }else{
                redirect('daftar/pendaftaran');
                
            }
        }

        function proses_tambah_point(){
			  if(isset($_POST['kirim'])){

        $this->load->library('form_validation');

	       
	    $keterangan = $this->input->post('keterangan');
	    $nama_produk = $this->input->post('nama_produk');
	    $point 		= $this->input->post('point');
	 
        $number_of_files = sizeof($_FILES['userfile']['tmp_name']) ;
       	$kode = $this->input->post('kode_point');
        $file   =   $_FILES['userfile'];
        
        // Konfigurasi Upload Gambar*/
                $config['upload_path']          = 'assets/images';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '42024';
                $config['max_width']            = '42600';
                $config['max_height']           = '42200';
                $this->load->library('upload', $config);

                for ($i=0; $i < $number_of_files; $i++) { 
                    $_FILES['userfile']['name'] = $file['name'][$i];
                    $_FILES['userfile']['type'] = $file['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $file['error'][$i];
                    $_FILES['userfile']['size'] = $file['size'][$i];
                    $this->upload->do_upload();
                    $datas = array('kode_point'                 => $kode, 
                                      'nama_produk'             => $nama_produk,
                                      'point'                   => $point,
                                      'img1'                    =>  $file['name'][0],
                                      'img2'                    => $file['name'][1],
                                      'img3'                    => $file['name'][2]
                            );  
                }
                    $sukses=$this->db->insert('tbl_point', $datas);
                    if($sukses){
                        redirect('ci_admin/point');
                        
                    }else{

                redirect('ci_admin/point');
                    }
    
            }else{
                redirect('daftar/pendaftaran');
                
            }
        }


        function proses_edit_point(){
			  if(isset($_POST['kirim'])){

        $this->load->library('form_validation');

	       
	    $keterangan = $this->input->post('keterangan');
	    $nama_produk = $this->input->post('nama_produk');
	    $point 		= $this->input->post('point');
	 
        $number_of_files = sizeof($_FILES['userfile']['tmp_name']) ;
       	$kode = $this->input->post('kode_point');
        $file   =   $_FILES['userfile'];
        
        // Konfigurasi Upload Gambar*/
                $config['upload_path']          = 'assets/images';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '42024';
                $config['max_width']            = '42600';
                $config['max_height']           = '42200';
                $this->load->library('upload', $config);

                for ($i=0; $i < $number_of_files; $i++) { 
                    $_FILES['userfile']['name'] = $file['name'][$i];
                    $_FILES['userfile']['type'] = $file['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $file['error'][$i];
                    $_FILES['userfile']['size'] = $file['size'][$i];
                    $this->upload->do_upload();
                    $datas = array(
                                      'nama_produk'             => $nama_produk,
                                      'point'                   => $point,
                                      'img1'                    =>  $file['name'][0],
                                      'img2'                    => $file['name'][1],
                                      'img3'                    => $file['name'][2]
                            );  
                }
                	$this->db->where('kode_point',$kode);
                    $sukses=$this->db->update('tbl_point', $datas);
                    if($sukses){
                        redirect('ci_admin/point');
                        
                    }else{

                redirect('ci_admin/point');
                    }
    
            }else{
                redirect('daftar/pendaftaran');
                
            }
        }

        function proses_editkategori(){
			  if(isset($_POST['kirim'])){

        $this->load->library('form_validation');

	       
	    $id_kategori = $this->input->post('id_kategori');
	    $nama_kategori = $this->input->post('nama_kategori');
	 
        $number_of_files = sizeof($_FILES['userfile']['tmp_name']) ;
        $file   =   $_FILES['userfile'];
        
        // Konfigurasi Upload Gambar*/
                $config['upload_path']          = 'assets/images';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '42024';
                $config['max_width']            = '42600';
                $config['max_height']           = '42200';
                $this->load->library('upload', $config);

                for ($i=0; $i < $number_of_files; $i++) { 
                    $_FILES['userfile']['name'] = $file['name'][$i];
                    $_FILES['userfile']['type'] = $file['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $file['error'][$i];
                    $_FILES['userfile']['size'] = $file['size'][$i];
                    $this->upload->do_upload();
                    $data = array(
                                      'nama_kategori'             => $nama_kategori,
                                      'img'                    =>  $file['name'][0]
                            );  
                }
                	$this->db->where('id_kategori',$id_kategori);
                    $sukses=$this->db->update('tbl_kategori', $data);
                    if($sukses){
                        redirect('ci_admin/kategori');
                        
                    }else{

                redirect('ci_admin/point');
                    }
    
            }else{
                redirect('daftar/pendaftaran');
                
            }
        }

		function fetch_data(){
			if(isset($_POST['get_val']))
		   	{
			 $nama_kategori = $_POST['get_val'];
		     $find="SELECT * from tbl_produk where nama_kategori='$nama_kategori'";
		     $rs=$this->db->query($find);
		     foreach ($rs->result() as $row) {
		     	?>
		       <option value="<?php echo $row->kode_produk ?>"><?php echo $row->nama_produk ?></option>
		       <?php
		     	
		     	}
     	}
     	}
     	function fetch_data_p(){
			if(isset($_POST['get_val']))
		   	{
			 $id_provinsi = $_POST['get_val'];
		     $find="SELECT * from tbl_kota where id_provinsi='$id_provinsi'";
		     $rs=$this->db->query($find);
		     foreach ($rs->result() as $row) {
		     	?>
		       <option value="<?php echo $row->ongkos ?>"><?php echo $row->kota ?></option>
		       <?php
		     	
		     	}
     	}
     	}
     
   
	

		function input_stok(){
		    $kode_produk    = $this->input->post('kode_produk');
		    $id_ukuran      = $this->input->post('id_ukuran');
		   
		    $stok           = $this->input->post('stok');
		   

		    $data = array('kode_produk' => $kode_produk ,
		                  'id_ukuran'   => $id_ukuran, 
		                 
		                  'stok'        => $stok
		                  
		                   );
		    $this->db->insert('tbl_stok',$data);
		    redirect('ci_admin/stok');
		}

		function proses_edit_stok($id_stok){
		    $id_stok    = $this->input->post('id_stok');
		    $kode_produk    = $this->input->post('kode_produk');
		    $id_ukuran      = $this->input->post('id_ukuran');
		
		    $stok           = $this->input->post('stok');
		   

		    $data = array('kode_produk' => $kode_produk ,
		                  'id_ukuran'   => $id_ukuran, 
		               
		                  'stok'        => $stok
		                  
		                   );
		    $this->db->where('id_stok',$id_stok);
		    $this->db->update('tbl_stok',$data);
		    redirect('ci_admin/stok');
		}

		function input_satuan(){
		    $kode_produk         =   $this->input->post('kode_produk');
		    $jenis               =   $this->input->post('jenis');
		    $harga_member        =   $this->input->post('harga_member');
		    $harga_nonmember     =   $this->input->post('harga_nonmember');

		    $data = array('kode_produk' => $kode_produk,
		                  'jenis' => $jenis,
		                  'harga_member' => $harga_member,
		                  'harga_nonmember' => $harga_nonmember
		                   );
		   $this->db->insert('tbl_satuan',$data);
		    redirect('ci_admin/satuan');

	}

	function proses_edit_satuan($id_satuan){
		    $id_satuan         =   $this->input->post('id_satuan');
		    $kode_produk         =   $this->input->post('kode_produk');
		    $jenis               =   $this->input->post('jenis');
		    $harga_member        =   $this->input->post('harga_member');
		    $harga_nonmember     =   $this->input->post('harga_nonmember');

		    $data = array('kode_produk' => $kode_produk,
		                  'jenis' => $jenis,
		                  'harga_member' => $harga_member,
		                  'harga_nonmember' => $harga_nonmember
		                   );
		    $this->db->where('id_satuan',$id_satuan);
		   $this->db->update('tbl_satuan',$data);
		    redirect('ci_admin/satuan');

	}

	function konfirmasi_member(){
		if(isset($_POST['konfirmasi'])){
			$nama_member 	 = $this->input->post('nama_member');
			$id_member 	 = $this->input->post('id_member');
			$email = $this->input->post('email_member');
			$id_member   = $this->input->post('id_member');
			$kode_member = $this->input->post('kode_member');
							$subject='Rainkidstore';

								   $isi_psn .= "
								 
								  </head>
								  <body >
								  Selamat Datang".$nama_member." <br/>
						  	Anda Telah Bergabung menjadi Member kami Silahkan masukan kode member yang tertera di bawah ini<br/>
							Kami baru akan melakukan proses, <br/>
							Nikmati Berbelanja di Rainkidstore<br/>";
								     
								     $isi_psn .= "KODE MEMBER : ";
								     $isi_psn .= "<h1 style='color:red;border:2px solid black;border-radius:10px;'><b>".$kode_member."</b></h1>";
								     $isi_psn .= " <div id='thanks'>Terima Kasih!</div>
								    </main>
								   <hr>";
								   $datamn = "SELECT * from  tbl_member where id_member='$id_member' ";
								  $rsmn   = $this->db->query($datamn);
								 
								  	foreach ($rsmn->result() as $vi) {
								      
									$isi_psn .= "
										<table>

										  <tr>
										    <td>Nama</td>
										    <td>:</td>
										    <td>".$vi->nama_member."</td>
										  </tr>
										   <tr>
										    <td>Username</td>
										    <td>:</td>
										    <td>".$vi->username."</td>
										  </tr>
										  <tr>
										    <td>Password</td>
										    <td>:</td>
										    <td>".$vi->password."</td>
										  </tr>
										   <tr>
										    <td>Email</td>
										    <td>:</td>
										    <td>".$vi->email."</td>
										  </tr>
										  <tr>
										    <td>No Hp</td>
										    <td>:</td>
										    <td>".$vi->no_hp."</td>
										  </tr>
										  <tr>
										    <td>Alamat</td>
										    <td>:</td>
										    <td>".$vi->alamat_member."</td>
										  </tr>
										   
										</table>

								  </body>
								</html>";
								  	}

								$to=$email;

								$message="From:$name <br />".$isi_psn;

								$headers = "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

								// More headers
								$headers .= 'From: Rainkidstore.com <admin@rainkidstore.com>'."\r\n" . 'Reply-To: '.$email.' <'.$email.'>'."\r\n";
								$headers .= 'Cc: admin@rainkidstore.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
								@mail($to,$subject,$message,$headers);	
					if (@mail) {
						$data = array('kode_member' => $kode_member,'status' => 1  );
						$this->db->where('id_member',$id_member);
						$this->db->update('tbl_member',$data);
						redirect('ci_admin/member');
				} else {
				    echo "Mailer Error: " . $mail->ErrorInfo;
				   		

					}
				}//end if isset

		}

		function konfirmasi_point(){
		if(isset($_POST['konfirmasi'])){
			$kode_member 	 = $this->input->post('kode_member');
			$sisa_point 	 = $this->input->post('sisa_point');
			/*$email = $this->input->post('email_member');
			$id_member   = $this->input->post('id_member');
			$kode_member = $this->input->post('kode_member');

				date_default_timezone_set('Etc/UTC');
				require 'application/libraries/phpmailer/PHPMailerAutoload.php';
				$mail = new PHPMailer;
				$mail->isSMTP();
				$mail->SMTPDebug = 2;
				$mail->Debugoutput = 'html';
				$mail->Host = "ssl://smtp.googlemail.com";
				$mail->Port = 465;
				$mail->SMTPAuth = true;
				$mail->Username = "zukiungu@gmail.com";
				$mail->Password = "zuki1202145";
				$mail->setFrom($email, 'First Last');
				$mail->addReplyTo('zukiungu@gmail.com','First Last');
				$mail->addAddress($email, 'Zukii Vixii');
				$mail->Subject = 'RAINKIDSTORE.COM';
				$mail->msgHTML("

				Kepada Yth. Sdr/i. ".$nama_member.",<br/>
				Terima kasih atas kepercayaan Anda Menjadi Member di Rainkidstore.com.<br/>
				Silahkan Masukan Kode Member berikut
				<b>
				".$kode_member."
				</b>
				<br/>
				Terima Kasih
				");
				$mail->AltBody = 'This is a plain-text message body';
				if (!$mail->send()) {
				    echo "Mailer Error: " . $mail->ErrorInfo;
				} else {*/
					$subject='Rainkidstore';

								   $isi_psn .= "
								 
								  </head>
								  <body >
								Tukar Point Anda berhasil !<br/>
							Nikmati Berbelanja di Rainkidstore<br/>";
								     
								    
								/*$sql = "SELECT * from tbl_member where kode_member='$kode_member'";
								$rs= $this->db->query($sql);
								foreach ($rs->result() as $row) {
						
								}*/
								      
									$isi_psn .= "
										

								  </body>
								</html>";

								$to=$email;

								$message="From:$name <br />".$isi_psn;

								$headers = "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

								// More headers
								$headers .= 'From: Rainkidstore.com <admin@rainkidstore.com>'."\r\n" . 'Reply-To: '.$email.' <'.$email.'>'."\r\n";
								$headers .= 'Cc: admin@rainkidstore.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
								@mail($to,$subject,$message,$headers);	
				   		$data = array('point' => $sisa_point );
						$this->db->where('kode_member',$kode_member);
						$this->db->update('tbl_member',$data);
						$data = array('status' => 1  );
						$this->db->where('kode_member',$kode_member);
						$this->db->update('tbl_tukarpoint',$data);
						redirect('ci_admin/tukar_point');

					}
				}//end if isset


				

	}
