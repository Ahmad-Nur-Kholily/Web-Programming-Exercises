<?php
include("database.php");
$mysqli = new mysqli($databasebhost, $username, $password, $databasebname);
if ($mysqli->connect_error){
    die("Gagal menghubungkan ke database : " . $mysqli->connect_error);
} else {
    $nama = $_COOKIE['nama'];
    $skor = $_SESSION['score'];
    $query = "INSERT INTO score (nama_user, score_user) VALUES ('$nama', '$skor')";
    $result = $mysqli->query($query);
    if (!$result){
        die("Gagal memasukan data ke database". $mysqli->error);
    } else {
        $query2 = "SELECT * FROM score ORDER BY score_user DESC";
        $result2 = $mysqli->query($query2);
        if ($result2->num_rows > 0){
            echo "
            <table class='table'>
                <thead >
                    <tr>
                        <th scope='col'>Peringkat</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>Skor</th>
                    </tr>
                </thead>
                <tbody> ";
            $i = 1;
            while($i <= 10){
                $data = $result2->fetch_assoc();
                echo "
                <tr>
                    <th scope='row'>".$i."</th>
                    <td>".$data['nama_user']."</td>
                    <td>".$data['score_user']."</td>
                </tr>";
                $i += 1;
            }
            echo "
                </tbody>
            </table>";
        } else {
            echo "<p>Data tidak ada</p>";
        }        
    }
}
$mysqli->close();
?>