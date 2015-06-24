 <?php
	require_once("config/config.php")?>
 <!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap  Template</title>

    <!-- Bootstrap -->
	<script type="text/javascript" src="media/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="media/js/parallax.min.js"></script>
    <link href="media/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="media/bootstrap/css/animate.css" rel="stylesheet">
    <link href="media/bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="media/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

  <div class="header parallax-window" data-parallax="scroll" data-image-src="media/img/fon.jpg">
	<div class="container">
	   <div class="row">
	   
		  <div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle"data-toggle="collapse" data-target="#responsive-menu">
				   <span class="sr-only">Открыть навигацию</span>
				   <span class="icon-bar"></span>
				   <span class="icon-bar"></span>
				   <span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="#">название сайта</a>
			  </div>
					<div class="collapse navbar-collapse" id="responsive-menu">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Главная</a></li>
							<li><a href="index.php?url=news">Новости</a></li>
							<li><a href="index.php?url=gallery">Галерея</a></li>
							<li><a href="#">Форум</a></li>
							<li><a data-toggle="modal" href="#myModal" ><i class="glyphicon glyphicon-user"></i></a></li>
						</ul>
					</div>
				
				</div>
			</div>
			
		</div>
	</div>
		
			<div class="logo">
				
				<h1>Минский городской<br/>
				    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspпортал</h1>
				
			</div>
		

  </div>
  <!---окно---->
  <div class="modal" id="myModal">
  
  <div class="modal-body">
    <div class="button-window">
		<button type="button" class="btn btn-primary animated bounceInLeft vhod" data-dismiss="modal" data-toggle="modal" href="#myModal2">Вход</button></br>
		<button  type="button" class="btn btn-primary animated bounceInRight reg" data-dismiss="modal" data-toggle="modal" href="#myModal1" >Регистрация</button>
	</div>
   </div>
 
</div>

<!---окно2---->
  <div class="modal" id="myModal1">
  
  <div class="modal-body2">
		<div class="reg-form">
				<form class="navbar-form navbar-center" action="" method="GET">
				<input class="form-control" type="text" placeholder="Login"name="login"><br/>
				<input class="form-control" type="password" placeholder="Password"name="password"><br/>
				<input class="form-control" type="password" placeholder="Repead password"name="Rpassword"><br/>
				<input class="form-control" type="text" placeholder="e-mail"name="email"><br/>
				<input class="btn btn-danger" type="submit" data-dismiss="modal" value="Отмена">
				<input class="btn btn-success" type="submit" value="Регистрация">
				
				
				</form>
		</div>		
		
  </div>
 
</div>

<!----окно3----->
  <div class="modal" id="myModal2">
  
  <div class="modal-body2">
		<div class="reg-form">
				<form class="navbar-form navbar-center" action="" method="GET">
				<input class="form-control" type="text" placeholder="Login"name="login"><br/>
				<input class="form-control" type="password" placeholder="Password"name="password"><br/>
				<input class="btn btn-danger" type="submit" data-dismiss="modal" value="Отмена">
				<input class="btn btn-success" type="submit" value="Вход">
				
				
				</form>
		</div>		
		
  </div>
  
  </div>