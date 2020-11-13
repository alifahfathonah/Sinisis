<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>SINISIS SDN SUMBERSARI 02</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
ul {
    list-style:none;
}
ul li a {
    float:center;
    width:150px;
    color:black;
    text-decoration:none;
    display:block;
    text-align:center;
}
ul li a:hover {
    background-color:#b2bec3;
    display:block;
}
/*css untuk menu hover dropdown*/
ul li:hover .sub1 {display:block}
ul .sub1 {
    display:none;
    background-color:white;
}
.sub1 a:hover { color:black; }
    </style>
</head>
<body>

<header>
        <div class="container">
            <div class="row">
               <div class="col-md-12" style="font-size: 18px">
                    <a style="color: white" href="<?php echo base_url()?>Siswa"><strong style="font-family:Times New Roman;"><i>Sistem Penilaian Siswa</i></strong></a>
                    &nbsp;&nbsp;
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
          <br>
                 <center> <p style="font-family:Impact; font-size: 28px;">SDN SUMBERSARI 02 JEMBER</p></center>
                  <br>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">

                           
                            <li><a href="<?php echo base_url()?>User/index">DATA USER</a></li>
                           <li><a href="">DATA SISWA</a>
                            <ul class="sub1">
                <b><li><a style="color: #ee5253" href="<?php echo base_url()?>Siswa1/home" >Kelas 1</a></li>
                <li><a style="color: #ee5253" href="<?php echo base_url()?>Siswa2/home">Kelas 2</a></li>
                <li><a style="color: #ee5253" href="<?php echo base_url()?>Siswa3/home">Kelas 3</a></li>
                <li><a style="color: #ee5253" href="<?php echo base_url()?>Siswa4/home">Kelas 4</a></li>
                <li><a style="color: #ee5253" href="<?php echo base_url()?>Siswa5/home">Kelas 5</a></li>
                <li><a style="color: #ee5253" href="<?php echo base_url()?>Siswa6/home">Kelas 6</a></li></b>
            </ul>
                            </li>
                             <li><a href="<?php echo base_url()?>mapel/index">DATA MAPEL</a></li>
                             <li><a href="<?php echo base_url()?>Nilai/home">Nilai & Raport</a></li>
                             <li><a href="<?php echo base_url()?>Alumni/home">DATA ALUMNI</a></li>
                             <li> <a href="<?php echo base_url()?>Login">Logout</a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <center><b><h2 style="font-family: Agency; font-size: 28px;">TAMBAH DATA SISWA</h2></b></center>
    <div align="center">
    <p>
        <table border="0" width="600px">
      <form method="post" action="input">
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis" size="30" maxlength="10" value="<?php if(isset($data)) { echo $data[0]->nis; } ?>" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama_siswa" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->nama_siswa; } ?>" required></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><select name="kelas">
                <?php foreach ($kelas as $row){ ?>
                <option value="<?php echo $row->id_kelas;?>"> <?php echo $row->kelas;?></option>
                <?php }?>
                </select></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" size="30" maxlength="20"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lahir" size="30" maxlength="12"></td>
            </tr>
            <tr>
                <td>Tahun Masuk</td>
                <td>:</td>
                <td><input type="text" name="tahun_ajaran" size="30" maxlength="20"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type=radio name=jk value=P>P</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type=radio name=jk value=L>L</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><select name="agama" maxlength="20" ><option value="Islam">Islam</option><option value="Hindu">Hindu</option><option value="Budha">Budha</option><option value="Kristen">Kristen</option><option value="Lain">Lain-lain</option></select></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" size="30" maxlength="20"></td>
            </tr>
            <tr>
                <td><b>Identitas Orangtua</b></td>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <td>:</td>
                <td><input type="text" name="nama_ayah" size="30" maxlength="20" ></td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>:</td>
                <td><input type="text" name="nama_ibu" size="30" maxlength="20" ></td>
            </tr>
            <tr>
                <td>Telp. Ayah</td>
                <td>:</td>
                <td><input type="text" name="tlp_ayah" size="30" maxlength="20"></td>
            </tr>
            <tr>
                <td>Telp. Ibu</td>
                <td>:</td>
                <td><input type="text" name="tlp_ibu" size="30" maxlength="20"></td>
            </tr>
            <tr>
                <td>Pekerjaan Ayah</td>
                <td>:</td>
                <td><input type="text" name="pekerjaan_ayah" size="30" maxlength="20" ></td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu</td>
                <td>:</td>
                <td><input type="text" name="pekerjaan_ibu" size="30" maxlength="20" ></td>
            </tr>
            <tr>
                <td style="color:#ee5253"><b>Pastikan Data diatas benar.</b></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b><input style="background-color:#c8d6e5; color: black;" type="submit" name="btnTambah" value="SIMPAN"/></b>
                <b><input style="background-color:#c8d6e5; color: black;" type="button" name="Batal" value="BATAL" onclick="javascript:history.go(-1);"/></b>
                </td>
            </tr>
    </form>
</table>
    </p>
           <br/><br/>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer><center>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; SDN SUMBERSARI 02
                </div>

            </div>
        </div>
    </footer></center>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>

</body>
</html>