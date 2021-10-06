<?php
    include './koneksi.php';

    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $asal = $_POST['asal'];

    $sql = "
        UPDATE siswa SET nama = '" . $nama . "', kelas = '" . $kelas . "', asal = '" . $asal . "'
        where id = '" . $id . "';
    ";

    $result = mysqli_query($conn, $sql);
    

    if($result){
        echo 
        "<script>
            alert('Data Berhasil Diupdate!');
            document.location.href = 'index.php';
        </script>
        ";

    }else{
        echo 
        "<script>
            alert('Data Gagal Diupdate!');
        </script>
        ";
        printf('Failed update student: '.mysqli_error($conn));
        exit();
    }
?>