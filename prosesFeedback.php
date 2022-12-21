<?php 
require("PHP/Feedback.php");

$kritik = $_POST['kritik'];
$saran = $_POST['saran'];
$rating = $_POST['rating'];

$feedback = new Feedback($kritik, $saran, $rating);
$feedback->addFeedback();

?>
