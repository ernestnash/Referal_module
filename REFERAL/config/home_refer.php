<?php
    session_start();

?>

<section class="referMain">
    <?php if(isset($_SESSION['username'])){ ?>
        <div class="referWelcome">
            <p class="welcomeTextRefer"><?php echo "Welcome ".$_SESSION['username'].", "; ?></p>
        </div>
        <section class="referal-form">
            <div class="referalForm form">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <label for="facilityDepartment">Facility/Department</label>
                    <select name="facilityDepartment" id="">
                        <option value="">OPD</option>
                    </select>
                    <label for="diagnosis">Diagnosis</label>
                    <textarea name="diagnosis" id="" cols="30" rows="10"></textarea>
                    <label for="reasonForReferal">Diagnosis</label>
                    <textarea name="reasonForReferal" id="" cols="30" rows="10"></textarea>
                </form>
            </div>
        </section>
    <?php } ?>

    <?php
        if(!isset($_SESSION['username'])){
            header("Location:./login.php?message=Login+The+Patient+To+Refer+Him+or+Her");
            exit();
        }
    ?>
</section>