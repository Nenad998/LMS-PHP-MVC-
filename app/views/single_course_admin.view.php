<?php require 'partials/header.php';  ?>

    <div class="container-fluid mt-2  h-75 d-inline-block ">
        <div class="row "> 
              <div class="col-xl-2"> </div>
            <div class="col-xl-8 mt-3">
                       <p><b>Na ovom kursu profesori je: </b></p>
                         <p> <?php echo $course->user->name; ?></p>
                       
                          <p><b>Opis kursa: </b></p>
                            <p><?php echo $course->description; ?></p> 


            </div>
        </div>
     </div>


</body>
</html>