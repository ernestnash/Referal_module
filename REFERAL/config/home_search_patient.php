<?php

$id_method = "";
$id = "";


function searchPatient(){
    if(isset($_POST['patient_id_no'])){
        //$id_method = $_POST['patient_id_method'];
        $id = $_POST['patient_id_no'];
    }

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
        $GLOBALS['data'] = mysqli_fetch_assoc($result);
        $resultCount = mysqli_num_rows($result);

        return($resultCount);

        if($resultCount==1){
            session_start();
            $_SESSION['patient_name'] = $data['PATIENT_NAME'];
            $SESSION['patient_id'] = $data['PATIENT_ID_NO'];

            return("User found");
            header("Location: ./refer.php");
            exit();
        } else{
            return("Result Not Found");
            header("Location: ./signup.php?message=Patient+Not+Found+In+The+Registry");
            exit();
        }
    }
    }
    if(isset($id_method) && isset($id)){
        searchPatient();
    }
?>

<section class="searchPatientMain">
    <div class="searchBox">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <p>
                <?php 
                if(searchPatient()==1){
                    echo searchPatient()." patient(s) found by that identity. Proceed to refer the patient."; 
                } else{
                    echo "0 patient(s) found in the system, consider registering the patient before referring.";
                }
                
                ?>
        
            </p>
            <select name="patient_id_method" id="idMethod">
                <option value="">--Choose Patient's ID Method--</option>
                <option value="id_card">National Identification Card</option>
                <option value="insurance_card">Insurance Card</option>
                <option value="birth_cert">National Birth Certificate</option>
                <option value="army_card">Army Identification Card</option>
                <option value="alien_id">Alien Identification Card</option>
            </select>

            <input type="text" placeholder="Key in Patient Identification Number..." name="patient_id_no">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>

    <div class="searchresult">
        <table border=1px>
            <tr>
                <th>PATIENT ID</th>
                <th>NAME</th>
                <th>GENDER</th>
                <th>RESIDENCE</th>
                <th>CONTACT</th>
                <th>NEXT OF KIN</th>
            </tr>

            <tr>
                <td><?php echo $data['PATIENT_ID_NO']?></td>
                <td><?php echo $data['PATIENT_NAME']?></td>
                <td><?php echo $data['PATIENT_GENDER']?></td>
                <td><?php echo $data['PATIENT_RESIDENCE']?></td>
                <td><?php echo $data['PATIENT_PHONE_NO']?></td>
                <td><?php echo $data['KIN_NAME']?></td>
            </tr>
        </table>
    </div>

</section>