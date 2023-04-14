<?php
function countPatients(){
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "HOSPITAL";

    $db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if(!$db_connection){
        die("Failed to connect to the database");
    } else{
        $que = "SELECT * FROM patients_data WHERE patient_id_no != ''";
        $res = mysqli_query($db_connection, $que);
        $count = mysqli_num_rows($res);
    }

    return $count;
}


function countFacilities(){
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "HOSPITAL";

    $db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if(!$db_connection){
        die("Failed to connect to the database");
    } else{
        $que = "SELECT * FROM facility_data WHERE FACILITY_ID != ''";
        $res = mysqli_query($db_connection, $que);
        $count = mysqli_num_rows($res);
    }

    return $count;
}

