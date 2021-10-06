<?php
include './koneksi.php';

$id = $_GET['id'];

$sql = "
    DELETE FROM siswa
    WHERE id = '" . $id . "';
";

    
$result = mysqli_query($conn, $sql);    
if($result){
    echo "
            <script>
                alert('data berhasil Dihapus');
                document.location.href = 'index.php';
            </script>
        ";

}else{
    echo "
            <script>
                alert('Data Gagal Dihapus');
                
            </script>
        ";
    printf('Failed Delete Student: '.mysqli_error($conn));
    exit();
}
?>