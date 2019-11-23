<div class="container">
    <div class="jumbotron p-3 p-md-5 rounded mt-4">
        <div class="col-md-6 px-0">
            <h1 class="display-5 font-italic"><?php echo $intro->title; ?></h1>
            <p class="lead my-3"><?php echo $intro->desc; ?></p>
            <a class="btn btn-danger" href="<?php echo site_url('pages/product') ?>">Katalog Produk</a>
        </div>
    </div>
    <h4 class="middle"><span>Produk Terbaru</span></h4>
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