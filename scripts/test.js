$(document).ready(function () {
    Survey
        .StylesManager
        .applyTheme("default");

    var json = {
        questions: [
            {
                type: "radiogroup",
                name: "1",
                title: "Я быстро решаюсь на что-нибудь.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "2",
                title: "Я сосредоточен на мрачных, печальных сторонах жизни большей чем на радостных.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "3",
                title: "Я люблю шумные и веселые игры.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "4",
                title: "Я часто отвлекаюсь, когда выполняю какое-нибудь задание.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "5",
                title: "Часто я испытываю ощущение и ожидание несчастья без видимой на то причины.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "6",
                title: "Я люблю подшутить над кем-нибудь.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "7",
                title: "Я могу развеселить скучных товарищей.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "8",
                title: "Я всегда себя чувствую бодрым и полным сил.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "9",
                title: "Я люблю разговаривать и веселиться с другими людьми.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "10",
                title: "Иногда я могу расплакаться, если читаю грустную книгу или смотрю грустный фильм.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "11",
                title: "Часто я решаюсь на что-нибудь, когда уже упущено время.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "12",
                title: "Я быстро могу разгневаться.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "13",
                title: "Я всегда говорю только правду.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "14",
                title: "У меня часто бывает подавленное настроение.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "15",
                title: "У меня есть привычка проверять перед сном или перед тем, как уйти, выключен ли газ и свет, закрыта ли дверь.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "16",
                title: "Я много раз проверяю, нет ли ошибок в моей работе.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "17",
                title: "Я очень уравновешен, никогда не раздражаюсь и ни на кого не злюсь.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "18",
                title: "Если у меня взяли в долг, я стесняюсь об этом напомнить.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "19",
                title: "Я обычно уверен в том, что смогу справиться с делом, которое мне поручают.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }, {
                type: "radiogroup",
                name: "20",
                title: "Малейшие неприятности сильно огорчают меня.",
                isRequired: true,
                colCount: 1,
                choices: [
                    "Да",
                    "Нет"
                ]
            }
        ]
    };

    window.survey = new Survey.Model(json);

    var score;
    var count = 0;

    survey
        .onComplete
        .add(function (result) {

            score = result.data;

            document.getElementById("surveyElement").style = "display: none";


            for (key in score) {
                if (score[key] == "Да")
                    count++;
            }
            console.log(count);
            userid = $('#login1').val();
            console.log(userid);
            console.log('asd');
            $.ajax(
                {
                    type: "POST",
                    url: "functions.php",
                    dataType: "text",
                    data: { count: count, userid: userid },
                    success: function (answer) {
                        if (answer == 'Тест успешно пройден') {
                            $('.answer').append(answer);
                            setTimeout(function () {
                                window.location.href = '/index.php';
                            }, 2000)

                        } else {
                            $('.answer').append(answer);
                            setTimeout(function () {
                                window.location.reload();
                            }, 2000)
                        }


                    }
                }
            )
        });
    // console.log(score);
    //






    $("#surveyElement").Survey({model: survey});
})