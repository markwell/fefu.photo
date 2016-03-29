<!DOCTYPE html>
<html lang="ru">
   <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>FEFU-PHOTO</title>
	  <!-- Bootstrap -->
	  <link href="/adm/css/jumbotron-narrow.css" rel="stylesheet">
	  <link href="/adm/css/bootstrap.css" rel="stylesheet">
	  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.pond/xs.42/respond.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.pond/xs.42/respond.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.pond/xs.42/respond.min.js"></script>
	  <![endif]-->
   </head>
     <body>
       <div class="container">
         <div class="header">
          <img src="/adm/images/Shapka.jpg">
           <ul class="nav nav-pills">
             <li><a href="main">Главная</a></li>
             <li><a href="/adm/about">О компании</a></li>
           </ul>
         </div>

         <?php include 'application/views/'.$content_view; ?>

          <!-- /container -->
       <!-- Bootstrap core JavaScript
       ================================================== -->
       <!-- Placed at the end of the document so the pages load faster -->
     </div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="/adm/js/jquery.min.js"></script>
	  <!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/adm/js/bootstrap.js"></script>
	 
   </body>
</html>
