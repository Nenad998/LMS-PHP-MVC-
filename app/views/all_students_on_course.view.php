<?php require 'partials/header.php';  ?>


  <div class="container-fluid mt-2  h-75 d-inline-block ">
    <div class="row "> 
      <div class="col-xl-2"> </div>
      <div class="col-xl-8 mt-3"> <p><b>Ucenici na ovom kursu su:</b> </p>
        <?php  foreach($std as $st) {  ?>
          <p> <?php echo $st->user->name;   ?> </p>

          <?php }  ?>

       </div>
        <div class="col-xl-2">  </div>
     </div>
  </div>




</body>
</html>