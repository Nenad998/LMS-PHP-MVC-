<?php require 'partials/header.php';  ?>

  <div class="container-fluid mt-2  h-75 d-inline-block ">
    <div class="row "> 
      
        <div class="col-xl-2"> </div>
        <div class="col-xl-8 mt-3"> 
            <p><b><?php  if(strtotime($exercises->dates) < strtotime(date('y-m-d'))){ echo "ROK NIJE VAZECI";} ?> </b> </p><br><br>

             <p><b>Napomena: </b> <p>  <?php echo $exercises->notice;     ?> </p></p><br><br>

              <p class="text-justify"><p><?php echo $exercises->content;  ?> </p></p>  

          
     
     
              <a id="pogledaj_lekc" href="completed_task_std?exe_id=<?php echo $exercises->id;?>"><button class="btn btn-primary mt-2">Predaj zadatak</button></a>
            </div>
            
          <div class="col-xl-2">  </div>
        
        </div>
        



         </div>

</body>
</html>