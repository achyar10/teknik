<div class="jumbotron">
    <div class="row justify-content-center">
        <h2 class="display-5">Bakat Teknik Mandiri</h2>
        <p class="text-center">Selamat Datang di Website Teknik Mandiri. Kami merupakan perusahaan yang berdiri sejak 2010 bergerak dalam industri POWERTOOLS, WELD & CUT, SAFETY EQUIPMENT, AUTOMOTIVE TOOLS, LIFTING & HANDLING EQUIPMENT, MACHINERY & ACCESSORIES. Kami berada di Jl. Setia Warga 8 No.40 Rt 10/11 Grogol Petamburan, Jakarta Barat. Temukan berbagai produk terbaik kami (Mesin Las, Vacuum Cleaner, Kunci Pas, Sepatu Safety, Pompa Air, Kompresor Angin) dengan kualitas dan harga jual terbaik yang bisa Anda dapatkan</p>
        <a class="btn btn-danger" href="#" role="button">Katalog Produk</a>
    </div>
</div>
<div class="container-fluid">
    <h4 class="middle"><span>Produk Terbaru</span></h4>
    <div class="row">
        <?php for ($i = 0; $i < 12; $i++) : ?>
            <div class="col-6 col-md-3">
                <div class="card mb-4">
                    <img src="<?php echo media_url('images/missing_image.png') ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Mesin Gerindra</h5>
                        <a href="#" class="btn btn-success text-center">Harga: Call</a>
                    </div>
                </div>
            </div>
        <?php endfor ?>
    </div>
</div>