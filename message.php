<?php
session_start();
include 'connection.php';
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
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
          rel='stylesheet'>
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Six&Kaz </a>
            <div class="nav-collapse collapse navbar-inverse-collapse">


                <ul class="nav pull-right">

                    <li><a href="#">Помощь </a></li>
                    <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="images/user.png" class="nav-avatar" />
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                            if ($_SESSION['userid']) {
                                echo "
                                        <li><a href=\"myprofile.php\">Мой профиль</a></li>
                                        <li><a href=\"changeprofile.php\">Редактировать профиль</a></li>
                                        <li><a href=\"settings.php\">Настройки</a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"logout.php\">Выйти</a></li>
                                        ";
                            } else {
                                echo "<li><a href=\"auth.php\">Войти</a></li>";
                                echo "<li><a href=\"register.php\">Зарегистрироваться</a></li>";
                            }
                            ?>

                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </div>
    <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <?php
                if ($_SESSION['userid']) {
                    $invalid_id = $_SESSION['userid'];
                    $user_group = $_SESSION['user_group'];
                    if ($user_group == 2) {
                        $query = mysqli_query($link,"SELECT * from mentors WHERE invalid_id = '$invalid_id'");
                        while ($row = mysqli_fetch_array($query)) {
                            $mentor_id = $row['mentor_id'];
                        }
                        echo "
                        <div class=\"sidebar\">
                    <ul class=\"widget widget-menu unstyled\">
                        <li class=\"active\"><a href=\"index.php\"><i class=\"menu-icon icon-home\"></i>Главная
                            </a></li>
                                <li class=\"active\"><a href=\"add.php\"><i class=\"menu-icon icon-home\"></i>Объявления
                            </a></li>
                        <li><a href=\"message.php\"><i class=\"menu-icon icon-inbox\"></i>Входящие сообщения <b class=\"label green pull-right\">
                                    11</b> </a></li>
                        <li><a href=\"notes.php\"><i class=\"menu-icon icon-tasks\"></i>Заметки <b class=\"label orange pull-right\">
                                    19</b> </a></li>
                    </ul>
                    <!--/.widget-nav-->


                    <ul class=\"widget widget-menu unstyled\">
               
                        <li><a href=\"myprofile.php\"><i class=\"menu-icon icon-user-md\"></i>Мой профиль </a></li>";

                        if ($mentor_id) {
                            echo "<li><a href=\"mentor.php?$id=$mentor_id\"><i class=\"menu-icon icon-user\"></i>Наставник </a></li>";
                        } else {
                            echo "<li><a href=\"mentor.php\"><i class=\"menu-icon icon-user\"></i>Поиск наставника </a></li>";
                        }

                        echo "
                        <li><a href=\"logout.php\"><i class=\"menu-icon icon-arrow-up\"></i>Выйти </a></li>
                    </ul>
                    <!--/.widget-nav-->
                </div>
                        ";
                    } elseif ($user_group == 3) {

                    } elseif ($user_group == 4) {

                    }
                }

                else {
                    echo "
                        <div class=\"sidebar\">
                    <ul class=\"widget widget-menu unstyled\">
                        <li class=\"active\"><a href=\"index.php\"><i class=\"menu-icon icon-home\"></i>Главная
                            </a></li>

                        <li><a href=\"auth.php\"><i class=\"menu-icon icon-signin\"></i>Войти  </a></li>
                        <li><a href=\"register.php\"><i class=\"menu-icon icon-plus-sign\"></i>Зарегистрироваться  </a></li>
                    </ul>

                </div>
                        ";
                }

                ?>
                <!--/.sidebar-->
            </div>
            <!--/.span3-->
            <div class="span9">
                <div class="content">
                    <div class="module message">
                        <div class="module-head">
                            <h3>
                                Сообщения</h3>
                        </div>
                        <div class="module-option clearfix">

                            <div class="pull-right">
                                <a href="#" class="btn btn-primary">Написать новое сообщение</a>
                            </div>
                        </div>
                        <div class="module-body table">
                            <table class="table table-message">
                                <tbody>
                                <tr class="heading">
                                    <td class="cell-check">
                                        <input type="checkbox" class="inbox-checkbox">
                                    </td>
                                    <td class="cell-icon">
                                    </td>
                                    <td class="cell-author hidden-phone hidden-tablet">
                                        Отправитель
                                    </td>
                                    <td class="cell-title">
                                        Тема
                                    </td>
                                    <td class="cell-icon hidden-phone hidden-tablet">
                                    </td>
                                    <td class="cell-time align-right">
                                        Дата
                                    </td>
                                </tr>
                                <tr class="unread">
                                    <td class="cell-check">
                                        <input type="checkbox" class="inbox-checkbox">
                                    </td>
                                    <td class="cell-icon">
                                        <i class="icon-star"></i>
                                    </td>
                                    <td class="cell-author hidden-phone hidden-tablet">
                                        Павел Быков
                                    </td>
                                    <td class="cell-title">
                                        Необходимо доделать макет
                                    </td>
                                    <td class="cell-icon hidden-phone hidden-tablet">

                                    </td>
                                    <td class="cell-time align-right">
                                        18 ноября
                                    </td>
                                </tr>
                                <tr class="read">
                                    <td class="cell-check">
                                        <input type="checkbox" class="inbox-checkbox">
                                    </td>
                                    <td class="cell-icon">
                                        <i class="icon-star"></i>
                                    </td>
                                    <td class="cell-author hidden-phone hidden-tablet">
                                        Павел Быков
                                    </td>
                                    <td class="cell-title">
                                        Необходимо доделать макет
                                    </td>
                                    <td class="cell-icon hidden-phone hidden-tablet">

                                    </td>
                                    <td class="cell-time align-right">
                                        18 ноября
                                    </td>
                                </tr>
                                <tr class="read">
                                    <td class="cell-check">
                                        <input type="checkbox" class="inbox-checkbox">
                                    </td>
                                    <td class="cell-icon">
                                        <i class="icon-star"></i>
                                    </td>
                                    <td class="cell-author hidden-phone hidden-tablet">
                                        Павел Быков
                                    </td>
                                    <td class="cell-title">
                                        Необходимо доделать макет
                                    </td>
                                    <td class="cell-icon hidden-phone hidden-tablet">

                                    </td>
                                    <td class="cell-time align-right">
                                        18 ноября
                                    </td>
                                </tr>
                                <tr class="read">
                                    <td class="cell-check">
                                        <input type="checkbox" class="inbox-checkbox">
                                    </td>
                                    <td class="cell-icon">
                                        <i class="icon-star"></i>
                                    </td>
                                    <td class="cell-author hidden-phone hidden-tablet">
                                        Павел Быков
                                    </td>
                                    <td class="cell-title">
                                        Необходимо доделать макет
                                    </td>
                                    <td class="cell-icon hidden-phone hidden-tablet">

                                    </td>
                                    <td class="cell-time align-right">
                                        18 ноября
                                    </td>
                                </tr>
                                <tr class="read">
                                    <td class="cell-check">
                                        <input type="checkbox" class="inbox-checkbox">
                                    </td>
                                    <td class="cell-icon">
                                        <i class="icon-star"></i>
                                    </td>
                                    <td class="cell-author hidden-phone hidden-tablet">
                                        Павел Быков
                                    </td>
                                    <td class="cell-title">
                                        Необходимо доделать макет
                                    </td>
                                    <td class="cell-icon hidden-phone hidden-tablet">

                                    </td>
                                    <td class="cell-time align-right">
                                        18 ноября
                                    </td>
                                </tr>
                                <tr class="read">
                                    <td class="cell-check">
                                        <input type="checkbox" class="inbox-checkbox">
                                    </td>
                                    <td class="cell-icon">
                                        <i class="icon-star"></i>
                                    </td>
                                    <td class="cell-author hidden-phone hidden-tablet">
                                        Павел Быков
                                    </td>
                                    <td class="cell-title">
                                        Необходимо доделать макет
                                    </td>
                                    <td class="cell-icon hidden-phone hidden-tablet">

                                    </td>
                                    <td class="cell-time align-right">
                                        18 ноября
                                    </td>
                                </tr>
                                <tr class="read">
                                    <td class="cell-check">
                                        <input type="checkbox" class="inbox-checkbox">
                                    </td>
                                    <td class="cell-icon">
                                        <i class="icon-star"></i>
                                    </td>
                                    <td class="cell-author hidden-phone hidden-tablet">
                                        Павел Быков
                                    </td>
                                    <td class="cell-title">
                                        Необходимо доделать макет
                                    </td>
                                    <td class="cell-icon hidden-phone hidden-tablet">

                                    </td>
                                    <td class="cell-time align-right">
                                        18 ноября
                                    </td>
                                </tr>
                                <tr class="read">
                                    <td class="cell-check">
                                        <input type="checkbox" class="inbox-checkbox">
                                    </td>
                                    <td class="cell-icon">
                                        <i class="icon-star"></i>
                                    </td>
                                    <td class="cell-author hidden-phone hidden-tablet">
                                        Павел Быков
                                    </td>
                                    <td class="cell-title">
                                        Необходимо доделать макет
                                    </td>
                                    <td class="cell-icon hidden-phone hidden-tablet">

                                    </td>
                                    <td class="cell-time align-right">
                                        18 ноября
                                    </td>
                                </tr>
                                <tr class="read">
                                    <td class="cell-check">
                                        <input type="checkbox" class="inbox-checkbox">
                                    </td>
                                    <td class="cell-icon">
                                        <i class="icon-star"></i>
                                    </td>
                                    <td class="cell-author hidden-phone hidden-tablet">
                                        Павел Быков
                                    </td>
                                    <td class="cell-title">
                                        Необходимо доделать макет
                                    </td>
                                    <td class="cell-icon hidden-phone hidden-tablet">

                                    </td>
                                    <td class="cell-time align-right">
                                        18 ноября
                                    </td>
                                </tr>
                                <tr class="read">
                                    <td class="cell-check">
                                        <input type="checkbox" class="inbox-checkbox">
                                    </td>
                                    <td class="cell-icon">
                                        <i class="icon-star"></i>
                                    </td>
                                    <td class="cell-author hidden-phone hidden-tablet">
                                        Павел Быков
                                    </td>
                                    <td class="cell-title">
                                        Необходимо доделать макет
                                    </td>
                                    <td class="cell-icon hidden-phone hidden-tablet">

                                    </td>
                                    <td class="cell-time align-right">
                                        18 ноября
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="module-foot">
                        </div>
                    </div>
                </div>
                <!--/.content-->
            </div>
            <!--/.span9-->
        </div>
    </div>
    <!--/.container-->
</div>
<!--/.wrapper-->
<div class="footer">
    <div class="container">
        <b class="copyright">@Six&Kaz
    </div>
</div>
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

