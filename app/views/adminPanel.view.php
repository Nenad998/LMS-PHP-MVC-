<?php require 'partials/header.php';  ?>


  <div class="container-fluid mt-2  h-75 d-inline-block ">
    <div class="row "> 
       <div class="col-sm-12 col-xl-12  text-center p-2" style='background-color:#4f4d49';>
          <div class="align-middle "> <h4 class="text-white">Admin panel</h4>    </div> 
        </div>
        <a href="addCourses" class="btn btn-primary mt-2" role="button" aria-pressed="true">dodaj kurs</a>
        
    </div>
    

    <table class="table   text-center mt-3">
              <thead>
                <tr>
                     <th scope="col">Naziv kursa</th>
                     <th scope="col">Pogledaj kurs </th>
                     <th scope="col">Izmeni</th>
                     <th scope="col">Obrisi</th>
                </tr>
               </thead>
                <tbody>
                <?php  foreach ($courses as $course) { ?>
                    <tr>
                        <td><?php echo $course->name; ?>  </td>
                        <td><a id="pogledaj_lekc" href="single_course_admin?id=<?php echo $course->id;?>"><button class="btn btn-primary btn-block">Pogledaj kurs</button></a></td>
                        <td><a href="edit_course?id=<?php echo $course->id; ?>"><button class="btn btn-danger ">Izmeni</button> </a></td>
                        <td><a href="delete_course?id=<?php echo $course->id;  ?>&courseId=<?php echo $course->id;  ?>"><button class="btn btn-warning ">Obrisi</button> </a></td>


                    </tr>
                    <?php } ?>
                </tbody>




             </table>


 </div>

</body>
</html>