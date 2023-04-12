<?php
        //database details
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "HOSPITAL";

        $patient_id_no = "";
        $patient_dob = "";
        $patient_phone_no = "";
        
    if(isset($_GET['patient_id_no']) && isset($_GET['patient_dob']) && isset($_GET['patient_phone_no'])){
        //patient's variables
        $patient_id_no = htmlspecialchars($_GET['patient_id_no']);
        $patient_dob = htmlspecialchars($_GET['patient_dob']);
        $patient_phone_no = htmlspecialchars($_GET['patient_phone_no']);
    }

            //database connection
        $db_connection = mysqli_connect($db_host,$db_user,$db_password,$db_name);

        if(!$db_connection){
            echo "Failed to connect to database";
        } else{
            //echo "Connected to database successfully.";
            $login_query = "SELECT * FROM patients_data WHERE patient_id_no = '$patient_id_no' AND patient_dob = '$patient_dob' AND patient_phone_no = '$patient_phone_no'";
            $result = mysqli_query($db_connection, $login_query);
            if($result){
                //echo "Query successfully executed";
                $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
                //print_r($data[0]['KIN_NAME']);

                session_start();
                if(mysqli_num_rows($result)===1){
                    //echo "Match found!";
                    $_SESSION['username'] = $data[0]['PATIENT_NAME'];
                    $_SESSION['patient_id'] = $data[0]['PATIENT_ID_NO'];
                    
                    //redirect to another page
                    header("Location: ./refer.php?message=Successfully+Logged+In");
                    exit();
                }
            }
        }
    
?>

<section class="loginMain">
    <div class="loginForm">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <?php if(isset($_GET['message'])) { ?>
                <p class="message" style="background-color: white; color: green; padding: 5px 10px 5px 10px; border-radius: 4px; font-weight: 300;"><?php echo $_GET['message']; ?></p>
            <?php } ?>

            <p>ID Number</p>
            <input type="text" name="patient_id_no" placeholder="Patient's ID Number" required> <br>

            <p>Date of Birth</p>
            <input type="date" name="patient_dob" required> <br>

            <p>Phone Number</p>
            <input type="number" name="patient_phone_no" placeholder="Patient's Phone Number" required> <br><br>

            <center>
                <button type="submit">Login</button>
            </center> <br> 
            <a  href="./signup.php">New to the system? Signup here</a>
        </form>
    </div>
</section>