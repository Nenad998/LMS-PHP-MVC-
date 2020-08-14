<?php require 'partials/header.php';  ?>

  <div class="container-fluid mt-2  h-75 d-inline-block ">
       <div class="row ">
         <div class="col-xl-2"> </div>
           <div class="col-xl-8 mt-3">
           <table class="table   text-center mt-3">
           <thead>
                <tr>
                     <th scope="col">Ovaj zadatak su uradili ucenici</th>
                     <th scope="col">Datum</th>
                   
                </tr>
               </thead>
               <tbody>
                 <?php foreach($users_tasks as $task){ ?>
                   <tr>
                   <td> <?php  echo $task->user->name;   ?> </td>
                   <td> <?php  echo $task->exercise->dates;   ?> </td>


                    </tr>
                  <?php }?>
               </tbody>
            </table>
    
              <div class="col-xl-2">  </div>
          </div>
       </div>
     </div>

 
</body>
</html>