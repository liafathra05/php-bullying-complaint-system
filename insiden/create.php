<?php include_once('../_header.php'); 
$status = "";
?>

    <div class="box">
        <h1>Insiden</h1>
        <h4>
            <small>Tambah Data Insiden</small>
    
            <?php
            require_once "../_config/config.php";
                $cariid = mysqli_query($con, 'select max(id_ins) as maxID from insiden') or die (mysql_error());
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
                        <label for="id">ID User</label>
                        <select name="id" id="id" class="form-control" required autofocus>
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
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="id_insiden">ID Insiden</label>
                        <input type="text" name="id_insiden" id="id_insiden" disabled value="<?php echo $idauto; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" name="deskripsi" id="deskripsi" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Insiden</label>
                        <input type="date" name="tanggal" id="tanggal" value="<?=date('Y-m-d')?>" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="create" value="Simpan" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

    

<?php include_once('../_footer.php'); ?>