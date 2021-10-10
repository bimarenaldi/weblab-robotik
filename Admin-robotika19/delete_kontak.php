<?php
$id = $_GET['id'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method

 include('koneksi.php');
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM tb_kontak WHERE id = $id"; 

if (mysqli_query($db, $sql)) {
    mysqli_close($db);
	echo "<script>alert('Data Berhasil Dihapus');</script>";
    header('Location: kontak.php'); //If book.php is your main page where you list your all records
    exit;
} else {
	echo "<script>alert('Data Gagal Dihapus');</script>";
   
}
?>