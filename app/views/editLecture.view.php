<?php require 'partials/header.php';  ?>

<div class="under_nav">

    <p class="under_nav_parag">Uredi lekciju</p>

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



        <form action="editLec_post?edit_id=<?php echo $_GET['id']; ?>" method="post"  enctype="multipart/form-data">

            <p class="form_parag">Naziv lekcije</p>
            <input class="input_lec" value="<?php echo $lecture->name;?>" type="text" name="name">

            <p class="form_parag">Sadrzaj lekcije</p>
            <textarea name="content" class="textarea_std" rows="12" cols="100"><?php echo $lecture->content; ?></textarea>
          



            <button type="submit" class="deliver_exercise_button">Uredi</button>

        </form>




    </div>

    <div class="std_exe_txt"></div>



</div>

</body>
</html>
