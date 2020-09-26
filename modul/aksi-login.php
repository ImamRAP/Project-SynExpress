<?php
$email = $_POST ['email'];
$password = $_POST ['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$query = mysqli_query($konek, $sql);
$dataUsers = mysqli_fetch_assoc($query); //mengambil data users berdasarkan email

if (!empty($email) or !empty($password)) {
if ($dataUsers !== null) {
    if ($password == $dataUsers ['password']) {
        if ($dataUsers['status'] == 'Aktif') {
            echo "<script>alert('Berhasil Login')</script>";
        }
    }
} else {
    echo "<script>alert('Password tidak valid')</script>";

}
} else {
    echo "<script>alert ('Email tidak valid')</script>";
}









//$cekEmail = ($email == 'admin@gmail.com');
//$cekPassword = ($password == '123');
//$cekstatus = 'Aktif';

//if ($email !== 'admin@gmail.com' && $password !== '123') {echo "Email dan Password salah";}
//else if ($email !== 'admin@gmail.com') {echo "Email Salah";}
////else if ($password !== '123') {echo 'Password Salah';}
//else if ($CekStatus !== 'Aktif') {echo 'Status Tidak Aktif';}
 else {echo "Login Gagal"};