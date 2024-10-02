<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Data Siswa</h1>
    
    <?php
    // Data siswa
    $siswa = [
        ["nama" => "Andi", "umur" => 15, "kelas" => "10A", "alamat" => "malang"],
        ["nama" => "Siti", "umur" => 16, "kelas" => "10B", "alamat" => "Batu"],
        ["nama" => "Budi", "umur" => 15, "kelas" => "10A", "alamat" => "Dinoyo"],
        ["nama" => "Anton", "umur" => 25, "kelas" => "15A", "alamat" => "Dinoyo"]
    ];

    // Menghitung rata-rata umur siswa
    $total_umur = 0;
    foreach ($siswa as $data) {
        $total_umur += $data['umur'];
    }
    $rata_rata_umur = $total_umur / count($siswa);
    ?>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $data) : ?>
            <tr>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['umur']; ?></td>
                <td><?= $data['kelas']; ?></td>
                <td><?= $data['alamat']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Rata-rata Umur Siswa: <?= number_format($rata_rata_umur, 2); ?> tahun</h2>

</body>
</html>
