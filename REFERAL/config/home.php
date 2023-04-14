<section class="main">
    <div class="userInfo">
        <p>
            <i class="fa-solid fa-user"></i>
            <?php 
                if(isset($_SESSION['username'])){
                    echo $_SESSION['username']; 
                } else{
                    echo "Admin";
                }
            ?>
        </p>
    </div>
 <div class="welcome">
     <p></p>
 </div>
 
 <div class="dashboard">
    <a href="">
        <div class="dashboardItem dashboardItem1 noOfPatients">
            <p id="countPatients">
                <?php
                    echo countPatients();
                ?>
            </p>
            <h3>Number of Patients</h3>
        </div>
    </a>

    
    <a href="">
        <div class="dashboardItem dashboardItem2 noOfPhysicians">
            <p id="countPhysicians">0</p>
            <h3>Number of Physicians</h3>
        </div>
    </a>

    
    <a href="">
        <div class="dashboardItem dashboardItem3 noOfFacilities">
            <p id="countFacilities">0</p>
            <h3>Number of Facilities</h3>
        </div>
    </a>

    
    <a href="">
        <div class="dashboardItem dashboardItem4 noOfReferrals">
            <p id="countReferrals">0</p>
            <h3>Number of Referrals</h3>
        </div>
    </a>

    
    <a href="">
        <div class="dashboardItem dashboardItem5 referralFeedback">
            <p id="countFeedback">0</p>
            <h3>Referral Feedbacks</h3>
        </div>
    </a>

    
    <a href="">
        <div class="dashboardItem dashboardItem6 findPatient">
            <p><i class="fa-solid fa-magnifying-glass"></i></p>
            <h3>Find a Patient</h3>
        </div>
    </a>

    
    <a href="">
        <div class="dashboardItem dashboardItem7 findDoctor">
            <p><i class="fa-solid fa-user-doctor"></i></p>
            <h3>Find a Doctor</h3>
        </div>
    </a>

    
    <a href="">
        <div class="dashboardItem">
            <p><i class="fa-sharp fa-solid fa-flask-vial"></i></p>
            <h3>Laboratory Services</h3>
        </div>
    </a>

    
    <a href="">
        <div class="dashboardItem dashboardItem8 ourServices">
            <p><i class="fa-sharp fa-solid fa-gears"></i></p>
            <h3>Our Services</h3>
        </div>
    </a>

    
    <a href="">
        <div class="dashboardItem">
            <p><i class="fa-sharp fa-solid fa-hospital"></i></p>
            <h3>Facility Details</h3>
        </div>
    </a>

    
 </div>
</section>