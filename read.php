<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $alamat = $_POST['alamat'];
    $Telepon = $_POST['no_hp'];

    $kirim = mysqli_query($db, "INSERT INTO elektronik (nama_barang,jumlah_beli,nama_pembeli,alamat,no_hp) VALUES ('$nama_barang','$jumlah','$nama_pembeli','$alamat','$Telepon')");

    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:form_pembelian.php");
    }else {
        echo "gagal mengirim";
    }
}