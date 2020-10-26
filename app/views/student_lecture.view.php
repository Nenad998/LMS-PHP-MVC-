<?php require 'partials/header.php';  ?>

<div class="under_nav">

    <p class="under_nav_parag"><?php echo  $lecture->name;  ?></p>

</div>



<div class="std_lecture_txt">

    <div class="std_item_txt"></div>
    <div class="std_item_txt"><p><?php echo $lecture->content;?></p></div>
    <div class="std_item_txt"></div>



</div>

<div class="std_lecture">
    <?php foreach($lecture->exe as $lect){ ?>
    <div class="std_item"><b><?php echo $lect->name; ?></b></div>
    <div class="std_item" id="item"><a href="student_exercises?exe_id=<?php echo $lect->id; ?>">Pogledaj zadatak </a></div>
    <div class="std_item"><?php echo "<b>datum izvrsenja:</b> " . date('d.m.Y',strtotime($lect->dates)); ?></div>
    <?php } ?>
</div>

</body>
</html>
