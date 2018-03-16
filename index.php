<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
    <header>
        <img src="images/logo.png">
        <div class = "header_tel">
            8-800-100-5005 <br>
            +7 (3452) 522-000                   
        </div>
    </header>

    <nav class='main_nav'>
        <ul>
            <li><a href="#">Кредитные карты</a></li>
            <li class="red"><a href="#">Вклады</a></li>
            <li><a href="#">Дебетовая карта</a></li>
            <li><a href="#">Страхование</a></li>
            <li><a href="#">Друзья</a></li>
            <li><a href="#">Интернет-банк</a></li>
        </ul>
    </nav>
    <nav class="second_nav">
        <a href="#">Главная</a> - <a href="#">Вклады</a> -
        <a href="#" style="text-decoration:none;">Калькулятор</a>
    </nav>

    <div class="main">
        <span class="CalculatorSpan">Калькулятор</span>
        <p class="Parameter" style="padding-left:30px;">Дата оформления вклада <input type="text" class="input" id="datepicker"></p> 
        <p class="Parameter" style="padding-left:95px;">Сумма вклада <input type="text" class="input numberOnly" id="summ" value="10000"><input type="range" min="1000" max="3000000" class="range" id="summRange" value="10000"></p> 
        <p class="Parameter" style="padding-left:105px;">Срок вклада
        <select class="input" id="time">
            <option>1 год</option>
            <option>2 года</option>
            <option>3 года</option>
            <option>4 года</option>
            <option>5 лет</option>
        </select></p>
        <p class="Parameter" style="padding-left:65px;">Пополнение вклада <input type="radio" class="inputRadio" name="Addition" checked="true" >Нет</input><input type="radio" name="Addition" class="inputRadio" id="yes">Да</input></p>
        <p class="Parameter" style="padding-left:25px;">Сумма пополнения вклада <input type="text" class="input numberOnly" value="10000" id="summAddition"><input type="range" min="1000" max="3000000" class="range"value="10000" id="summAdditionRange"></p>
        <input type="button" onclick="calc()" value="Рассчитать" class="calcButton">
        <span class="result">Результат:</span> <span class="res" id="res"></span>
    </div>

    <footer>
            <a href="#">Кредитные карты</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Вклады</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">Дебетовая карта</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Страхование</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">Друзья</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Интернет-банк</a>
    </footer>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
    <script src="js/source.js"></script>
</body>
</html>