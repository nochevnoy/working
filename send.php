<?php
    $first_choose = $_POST['first_choose'];
    $second_choose = $_POST['second_choose'];
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_tele = $_POST['user_tele'];

    /* block for testing
    echo $first_choose;
    echo "<br>";
    echo $second_choose;
    echo "<br>";
    echo $user_name;
    echo "<br>";
    echo $user_email;
    echo "<br>";
    echo $user_tele;

    */

    $to = "nochevnoy@yandex.ru";
    $subject = "Заявка с сайта";
    $headers = array(
        "From" => "123@123.123",
        "X-Mailer" => "PHP/" . phpversion()
    );
    $message = "Наименование: .$first_choose.\n
                Гостиница: .$second_choose.\n
                Имя: .$user_name.\n
                Email: .$user_email.\n
                Телефон: .$user_tele.\n";
    
    mail($to, $subject, $message, $headers);


?>