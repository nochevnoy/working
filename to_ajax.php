<?php

if (isset($_POST["first_choose"]) && isset($_POST["phonenumber"]) ) { 

	//массив для JSON
    $result = array(
    	'first_choose' => $_POST["first_choose"],
    	'second_choose' => $_POST["second_choose"]
    ); 

    // в JSON
    echo json_encode($result); 
}

?>