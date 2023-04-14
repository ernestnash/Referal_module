<?php

$id_method = "";
$id = "";


function searchPatient(){
    $id_method = $_POST['patient_id_method'];
    $id = $_POST['patient_id_no'];

    //db details
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "HOSPITAL";

    $db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if(!$db_connection){
        return("An error occured while connecting to the database");
    } else{
        $query = "SELECT * FROM patients_data WHERE patient_id_no = '$id'";
        $result = mysqli_query($db_connection, $query);
        $data = mysqli_fetch_assoc($result);
        $resultCount = mysqli_num_rows($result);

        if($resultCount===1){
            session_start();
            $_SESSION['patient_name'] = $data[0]['PATIENT_NAME'];
            $SESSION['patient_id'] = $data[0]['PATIENT_ID_NO'];

            header("Location: ./refer.php");
            exit();
        } else{
            return("Result Not Found");
            header("Location: ./signup.php?message=Patient+Not+Found+In+The+Registry");
            exit();
        }
    }
    }
    if(isset($_POST['patient_id_no']) && isset($_POST['patient_id_no'])){
        searchPatient();
    }
?>

<section class="searchPatientMain">
    <div class="searchBox">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <select name="patient_id_method" id="idMethod">
                <option value="">--Choose Patient's ID Method--</option>
                <option value="id_card">National Identification Card</option>
                <option value="insurance_card">Insurance Card</option>
                <option value="birth_cert">National Birth Certificate</option>
                <option value="army_card">Army Identification Card</option>
                <option value="alien_id">Alien Identification Card</option>
            </select>

            <input type="text" placeholder="Key in patient Identification Number..." name="searchKeyword">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>

    <div class="searchresult">
        <table>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>

</section>