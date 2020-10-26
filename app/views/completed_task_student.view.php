<?php require 'partials/header.php';  ?>

<div class="under_nav">

    <p class="under_nav_parag">Predaj zadatak</p>

</div>



<div class="std_exercise_txt">

    <div class="std_exe_txt"></div>
    <div class="std_exe_txt">

        <?php if(isset($_SESSION['errors'])){
            foreach($_SESSION['errors'] as $er){
                ?>
                <div class="flash_message">
                    <?php echo $er;?>
                </div>
                <?php
            }
            unset($_SESSION['errors']);
        } ?>

        <p class="content_exe_std"><b>Sadrzaj:</b></p>

        <form action="completed_task_std_post?exercise_id=<?php echo $_GET['exe_id'];?>" method="post" enctype="multipart/form-data">
            <textarea name="content" class="textarea_std" rows="12" cols="100" placeholder="napisi zadatak"></textarea>


            <button type="submit" class="deliver_exercise_button">Predaj zadatak</button>

        </form>




    </div>

    <div class="std_exe_txt"></div>



</div>




</body>
</html>
