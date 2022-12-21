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
?>