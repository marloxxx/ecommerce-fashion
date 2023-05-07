<?php
require_once('../../config/koneksi.php');
global $con;
header('Content-Type: application/json');
if ($_POST['action'] == 'tambah') {
    $kode = htmlspecialchars($_POST['kode']);
    $nama = htmlspecialchars($_POST['nama']);
    $harga = htmlspecialchars($_POST['harga']);
    $stok = htmlspecialchars($_POST['stok']);
    $jenis_produk = htmlspecialchars($_POST['jenis_produk']);
    if (empty($kode)) {
        $response = array(
            'status' => 'error',
            'message' => 'Kode tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (empty($nama)) {
        $response = array(
            'status' => 'error',
            'message' => 'Nama tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (empty($harga)) {
        $response = array(
            'status' => 'error',
            'message' => 'Harga tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (empty($stok)) {
        $response = array(
            'status' => 'error',
            'message' => 'Stok tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (empty($jenis_produk)) {
        $response = array(
            'status' => 'error',
            'message' => 'Jenis Produk tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    //   insert data using PDO
    $sql = "INSERT INTO produk (kode, nama, harga, stok, jenis_produk) VALUES ('$kode', '$nama', '$harga', '$stok', '$jenis_produk')";
    $query = $con->prepare($sql);
    $query->execute();
    if ($query) {
        $response = array(
            'status' => 'success',
            'message' => 'Berhasil menambahkan data',
        );
        echo json_encode($response);
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Gagal menambahkan data'
        );
        echo json_encode($response);
    }
} elseif ($_POST['action'] == 'edit') {
    $id = htmlspecialchars($_POST['id']);
    $kode = htmlspecialchars($_POST['kode']);
    $nama = htmlspecialchars($_POST['nama']);
    $harga = htmlspecialchars($_POST['harga']);
    $stok = htmlspecialchars($_POST['stok']);
    $jenis_produk = htmlspecialchars($_POST['jenis_produk']);
    if (empty($kode)) {
        $response = array(
            'status' => 'error',
            'message' => 'Kode tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (empty($nama)) {
        $response = array(
            'status' => 'error',
            'message' => 'Nama tidak boleh kosong'
        );
        echo json_encode($response);
    }
    if (empty($harga)) {
        $response = array(
            'status' => 'error',
            'message' => 'Harga tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (empty($stok)) {
        $response = array(
            'status' => 'error',
            'message' => 'Stok tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (empty($jenis_produk)) {
        $response = array(
            'status' => 'error',
            'message' => 'Jenis Produk tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    $sql = "UPDATE produk SET kode = '$kode', nama = '$nama', harga = '$harga', stok = '$stok', jenis_produk = '$jenis_produk' WHERE id = '$id'";
    $query = $con->prepare($sql);
    $query->execute();
    if ($query) {
        $response = array(
            'status' => 'success',
            'message' => 'Berhasil mengubah data',
        );
        echo json_encode($response);
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Gagal mengubah data'
        );
        echo json_encode($response);
    }
} elseif ($_POST['action'] == 'hapus') {
    $id = htmlspecialchars($_POST['id']);
    //   Delete data using PDO
    $sql = "DELETE FROM produk WHERE id = '$id'";
    $query = $con->prepare($sql);
    $query->execute();
    if ($query) {
        $response = array(
            'status' => 'success',
            'message' => 'Berhasil menghapus data',
            'url' =>  'index.php'
        );
        echo json_encode($response);
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Gagal menghapus data'
        );
        echo json_encode($response);
    }
}
