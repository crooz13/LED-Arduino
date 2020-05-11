<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>UTS Cloud Computing</title>
  </head>
  <body class="alert alert-primary">
        <div class="alert alert-primary" role="alert" align="center">
            Riyu Muhammad Ilhamsyah
        </div>
        <div class="container">
        <div class="alert alert-secondary">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <tr align="center" >
                    <th scope="col">LED 1</th><br>
                    <button type="button" onclick="location.href='proses_update.php?status=on1'" class="btn btn-outline-danger">On</button>
                    <button type="button" onclick="location.href='proses_update.php?status=off1'" class="btn btn-outline-dark">Off</button><br>
                    <?php     
                        include 'koneksi.php';

                        $commandLED1 = "SELECT `status` FROM `lampu` WHERE `id_led` = '1'";
                    ?>
                    <th scope="col"><?php $query_sql = mysqli_query($conn, $commandLED1) or die(mysqli_error($conn)); while ($datas = mysqli_fetch_assoc($query_sql)) {$datas['status'];  if($datas['status'] == 'on1'){ echo "Menyala";} else { echo "Mati";} } ?></th>
                    
                </tr>
            </div>
            <div class="col">
            </div>
            <div class="col">
                <tr align="center" >
                    <th scope="col">LED 2</th><br>
                    <button type="button" onclick="location.href='proses_update.php?status=on2'" class="btn btn-outline-danger">On</button>
                    <button type="button" onclick="location.href='proses_update.php?status=off2'" class="btn btn-outline-dark">Off</button><br>
                    <?php     
                        include 'koneksi.php';
                        $commandLED2 = "SELECT `status` FROM `lampu` WHERE `id_led` = '2'";
                    ?>
                    <th scope="col"><?php $query_sql = mysqli_query($conn, $commandLED2) or die(mysqli_error($conn)); while ($datas = mysqli_fetch_assoc($query_sql)) {$datas['status'];  if($datas['status'] == 'on2'){ echo "Menyala";} else { echo "Mati";} } ?></th>
                </tr>
            </div>
            <div class="col">
                <tr align="center" >
                    <th scope="col">LED 3</th><br>
                    <button type="button" onclick="location.href='proses_update.php?status=on3'" class="btn btn-outline-danger">On</button>
                    <button type="button" onclick="location.href='proses_update.php?status=off3'" class="btn btn-outline-dark">Off</button><br>
                    <?php     
                        include 'koneksi.php';
                        $commandLED3 = "SELECT `status` FROM `lampu` WHERE `id_led` = '3'";
                    ?>
                    <th scope="col"><?php $query_sql = mysqli_query($conn, $commandLED3) or die(mysqli_error($conn)); while ($datas = mysqli_fetch_assoc($query_sql)) {$datas['status'];  if($datas['status'] == 'on3'){ echo "Menyala";} else { echo "Mati";} } ?></th>
                </tr>
            </div>
            <div class="col">
                <tr align="center" >
                    <th scope="col">LED 4</th><br>
                    <button type="button" onclick="location.href='proses_update.php?status=on4'" class="btn btn-outline-danger">On</button>
                    <button type="button" onclick="location.href='proses_update.php?status=off4'" class="btn btn-outline-dark">Off</button><br>
                    <?php     
                        include 'koneksi.php';
                        $commandLED4 = "SELECT `status` FROM `lampu` WHERE `id_led` = '4'";
                    ?>
                    <th scope="col"><?php $query_sql = mysqli_query($conn, $commandLED4) or die(mysqli_error($conn)); while ($datas = mysqli_fetch_assoc($query_sql)) {$datas['status'];  if($datas['status'] == 'on4'){ echo "Menyala";} else { echo "Mati";} } ?></th>
                </tr>
            </div>
            </div>
            </div>
            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>