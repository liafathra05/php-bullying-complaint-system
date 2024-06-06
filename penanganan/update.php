<?php include_once('../_header.php'); 
$status = "";
?>

    <div class="box">
        <h1>Penanganan</h1>
        <h4>
            <small>Update Data Penanganan</small>
            <div class="pull-right">
                <a href="index.php" class="btn btn-warning btn-s"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php
                require_once "../_config/config.php";
                    $sql = mysqli_query($con, "SELECT * FROM penanganan WHERE id_penanganan = '$_GET[id]'") or die (mysqli_error($con));
                    $data = mysqli_fetch_array($sql);
                ?>
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="id_penanganan">ID Penanganan</label>
                        <input type="text" name="id_penanganan" id="id_penanganan" value="<?=$data['id_penanganan'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Penanganan</label>
                        <input type="text" name="jenis" id="jenis" value="<?=$data['jenis_penanganan'];?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Penanganan</label>
                        <input type="date" name="tanggal" id="tanggal" value="<?=$data['tgl_penanganan'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="id_konsultan">ID Konsultan</label>
                        <select name="id_konsultan" id="id_konsultan" value="<?= $data['id_konsultan'];?>" class="form-control" required>
                            <option value="">- Pilih Konsultan -</option>
                            <?php
                                $sql_konsultan = mysqli_query($con, "SELECT * FROM konsultasi") or die (mysqli_error($con));
                                while($data_konsultan = mysqli_fetch_array($sql_konsultan)) {
                                    echo '<option value="'.$data_konsultan['id_konsultan'].'">'.$data_konsultan['nama_konsultan'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kondisi">Kondisi</label>
                        <textarea type="text" name="kondisi" id="kondisi" class="form-control" required><?=$data['kondisi'];?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="id_insiden">ID Insiden</label>
                        <select name="id_insiden" id="id_insiden" value="<?= $data['id_ins'];?>" class="form-control" required>
                            <option value="">- Pilih ID Insiden -</option>
                            <?php
                                $sql_insiden = mysqli_query($con, "SELECT * FROM insiden") or die (mysqli_error($con));
                                while($data_insiden = mysqli_fetch_array($sql_insiden)) {
                                    echo '<option value="'.$data_insiden['id_ins'].'">'.$data_insiden['id_ins'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <div>
                            <select  name="status" id="status" value="<?= $data['status'];?>" class="form-control" required>
                                <option value="">- Pilih Status -</option>
                                <option value="Penanganan Selesai"<?php if($status == "Penanganan Selesai") echo "selected"?>>Penanganan Selesai</option>
                                <option value="Proses Penanganan"<?php if($status == "Proses Penanganan") echo "selected"?>>Proses Penanganan</option>
                                <option value="Belum Ditangani"<?php if($status == "Belum Ditangani") echo "selected"?>>Belum Ditangani</option>
                            </select>
                        </div>
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