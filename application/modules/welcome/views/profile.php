<div class="container-fluid">
    <div class="card-box">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="">Profil</label>
                        <textarea name="desc" class="form-control" rows="10"><?php echo $profile->desc; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Visi</label>
                        <textarea name="visi" class="form-control" rows="10"><?php echo $profile->visi; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Misi</label>
                        <textarea name="misi" class="form-control" rows="10"><?php echo $profile->misi; ?></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success btn-block mt-3">Simpan</button>
                    <a class="btn btn-secondary btn-block" href="<?php echo site_url('welcome/profile') ?>">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>