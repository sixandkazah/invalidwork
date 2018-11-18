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
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputLogin" name="login" placeholder="Придумайте логин" required>
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword1" name="password" placeholder="Пароль" required>
								</div>
							</div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span12" type="password" id="inputPassword2" name="repeatpassword" placeholder="Повторите пароль" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span12" type="text" id="inputPassword3" name="surname" placeholder="Фамилия" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span12" type="text" id="inputPassword4" name="name" placeholder="Имя" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span12" type="text" id="inputPassword5" name="patronymic" placeholder="Отчество" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span12" type="email" id="inputPassword6" name="email" placeholder="email" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span12" type="text" id="inputPassword7" name="invite" placeholder="Код приглашения" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <label for="chooseprof">Кем вы являетесь</label>
                                    <p><input class="span1" type="radio" id="inputPassword8" name="group" placeholder="email" required value="2">В поиске работы</p>
                                    <p><input class="span1" type="radio" id="inputPassword11" name="group" placeholder="email" required value="3">Наставник</p>
                                    <p><input class="span1" type="radio" id="inputPassword12" name="group" placeholder="email" required value="4">Работодатель</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <select class="span12" name="chooseprof" id="">
                                        <option value="">Выберите род деятельности</option>
                                        <?php
                                        $query = mysql_query("SELECT * FROM `prof`");
                                        echo mysql_error();
                                        while ($row = mysql_fetch_array($query)) {
                                            $prof_id = $row['prof_id'];
                                            $prof_name = $row['prof_name'];
                                            echo "<option value=\"$prof_id\">$prof_name</option>";

                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit"  class="btn btn-primary pull-right">Регистрация</button>
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