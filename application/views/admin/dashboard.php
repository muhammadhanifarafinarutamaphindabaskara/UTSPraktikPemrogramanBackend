<?php 
include 'koneksi.php';
$get1 = mysqli_query($koneksi,"select * from userlogin where akses ='admin'" );
$count1 = mysqli_num_rows($get1);

$get2 = mysqli_query($koneksi,"select * from userlogin where akses ='member'" );
$count2 = mysqli_num_rows($get2);

$get3 = mysqli_query($koneksi,"select * from userlogin where akses ='bos'" );
$count3 = mysqli_num_rows($get3);

$get4 = mysqli_query($koneksi,"select * from userlogin where akses ='op'" );
$count4 = mysqli_num_rows($get4);

$get5 = mysqli_query($koneksi,"select * from userlogin where akses ='supplier'" );
$count5 = mysqli_num_rows($get5);


?>
<h1>Selamat Datang, <?=user_info('nama');?></h1>
<p>&nbsp;</p>
<div class="row">	
	 <div class="col-lg-3 col-xs-6"> <!-- small box -->             
         <div class="small-box bg-aqua">
            <div class="inner">
                <h3>
					User Manager
                 </h3>
                 <p>
					Manajemen pengguna sistem
				 </p>
            </div>
            <div class="icon">
                <span class="fa fa-users"></span>
            </div>
            <a href="<?=base_url(akses().'/pengguna');?>" class="small-box-footer">
                Lihat Daftar Pengguna <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div><!-- ./col -->
	
		 <div class="col-lg-3 col-xs-6"> <!-- small box -->             
         <div class="small-box bg-green">
            <div class="inner">
                <h3>
					Berita
                 </h3>
                 <p>
					Manajemen halaman berita
				 </p>
            </div>
            <div class="icon">
                <span class="fa fa-newspaper-o"></span>
            </div>
            <a href="<?=base_url(akses().'/cms/berita');?>" class="small-box-footer">
                Lihat Daftar Berita <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div><!-- ./col -->
	
	<div class="col-lg-3 col-xs-6"> <!-- small box -->             
         <div class="small-box bg-yellow">
            <div class="inner">
                <h3>
					Halaman
                 </h3>
                 <p>
					Manajemen halaman website
				 </p>
            </div>
            <div class="icon">
                <span class="fa fa-file"></span>
            </div>
            <a href="<?=base_url(akses().'/cms/halaman');?>" class="small-box-footer">
                Lihat Daftar Halaman <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div><!-- ./col -->
	
		<div class="col-lg-3 col-xs-6"> <!-- small box -->             
         <div class="small-box bg-red">
            <div class="inner">
                <h3>
					Info Sistem
                 </h3>
                 <p>
					Manajemen informasi sistem
				 </p>
            </div>
            <div class="icon">
                <span class="fa fa-gears"></span>
            </div>
            <a href="<?=base_url(akses().'/konfigurasi');?>" class="small-box-footer">
                Atur Informasi Sistem <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div><!-- ./col -->
</div>
<div id="piechart" style="width: 900px; height: 500px;"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['List Pengguna', 'Jumlah Pengguna'],
          ['Admin',    <?php echo $count1 ?>],
          ['member',   <?php echo $count2 ?>],
          ['op',       <?php echo $count4 ?>],
          ['supplier', <?php echo $count5 ?>],
          ['bos',      <?php echo $count3 ?>],
        ]);

        var options = {
          title: 'Jumlah Pengguna'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

