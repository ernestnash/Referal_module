<?php
    session_start();

?>

<section class="referMain">
    <div class="grid">
        <?php if(isset($_SESSION['patient_name'])){ ?>
            <div class="referWelcome">
                <p class="welcomeTextRefer"><?php echo "Welcome ".$_SESSION['username'].", "; ?></p>
            </div>
            <section class="referal_form">
                <div class="referalForm form">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <p>Reason for referral</p>
                        <input type="text" name="referral_reason" placeholder="Reason for Referral"> <br>

                        <p>Referred to:</p>
                        <select name="recipientFacility" id="">
                            <option value="">--Select Facility--</option>
                        </select> <br>

                        <p>Clinical Summary</p>
                        <textarea name="clinicalSummary" id="" cols="30" rows="10" placeholder="Clinical Summary"></textarea> <br>

                        <button type="submit">Submit Referral Request <i class="fa-solid fa-check"></i></button>
                    </form>
                </div>
            </section>
        <?php } ?>
    </div>

    <?php
        if(!isset($_SESSION['username'])){
            header("Location:./login.php?message=Login+The+Physician+To+Refer+Him+or+Her");
            exit();
        }
    ?>
</section>