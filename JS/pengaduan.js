class Pengaduan {
    constructor(id_pengaduan, pilih_pengaduan, foto, waktu, tanggal, deskripsi){
        this.id_pengaduan = id_pengaduan;
        this.pilih_pengaduan = pilih_pengaduan;
        this.foto = foto;
        this.waktu = waktu;
        this.tanggal = tanggal;
        this.deskripsi = deskripsi;
    }

    addPengaduan(){
        console.log('Tambah Pengaduan')
    }

    editPengaduan(){
        console.log('Edit Pengaduan')
    }

    deletePengaduan(){
        console.log('Hapus Pengaduan')
    }

    tampilPengaduan(){
        console.log('Ini Pengaduan')
    }
}

let formPengaduan = document.getElementById('form-pengaduan');

formPengaduan.addEventListener('submit', function (e) {
    e.preventDefault();

    let pilihan = document.getElementById('pilihan').value;
    let foto = document.getElementById('foto').value;
    let waktu = document.getElementById('waktu').value;
    let tanggal = document.getElementById('tanggal').value;
    let deskripsi = document.getElementById('deskripsi').value;

    let pengaduan = new Pengaduan(1, pilihan, foto, waktu, tanggal, deskripsi);

    console.log(pengaduan);    
});