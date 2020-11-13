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
    <title>Nilai Siswa</title>
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
    <style >
        th, td{
            border-color: black;
        }
    </style>
    <style >
        th{
            background-color: grey; 
        }
    </style>
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
                             <li> <a href="<?php echo base_url()?>Login" >Logout</a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- MENU SECTION END-->
   <center><b><h2 style="font-family: Agency; font-size: 28px;">RAPORT SISWA</h2></b>
<table width="800px">
    <tr>
        <td>NIS </td>
        <td>:</td>
        <td><?php echo $data[0]->nis;?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Kelas</td>
        <td>:</td>
        <td><?php echo $kelas = $_GET['kelas'];?></td>
    </tr>
    <tr>
        <td>Nama Siswa </td>
        <td>:</td>
        <td><?php echo $data[0]->nama_siswa;?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Semester</td>
        <td>:</td>
        <td><?php echo $data[0]->semester;?></td>
    </tr>
    <tr>
        <td>Nama Sekolah </td>
        <td>:</td>
        <td>SDN Sumbersari 02</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Tahun Ajaran</td>
        <td>:</td>
        <td><?php echo "" . date("Y ");?></td>
    </tr>
    <tr>
        <td>Asal Sekolah </td>
        <td>:</td>
        <td>Jl. Kaliurang-Jember</td>
    </tr>
</table>
   <p align="center" >
            <table border="1" width="1000px" style="text-align: center">
                <tr>
                    
                    <th style="text-align: center">Mata Pelajaran</th>
                    <th style="text-align: center">KKM</th>
                    <th style="text-align: center">Nilai</th>      
                    <th style="text-align: center">Grade</th>
                    <th style="text-align: center">Keterangan</th>
                    <th style="text-align: center">Deskripsi</th>
                </tr>
                
                <?php foreach ($data as $data):?>
                <tr>
                    
                    <td><?php echo $data->nama_mapel;?></td>
                    <td><?php echo $data->kkm;?></td>
                    <td><?php echo $data->nilai_rata;?></td>
                    <td><?php echo $data->grade;?></td>
                    <td><?php if ($data->kkm <= $data->nilai_rata) {
                        echo "Memenuhi";
                    }
                    else {
                        echo "Tidak Memenuhi";
                    };?></td>
                    <td><?php switch ($data->grade) {
                        case 'A':
                            echo "Sangat baik dalam menguasai materi dan mampu belajar mandiri untuk menguasai materi yang akan diberikan dipertemuan minggu depan.";
                            break;
                         case 'B':
                            echo "Baik dan cukup menguasai materi yang diberikan. Mampu bersaing dengan siswa lainnya.";
                            break;
                            case 'C':
                            echo "Cukup baik dalam memahami materi yang diberikan selama kegiatan belajar mengajar.,namun sangat perlu bimbingan diluar jam sekolah.";
                            break;
                        default:
                            echo "Sangat kurang dalam memahami materi dan sangat membutuhkan bimbingan diluar jam sekolah.";
                            break;
                    } ?></td>
                </tr>
                <?php endforeach;?>
            </table><br>         
            <b>NILAI RAPORT : <?php echo $data->nilai_raport;?></b><br>
            <b>STATUS :  <?php echo $data->status;?></b>
            <br><br> <br><br>
        </p>
        <div class="row" >
            <div class="column" >
                <p>Mengetahui,</p>
            </div>
            <div class="column" >
                <p>Jember, <?php echo "" .date("d-M-Y");  ?></p>
            </div>
            <div class="column" >
                <p>Orangtua</p>
                <br><br>
                (.........................)
            </div>
        </div>
   </center>
       <br><br><br><br><br><br><br><br><br>
            <center><button onClick="window.print();">CETAK</button></center><br>
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