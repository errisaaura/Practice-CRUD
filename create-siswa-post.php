<?php include './koneksi.php';

$id =$_POST['id']; 
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$asal = $_POST['asal'];

$sql = "insert into siswa  
        values ('".$id."','".$nama. "', '".$kelas."','".$asal."');
";
$result =mysqli_query($conn, $sql);
if($result){
    echo 
    "<script>
        alert('Data Berhasil Ditambahkan!');
        document.location.href = 'index.php';
    </script>
    ";
    
}else{
    echo 
    "<script>
        alert('Data Gagal Ditambahkan!');
        document.location.href = 'index.php';
    </script>
    ";
    printf("failed" .mysqli_error($conn));
    exit();
}

//ini untuk memasukkan data ke database nya itu deh
?>
