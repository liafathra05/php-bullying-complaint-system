<?php include_once('../_header.php'); 
$peran = "";
?>

    <div class="box">
        <h1>User</h1>
        <h4>
            <small>Update Data User</small>
    
            

            <div class="pull-right">
                <a href="index.php" class="btn btn-warning btn-s"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php
                require_once "../_config/config.php";
                    $sql = mysqli_query($con, "SELECT * FROM user WHERE id_user= '$_GET[id]'") or die (mysqli_error($con));
                    $data = mysqli_fetch_array($sql);
                ?>
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="id">ID User</label>
                        <input type="text" name="id" id="id" value="<?=$data['id_user'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama User</label>
                        <input type="text" name="nama" id="nama" value="<?=$data['nama_user'];?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="peran">Peran User</label>
                        <div>
                            <select  name="peran" id="peran" class="form-control" required><?=$data['peran'];?>
                                <option value="">- Pilih Peran -</option>
                                <option value="Korban"<?php if($peran == "Korban") echo "selected"?>>Korban</option>
                                <option value="Pelapor"<?php if($peran == "Pelapor") echo "selected"?>>Pelapor</option>
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