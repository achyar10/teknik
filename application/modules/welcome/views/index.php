<div class="container-fluid">
    <div class="card-box">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="">Header</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $welcome->title ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="desc" class="form-control" rows="10"><?php echo $welcome->desc; ?></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success btn-block mt-3">Simpan</button>
                    <a class="btn btn-secondary btn-block" href="<?php echo site_url('welcome') ?>">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>