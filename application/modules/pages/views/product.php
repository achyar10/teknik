<div class="container-fluid mt-3">
    <h3 class="text-center">Katalog Produk</h3>
    <hr>
    <div class="row">
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