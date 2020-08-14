<?php require 'partials/header.php';  ?>

  
    <div class="container-fluid mt-2  h-75 d-inline-block ">
            <div class="row "> 
                <div class="col-sm-12 col-xl-12  text-center p-2" style='background-color:#4f4d49';>            
                   <div class="align-middle "> <h4 class="text-white"> <?php echo  $course->name;  ?> </h4>    </div> 
                </div>
                <a href="addLecture?coursee_id=<?php echo $course->id;?>" class="btn btn-primary mt-2" role="button" aria-pressed="true">dodaj lekciju</a>
             </div>

            <table class="table   text-center mt-3 col-xl-12 col-12">
              <thead>
                <tr>
                     <th scope="col">Naslov</th>
                     <th scope="col">Pogledaj lekciju </th>
                     <th scope="col">Izmeni</th>
                     <th scope="col">Obrisi</th>
                </tr>
               </thead>
                <tbody>
                  <?php foreach($course->lecture as $lec){ ?> 
                    <tr>
                        <td><?php echo $lec->name; ?>  </td>
                        <td><a id="pogledaj_lekc" href="lectures?id=<?php echo $lec->id;?>"><button class="btn btn-primary btn-block">Pogledaj lekciju</button></a></td>
                        <td><a href="editLec?id=<?php echo $lec->id; ?>"><button class="btn btn-danger ">Izmeni</button> </a></td>
                        <td><a href="deleteLec?id=<?php echo $lec->id; ?>&cid=<?php echo $course->id;?>"><button class="btn btn-warning ">Obrisi</button> </a></td>


                    </tr>
                    <?php } ?>
                </tbody>




             </table>

    </div>


</body>
</html>

