<?php 
    if($this->session->userdata('user')){
   
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
 <script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/bootstrap-table.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">
<script src="<?php echo base_url();?>js/lumino.glyphs.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/ckeditor/contents.css">
<script type="text/javascript" src="<?php echo base_url();?>js/time.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Administrator RainkidStore</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> 
                        <?php 

                           /* $data['data'] =  $this->session->userdata('user');
                            foreach ($data->result() as $key => $value) {
                                echo $data->username;
                            }*/

                         ?>
                         Account
                         <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu"> 
                            <li><a href="<?php echo base_url();?>index.php/ci_admin/profile"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
                           <!-- <li><a href="<?php echo base_url();?>index.php/user"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li> -->
                            <li><a href="<?php echo base_url();?>index.php/login_admin/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>                  
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form>
            <center><br>
                <img src="<?php echo base_url();?>assets/web/images/logo.jpg" width="400" hegth="20" class="img-responsive">
            <br></center>
        </form>
        <ul class="nav menu">
        
            <li class="active"><a href="<?php echo base_url();?>index.php/ci_admin">
            <svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> HOME</a></li>
            <li class="parent ">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg></span> MASETER 
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="<?php echo base_url();?>index.php/ci_admin/produk">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> PRODUK
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url();?>index.php/ci_admin/point">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> POINT
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url();?>index.php/ci_admin/stok">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> STOK
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url();?>index.php/ci_admin/satuan">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> SATUAN
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url();?>index.php/ci_admin/kategori">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> KATEGORI
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url();?>index.php/ci_admin/ukuran">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> UKURAN
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url();?>index.php/ci_admin/jenis_satuan">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> JENIS SATUAN
                        </a>
                    </li>
                    
                    
                </ul>
                <li><a href="<?php echo base_url();?>index.php/ci_admin/cart">
                <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> ORDER 
                                <?php 
                                    $sql = "SELECT * FROM tbl_cart WHERE status='0'";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?></a></li>
                <li><a href="<?php echo base_url();?>index.php/ci_admin/tukar_point">
                <svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> 
                 TUKAR POINT
                                     <?php 
                                    $sql = "SELECT * FROM tbl_tukarpoint WHERE status='0'";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?>
                </a></li>
                <li><a href="<?php echo base_url();?>index.php/ci_admin/member">
                <svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>  DATA MEMBER 
                 <?php 
                                    $sql = "SELECT * FROM tbl_member WHERE status='0'";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?>
                </a>
                </li>
                <li><a href="<?php echo base_url();?>index.php/ci_admin/inbox_konfirmasi">
                <svg class="glyph stroked download"><use xlink:href="#stroked-download"/></svg>
                KONFIRMASI <?php 
                                    $sql = "SELECT * FROM tbl_konfirmasi WHERE status='0'";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?>
                </a></li>
                <li><a href="<?php echo base_url();?>index.php/laporan">
                <svg class="glyph stroked printer"><use xlink:href="#stroked-printer"/></svg> LAPORAN</a></li>
                <li><a href="<?php echo base_url();?>index.php/ci_admin/pengaturan">
               <svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg> PENGATURAN</a></li>
                <li><a href="<?php echo base_url();?>index.php/ci_admin/slide">
               <svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg> SLIDE</a></li>
                 <li><a href="<?php echo base_url();?>index.php/ci_admin/ongkos_kirim">
               <svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg> ONGKOS KIRIM</a></li>

                <li role="presentation" class="divider"></li>  

               
            </li>

        </ul>
    </div>
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"><br><br><br>
        <!-- <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>&nbsp;<?php //echo $judul; ?></a></li>
                <li class="active"><?php //echo $sub_judul; ?></li>&nbsp;&nbsp;&nbsp;&nbsp;
            </ol>
        </div> -->
        <?php echo $this->load->view($content);  ?><br><br>
    </div>

    <script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
   
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-table.js"></script>


</body>

</html>
<?php }else{

$this->load->view('admin/v_loginadmin');
} ?>