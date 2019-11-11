<div class="container-fluid">
    <div class="card-box">
        <a href="<?php echo site_url('gallery/add') ?>" class="btn btn-primary btn-xs mb-2"><i class="fa fa-plus"></i> Tambah</a>
        </h4>

        <div class="table-responsive">
            <table class="table dataTable table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Keterangan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($gallery as $row) :
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row->gallery_name ?></td>
                            <td><?php echo ($row->gallery_status) ? 'Aktif' : 'Tidak Aktif' ?></td>
                            <td>
                                <a href="<?php echo site_url('gallery/edit/' . $row->gallery_id) ?>" class="btn btn-info btn-xs mb-1"><i class="fas fa-edit"></i> Ubah</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>