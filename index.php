<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Template</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
		<a href="#" class="navbar-brand d-flex align-items-center">Template</a>
		<!-- <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Album</strong>
	 </a>-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="">

    <div class="">
<!-- ======================================================================================= -->
<style>
ul.vm_items { margin-bottom:10px;}
ul.vm_items li { list-style:none;}
.main { width:90% !important; }
.container { width:90% !important; max-width:100% !important;}
.col-sm {border: 1px solid #ececec; border-bottom:none; border-right:none;}
.col-sm:last-child{ border-right:1px solid #ececec; }
.row { border-bottom:none;}
.row:last-child { border-bottom:1px solid #ececec;}
.heading .col-sm{ background-color:#ececec; font-weight:bold;}
</style>
<?php

$url = 'data/data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$arrData = json_decode($data, true);
?>

<div class="container" style="width:90%;">

<div class="row heading">
<div class="col-sm">VM Name</div>
<div class="col-sm">Power</div>
<div class="col-sm">Windows DNS</div>
<div class="col-sm">Veeam</div>
<div class="col-sm">IPAM</div>
<div class="col-sm">Zabbix Enabled</div>
<div class="col-sm">Zabbix Online</div>
</div>
    <?php foreach ($arrData as $key) {?>
        <div class="row">
            <div class="col-sm">
                <?php echo $key['vm_name']; ?>
            </div>
            <div class="col-sm">
                <?php $power_check = $key['is_power'];
                if ($power_check == 'Off') {
                    echo '<span style="color:red;">'.$power_check.'</span>';
                } else {
                    echo '<span style="color:green;">'.$power_check.'</span>';
                }    
                ?>
            </div>
            <div class="col-sm">
                <?php $dns_check = $key['is_dns'];
                if ($dns_check == 'False') {
                    echo '<span style="color:red;">'.$dns_check.'</span>';
                } else {
                    echo '<span style="color:green;">'.$dns_check.'</span>';
                }
                ?>
	    </div>
            <div class="col-sm">
                <?php echo $key['is_veeam']; ?>
            </div>
            <div class="col-sm">
                <?php $ipam_check = $key['is_ipam'];
                if ($ipam_check == 'False') {
                    echo '<span style="color:red;">'.$ipam_check.'</span>';
                } else {
                    echo '<span style="color:green;">'.$ipam_check.'</span>';
                }
                ?>
            </div>
            <div class="col-sm">
                <?php $zabbix_enabled_check = $key['is_zabbix_enabled'];
                if ($zabbix_enabled_check == 'False') {
                    echo '<span style="color:red;">'.$zabbix_enabled_check.'</span>';
                } else {
                    echo '<span style="color:green;">'.$zabbix_enabled_check.'</span>';
                }
                ?>
            </div>
            <div class="col-sm">
                <?php $zabbix_live_check = $key['is_zabbix_live'];
                if ($zabbix_live_check == 'False') {
                    echo '<span style="color:red;">'.$zabbix_live_check.'</span>';
                } else {
                    echo '<span style="color:green;">'.$zabbix_live_check.'</span>';
                }
                ?>
            </div>
	
	</div>
    <?php } ?>
</div>

<!-- ======================================================================================= -->





    </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!--<script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>-->

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
  </body>
</html>
