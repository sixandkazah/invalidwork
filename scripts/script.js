$(document).ready(function () {
    console.log('asdsd');
    $('#auth').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        var auth = $('#auth1').serialize();
        console.log(auth);
        $.ajax(
            {
                type: "POST",
                url: "functions.php",
                dataType: "text",
                data: { auth: auth },
                success: function (answer) {
                    if (answer != 'ok') {
                        $('body').append(answer);
                    } else {
                        $('body').append(answer);
                        setTimeout(function () {
                            window.location.href = '/index.php';
                        },2000)
                    }

                }
            }
        )
    })
    $('#reg').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var reg = $('#reg').serialize();
        console.log(reg);
        $.ajax(
            {
                type: "POST",
                url: "functions.php",
                dataType: "text",
                data: { reg: reg },
                success: function (answer) {
                    if (answer != 'Вы успешно зарегистрировались, поздравляем!') {
                        $('body').append(answer);
                    }else if (answer == 'Поздравляем!') {
                        window.location.href = '/index.php';
                    } else {
                        $('body').append(answer);
                        setTimeout(function () {
                            window.location.href = '/register2.php';
                        }, 2000)
                    }
                }
            }
        )
    })
    $('#addmentor').click(function () {
        var userid = $('#userid').val();
        var mentorid = $('#mentorid').val();
        $.ajax(
            {
                type: "POST",
                url: "functions.php",
                dataType: "text",
                data: { userid: userid, mentorid: mentorid },
                success: function (answer) {
                    window.location.reload();
                }
            }
        )
    })
    $('#pod').click(function () {
        var mentors = $('#mentors').val();
        $.ajax(
            {
                type: "POST",
                url: "functions.php",
                dataType: "text",
                data: { mentors: mentors },
                success: function (answer) {
                    window.location.reload();
                }
            }
        )
    })
    $('.task').click(function () {
        var task = this.id;
        var user = $('#login').val();
        console.log(task);
        console.log(user);
        $.ajax(
            {
                type: "POST",
                url: "functions.php",
                dataType: "text",
                data: { task: task, user: user },
                success: function (answer) {
                    window.location.reload();
                }
            }
        )
    })
})