<?php
include '../../config/koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $idPoli = $_SESSION['id_poli'];
    $idDokter = $_SESSION['id'];
    $hari = $_POST["hari"];
    $jamMulai = $_POST["jamMulai"];
    $jamSelesai = $_POST["jamSelesai"];

    // Cek apakah dokter sudah memiliki jadwal di hari yang sama
    $queryCheckJadwal = "SELECT * FROM jadwal_periksa WHERE id_dokter = '$idDokter' AND hari = '$hari'";
    $resultCheckJadwal = mysqli_query($mysqli, $queryCheckJadwal);
    
    if (mysqli_num_rows($resultCheckJadwal) > 0) {
        // Jika dokter sudah ada jadwal di hari yang sama, tampilkan pesan error
        echo '<script>alert("Dokter sudah memiliki jadwal di hari ini!"); window.location.href="../../jadwalPeriksa.php";</script>';
        exit();
    }

    // Cek jika ada jadwal yang tumpang tindih dengan jadwal baru
    $queryOverlap = "SELECT * FROM jadwal_periksa INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id INNER JOIN poli ON dokter.id_poli = poli.id WHERE id_poli = '$idPoli' AND hari = '$hari' AND ((jam_mulai < '$jamSelesai' AND jam_selesai > '$jamMulai') OR (jam_mulai < '$jamMulai' AND jam_selesai > '$jamMulai'))";
    
    $resultOverlap = mysqli_query($mysqli, $queryOverlap);
    
    if (mysqli_num_rows($resultOverlap) > 0) {
        // Jika ada jadwal yang tumpang tindih, tampilkan pesan error
        echo '<script>alert("Dokter lain telah mengambil jadwal ini"); window.location.href="../../jadwalPeriksa.php";</script>';
        exit();
    }

    // Jika tidak ada masalah, lanjutkan dengan menyimpan jadwal baru
    $query = "INSERT INTO jadwal_periksa (id_dokter, hari, jam_mulai, jam_selesai) VALUES ('$idDokter', '$hari', '$jamMulai', '$jamSelesai')";
    
    // Eksekusi query
    if (mysqli_query($mysqli, $query)) {
        // Jika berhasil, tampilkan pesan sukses dan redirect
        echo '<script>';
        echo 'alert("Jadwal berhasil ditambahkan!");';
        echo 'window.location.href = "../../jadwalPeriksa.php";';
        echo '</script>';
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}

// Tutup koneksi
mysqli_close($mysqli);
?>