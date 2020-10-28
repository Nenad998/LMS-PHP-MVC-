<?php require 'partials/header.php';  ?>

<div class="under_nav">

    <p class="under_nav_parag">Uradjeni zadaci</p>

</div>


<table class="table">
    <thead>
    <th>Ime ucenika</th>
    <th>Datum</th>
    <th>Sadrzaj</th>
    <th>Dokument</th>
    </thead>
    <tbody>
    <?php foreach($users_tasks as $task){
    if(is_object($task)){
    ?>
    <tr>
        <td data-label="Ime ucenika"><?php  echo $task->user->name;   ?></td>
        <td data-label="Datum"><?php  echo $task->exercise->dates;   ?></td>
        <td data-label="Sadrzaj"><a class="download_parag" href="teacher_content?id=<?php  echo $task->id;  ?>">Pogledaj</a></td>
        <td data-label="Dokument"><a class="download_parag" target="_blank" href="/<?php echo $task->document;?>">Preuzmi zadatak</a></td>
    </tr>
    <?php } } ?>



    </tbody>
</table>
 
</body>
</html>
