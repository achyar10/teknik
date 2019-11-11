<div class="container-fluid">
    <div class="card-box">
        <a href="<?php echo site_url('item/add') ?>" class="btn btn-primary btn-xs mb-2"><i class="fa fa-plus"></i> Tambah</a>
        </h4>

        <div class="table-responsive">
            <table class="table dataTable table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($item as $row) :
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row->item_name ?></td>
                            <td><?php echo $row->category_name ?></td>
                            <td><?php echo ($row->item_price == 0) ? 'Call' : number_format($row->item_price) ?></td>
                            <td><?php echo ($row->item_status) ? 'Aktif' : 'Tidak Aktif' ?></td>
                            <td>
                                <a href="<?php echo site_url('item/edit/' . $row->item_id) ?>" class="btn btn-info btn-xs mb-1"><i class="fas fa-edit"></i> Ubah</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>