<div class="container mt-3">
    <h3 class="text-center">Katalog Produk <a data-toggle="collapse" href="#filter" role="button" class="btn btn-sm btn-warning float-right text-white">Filter</a></h3>
    <hr>
    <div class="collapse" id="filter">
        <div class="card">
            <div class="card-header text-center">
                <h5>Pencarian Produk</h5>
            </div>
            <form action="" method="get" class="p-3">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <select name="cat" id="" class="form-control">
                                <option value="">--Semua Kategori--</option>
                                <?php foreach ($cat as $row) : ?>
                                    <option value="<?= $row->category_id ?>" <?php echo (!isset($q['cat']) ? '' : (($q['cat'] == $row->category_id) ? 'selected' : '')) ?>><?= $row->category_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="text" class="form-control" name="product" placeholder="Contoh: Mesin" <?php echo (isset($q['product'])) ? 'value="' . $q['product'] . '"' : '' ?>>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <br>
                        <button type="submit" class="btn btn-primary mt-2">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <?php foreach ($item as $key) : ?>
            <div class="col-6 col-md-3">
                <div class="card mb-4">
                    <img src="<?php echo upload_url('item/' . $key->item_image) ?>" class="imgLiquidNoFill imgLiquid" style="width:auto; height:150px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $key->item_name; ?></h5>
                        <a href="#" class="btn btn-success text-center">Harga: <?php echo ($key->item_price == 0) ? 'Call' : number_format($key->item_price); ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>