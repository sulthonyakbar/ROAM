class Feedback{
    constructor(id_feedback, kritik, saran, rating){
        this.id_feedback = id_feedback;
        this.kritik = kritik;
        this.saran = saran;
        this.rating = rating;
    }

    addFeedback(){
        console.log('Tambah Feedback')
    }
}

let formFeedback = document.getElementById('form-feedback');

formFeedback.addEventListener('submit', function (e) {
    e.preventDefault();

    let kritik = document.getElementById('kritik').value;
    let saran = document.getElementById('saran').value;
    let rating = document.getElementById('rating').value;

    let feedback = new Feedback(1, kritik, saran, rating);

    console.log(feedback);    
});