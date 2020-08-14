<?php require 'partials/header.php'; ?>

<div class="container-fluid mt-2  h-75 d-inline-block ">
    <div class="row ">
        <div class="col-xl-2"></div>
        <div class="col-xl-8 mt-3"><p><b>Profesor na ovom kursu je:</b></p>

            <p> <?php echo "<b>" . $course->user->name . "</b>"; ?> </p>


        </div>
        <div class="col-xl-2"></div>
    </div>
</div>


</body>
</html>