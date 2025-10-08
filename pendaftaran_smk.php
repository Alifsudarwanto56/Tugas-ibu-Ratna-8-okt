<html>
<head>
    <title>Pendaftaran Ulang SMK "Pasti Bisa"</title>
</head>
<body>
    <h2>Pendaftaran Ulang Siswa Baru SMK "Pasti Bisa"</h2>
    <form method="post">
        <label>Nama Siswa:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIS:</label><br>
        <input type="text" name="nis" required><br><br>

        <label>Pilih Kelas:</label><br>
        <select name="kelas" required>
            <option value="">-- Pilih Kelas --</option>
            <option value="1">Kelas 1</option>
            <option value="2">Kelas 2</option>
            <option value="3">Kelas 3</option>
        </select><br><br>

        <input type="submit" name="hitung" value="Hitung Biaya">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $nis = $_POST['nis'];
        $kelas = $_POST['kelas'];

        // Inisialisasi variabel
        $uangGedung = 0;
        $spp = 0;
        $seragam = 0;

        // Gunakan struktur CASE OF (switch)
        switch ($kelas) {
            case "1":
                $uangGedung = 800000;
                $spp = 90000;
                $seragam = 125000;
                break;
            case "2":
                $uangGedung = 500000;
                $spp = 75000;
                $seragam = 100000;
                break;
            case "3":
                $uangGedung = 500000;
                $spp = 75000;
                $seragam = 100000;
                break;
            default:
                echo "Kelas tidak valid.";
                exit;
        }

        $total = $uangGedung + $spp + $seragam;

        echo "<h3>Rincian Biaya Pendaftaran Ulang</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>NIS</th><th>Nama</th><th>Kelas</th><th>Uang Gedung</th><th>SPP Juli</th><th>Seragam</th><th>Total</th></tr>";
        echo "<tr>";
        echo "<td>$nis</td>";
        echo "<td>$nama</td>";
        echo "<td>Kelas $kelas</td>";
        echo "<td>Rp " . number_format($uangGedung, 0, ',', '.') . "</td>";
        echo "<td>Rp " . number_format($spp, 0, ',', '.') . "</td>";
        echo "<td>Rp " . number_format($seragam, 0, ',', '.') . "</td>";
        echo "<td><b>Rp " . number_format($total, 0, ',', '.') . "</b></td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
</body>
</html>