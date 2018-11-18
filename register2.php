<?php
session_start();
include ("connection.php");
//session_start();
//$_SESSION['userid'] = '123';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Six&Kaz</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
                    Six&Kaz
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
<!--					-->
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" action="" id="reg">
						<div class="module-head">
							<h3>Зарегистрироваться</h3>
						</div>
						<div class="module-body">
                            <div class="col-md-8">
                                <p class="register1">При регистрации все сотрудники проходят профессиональный и психологический тест для наилучшего подбора пар наставник - работник</p>
                            </div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<a href="register3.php" type="submit"  class="btn btn-primary pull-right">Начать тестирование</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">@Six&Kaz
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/script.js" type="text/javascript"></script>
</body>