<?php require 'partials/header.php';  ?>

<div class="under_nav">

    <p class="under_nav_parag">Svi kursevi</p>

</div>

<?php if(isset($_SESSION['error'])){ ?>
    <div class="flash_message" role="alert"><h2><?php echo $_SESSION['error']; unset($_SESSION['error']);?></h2></div>

<?php } ?>

<div class="wrapper">

    <?php  foreach ($courses as $course) { ?>

        <div class="card">
            <div class="card-body">
                <h4 class="card-subject">  <?php echo $course->name; ?> </h4>
                <p class="card-name"> <a  href="description_course?id=<?php echo $course->id; ?>">Pogledaj vise</a> </p>

                <div class="btn">  <a href="over?id=<?php echo $course->id;?>" class="btn_a">Kupi</a> </div>
            </div>

        </div>


    <?php }?>





</div>


</body>
</html>
