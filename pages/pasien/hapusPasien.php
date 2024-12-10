<?php
include("../../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi input ID
    if (!empty($_POST["id"]) && is_numeric($_POST["id"])) {
        $id = intval($_POST["id"]); // ID pasien

        // Mulai transaksi
        $mysqli->begin_transaction();

        try {
            // Langkah 1: Hapus data di tabel detail_periksa
            $stmt1 = $mysqli->prepare("
                DELETE FROM detail_periksa 
                WHERE id_periksa IN (
                    SELECT id 
                    FROM periksa 
                    WHERE id_daftar_poli = ?
                )
            ");
            if ($stmt1) {
                $stmt1->bind_param("i", $id);
                $stmt1->execute();
                $stmt1->close();
            }

            // Langkah 2: Hapus data di tabel periksa
            $stmt2 = $mysqli->prepare("
                DELETE FROM periksa 
                WHERE id_daftar_poli = ?
            ");
            if ($stmt2) {
                $stmt2->bind_param("i", $id);
                $stmt2->execute();
                $stmt2->close();
            }

            // Langkah 3: Hapus data di tabel pasien
            $stmt3 = $mysqli->prepare("
                DELETE FROM pasien 
                WHERE id = ?
            ");
            if ($stmt3) {
                $stmt3->bind_param("i", $id);
                $stmt3->execute();
                $stmt3->close();

                // Commit transaksi
                $mysqli->commit();

                // Berhasil, arahkan kembali
                echo '<script>';
                echo 'alert("Data pasien berhasil dihapus!");';
                echo 'window.location.href = "../../pasien.php";';
                echo '</script>';
                exit();
            } else {
                throw new Exception("Error in prepared statement: " . $mysqli->error);
            }
        } catch (Exception $e) {
            // Rollback jika terjadi kesalahan
            $mysqli->rollback();
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "ID tidak valid!";
    }
}

// Tutup koneksi
$mysqli->close();

