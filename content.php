<?php
// method get 
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

switch ($halaman) {
    case '':
        include 'View/home.php';
        break;
        
    case 'home':
        include 'View/home.php';
        break;
    
    case 'contact':
    include 'View/contact-us.php';
    break;

    case 'layanankami':
        include 'View/LayananKami.php';
        break;

    case 'informasi':
        include 'View/Informasi.php';
        break;

    case 'rating':
        include 'View/Rating.php';
        break;

    case 'REG':
        include 'View/REG.php';
        break;

    case 'YES':
        include 'View/YES.php';
        break;
    
        case 'login':
        include 'View/Login.php';
        break;
        case 'aksi-login':
        include 'modul/aksi-login.php';
        break;

    default:
    echo 'halaman tidak ditemukan';
break;

}

