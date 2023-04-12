<?php
    session_start();

?>

<section class="referMain">
    <?php if(isset($_SESSION['username'])){ ?>
        <div class="referWelcome">
            <p class="welcomeTextRefer"><?php echo "Welcome ".$_SESSION['username'].", "; ?></p>
        </div>
    <?php } ?>

    <?php
        if(!isset($_SESSION['username'])){
            header("Location:./login.php?message=Login+The+Patient+To+Refer+Him+or+Her");
            exit();
        }
    ?>
</section>