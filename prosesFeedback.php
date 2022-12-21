<?php 
require("PHP/Feedback.php");
// require ("Database.php");

$kritik = $_POST['kritik'];
$saran = $_POST['saran'];
$rating = $_POST['rating'];

$feedback = new Feedback($kritik, $saran, $rating);
$feedback->addFeedback();

?>
