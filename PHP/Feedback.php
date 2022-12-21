<<<<<<< HEAD
<?php 

require ("./Database.php");

class Feedback {
    public $id,
            $kritik,
            $saran,
            $rating;

    public function __construct($kritik, $saran, $rating){
        $this->kritik = $kritik;
        $this->saran = $saran;
        $this->rating = $rating;
    }

    public function addFeedback(){
        $database = new Database("localhost","db_roam","root","");
        $query = "INSERT INTO `feedback` (`id_feedback`, `kritik`, `saran`, `rating`) VALUES (NULL, ?, ?, ?)";
        $statement = $database->db->prepare($query);
        $parameters = [$this->kritik,$this->saran,$this->rating];
        return $statement->execute($parameters);    
    }

    // public function editFeedback(){
    //     return "Edit Feedback";
    // }

    // public function deleteFeedback(){
    //     return "Delete Feedback";
    // }

    // public function getFeedback(){
    //     return "$this->kritik, $this->saran, $this->rating";
    // }
    
}
=======
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

>>>>>>> 05198d22f136171c922f06621cbc65761390a5db
?>