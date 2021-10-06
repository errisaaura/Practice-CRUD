<?php
    include './koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        *{
            font-family: 'Poppins';
        }
        .mb-3{
            padding-left: 20px;
            padding-right: 20px;
        }
        h3{
            margin-top: 20px;
            margin-bottom: 20px;
            text-decoration: underline grey 2px;
        }
    </style>
</head>
<body>
    <h3 style="text-align: center;">Form Siswa</h3>
    <form action="update-siswa-post.php?id=<?php echo $_GET['id'] ?>" method="post">
    <?php
    $sql = 'select * FROM siswa WHERE id = '.$_GET['id'];
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    ?>
    
    <div class="mb-3">
        <span>ID: </span>
        <input type="text" name="id" value="<?php echo $data['id'] ?>" class="form-control">
        <div id="emailHelp" class="form-text">We'll never share your ID Number with anyone else.</div>
    </div>
    <br>
    <div class="mb-3">
        <span>NAMA : </span>
        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control">
    </div>
    <br>
    <div class="mb-3">
        <span>KELAS : </span>
        <input type="text" name="kelas" value="<?php echo $data['kelas'] ?>" class="form-control">
    </div>
    <br>
    <div class="mb-3">
        <span>ASAL : </span>
        <input type="text" name="asal" value="<?php echo $data['asal'] ?>" class="form-control">
    </div>
    <br>
    <div class="mb-3 form-check" style="margin-left: 40px;">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" style="margin-left: 30px;" class="btn btn-primary">Update</button>
</form>
</body>
</html>