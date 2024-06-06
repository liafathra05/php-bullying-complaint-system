<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1>Pelaku</h1>
        <h4>
            <small>Update Data Pelaku</small>
            <div class="pull-right">
                <a href="index.php" class="btn btn-warning btn-s"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php
                require_once "../_config/config.php";
                    $sql = mysqli_query($con, "SELECT * FROM pelaku WHERE id_pelaku = '$_GET[id]'") or die (mysqli_error($con));
                    $data = mysqli_fetch_array($sql);
                ?>
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="id_pelaku">ID Pelaku</label>
                        <input type="text" name="id_pelaku" id="id_pelaku" value="<?=$data['id_pelaku'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pelaku</label>
                        <input type="text" name="nama" id="nama" value="<?=$data['nama_pelaku'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="id_insiden">ID Insiden</label>
                        <select name="id_insiden" id="id_insiden" class="form-control" required autofocus><?= $data['id_ins'];?>
                            <option value="">- Pilih ID Insiden -</option>
                            <?php
                                $sql_insiden = mysqli_query($con, "SELECT * FROM insiden") or die (mysqli_error($con));
                                while($data_insiden = mysqli_fetch_array($sql_insiden)) {
                                    echo '<option value="'.$data_insiden['id_ins'].'">'.$data_insiden['id_ins'].'</option>';
                                }
                            ?>
                        </select>
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