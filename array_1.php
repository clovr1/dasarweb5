<!DOCTYPE html>
<html>
<head>
    <title>Array Terindeks Loop</title>
</head>
<body>

    <h2>Array Terindeks (Menggunakan Loop)</h2>

    <?php
        // Deklarasi array
        $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        // Menampilkan output menggunakan loop (foreach)
        foreach ($Listdosen as $dosen) {
            echo $dosen;
            echo "<br>";
        }
    ?>

</body>
</html>