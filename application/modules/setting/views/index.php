<div class="container-fluid">
    <div class="card-box">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $setting->address ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">No. Telepon</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $setting->phone ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $setting->email ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Whatsapp</label>
                        <input type="text" class="form-control" name="whatsapp" value="<?php echo $setting->whatsapp ?>" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success btn-block mt-3">Simpan</button>
                    <a class="btn btn-secondary btn-block" href="<?php echo site_url('home') ?>">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>