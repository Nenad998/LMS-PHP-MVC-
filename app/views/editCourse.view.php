<?php require 'partials/header.php';  ?>

<div class="under_nav">

    <p class="under_nav_parag">Uredi kurs</p>

</div>

<div class="std_exercise_txt">

    <div class="std_exe_txt"></div>
    <div class="std_exe_txt">

        <?php if(isset($_SESSION['errors'])){
            foreach($_SESSION['errors'] as $er){
                ?>
                <div class="flash_message" role="alert">
                    <?php echo $er;?>
                </div>
                <?php
            }
            unset($_SESSION['errors']);
        } ?>



        <form action="editCourse_post?edit_id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">

            <p class="form_parag">Naziv kursa</p>
            <input class="input_lec" type="text"  value="<?php echo $courses->name;?>" name="name">

            <p class="form_parag">Sadrzaj kursa</p>
            <textarea name="description" class="textarea_std" rows="12" cols="100"><?php echo $courses->description;?>"</textarea><br>
            <div>
                <select class="select_teacher"  name="teacher_id">
                    <option><p class="form_parag">Izaberi profesora</p></option>
                    <?php foreach($users as $user) {    ?>
                        <option value="<?php echo $user->id;?>"> <?php echo $user->name;  ?>  </option>
                    <?php } ?>

                </select
            </div>

            <div>
                <p class="form_parag">Uredi cenu</p>
                <input type="number" class="input_course" value="<?php echo $courses->price;?>" name="price">
            </div>



            <button type="submit" class="deliver_exercise_button">Uredi</button>

        </form>




    </div>

    <div class="std_exe_txt"></div>



</div>



</body>
</html>
