<?php include('../../examples/includes/header.php'); ?>

<?php include('../../conf/database/db_connect.php'); ?>


<?php
include 'Calendar.php';
$calendar = new Calendar();
$calendar->add_event('Birthday', '2024-05-03', 1, 'green');
$calendar->add_event('Doctors', '2024-05-04', 1, 'red');
$calendar->add_event('Holiday', '2024-05-16', 7);
?>




<div class="parent">
    <div class="div1"> <?= $calendar ?> </div>
    <?php include 'popupForm.php' ?>
    <div class="div2"> <?php include('todays_task.php')  ?> </div>
    <div class="div3"> <?php include('team_members.php')  ?> </div>
</div>




<?php include('../../examples/includes/navbar.php'); ?>

<?php include('../../examples/includes/footer.php'); ?>