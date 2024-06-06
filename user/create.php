<?php include_once('../_header.php'); 
$peran = "";
?>

    <div class="box">
        <h1>User</h1>
        <h4>
            <small>Tambah Data User</small>
    
            <?php
            require_once "../_config/config.php";
                $cariid = mysqli_query($con, 'select max(id_user) as maxID from user') or die (mysql_error());
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
                        <input type="text" name="id" id="id" value="<?php echo $idauto; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama User</label>
                        <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="peran">Peran User</label>
                        <div>
                            <select  name="peran" id="peran" class="form-control" required>
                                <option value="">- Pilih Peran -</option>
                                <option value="Korban"<?php if($peran == "Korban") echo "selected"?>>Korban</option>
                                <option value="Pelapor"<?php if($peran == "Pelapor") echo "selected"?>>Pelapor</option>
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