<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Second test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="select.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <form action="send.php" method="post">
    <p>Наименование</p>    
    <select id="f" name="price" name="first_choose" onchange="summ()">
        <option disabled selected>-</option>
        <option value="1500">Мотоцикл – 1500 руб.</option>
        <option value="1350">Автомобиль – 1350 руб.</option>
        <option value="800">Автобус – 800 руб.</option>
        <option value="500">Поезд – 500 руб.</option> 
    </select>

    <p>Гостиница</p>    
    <select id="s" name="house" name="second_choose" onchange="summ()">
        <option disabled selected>-</option>
        <option value="2500">Да – 2500 руб.</option>
        <option value="0">Нет – 0 руб.</option> 
    </select><br><br>

    <p>Стоимость</p>
    <input id= "inp" maxlength="25" size="40" value="0" disabled>
    </form>
    <button onclick="add_new()">Посчитать</button>
    <div id="additional"></div>
</body>
</html>