```php
<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Koneksi ke database

    if ($conn->connect_error) {
        echo "Gagal terhubung ke database";
        exit;
    }

    // Ambil data dari POST
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $jurusan = $_POST['jurusan'];

    // Cek apakah NIM sudah ada di database
    $sql_cek = "SELECT * FROM mhs WHERE nim = '$nim'";
    $result = $conn->query($sql_cek);

    if ($result->num_rows > 0) {
        echo "NIM sudah ada di database";
        exit;
    }

    // Insert data ke database
    $sql = "INSERT INTO mhs (nama, nim, email, nomor, jurusan) VALUES ('$nama', '$nim', '$email', '$nomor', '$jurusan')";

    if ($conn->query($sql) === TRUE) {
        // Ambil ID terakhir untuk digunakan di tabel
        header('location: index.php');
    } else {
        echo "Gagal menambahkan data";
    }

    $conn->close();
}
?>
```