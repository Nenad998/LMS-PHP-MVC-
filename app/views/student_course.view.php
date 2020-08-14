<?php require 'partials/header.php';  ?>

  <div class="container-fluid mt-2  h-75 d-inline-block ">
    <div class="row "> 
      <div class="col-sm-12 col-xl-12 text-center p-2" style='background-color:#4f4d49';>

          <h4 class="text-white"><?php echo  $course->name;  ?></h4>   

              </div>
            </div>
            <table class="table   text-center mt-3">
               <thead>
                   <tr>
                     <th scope="col">Naziv</th>
                     <th scope="col">Pogledaj lekciju </th>
           
                   </tr>
                </thead>
                <tbody>
                <?php foreach($course->lecture as $lec){ ?> 
                     <tr>

                       <td> <?php echo $lec->name; ?>    </td>
                       <td><a id="pogledaj_lekc" href="student_lecture?id=<?php echo $lec->id;?>"><button class="btn btn-primary btn-block">Pogledaj lekciju</button></a></td>

                     </tr>
                    <?php } ?>
                </tbody>
            </table>

          </div>

</body>
</html>