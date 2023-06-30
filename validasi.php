<?php
include 'Koneksi.php';
$email = $_POST['EMAIL_ADDRES'];
$pass = $_POST['PASSWORD'];
$SQL = "SELECT Email_Addres, Password 
		FROM tb_user 
		WHERE ((Email_Addres='$email_addres') AND (Password='$Password'))";
//membuat query
$result= mysqli_query($conn, $SQL)
    or die("gagal data query : ".mysqli_error($conn));
//menampung hasil query
$row= mysqli_fetch_array($result);
if ($row['Email_Addres']==$email_addres && $row['Password']==$Password){
		$conn->close();
		echo "sukses";
		header('location:Login.html');
	}else{
		$conn->close();
		echo "gagal login";
		header('location:Login.php');
	}
 ?>