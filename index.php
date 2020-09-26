<?php require 'koneksi/koneksi.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'kepala.php'; ?>
</head>

<body>


<?php 
$p = isset($_GET['page']) ? $_GET['page'] : '';
if ($p == 'layanankami')
{include 'header2.php';} else {include 'header.php';} ?>
  
<?php include 'content.php'; ?>

 <?php 
 if ($p == 'layanankami' or $p == 'YES' or $p == 'REG' or $p == 'informasi')
 {include 'footer2.php';
 } else {include 'footer.php';} ?>

<?php include 'kaki.php'; ?>

 
</body>

</html>