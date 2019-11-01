<?php
$config[ 'offerName' ] = 'Chocolate Slim';               // НАЗВАНИЕ ТОВАРА
$config[ 'price' ] = 990;                                // НОВАЯ ЦЕНА ТОВАРА
$config[ 'currency' ] = 'руб';                           // Валюта - НЕ СТАВИТЬ ТОЧКУ В КОНЦЕ!!!
$config[ 'action' ] = 'process.php';                     // Путь к файлу обработчика формы

$formHtml = <<<'FORM_HTML'
<div class="order_form shadow">
    <form action="{FORM_ACTION}" method="post" class="x_order_form">
        <input type="text" value="" placeholder="ФИО" name="name" class="icon_1">
        <input type="text" value="" placeholder="Телефон" name="phone" class="icon_2">
        <input type="submit" value="ЗАКАЗАТЬ" name="order_button">
        <p class="snoska"></p>
    </form>
    <div class="timer_box">
        <div class="free__wrap">
            <p class="free__give"
               style="text-align: center !important;padding: 0px !important;text-indent: 0px !important; font-weight:bold;">
                На {OFFER} действует<br>
                льготная цена<br>
                <span class="free__main"
                      style="font-size: 22px; font-weight: bold; color: red;">{PRICE} {CURRENCY}.</span>
        </div>
        <div class="timer">
            <p style="text-align: center !important;padding: 0px !important;text-indent: 0px !important">До конца
                акции:</p>
            <div class="timer_wrapper1">
                <span>
                    <b class="d_hours">17</b>
                    часов
                </span>
                <span>
                    <b class="d_minutes">27</b>
                    минут
                </span>
                <span>
                    <b class="d_seconds">37</b>
                    секунд
                </span>
            </div>
        </div>
    </div>
</div>
FORM_HTML;
$formStyle = <<<'FORM_STYLE'
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap&subset=cyrillic');

.prelander-form {
    text-align: center;
    font-family: 'Roboto', sans-serif !important;
}

.order_form {
    display: inline-block;
    width: 550px;
    padding: 20px 20px 30px 20px;
    margin: 15px auto;
    border-radius: 15px;
    background: #fff;
    zoom: 1;
    *display: inline;
}

.order_form h4 {
    font-weight: 600;
    font-size: 26px;
    line-height: 120%;
    margin-bottom: 25px;
    text-align: center;
}

.bg_4 .order_form h4 {
    margin: 0 -15px 20px -15px;
    text-align: center;
}

.order_form form {
    display: block;
    float: left;
    width: 100%;
    min-width: 150px;
    max-width: 255px;
    text-align: center;
    border-radius: 5px;
}

.order_form input[type="text"],
.icon_2 {
    display: block;
    margin: auto;
    width: 85%;
    height: 56px;
    padding: 0 15px 0 15px;
    border: 1px solid #d6d9d8;
    border-radius: 5px;
    font-family: 'Open Sans', sans-serif;
    font-size: 23px;
    color: #8e8e8e;
    line-height: 56px;
    margin-bottom: 14px;
    background: #f2f4f3;
    text-align: left;
}

.order_form input[type="submit"] {
    display: inline-block;
    width: 100%;
    height: 58px;
    padding: 10px 0 12px 0;
    border: none;
    border-bottom: 1px solid #707270;
    border-radius: 5px;
    background: #2ca922;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
    font-family: 'Open Sans', sans-serif;
    font-size: 25px;
    color: #fff;
    line-height: 130%;
    text-align: center;
    cursor: pointer;
}

.order_form input[type="submit"]:hover {
    background: #23901b;
}

.shadow {
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3);
}

.timer_box {
    float: right;
    text-align: center;
    margin: 0 5px;
    max-width: 240px;
}

.timer {
    display: inline-block;
    max-width: 220px;
    vertical-align: top;
    font-weight: 600;
    text-shadow: 0 0 2px #fff;
    z-index: 2;
    zoom: 1;
    *display: inline;
}

.timer>p {
    font-size: 20px;
    line-height: 130%;
    font-weight: 400;
    margin-bottom: 8px;
}

.timer>div {
    font-size: 16px;
    line-height: 130%;
}

.timer_wrapper1>span {
    display: inline-block;
    width: 60px;
    vertical-align: top;
    font-size: 16px;
    line-height: 130%;
    font-weight: 400;
}

.timer_wrapper1>span>b {
    display: inline-block;
    width: 50px;
    height: 47px;
    padding-top: 3px;
    background: #fff;
    border-radius: 8px;
    font-size: 34px;
    line-height: 130%;
    font-weight: normal;
    margin-bottom: 2px;
    border: 1px solid #ecefee;
    border-radius: 8px;
}

@media (max-width: 1170px) {
    .ever-popup__body .order_form {
        width: 500px;
    }

    .order_form {
        padding: 20px 20px 30px 20px;
    }
}

@media (max-width: 999px) {
    .ever-popup__body .order_form {
        width: 300px;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -webkit-flex-direction: column;
        -moz-flex-direction: column;
        -ms-flex-direction: column;
        -o-flex-direction: column;
        flex-direction: column;
        -ms-align-items: center;
        align-items: center;
    }

    .order_form {
        padding: 20px 20px 30px 20px;
    }
}

@media (max-width: 767px) {
    .order_form {
        padding: 0px;
        padding-top: 10px;
    }

    .timer_box {
        float: right;
        text-align: center;
        margin: 0 5px;
        max-width: 1000px;
    }

    .order_form {
        width: 100%;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex !important;
        -webkit-flex-direction: column;
        -moz-flex-direction: column;
        -ms-flex-direction: column;
        -o-flex-direction: column;
        flex-direction: column;
        -ms-align-items: center;
        align-items: center;
    }

    .form-img {
        order: 5;
    }

    .timer_box {
        order: 3;
        margin-top: 10px !important;
    }

    .order_form form {
        order: 4;
        margin-top: 15px !important;
        margin-bottom: 30px;
    }

    .order_form .fixator {
        order: 1;
    }

    .order_form h4 {
        order: 2;
        margin-top: 10px;
    }
}
</style>
FORM_STYLE;
$formJs = <<<'FORM_JS'
<script>
setInterval(function () {
    var t = new Date,
        e = t.getSeconds(),
        s = t.getMinutes(),
        n = t.getHours();
    0 == e ? $(".d_seconds").text("0") : $(".d_seconds").text(60 - e), 0 == s ? $(".d_minutes").text("0") : $(".d_minutes").text(60 - s), 0 == n ? $(".d_hours").text("23") : $(".d_hours").text(24 - n)
}, 1e3);
</script>
FORM_JS;

$formHtml = str_replace( [ '{OFFER}', '{PRICE}', '{CURRENCY}', '{FORM_ACTION}' ], $config, $formHtml );