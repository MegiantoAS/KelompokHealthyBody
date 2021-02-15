<?php
// Lampirkan dbconfig 
require_once "dbconfig.php";
// Cek status login user 
if (!$user->isLoggedIn()) {
    header("location: login.php"); //Redirect ke halaman login 
}
// Ambil data user saat ini 
$currentUser = $user->getUser();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css?v=1.2">

    <title> Home | HealthyBody</title>
    <link rel="icon" href="../image/tittle.png">
</head>

<body class="bodyhome">
    <nav class="navbar navbar-expand-lg navbar-light " style=" background-color: #fdff7e00;">
        <a class="navbar-brand" href="#"><img src="img/logolanding2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a style="color:#fdff7e00">----------------------------------------</a>
                <a class="nav-item nav-link active" href="home.php">Home
                    <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="../body_check/bodycheck.php">Body Check
                    <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="../workout/workout.php">Workout
                    <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href=" about2.html">About
                    <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="
				articlelog.html">Facts <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link " href="profile.php">| Profile |
                    <span class="sr-only">(current)</span></a>

            </div>
        </div>
    </nav>

    <div class="konten">

        <h1>Hello <?php echo $currentUser['nama']; ?>!! <br>Apakah Tubuh Kamu sudah Ideal?</h1>
        <p>
            Tubuh ideal itu dikategorikan berdasarkan hasil pehitungan IMT (Index Massa Tubuh) secara umum dibagi
            menjadi tiga bagian yaitu UNDERWEIGHT (kurang beratbadan), NORMAL (ideal), OVERWEIGHT (obesitas)
        </p>
        <a href="../body_check/bodycheck.php"><button type="button">Cek Sekarang</button></a>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
<footer class="footer" style="background-color: #fcba0300; position: relative; top: 220px;">
    <div class="container">
        <div class="row pt-4">
            <div class="col text-center">
                <p>Copyright 2020.</p>
            </div>
        </div>
    </div>
</footer>