<?php
    // INCLUDING CLASS
    require_once 'Classes/DatabaseClass.php';
    $db = new Database();
    // THIS IS THE SYNTAX FOR SELECTING :
    // $getRow = $db->getRow("SELECT * FROM user WHERE user_id = ?", ["12"]);
 ?>
