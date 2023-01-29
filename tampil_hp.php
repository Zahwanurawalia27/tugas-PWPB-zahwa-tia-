<?php

include 'elektronik.php';
$data = mysqli_query($elektronik, "SELECT * FROM `tb_handphone`");
?>
<a href="order_hp.php">tambah data</a><br>

<?php
foreach($data as $data){
    echo $data['merk_hp'];
    echo $data['harga_hp'];
    echo $data['stok_hp'];
    ?>
    <a href="delete_data.php?id=<?php $data['id_hp']  ?>">Hapus</a>
    <br>
    <?php
}