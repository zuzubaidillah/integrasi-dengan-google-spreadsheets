<?php
    include 'config/database.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrasi dengan google spreadsheets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Singkron</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rekap.php">Rekap</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-md-6">
                <form method="post">
                    <div class="mb-3">
                        <label for="txtmapel" class="form-label">Mapel</label>
                        <select class="form-control" id="txtmapel" name="txtmapel" aria-describedby="emailHelp">

                            <?php
                            $sql = "SELECT * FROM m_mapel ORDER BY nama ASC";
							$qr = mysqli_query($conn, $sql);
							while ($dt_mapel = mysqli_fetch_assoc($qr)) {
                                $id = $dt_mapel['id'];
                                $nama = $dt_mapel['nama'];
                                $jenis = $dt_mapel['jenis'];
                                $tgl_buat = $dt_mapel['tgl_buat'];
                                $tgl_update = $dt_mapel['tgl_update'];
                                $id_buat = $dt_mapel['id_buat'];
                                $id_update = $dt_mapel['id_update'];
                                echo '<option value="'.$id.'">'.$nama.'</option>';
                            }
                            ?>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="txtlink" class="form-label">Link Sheets</label>
                        <input type="text" class="form-control" id="txtlink" name="txtlink" value="">
                    </div>
                    <button type="submit" name="btn_lihat" class="btn btn-success">Lihat Data</button>
                    <button type="submit" name="btn_singkron" class="btn btn-primary">Singkron Sekarang</button>
                </form>
            </div>
        </div>

        <?php
        // kondisi
        if (count($_POST) != 0) {
            $post_mapel = $_POST["txtmapel"];
            $link = $_POST["txtlink"];
            if ($post_mapel == '' || $link == '') {
                echo 'data masih kosong';
            }
        }
        ?>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover" style="width: 100%">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th style="width: 2%; text-align: center;">#</th>
                            <th style="width: 10%; text-align: center;">Mapel</th>
                            <th style="width: 15%; text-align: center;">Nama</th>
                            <th style="width: 15%; text-align: center;">NIS</th>
                            <th style="width: 5%; text-align: center;">Kelas</th>
                            <th style="width: 10%; text-align: center;">Jurusan</th>
                            <th style="width: 5%; text-align: center;">Token</th>
                            <th style="width: 15%; text-align: center;">Waktu Mengerjakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>