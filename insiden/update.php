<?php include_once('../_header.php'); 
$status = "";
?>

    <div class="box">
        <h1>Insiden</h1>
        <h4>
            <small>Update Data Insiden</small>
            <div class="pull-right">
                <a href="index.php" class="btn btn-warning btn-s"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php
                require_once "../_config/config.php";
                    $sql = mysqli_query($con, "SELECT * FROM insiden WHERE id_ins = '$_GET[id]'") or die (mysqli_error($con));
                    $data = mysqli_fetch_array($sql);
                ?>
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="id">ID User</label>
                        <select name="id" id="id" class="form-control" required autofocus><?= $data['id_user'];?>
                            <option value="">- Pilih ID User -</option>
                            <?php
                                $sql_user = mysqli_query($con, "SELECT * FROM user") or die (mysqli_error($con));
                                while($data_user = mysqli_fetch_array($sql_user)) {
                                    echo '<option value="'.$data_user['id_user'].'">'.$data_user['id_user'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Korban</label>
                        <input type="text" name="nama" id="nama" value="<?=$data['nama_korban'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="id_insiden">ID Insiden</label>
                        <input type="text" name="id_insiden" id="id_insiden" value="<?=$data['id_ins'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" name="deskripsi" id="deskripsi" class="form-control" required><?=$data['deskripsi'];?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Insiden</label>
                        <input type="date" name="tanggal" id="tanggal" value="<?=$data['tgl_insiden'];?>" class="form-control" required>
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