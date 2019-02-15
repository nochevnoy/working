<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Second test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="select.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <form action="send.php" method="post">
    <p>Наименование</p>    
    <select id="f" name="first_choose" onchange="summ()">
        <option disabled selected>-</option>
        <option value="1500">Мотоцикл – 1500 руб.</option>
        <option value="1350">Автомобиль – 1350 руб.</option>
        <option value="800">Автобус – 800 руб.</option>
        <option value="500">Поезд – 500 руб.</option> 
    </select>

    <p>Гостиница</p>    
    <select id="s" name="second_choose" onchange="summ()">
        <option disabled selected>-</option>
        <option value="2500">Да – 2500 руб.</option>
        <option value="0">Нет – 0 руб.</option> 
    </select><br><br>

    <p>Стоимость</p>
    <input id="inp" maxlength="25" size="40" value="0" disabled>
    <input type="button" onclick="add_new()" value="Посчитать"><br>
    <input id="1st" type="text" name="user_name" placeholder="YOUR NAME" hidden/><br>
    <input id="2nd" type="email" name="user_email" placeholder="YOUR EMAIL" hidden/><br>
    <input id="3rd" type="tel" name="user_tele" placeholder="YOUR TELE" hidden/><br>
    <input id="4th" type="submit" value="Отправить" hidden>
    </form>
</body>
</html>