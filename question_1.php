<html lang="en">
<?php
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $umur = $_POST['umur'];
    $selected_val="";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEFI - Pertanyaan</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">

        <div class="card-container">
            <div class="left-container-logo">
                <img src="img/chat-bot.jpg" class="img-bot"/>
                <H3>STEFI</H3>

                <H4>SISTEM PAKAR TEMAN FINANSIAL</H4>
            </div>
            <div class="right-container">
                <br>
                <form action="question_2.php" method="POST">
                <H2 class="question-title">Berapa Nominal Uang Sampingan Anda Saat Ini?</H2>
                <br>

                <label class="container-2">Kecil (100 Ribu - 5 Juta Rupiah)
                <input id="q1" name="q1" type="radio" checked="checked" value="a1">
                <span class="checkmark"></span>
                </label>

                <label class="container-2">Sedang (5 Juta - 50 Juta Rupiah)
                <input id="q1" name="q1" type="radio" value="a2">
                <span class="checkmark"></span>
                </label>

                <label class="container-2">Besar (Lebih Dari 50 Juta Rupiah)
                <input id="q1" name="q1" type="radio" value="a3">
                <span class="checkmark"></span>
                </label>

            <br><br>
                    <input class="submit-question" type="submit" name="submit" value="Pertanyaan Berikutnya" />
                </form>
            </div>
        </div>

    </div>
</body>
</html>