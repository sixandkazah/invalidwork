<?php
session_start();
include ("connection.php");
if (isset($_POST["auth"])) {
    parse_str($_POST["auth"], $_POST);
    $user_login = $_POST['login'];
    $user_password = md5($_POST['password']);
    $query = mysqli_query($link, "SELECT * FROM users WHERE user_login = '$user_login'");
    while ($row = mysqli_fetch_array($query)) {
        $tmp_user_login = $row['user_login'];
        $tmp_user_group = $row['user_group_id'];
        $tmp_user_password = $row['user_password'];
    }
    if ($user_login == $tmp_user_login) {
        if ($user_password == $tmp_user_password) {
            $query = mysqli_query($link, "SELECT * from users WHERE user_login = '$user_login'");
            while ($row = mysqli_fetch_array($query)) {
                $user_id = $row['user_id'];
            }
            $_SESSION['userid'] = $user_id;
            $_SESSION['login'] = $user_login;
            $_SESSION['user_group'] = $tmp_user_group;
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=/">';

        } else {
            echo "<div style='color: red'>Вы ввели неверный пароль</div>";
        }
    } else {

        echo "<div style='color: red'>Пользователь не существует</div>";

    }
}

if (isset($_POST['reg'])) {
    parse_str($_POST["reg"], $_POST);
    $user_surname = $_POST['surname'];
    $user_name = $_POST['name'];
    $user_patronymic = $_POST['patronymic'];
    $user_group = $_POST['group'];
    $user_email = $_POST['email'];
    $user_password = md5($_POST['password']);
    $user_repeatpassword = md5($_POST['repeatpassword']);
    $user_prof = $_POST['chooseprof'];
    $user_invite = $_POST['invite'];
    $user_login = $_POST['login'];
    $query = mysqli_query($link, "SELECT * from users WHERE user_login = '$user_login'");
    while ($row = mysqli_fetch_array($query)) {
        $tmp_user_login = $row['user_login'];
    }
    if ($user_password == $user_repeatpassword) {
        $query = mysqli_query($link, "SELECT * from invites WHERE invite_code = '$user_invite'");
        echo mysqli_error();
        while ($row = mysqli_fetch_array($query)) {
            $invite_id = $row['invite_id'];
            $invite_code = $row['invite_code'];
            $invite_status = $row['invite_status'];
            $invite_group_id = $row['invite_group_id'];
        }
        if ($invite_status == 1) {
            if ($user_group == $invite_group_id) {
                if ((!$tmp_user_login) AND ($user_group == 4)) {
                    $query1 = mysqli_query($link, "INSERT INTO users (`user_surname`, `user_name`, `user_patronymic`, `user_login`, `user_password`, `user_email`, `user_invite_id`,
                `user_group_id`, `user_prof_id`) VALUES ('$user_surname', '$user_name', '$user_patronymic', '$user_login', '$user_password', '$user_email',
                '$invite_id', '$user_group', '$user_prof')");
                    echo mysqli_error();
                    $query2 = mysqli_query($link, "UPDATE invites SET `invite_status` = 2 WHERE invite_id = '$invite_id'");
                    $_SESSION['login'] = $user_login;
                    $query3 = mysqli_query($link, "SELECT * from users WHERE user_login = '$user_login'");
                    while ($row = mysqli_fetch_array($query)) {
                        $_SESSION['userid'] = $row['user_id'];
                    }
                    echo "Поздравляем!";
                } elseif (!$tmp_user_login) {
                    $query1 = mysqli_query($link, "INSERT INTO users (`user_surname`, `user_name`, `user_patronymic`, `user_login`, `user_password`, `user_email`, `user_invite_id`,
                `user_group_id`, `user_prof_id`) VALUES ('$user_surname', '$user_name', '$user_patronymic', '$user_login', '$user_password', '$user_email',
                '$invite_id', '$user_group', '$user_prof')");
                    echo mysqli_error();
                    $query2 = mysqli_query($link, "UPDATE invites SET `invite_status` = 2 WHERE invite_id = '$invite_id'");
                    $_SESSION['login'] = $user_login;
                    echo "Вы успешно зарегистрировались, поздравляем!";
                } else {
                    echo "Такой логин уже используется. Попробуйте другой";
                }
            } else {
                echo "Выберите другую группу пользователей";
            }
        } else {
            echo "Код приглашения более не действителен!";
        }
    } else {
        echo "Пароли не совпадают";

    }
}

if (isset($_POST['count'])) {
    $count = $_POST['count'];
    $userid = $_POST['userid'];
    if ($count <= 4 && $count >= 0)    $score = 1;
    else if ($count <= 8 && $count > 5)    $score = 2;
    else if ($count <= 12 && $count > 8)   $score = 3;
    else if ($count <= 15 && $count > 13)   $score = 4;
    else if ($count <= 20 && $count > 15)   $score = 5;

    $query = mysqli_query($link, "SELECT * from psycho_test WHERE psycho_test_user_id = '$userid'");
    while ($row = mysqli_fetch_array($query)) {
        $user_id1 = $row['psycho_test_user_id'];
    }
    if ($user_id1) {
        echo "Вы уже проходили тест";
    } else {
        $query = mysqli_query($link, "INSERT INTO psycho_test (`psycho_test_user_id`, `psycho_test_result`) VALUES ('$userid', '$score')");
        echo mysqli_error();
        echo "Тест успешно пройден";

    }
}

if (isset($_POST['mentorid'])) {
    $mentorid = $_POST['mentorid'];
    $userid = $_POST['userid'];
    $query = mysqli_query($link, "INSERT INTO mentors (`mentor_id`, `invalid_id`, `mentor_status`) VALUES ('$mentorid', '$userid', 1)");
    echo mysqli_error();
}

if (isset($_POST['mentors'])) {
    $mentors = $_POST['mentors'];
    $query = mysqli_query($link, "UPDATE mentors SET mentor_status = 2 WHERE mentors_id = '$mentors'");
    echo mysqli_error();
}
if (isset($_POST['task'])) {
    $task = $_POST['task'];
    $user = $_POST['user'];
    $query = mysqli_query($link, "SELECT * from users WHERE user_login = '$user'");
    while ($row = mysqli_fetch_array($query)) {
        $user_id = $row['user_id'];
    }
    $query = mysqli_query($link, "UPDATE tasks SET `task_status_id` = 5, `task_customer_id` = '$user_id'");
    echo mysqli_error();
    echo $user_id;

}