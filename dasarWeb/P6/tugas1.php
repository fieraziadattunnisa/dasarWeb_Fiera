<!DOCTYPE html>
<html>
    <head>
        <title>Tugas Besar Bagian 1</title>
        <style>
            p {
                padding-left: 30px;
            }
        </style>
    </head>
    <body>
        <h1> Data Mahasiswa Array Multi Dimensi<br></h1>
        <p>
            <?php 
                $mhs = array (
                    array("Dina", "123456", "Teknik Kimia", "dina@gmail.com"),
                    array("Dino", "9123124", "Teknik Listrik", "dino@gmail.com"),
                );
                for ($i=0; $i < count($mhs); $i++) {
                    echo "<ul>";
                    echo "<li> Nama: ". $mhs[$i][0] . "<br>";
                    echo "<li> NIM: ". $mhs[$i][1] . "<br>";
                    echo "<li> Jurusan: ". $mhs[$i][2] . "<br>";
                    echo "<li> Email: ". $mhs[$i][3] . "<br>";
                    echo "</ul>";
                }
            
        ?>
        </p>
        
       
    </body>
</html>