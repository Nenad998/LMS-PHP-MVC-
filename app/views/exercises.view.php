<?php require 'partials/header.php';  ?>

    <div class="container-fluid mt-2  h-75 d-inline-block ">
        <div class="row "> 
           <div class="col-xl-2"> </div>
            <div class="col-xl-8 mt-3">
                <p><b>Napomena:</b> <?php echo $exercises->notice;  ?> </p><br><br>
                <p class="text-justify"> <?php echo $exercises->content;     ?>  </p>
                <p><b>Rok za zavrsetak ovog zadatka je: </b><?php echo $exercises->dates; ?></p>




             </div>
              <div class="col-xl-2">  </div>
         </div>
     </div>

</body>
</html>