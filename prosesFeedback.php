<?php 
<<<<<<< HEAD
require("PHP/Feedback.php");
// require ("Database.php");
=======
class ProsesFeedback {
    public $kritik,
            $saran,
            $rating;
>>>>>>> 05198d22f136171c922f06621cbc65761390a5db

$kritik = $_POST['kritik'];
$saran = $_POST['saran'];
$rating = $_POST['rating'];

<<<<<<< HEAD
$feedback = new Feedback($kritik, $saran, $rating);
$feedback->addFeedback();
=======
    public function addFeedback(){
        return "Add Feedback";
    }

    public function editFeedback(){
        return "Edit Feedback";
    }

    public function deleteFeedback(){
        return "Delete Feedback";
    }

    public function getFeedback(){
        return "$this->kritik, $this->saran, $this->rating";
    }
    
}

$feedback = new ProsesFeedback("", "", "");

echo $feedback->addFeedback();
echo "<br>";
echo $feedback->editFeedback();
echo "<br>";
echo $feedback->deleteFeedback();
echo "<br>";
echo $feedback->getFeedback();
>>>>>>> 05198d22f136171c922f06621cbc65761390a5db

?>
