<?php include_once('../_header.php'); 
$status = "";
?>

    <div class="box">
        <h1>Penanganan</h1>
        <h4>
            <small>Tambah Data Penanganan</small>
    
            <?php
            require_once "../_config/config.php";
                $cariid = mysqli_query($con, 'select max(id_penanganan) as maxID from penanganan') or die (mysql_error());
                $dataid = mysqli_fetch_array($cariid);
                
                $id = $dataid['maxID'];

                $id++;
                $ket = "";
                $idauto = $ket . sprintf("%03s", $id);

                echo $idauto;
            ?>

            <div class="pull-right">
                <a href="index.php" class="btn btn-warning btn-s"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="id_penanganan">ID Penanganan</label>
                        <input type="text" name="id_penanganan" id="id_penanganan" value="<?php echo $idauto; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Penanganan</label>
                        <input type="text" name="jenis" id="jenis" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Penanganan</label>
                        <input type="date" name="tanggal" id="tanggal" value="<?=date('Y-m-d')?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="id_konsultan">Nama Konsultan</label>
                        <select name="id_konsultan" id="id_konsultan" class="form-control" required>
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
                        <textarea type="text" name="kondisi" id="kondisi" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="id_insiden">ID Insiden</label>
                        <select name="id_insiden" id="id_insiden" class="form-control" required autofocus>
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
                            <select  name="status" id="status" class="form-control" required>
                                <option value="">- Pilih Status -</option>
                                <option value="Penanganan Selesai"<?php if($status == "Penanganan Selesai") echo "selected"?>>Penanganan Selesai</option>
                                <option value="Proses Penanganan"<?php if($status == "Proses Penanganan") echo "selected"?>>Proses Penanganan</option>
                                <option value="Belum Ditangani"<?php if($status == "Belum Ditangani") echo "selected"?>>Belum Ditangani</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="create" value="Simpan" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

    

<?php include_once('../_footer.php'); ?>