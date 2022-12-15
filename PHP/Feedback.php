<?php 
class Feedback {
    public $kritik,
            $saran,
            $rating;

    public function __construct($kritik, $saran, $rating){
        $this->kritik = $kritik;
        $this->saran = $saran;
        $this->rating = $rating;
    }

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

$feedback = new Feedback("", "", "");

echo $feedback->addFeedback();
echo "<br>";
echo $feedback->editFeedback();
echo "<br>";
echo $feedback->deleteFeedback();
echo "<br>";
echo $feedback->getFeedback();

?>