<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/style-loreg.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../assets/img/fav.png" sizes="16x16" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

    <title>Reset Password</title>
</head>

<body>

    <div class="wrapper">
        <div class="row custom-flex">
            <div class="col-md-5 img1">
                <div class="img" aria-hidden="true"></div>
            </div>
            <?php
            include "../koneksi.php";
            $Vkey = $_GET['Vkey'];
            $select = mysqli_query($koneksi, "SELECT * FROM akun WHERE Vkey = '$Vkey'");
            while ($fetch = mysqli_fetch_array($select)) {
            ?>
                <div class="col-md-5">
                    <h1 class="margin-h2">Reset Password</h1>
                    <form action="change_password_process.php" method="POST" class="row">
                        <input type="hidden" name="Vkey" value="<?php echo $fetch['Vkey']; ?>">
                        <div class="col-md-12">
                            <label for="New Password" class="form-label">New Password</label>
                            <input type="password" name="password" class="form-control bg-grey" id="New Password" placeholder="Masukan Password Password">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn-1" name="change">Send</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>

<?php } ?>

<!-- SCRIPT -->
<script src="../assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>