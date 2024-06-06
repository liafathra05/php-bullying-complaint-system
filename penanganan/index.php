<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1>Penanganan</h1>
        <h4>
            <small>Data Penanganan</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-s"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="create.php" class="btn btn-success btn-s"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a>
            </div>
        </h4>
        <div style="margin-bottom: 20px">
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID Penanganan</th>
                        <th>Jenis Penanganan</th>
                        <th>Tanggal Penanganan</th>
                        <th>ID Konsultan</th>
                        <th>Kondisi</th>
                        <th>ID Insiden</th>
                        <th>Status</th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $batas = 5;
                $hal = @$_GET['hal'];
                if(empty($hal)) {
                    $posisi = 0;
                    $hal = 1;
                } else {
                    $posisi = ($hal - 1) * $batas;
                }
                $query = "SELECT * FROM penanganan";
                $sql_penanganan = mysqli_query($con, $query) or die (mysqli_error($con));
                if(mysqli_num_rows($sql_penanganan) > 0) {
                    while($data = mysqli_fetch_array($sql_penanganan)) { ?>
                        <tr>
                            <td><?php echo $data['id_penanganan']; ?></td>
                            <td><?php echo $data['jenis_penanganan']; ?></td>
                            <td><?php echo $data['tgl_penanganan']; ?></td>
                            <td><?php echo $data['id_konsultan']; ?></td>
                            <td><?php echo $data['kondisi']; ?></td>
                            <td><?php echo $data['id_ins']; ?></td>
                            <td><?php echo $data['status']; ?></td>
                            <td class="text-center">
                                <a href="update.php?id=<?=$data['id_penanganan']?>" class="btn btn-warning btn-s"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="delete.php?id=<?=$data['id_penanganan']?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-s"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                    }    
                } else {
                    echo "<tr><td colspan=\"4\" align=\"center\">Data tidak ditemukan</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
            <div style="float:left;">
                <?php
                $query = "SELECT * FROM penanganan LIMIT $posisi, $batas";
                $queryJml = "SELECT * FROM penanganan";
                $id = $posisi + 1;
                 $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                 echo "Jumlah Data : <b>$jml</b>";
                ?>
            </div>
            <div style="float:right;">
                <ul class="pagination pagination-sm" style="margin:0">
                    <?php
                    $jml_hal = ceil($jml / $batas);
                    for ($i=1; $i <= $jml_hal; $i++) {
                        if($i != $hal) {
                            echo "<li><a href=\"?hal=$i\">$i</a></li>";
                        } else {
                            echo "<li class=\"active\"><a>$i</a></li>";
                        }
                    }
                    ?>
                </ul>
            </div>
    </div>

<?php include_once('../_footer.php'); ?>