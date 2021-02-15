<?php require("navbar.php");
// Lampirkan dbconfig 
require_once "../Auth/dbconfig.php";
// Cek status login user 
if (!$user->isLoggedIn()) {
    header("location:../Auth/login.php"); //Redirect ke halaman login 
}
// Ambil data user saat ini 
$currentUser = $user->getUser();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Body Check</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=1.4">
    <title>BodyCheck | HealthyBody</title>
    <link rel="icon" href="image/tittle.png">
</head>

<body>
    <div class="inputan">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h1>Body Check</h1><br>
            <p>Cek IMT kamu yuk!! Apa itu IMT? IMT ialah Indeks Massa Tubuh yang<br>
                merupakan proksi heuristik untuk lemak tubuh manusia berdasarkan <br>perhitungan berat badan dan tinggi badan</p></br>
            <label><b>Hello! <br><?php echo $currentUser['nama']; ?></b></label>
            <br><br>
            <label?>Berat Badan Kamu</label?>
            <br><input type="number" placeholder="kg" name="bb"><br>
            <label>Tinggi Badan Kamu</label>
            <br><input type="number" placeholder="cm" name="tb"><br>
            <br><button class="btn btn-warning">Submit</button>


        </form>
    </div>

    <div class="outputan">
        <script>
            function tombolShowHide() {
                var hide = document.getElementById("section");
                if (hide.style.display == "block") {
                    hide.style.display = "none";
                } else {
                    hide.style.display = "block";
                }
            }
        </script>
        <?php
        require("fungsibodycheck.php");
        echo "$hasil<br>";
        echo "<a href='bodycheck.php'> <input class='btn btn-warning' type='reset' value='Reset'></a>";
        echo "<a href='#section'><button class='btn btn-warning' onclick='tombolShowHide()'>List Makanan</button></a>";

        echo "<a href='../myweb/workout.php'> <input class='btn btn-warning' type='button' value='Workout'></a>";
        ?>
    </div>

    <div id="section">
        <h2>LIST MAKANAN SEHAT</h2>
        <p><img src="img/makanan.png" height=1000 weight=1000><br><i>Sumber:alodokter.com</i></p>
    </div>
    <style>
        #section {
            display: none;
            position: absolute;
            left: 40px;
            top: 620px;
            padding: 20px 25px;
        }
    </style>

</body>

</html>