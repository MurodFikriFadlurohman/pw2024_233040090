<?php
    $mahasiswa = [
        [
            "nrp" => "043040023",
            "nama" => "Sandhika Galih",
            "email" => "sandhikagalih@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "sandhika.jpeg"
        ],

        [
            "nrp" => "033040001",
            "nama" => "Doddy Ferdiansyah",
            "email" => "doddy@unpas.ac.id",
            "jurusan" => "Teknik Industri",
            "gambar" => "1.jpeg"
        ],

        [
            "nrp" => "233040090",
            "nama" => "Murod Fikri Fadlurohman",
            "email" => "murodadipate@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "2.jpeg"
        ],

        [
            "nrp" => "233040021",
            "nama" => "La Ode Muh. Ikhsan",
            "email" => "ikhsan@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "3.jpeg"
        ],


        [
            "nrp" => "233040022",
            "nama" => "Tubagus Muhammad Wildan",
            "email" => "wildan@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "4.jpeg"
        
        ],

        [
            "nrp" => "033040023",
            "nama" => "Hikmal Maulana",
            "email" => "hikmal@unpas.ac.id",
            "jurusan" => "Teknik Industri",
            "jurusan" => "Teknik Informatika",
            "gambar" => "5.jpeg"
        ],

        [
            "nrp" => "033040024",
            "nama" => "Rizki Nurhidayat",
            "email" => "rizki@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "6.jpeg"
        ],

        [
            "nrp" => "033040025",
            "nama" => "Akbar Maku",
            "email" => "akbar@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "7.jpeg"
        ],

        [
            "nrp" => "033040026",
            "nama" => "Rianda Rafki",
            "email" => "rafki@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "8.jpeg"
        ],

        [
            "nrp" => "033040027",
            "nama" => "Muhammad Fajri",
            "email" => "fajri@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "9.jpeg"
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
    <style>
        img{
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li><?php echo $mhs ["nama"]; ?></li>
            <li><?php echo $mhs ["nrp"]; ?></li>
            <li><?php echo $mhs ["jurusan"]; ?></li>
            <li><?php echo $mhs ["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>