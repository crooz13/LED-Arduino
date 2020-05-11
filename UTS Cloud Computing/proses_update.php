<?php 
include 'koneksi.php';
    if (isset($_GET['status'])){
        $status = $_GET['status'];
        if ($status == 'on1' || $status == 'off1') {
            $id_led = '1';
        }elseif ($status == 'on2' || $status == 'off2') {
            $id_led = '2';
        }elseif ($status == 'on3' || $status == 'off3') {
            $id_led = '3';
        }elseif ($status == 'on4' || $status == 'off4') {
            $id_led = '4';
        }

        $updt = "UPDATE `lampu` SET `status` = '$status' WHERE `lampu`.`id_led` = '$id_led'";
        $query_sql = mysqli_query($conn, $updt);
    
            //Data berhasil ditambahkan
            if ($query_sql) {
                header('Location: index.php');
            } else {
                header('Location: index.php');
            }            
        $conn-> close();
    }
    
?>