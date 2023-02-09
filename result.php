<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEFI - Hasil Analisa</title>
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
                <h2 class="question-title">HASIL ANALISA</h2>
                <?php

                $emas='public/img/emas.jpg';
                $nabung='public/img/nabung.jpg';
                $reksa='public/img/reksa.jpg';
                $saham='public/img/saham.jpg';
                $properti='public/img/properti.jpg';
            if(isset($_POST['submit'])){
            $jawaban1 = $_POST['q1'];
            $jawaban2= $_POST['q2'];
            $jawaban3= $_POST['q3'];
            $jawaban4= $_POST['q4'];
            $jawaban5= $_POST['q5'];
            }
            if($jawaban1=="a1" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d1"  && $jawaban5=="e1"){
                echo "<H1>Tabung saja</H1>";
                echo "<br>";
                echo '<img src="'.$nabung.'">';
            } else if ($jawaban1=="a1" && $jawaban2=="b1" && $jawaban3=="c1" && $jawaban4=="d1"  && $jawaban5=="e1"){
                echo "<H1>Reksa Dana (Prioritas) atau Investasi Emas (alternatif)</H1>";
                echo "<br>";
                echo '<img src="'.$reksa.'">';
            } else if ($jawaban1=="a1" && $jawaban2=="b1" && $jawaban3=="c1" && $jawaban4=="d1"  && $jawaban5=="e2"){
                echo "<H1>Reksa Dana</H1>";
                echo "<br>";
                echo '<img src="'.$reksa.'">';
            } else if ($jawaban1=="a1" && $jawaban2=="b1" && $jawaban3=="c1" && $jawaban4=="d2"  && $jawaban5=="e1"){
                echo "<H1>Reksa Dana atau Investasi Emas</H1>";
                echo "<br>";
                echo '<img class="small-2-img" src="'.$reksa.'">';
                ?><span style="margin-left: 30px;"></span><?php
                echo '<img class="small-2-img" src="'.$emas.'">';
            } else if ($jawaban1=="a1" && $jawaban2=="b1" && $jawaban3=="c2" && $jawaban4=="d2"  && $jawaban5=="e1"){
                echo "<H1>Investasi Emas (Prioritas) atau Menabung (alternatif)</H1>";
                echo "<br>";
                echo '<img src="'.$emas.'">';
            } else if ($jawaban1=="a1" && $jawaban2=="b1" && $jawaban3=="c2" && $jawaban4=="d2"  && $jawaban5=="e2"){
                echo "<H1>Menabung atau Reksa Dana</H1>";
                echo "<br>";
                echo '<img class="small-2-img" src="'.$nabung.'">';
                ?><span style="margin-left: 30px;"></span><?php
                echo '<img class="small-2-img"  src="'.$reksa.'">';
            } else if ($jawaban1=="a1" && $jawaban2=="b2" && $jawaban3=="c1" && $jawaban4=="d1"  && $jawaban5=="e1"){
                echo "<H1>Menabung atau Reksa Dana</H1>";
                echo "<br>";
                echo '<img class="small-2-img" src="'.$nabung.'">';
                ?><span style="margin-left: 30px;"></span><?php
                echo '<img class="small-2-img"  src="'.$reksa.'">';
            } else if ($jawaban1=="a1" && $jawaban2=="b2" && $jawaban3=="c1" && $jawaban4=="d1"  && $jawaban5=="e2"){
                echo "<H1>Menabung atau Reksa Dana</H1>";
                echo "<br>";
                echo '<img class="small-2-img" src="'.$nabung.'">';
                ?><span style="margin-left: 30px;"></span><?php
                echo '<img class="small-2-img"  src="'.$reksa.'">';
            } else if ($jawaban1=="a1" && $jawaban2=="b2" && $jawaban3=="c1" && $jawaban4=="d2"  && $jawaban5=="e1"){
                echo "<H1>Menabung / Reksa Dana / Investasi Emas</H1>";
                echo "<br>";
                echo '<img class="small-3-img" src="'.$nabung.'">';
                ?><span style="margin-left: 30px;"></span><?php
                echo '<img class="small-3-img"  src="'.$reksa.'">';
                ?><span style="margin-left: 30px;"></span><?php
                echo '<img class="small-3-img"  src="'.$emas.'">';
            } else if ($jawaban1=="a1" && $jawaban2=="b2" && $jawaban3=="c1" && $jawaban4=="d2"  && $jawaban5=="e2"){
                echo "<H1>Menabung / Reksa Dana / Investasi Emas</H1>";
                echo "<br>";
                echo '<img class="small-3-img" src="'.$nabung.'">';
                ?><span style="margin-left: 30px;"></span><?php
                echo '<img class="small-3-img"  src="'.$reksa.'">';
                ?><span style="margin-left: 30px;"></span><?php
                echo '<img class="small-3-img"  src="'.$emas.'">';
            } else if ($jawaban1=="a1" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d1"  && $jawaban5=="e1"){
                echo "<H1>Menabung</H1>";
                echo "<br>";
                echo '<img src="'.$nabung.'">';
            } else if ($jawaban1=="a1" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d1"  && $jawaban5=="e2"){
                echo "<H1>Menabung</H1>";
                echo "<br>";
                echo '<img src="'.$nabung.'">';
            } else if ($jawaban1=="a1" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d2"  && $jawaban5=="e1"){
                echo "<H1>Menabung (Prioritas) atau Investasi Emas (alternatif)</H1>";  
                echo "<br>";
                echo '<img src="'.$nabung.'">'; 
            } else if ($jawaban1=="a1" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d2"  && $jawaban5=="e2"){
                echo "<H1>Menabung (Prioritas) atau Investasi Emas (alternatif)</H1>";  
                echo "<br>";
                echo '<img src="'.$nabung.'">';  
            }else if($jawaban1=="a2" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d1"  && $jawaban5=="e1"){
                    echo "<H1>Tabung saja</H1>";
                    echo "<br>";
                    echo '<img src="'.$nabung.'">'; 
                } else if ($jawaban1=="a2" && $jawaban2=="b1" && $jawaban3=="c1" && $jawaban4=="d1"  && $jawaban5=="e1"){
                    echo "<H1>Reksa Dana (Prioritas) atau Investasi Emas (alternatif)</H1>";
                    echo "<br>";
                    echo '<img src="'.$reksa.'">';
                } else if ($jawaban1=="a2" && $jawaban2=="b1" && $jawaban3=="c1" && $jawaban4=="d1"  && $jawaban5=="e2"){
                    echo "<H1>Reksa Dana atau saham</H1>";
                    echo "<br>";
                    echo '<img class="small-2-img" src="'.$reksa.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-2-img"  src="'.$saham.'">';
                } else if ($jawaban1=="a2" && $jawaban2=="b1" && $jawaban3=="c1" && $jawaban4=="d2"  && $jawaban5=="e1"){
                    echo "<H1>Reksa Dana (Prioritas), emas (Prioritas), Saham (Alternatif)</H1>";
                    echo "<br>";
                    echo '<img class="small-2-img" src="'.$reksa.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-2-img"  src="'.$emas.'">';
                } else if ($jawaban1=="a2" && $jawaban2=="b1" && $jawaban3=="c2" && $jawaban4=="d2"  && $jawaban5=="e2"){
                    echo "<H1>Reksa Dana, emas, Saham</H1>";
                    echo "<br>";
                    echo '<img class="small-3-img" src="'.$reksa.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-3-img"  src="'.$emas.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-3-img"  src="'.$saham.'">';
                } else if ($jawaban1=="a2" && $jawaban2=="b1" && $jawaban3=="c2" && $jawaban4=="d2"  && $jawaban5=="e1"){
                    echo "<H1>Emas (Prioritas) atau Reksa Dana (alternatif)</H1>";
                    echo "<br>";
                    echo '<img src="'.$emas.'">';
                } else if ($jawaban1=="a2" && $jawaban2=="b2" && $jawaban3=="c1" && $jawaban4=="d1"  && $jawaban5=="e2"){
                    echo "Emas (Prioritas), reksa Dana, saham, properti";
                } else if ($jawaban1=="a2" && $jawaban2=="b2" && $jawaban3=="c1" && $jawaban4=="d1"  && $jawaban5=="e1"){
                    echo "<H1>Reksa Dana</H1>";
                    echo "<br>";
                    echo '<img src="'.$reksa.'">';
                } else if ($jawaban1=="a2" && $jawaban2=="b2" && $jawaban3=="c1" && $jawaban4=="d2"  && $jawaban5=="e2"){
                    echo "<H1>Reksa Dana</H1>";
                    echo "<br>";
                    echo '<img src="'.$reksa.'">';
                } else if ($jawaban1=="a2" && $jawaban2=="b2" && $jawaban3=="c1" && $jawaban4=="d2"  && $jawaban5=="e1"){
                    echo "<H1>Reksa Dana atau Investasi Emas</H1>";
                    echo "<br>";
                    echo '<img class="small-2-img" src="'.$reksa.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-2-img"  src="'.$emas.'">';
                } else if ($jawaban1=="a2" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d1"  && $jawaban5=="e2"){
                    echo "<H1>Reksa Dana, emas, saham</H1>";
                    echo "<br>";
                    echo '<img class="small-3-img" src="'.$reksa.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-3-img"  src="'.$emas.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-3-img"  src="'.$saham.'">';
                } else if ($jawaban1=="a2" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d1"  && $jawaban5=="e1"){
                    echo "<H1>Tabung saja</H1>";
                    echo "<br>";
                    echo '<img src="'.$nabung.'">';   
                } else if ($jawaban1=="a2" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d2"  && $jawaban5=="e2"){
                    echo "<H1>Tabung saja</H1>";
                    echo "<br>";
                    echo '<img src="'.$nabung.'">';   
                } else if ($jawaban1=="a2" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d2"  && $jawaban5=="e1"){
                    echo "<H1>Menabung (Prioritas) atau Investasi Emas (alternatif)</H1>";  
                    echo "<br>";
                    echo '<img src="'.$nabung.'">'; 
                } else if($jawaban1=="a3" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d1"  && $jawaban5=="e1"){
                    echo "<H1>Tabung saja</H1>";
                    echo "<br>";
                    echo '<img src="'.$nabung.'">'; 
                } else if ($jawaban1=="a3" && $jawaban2=="b1" && $jawaban3=="c1" && $jawaban4=="d1"  && $jawaban5=="e1"){
                    echo "<H1>Reksa Dana (Prioritas) atau Emas (alternatif)</H1>";
                    echo "<br>";
                    echo '<img src="'.$reksa.'">'; 
                } else if ($jawaban1=="a3" && $jawaban2=="b1" && $jawaban3=="c1" && $jawaban4=="d1"  && $jawaban5=="e2"){
                    echo "<H1>Reksa Dana, Saham, Properti</H1>";
                    echo "<br>";
                    echo '<img class="small-3-img" src="'.$reksa.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-3-img"  src="'.$saham.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-3-img"  src="'.$properti.'">';
                } else if ($jawaban1=="a3" && $jawaban2=="b1" && $jawaban3=="c1" && $jawaban4=="d2"  && $jawaban5=="e1"){
                    echo "<H1>Reksa Dana atau Investasi Emas</H1>";
                    echo "<br>";
                    echo '<img class="small-2-img" src="'.$reksa.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-2-img" src="'.$emas.'">';
                } else if ($jawaban1=="a3" && $jawaban2=="b1" && $jawaban3=="c2" && $jawaban4=="d2"  && $jawaban5=="e1"){
                    echo "<H1>Reksa Dana, Emas, Saham, Properti</H1>";
                    echo "<br>";
                    echo '<img class="small-4-img" src="'.$reksa.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-4-img"  src="'.$emas.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-4-img"  src="'.$saham.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-4-img"  src="'.$properti.'">';
                } else if ($jawaban1=="a3" && $jawaban2=="b1" && $jawaban3=="c2" && $jawaban4=="d2"  && $jawaban5=="e2"){
                    echo "<H1>Emas (Prioritas), Reksa Dana (alternatif), Properti (alternatif)</H1>";
                    echo "<br>";
                    echo '<img src="'.$emas.'">';
                } else if ($jawaban1=="a3" && $jawaban2=="b2" && $jawaban3=="c1" && $jawaban4=="d1"  && $jawaban5=="e1"){
                    echo "<H1>Emas (Prioritas), Properti (alternatif), Reksa Dana (alternatif) , Saham (alternatif)</H1>";
                    echo "<br>";
                    echo '<img src="'.$emas.'">';
                } else if ($jawaban1=="a3" && $jawaban2=="b2" && $jawaban3=="c1" && $jawaban4=="d1"  && $jawaban5=="e2"){
                    echo "Emas (Prioritas), reksa Dana (alternatif), properti (alternatif)";
                    echo "<br>";
                    echo '<img src="'.$emas.'">';
                } else if ($jawaban1=="a3" && $jawaban2=="b2" && $jawaban3=="c1" && $jawaban4=="d2"  && $jawaban5=="e1"){
                    echo "<H1>Emas (Prioritas), Properti (alternatif), Reksa Dana (alternatif), Saham (alternatif)</H1>";
                    echo "<br>";
                    echo '<img src="'.$emas.'">';
                } else if ($jawaban1=="a3" && $jawaban2=="b2" && $jawaban3=="c1" && $jawaban4=="d2"  && $jawaban5=="e2"){
                    echo "<H1>Reksa Dana</H1>";
                    echo "<br>";
                    echo '<img src="'.$reksa.'">';
                } else if ($jawaban1=="a3" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d1"  && $jawaban5=="e1"){
                    echo "<H1>Reksa Dana</H1>";
                    echo "<br>";
                    echo '<img src="'.$reksa.'">';
                } else if ($jawaban1=="a3" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d1"  && $jawaban5=="e2"){
                    echo "<H1>Reksa Dana atau Investasi Emas</H1>";
                    echo "<br>";
                    echo '<img class="small-2-img" src="'.$reksa.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-2-img" src="'.$emas.'">';   
                } else if ($jawaban1=="a3" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d2"  && $jawaban5=="e1"){
                    echo "<H1>Reksa Dana, emas, saham, properti</H1>";
                    echo "<br>";
                    echo '<img class="small-4-img" src="'.$reksa.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-4-img"  src="'.$emas.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-4-img"  src="'.$saham.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-4-img"  src="'.$properti.'">'; 
                } else if ($jawaban1=="a3" && $jawaban2=="b2" && $jawaban3=="c2" && $jawaban4=="d2"  && $jawaban5=="e2"){
                    echo "Investasi Emas, properti, tabung";   
                    echo "<br>";
                    echo '<img class="small-3-img" src="'.$emas.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-3-img"  src="'.$properti.'">';
                    ?><span style="margin-left: 30px;"></span><?php
                    echo '<img class="small-3-img"  src="'.$nabung.'">';
            } else{
                echo "<H1>Tabung saja</H1>";
                echo "<br>";
                echo '<img src="'.$nabung.'">';
            }
            ?>
            <form action="index.php" method="POST">
                <div class="space"></div>
                    <button class="button-homepage">Kembali Ke Halaman Awal</button>
                </form>
            </div>
        </div>

    </div>
</body>
</html>