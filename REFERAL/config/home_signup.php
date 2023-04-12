<?php
function registerPatient(){
    //patient details capture through post
    $patient_name = htmlspecialchars($_POST['patient_name']);
    $patient_gender = htmlspecialchars($_POST['patient_gender']);
    $patient_dob = htmlspecialchars($_POST['patient_dob']);
    $patient_id_method = htmlspecialchars($_POST['patient_id_method']);
    $patient_id_no = htmlspecialchars($_POST['patient_id_no']);
    $patient_phone_no = htmlspecialchars($_POST['patient_phone_no']);
    $patient_residence = htmlspecialchars($_POST['patient_residence']);
    $patient_reg_date = date("Y-m-d H:i:s A");
    $patient_investigation = htmlspecialchars($_POST['patient_investigation']);

//next of kin details capture through post
    $kin_name = htmlspecialchars($_POST['kin_name']);
    $kin_rship = htmlspecialchars($_POST['kin_rship']);
    $kin_phone_no = htmlspecialchars($_POST['kin_phone_no']);
    $kin_alt_contacts = htmlspecialchars($_POST['kin_alt_contacts']);

//database details
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "HOSPITAL";

    $db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    if(!$db_connection){
        return("An error has occured when connecting to the Database. Consult the Admin. \nError code: ".mysqli_connect_errno()."\nError message: ".mysqli_connect_error());
    } else{
        $query = "INSERT INTO PATIENTS_DATA(PATIENT_NAME,PATIENT_GENDER,PATIENT_DOB,PATIENT_ID_METHOD, PATIENT_ID_NO,PATIENT_PHONE_NO,PATIENT_RESIDENCE,REGISTRATION_DATE,KIN_NAME,KIN_RELATIONSHIP,KIN_PHONE_NUMBER,KIN_ALT_CONTACTS,PATIENT_INVESTIGATION) VALUES ('$patient_name','$patient_gender','$patient_dob','$patient_id_method','$patient_id_no','$patient_phone_no','$patient_residence','$patient_reg_date','$kin_name','$kin_rship','$kin_phone_no','$kin_alt_contacts','$patient_investigation')";
        
        if(mysqli_query($db_connection,$query)){
            echo '<script> alert \"Patient Registered Successfully\" </script>';
            header("Location:./login.php?message=Patient Registered Successfully");
            exit();
        } else{
            echo("an error occured trying to register the patient. Kindly consult the IT Admin for assistance.");
        }
    }
}

if(isset($_POST['patient_name']) && isset($_POST['patient_gender']) && isset($_POST['patient_id_method'])){
    registerPatient();
}

?>

<section class="signup_main">
    <div class="signup_form">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <?php if(isset($_GET['message'])){ ?>
                <p class="message"><?php echo $_GET['message']; ?></p>
            <?php } ?>
            <div class="grid">
                <div class="patientDetails">
                    <h2>PATIENT'S PERSONAL DETAILS</h2>
                    <p>Name</p>
                    <input type="text" placeholder="Patient's Full Name" name="patient_name" required> <br>

                    <p>Gender</p>
                    <select id="gender" name="patient_gender" required>
                        <option value="">--Choose Patient's Gender--</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select> <br>

                    <p>Date of Birth</p>
                    <input type="date" name="patient_dob" required> <br>
                    
                    <p>Identification Method</p>
                    <select id="id" name="patient_id_method" required>
                        <option value="">--Choose Patient's ID Method--</option>
                        <option value="id_card">National Identification Card</option>
                        <option value="insurance_card">Insurance Card</option>
                        <option value="birth_cert">National Birth Certificate</option>
                        <option value="army_card">Army Identification Card</option>
                        <option value="alien_id">Alien Identification Card</option>
                    </select> <br>
                    
                    <p>Identification Number</p>
                    <input type="text" placeholder="Patient's Identification Number" name="patient_id_no" required> <br>

                    <p>Phone Number</p>
                    <input type="number" placeholder="Patient's Phone Number" name="patient_phone_no" required> <br>

                    <p>Residence</p>
                    <input type="text" placeholder="Patient's Residence" name="patient_residence" required> <br>
                </div>

                <div class="nextOfKinDetails">
                    <h2>PATIENT'S NEXT OF KIN DETAILS</h2>
                    <p>Name</p>
                    <input type="text" placeholder="Next Of Kin's Name" name="kin_name" required> <br>

                    <p>Relationship</p>
                    <input type="text" placeholder="Next Of Kin's Relationship" name="kin_rship" required> <br>

                    <p>Contacts</p>
                    <input type="number" placeholder="Next Of Kin's Phone Number" name="kin_phone_no" required> <br>

                    <p>Alternative Contact</p>
                    <input type="text" placeholder="Next of Kin's Email or Other Contact methods" name="kin_alt_contacts"> <br>
                </div>


                <div class="patientHistory">
                    <p>Patient Investigation/History</p>
                    <textarea name="patient_investigation" id="" cols="46" rows="10" placeholder="Describe the patient's current health condition"></textarea>
                </div>
            </div>

            <input type="hidden" name="reg_date" id="regDate" value="">

            <br>
            <button type="submit">Register Patient</button>
            <a href="./login.php">Already registered? Sign in here</a>
        </form>
    </div>
</section>