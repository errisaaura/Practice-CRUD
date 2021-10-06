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
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
    <div class="col-md">
    <form action="create-siswa-post.php" method="post">
         <h3 style="text-align: center;">Form Siswa</h3>
        <div class="mb-3">
            <span>ID: </span>
            <input type="text" name="id" class="form-control" id="exampleInputID1" required>
            <div id="emailHelp" class="form-text">We'll never share your ID Number with anyone else.</div>
        </div>
        <br>
        <div class="mb-3">
            <span>NAMA : </span>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <br>
        <div class="mb-3">
            <span> KELAS : </span>
            <input type="text" name="kelas" class="form-control">
        </div>
        <br>
        <div class="mb-3">
            <span> ASAL : </span>
            <input type="text" name="asal" class="form-control">
        </div>
        <br>
        <div class="mb-3 form-check" style="margin-left: 40px;">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" style="margin-left: 30px;" class="btn btn-primary">Create</button>
    </form>
    </div>
    <div class="col-md"></div>
    </div>
</body> 
<!-- ini untuk tampilan formnya -->
</html>