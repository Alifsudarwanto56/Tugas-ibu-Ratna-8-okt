<html>
<head>
    <title>Program Persewaan Mobil</title>
</head>
<body>
    <h2>Program Persewaan Mobil</h2>

    <form method="post">
        <label>Nama Penyewa:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIK / No. Identitas:</label><br>
        <input type="text" name="nik" required><br><br>

        <label>Nomor Telepon:</label><br>
        <input type="text" name="telepon" required><br><br>

        <label>Email Penyewa:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Pilih Jenis Mobil:</label><br>
        <select name="mobil" required>
            <option value="">-- Pilih Mobil --</option>
            <option value="Avanza">Avanza</option>
            <option value="Xenia">Xenia</option>
            <option value="Innova">Innova</option>
            <option value="Alphard">Alphard</option>
            <option value="Fortuner">Fortuner</option>
        </select><br><br>

        <label>Lama Sewa (hari):</label><br>
        <input type="number" name="lama" min="1" required><br><br>

        <input type="submit" name="hitung" value="Hitung Total">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $mobil = $_POST['mobil'];
        $lama = $_POST['lama'];

        $biayaSewa = 0;
        $asuransi = 0;

        // Struktur CASE OF (switch)
        switch ($mobil) {
            case "Avanza":
                $biayaSewa = 300000;
                $asuransi = 15000;
                break;
            case "Xenia":
                $biayaSewa = 300000;
                $asuransi = 15000;
                break;
            case "Innova":
                $biayaSewa = 500000;
                $asuransi = 25000;
                break;
            case "Alphard":
                $biayaSewa = 750000;
                $asuransi = 30000;
                break;
            case "Fortuner":
                $biayaSewa = 700000;
                $asuransi = 25000;
                break;
            default:
                echo "Jenis mobil tidak valid.";
                exit;
        }

        $total = ($biayaSewa * $lama) + $asuransi;

        echo "<h3>Rincian Biaya Persewaan Mobil</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Jenis Mobil</th>
                <th>Lama Sewa (hari)</th>
                <th>Biaya Sewa/Hari</th>
                <th>Asuransi</th>
                <th>Total Bayar</th>
              </tr>";

        echo "<tr>";
        echo "<td>$nik</td>";
        echo "<td>$nama</td>";
        echo "<td>$telepon</td>";
        echo "<td>$email</td>";
        echo "<td>$mobil</td>";
        echo "<td>$lama</td>";
        echo "<td>Rp " . number_format($biayaSewa, 0, ',', '.') . "</td>";
        echo "<td>Rp " . number_format($asuransi, 0, ',', '.') . "</td>";
        echo "<td><b>Rp " . number_format($total, 0, ',', '.') . "</b></td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
</body>
</html>