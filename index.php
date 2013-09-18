<?
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>CoderDojo Indonesia - Consultation</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php
     $p=$_GET['p'];
?>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

     <ul>
     <li class="dropdown">
     <a href="#" class="navbar-brand dropdown-toggle" data-toggle="dropdown">Consultation Service&#x25BC; <b class="caret"></b></a>
     <ul class="dropdown-menu">
      <li><a href="<?=$url_cdi?>" target="_blank">CoderDojo Indonesia</a></li>
      <li><a href="<?=$url_consultant?>"  target="_blank"">Consultation Service</a></li>
     <li><a href="<?=$url_clients?>"  target="_blank">Clients Monitoring</a></li>

     </ul>
     </li>
     </ul>

     <!--     <a class="navbar-brand" href="http://consultant.coderdojoindonesia.com">Consultation Service</a>-->
        </div>

            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
     <li <? if($p=='home' || $p=='') { ?> class="active" <? } ?>><a href="?p=home">Home</a></li>
     <li <? if($p=='journal') { ?> class="active" <? } ?>><a href="?p=journal">Journal</a></li>
     <li <? if($p=='previous') { ?> class="active" <? } ?>><a href="?p=previous">Previous Work</a></li>
     <li <? if($p=='pricing') { ?> class="active" <? } ?>><a href="?p=pricing">Pricing</a></li>
     <li <? if($p=='tos') { ?> class="active" <? } ?>><a href="?p=tos">Term of Service</a></li>

     <li <? if($p=='contact') { ?> class="active" <? } ?>><a href="?p=contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Online Profile<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="http://www.facebook.com/swdev" target="_blank">Facebook</a></li>
                    <li><a href="http://ekoswibowo.wordpress.com" target="_blank">Wordpress</a></li>
                    <li><a href="http://id.linkedin.com/pub/eko-wibowo/30/32b/503/" target="_blank">LinkedIn</a></li>
                    <li><a href="http://careers.stackoverflow.com/ekowibowo " target="_blank">Stackoverflow</a></li>
                    <li><a href="https://github.com/swdevbali" target="_blank">Github</a></l>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>



        <div class="navbar-collapse collapse">
<!--
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
-->
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Selamat Datang!</h1>
     <table cellpadding="10">
     <tr>
     <td><img src="avatar.png" /></td>
     <td>
        <p>"Jika Anda membuka web ini dengan suatu kebutuhan untuk mendapat bantuan profesional, terukur dan handal dalam memastikan tuntasnya Tugas Akhir yang berkenaan dengan Software Development untuk jenjang S1, S2 atau S3, maka Anda berada pada jalur yang tepat." (Eko Wibowo)</p>
        <p><a class="btn btn-primary btn-lg" role="button" href="http://tinyurl.com/swdev-cv" target="_blank">Curriculum Vitae &raquo;</a></p>
        </td>
        </tr>
        </table>

      </div>
    </div>
        <div class="container">
        <?php

        if($p=='' || $p=='home') {
            include('home.php');            
        }else if($p=='journal'){
            include('journal.php');
        }else if($p=='previous'){
            include('previous.php');
        }else if($p=='tos'){
            include('tos.php');
        }else if($p=='pricing'){
            include('pricing.php');
        }else if($p=='contact'){
            include('contact.php');
        }else{
            include('home.php');
        }
     ?>
     </div> <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
