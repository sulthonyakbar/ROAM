class User{
    constructor(id_user, nama_user, username, password, repassword){
        this.id_user = id_user;
        this.nama_user = nama_user;
        this.username = username;
        this.password = password;
        this.repassword = repassword;
    }

    login(){
        console.log('Login')
    }

    register(){
        console.log('Register')
    }  
}

let formLogin = document.getElementById('form-login');

formLogin.addEventListener('submit', function (e) {
    e.preventDefault();

    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    let login = new User(1, 'Aqil', username, password);

    window.location.href = '../HTML/home.html';
    console.log(login); 
});

let formRegister = document.getElementById('form-register');

formRegister.addEventListener('submit-register', function (r) {
    r.preventDefault();

    let nama = document.getElementById('nama').value;
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let repassword = document.getElementById('repassword').value;

    let register = new User(1, nama, username, password, repassword);

    window.location.href = '../HTML/home.html';
    console.log(register); 
});