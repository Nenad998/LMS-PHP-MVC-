<?php require 'partials/header.php';  ?>

  <div class="container-fluid mt-2  h-75 d-inline-block ">
    <div class="row "> 
      <div class="col-sm-12 col-xl-12  text-center p-2" style='background-color:#4f4d49';>

          <h4 class="text-white"><?php echo $lecture->name;?></h4>   

        </div>
        <div class="col-xl-2"> </div>
         <div class="col-xl-8 mt-3"> 
         <p class="text-justify"> <?php echo $lecture->content;?>  </p>

         <table class="table col-xl-12  text-center mt-3">
             <tbody>
             <?php foreach($lecture->exe as $lect){ ?>
               <tr>
               <td><b><?php echo $lect->name; ?> </b></td>
               <td><a id="pogledaj_lekc" href="student_exercises?exe_id=<?php echo $lect->id; ?>"><button class="btn btn-primary btn-block ">Pogledaj zadatak</button></a></td>
               <td><?php echo "<b>datum izvrsenja:</b> " . date('d.m.Y',strtotime($lect->dates)); ?></td>

                 <tr>
                <?php } ?>
             </tbody>
          </table>
          </div>
    </div>


   </div>


</body>
</html>