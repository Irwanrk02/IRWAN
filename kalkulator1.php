<?php 
    if(isset($_POST['submit'])) {
        $angka1 = $_POST['num1'];
        $angka2 = $_POST['num2'];
        $operator = $_POST['operator'];

        $hasil = 0;

        switch ($operator) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'bagi':
                if($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = "Tidak bisa dibagi dengan 0";
                }
                break;
            default:
                $hasil = "operator tidak tersedia";
        }
    }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator sederhanaaaaaa</title>
    <link rel="stylesheet" href="kalkulator1.css">
</head>
<body>
    <div class="container-block">
        <div class="container-form">
            <p>Kalkulator</p>
            <form action="kalkulator1.php" method="post">
                <input type="number" name="num1" id="num1" placeholder="Masukkan Angka Pertama" require>
                <input type="number" name="num2" id="num2" placeholder="Masukkan Angka Kedua" require>
                    <select name="operator" id="operator">
                        <option value="tambah">PERTAMBAHAN (+)</option>
                        <option value="kali">PERKALIAN (x)</option>
                        <option value="kurang">PENGURANGAN (-)</option>
                        <option value="bagi">PEMBAGIAN (/)</option>
                    </select>
                <button type="submit" name="submit">Hitung</button>

                <p><?php 
                    if(!isset($_POST['submit'])) {
                        echo "Hasilnya : ";
                    } else {
                        echo "Hasilnya : $hasil";
                    }
                
                ?></p>
            </form>
        </div>
    </div>
</body>
</html>