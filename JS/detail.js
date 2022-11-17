class Detail {
    constructor(id_detail, alamat, koordinat1, koordinat2){
        this.id_detail = id_detail;
        this.alamat = alamat;
        this.koordinat1 = koordinat1;
        this.koordinat2 = koordinat2;
    }

    addDetail(){
        console.log('Tambah Detail Marking')
    }

    editDetail(){
        console.log('Edit Detail Marking')
    }

    deleteDetail(){
        console.log('Hapus Detail Marking')
    }
    
    tampilDetail(){
        console.log('Ini Detail')
    }
}

let formDetail = document.getElementById('form-detail');

formDetail.addEventListener('submit', function (e) {
    e.preventDefault();

    let alamat = document.getElementById('alamat').value;
    let koordinat1 = document.getElementById('koordinat1').value;
    let koordinat2 = document.getElementById('koordinat2').value;

    let detail = new Detail(1, alamat, koordinat1, koordinat2);

    console.log(detail);    
});