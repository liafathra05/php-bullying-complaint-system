<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1>Konsultan</h1>
        <h4>
            <small>Update Data Konsultan</small>
            <div class="pull-right">
                <a href="index.php" class="btn btn-warning btn-s"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php
                require_once "../_config/config.php";
                    $sql = mysqli_query($con, "SELECT * FROM konsultasi WHERE id_konsultan= '$_GET[id]'") or die (mysqli_error($con));
                    $data = mysqli_fetch_array($sql);
                ?>
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="id">ID Konsultan</label>
                        <input type="text" name="id" id="id" value="<?=$data['id_konsultan'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Konsultan</label>
                        <input type="text" name="nama" id="nama" value="<?=$data['nama_konsultan'];?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="nama">Spesialis</label>
                        <input type="text" name="spesialis" id="spesialis" value="<?=$data['spesialis'];?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="update" value="Simpan" class="btn btn-success">
                        <input type="button" name="update" value="Batal" onclick="location.href='index.php'" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>

    

<?php include_once('../_footer.php'); ?>