<div class="container-fluid">
    <div class="card-box">
        <div class="table-responsive">
            <table class="table dataTable table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Keterangan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($contact as $row) :
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo pretty_date($row->contact_created_at, 'd F Y, H:i', false) ?></td>
                            <td><?php echo $row->contact_name ?></td>
                            <td><?php echo $row->contact_email ?></td>
                            <td><span class="badge badge-<?php echo ($row->contact_status) ? 'success' : 'warning' ?>"><?php echo ($row->contact_status) ? 'Sudah Dibaca' : 'Belum Dibaca' ?></span></td>
                            <td>
                                <a href="<?php echo site_url('contact/detail/' . $row->contact_id) ?>" class="btn btn-info btn-xs mb-1"><i class="fas fa-eye"></i> Lihat</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>