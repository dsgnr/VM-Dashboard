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

    <main role="main">

    <div class="container">
<!-- ======================================================================================= -->
<style>
ul.vm_items { clear:both;}
ul.vm_items li { list-style:none;float:left}
</style><?php
#$json = '
#[
#   {
#      "data":[
#         {
#            "vm_name":"V-Cent001",
#            "is_veeam":"Yes"
#         },
#         {
#            "vm_name":"V-Cent002",
#            "is_veeam":"Yes"
#         },
#         {
#            "vm_name":"V-Cent003",
#            "is_veeam":"Not Yet Implemented"
#         }
#      ]
#   }
#]
#';

$json ='
[
   {
      "data":[
         {
            "is_power":"Off",
            "is_zabbix_live":"False",
            "is_veeam":"Not yet implemented",
            "is_dns":"True",
            "vm_name":"000010-jira",
            "is_ipam":"True",
            "is_zabbix_enabled":"False"
         },
         {
            "is_power":"Off",
            "is_zabbix_live":"False",
            "is_veeam":"Not yet implemented",
            "is_dns":"True",
            "vm_name":"000010-jira",
            "is_ipam":"True",
            "is_zabbix_enabled":"False"
         }
      ]
   }
]
';

$arrData    =  json_decode($json);
    foreach($arrData as $key=>$objData){
        if(!empty($objData->{'data'})) {
              foreach($objData->{'data'} as $select){
		echo "<ul class=\"vm_items\">";
                echo "<li>VM Name :".$select->vm_name."</li>".PHP_EOL;
		echo "<li>Veeam :".$select->is_veeam."</li>".PHP_EOL;
                echo "</ul>".PHP_EOL;
              }
        }
    }
?>
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
