<!DOCTYPE html>
<html>
<head>
    <title>Hasil Biodata</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $umur = $_POST["umur"];
        $alamat = $_POST["alamat"];

        echo "<h2>Hasil Biodata:</h2>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Umur: $umur tahun</p>";
        echo "<p>Alamat: $alamat</p>";
    }
    ?>
</body>
</html>
