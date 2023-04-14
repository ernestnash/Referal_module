<?php
        //database details
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "HOSPITAL";

        $physician_id = "";
        $physician_telecom = "";
        
    if(isset($_GET['physician_id']) && isset($_GET['physician_telecom'])){
        //patient's variables
        $physician_id = htmlspecialchars($_GET['physician_id']);
        $physician_telecom = htmlspecialchars($_GET['physician_telecom']);
    }

            //database connection
        $db_connection = mysqli_connect($db_host,$db_user,$db_password,$db_name);

        if(!$db_connection){
            echo "Failed to connect to database";
        } else{
            //echo "Connected to database successfully.";
            $login_query = "SELECT * FROM physician_data WHERE identifier = '$physician_id' AND telecom = '$physician_telecom'";
            $result = mysqli_query($db_connection, $login_query);
            if($result){
                //echo "Query successfully executed";
                $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
                //print_r($data[0]['KIN_NAME']);

                session_start();
                if(mysqli_num_rows($result)===1){
                    //echo "Match found!";
                    $_SESSION['username'] = $data[0]['NAME'];
                    $_SESSION['physician_id'] = $data[0]['IDENTIFIER'];
                    
                    //redirect to another page
                    header("Location: ./refer.php?message=Successfully+Logged+In");
                    exit();
                } else{
                    // header("location: ./login.php?Incorrect+Login");
                    // exit();
                }
            }
        }
    
?>

<section class="loginMain">
    <div class="loginForm">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <?php if(isset($_GET['message'])) { ?>
                <p class="message" style="background-color: white; color: rgb(2,48,71); padding: 5px 10px 5px 10px; border-radius: 4px; font-weight: 300;">
                    <?php echo $_GET['message']; ?>
                </p>
            <?php } ?>
            <h2>LOGIN</h2>
            <p>ID Number</p>
            <input type="text" name="physician_id" placeholder="ID Number" required> <br>

            <!-- <p>Date of Birth</p>
            <input type="date" name="patient_dob" required> <br> -->

            <p>Phone Number</p>
            <input type="number" name="physician_telecom" placeholder="Phone Number" required> <br><br>

            <center>
                <button type="submit">Login</button>
            </center> <br> 
            <a  href="./signup.php">New to the system? Signup here</a>
        </form>
    </div>
</section>