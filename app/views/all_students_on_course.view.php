<?php require 'partials/header.php';  ?>


<style>
    body {
        background: #e4e4e4;
    }

</style>

<div class="form-container-prof">

    <form class="form-wrap-prof">



        <h1>Ucenici na kursu</h1>
        <div class="form-box-prof">
            <?php  foreach($std as $st) {  ?>

                <p class="name_prof-prof"><?php echo $st->user->name;   ?> </p>

            <?php }  ?>

        </div>
    </form>

</div>




</body>
</html>
