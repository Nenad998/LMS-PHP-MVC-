<?php require 'partials/header.php';  ?>

  <div class="container-fluid mt-2  h-75 d-inline-block ">
    <div class="row "> 
        <div class="col-sm-12 col-xl-12  text-center p-2" style='background-color:#4f4d49';>
            <div class="align-middle"> <h4 class="text-white"><?php echo $lecture->name;?></h4> </div> 
         </div>
          <div class="col-xl-2"> </div>
          <div class="col-xl-8 mt-3"> 
            <p class="text-justify"><?php echo $lecture->content; ?> </p>
            <table class="table col-xl-12  text-center mt-3">
              <tbody>
              <?php foreach($lecture->exe as $lect){ ?> 
                <tr>

                  <td><b><?php echo $lect->name; ?> </b></td>
                  <td><a id="pogl_zad" href="exercise?exe_id=<?php echo $lect->id; ?>"><button class="btn btn-primary btn-block ">Pogledaj zadatak</button></a></td>
                  <td><a id="pogl_zad" href="editExercise?id=<?php echo $lect->id; ?>"><button class="btn btn-danger btn-block ">Izmeni</button> </a></td>
                  <td><a id="pogl_zad" href="deleteExercise?id=<?php echo $lect->id; ?>&eid=<?php echo $lecture->id;?>"><button class="btn btn-warning btn-block ">Obrisi</button> </a></td>
                  <td><a id="pogl_zad" href="completed_task?id=<?php echo $lect->id;  ?>"><button class="btn btn-success btn-block ">Uradjen zadatak</button> </a></td>
                  

                </tr>
                <?php } ?>
               </tbody>
             </table>
             <a href="addExercise?add_id=<?php echo $lecture->id;  ?>" class="btn btn-primary mt-2 float-xl-right float-sm-right" role="button" aria-pressed="true">dodaj zadatak</a>
           </div>
           <div class="col-xl-2">  </div>
     </div>
   </div>


</body>
</html>