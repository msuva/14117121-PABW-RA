<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete</title>
</head>

<body>
<h1>Menghapus Data </h1>
        <?php
            $del=$_POST['NRP'];
            $conn=mysqli_connect("localhost","root","");
            mysqli_select_db($conn,"Mahasiswa");
            $sqlstr="Delete from mahasiswa where NRP='$del'";
            $hasil=mysqli_query($conn,$sqlstr) or die(mysqli_error());
            echo "<h2>Data dengan NRP : $del Sudah berhasil dihapus/tidak ada didalam daftar </h2>";
        ?>
        <a href="data.html">Return to Home</a>
</body>
</html>