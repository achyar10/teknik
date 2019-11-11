<?php
if (isset($gallery)) {
    $name = $gallery->gallery_name;
} else {
    $name = set_value('gallery_name');
}

?>

<div class="container-fluid">
    <div class="card-box">
        <form action="<?php echo current_url() ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-9">

                    <div class="form-group">
                        <label for="gallery_name">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="gallery_name" name="gallery_name" placeholder="Nama Kegiatan" autocomplete="off" value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <label>Gambar / Foto</label><br>
                        <?php if (isset($gallery->gallery_image) != NULL) { ?>
                            <img src="<?php echo upload_url('gallery/' . $gallery->gallery_image) ?>" id="target" class="img-thumbnail">
                        <?php } else { ?>
                            <img src="<?php echo media_url('images/missing_image.png') ?>" id="target" alt="Choose image to upload" class="img-thumbnail">
                        <?php } ?>
                        <br>
                        <input type="file" id="gallery_image" name="gallery_image">
                    </div>

                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary btn-block mt-3">Simpan</button>
                    <a class="btn btn-secondary btn-block" href="<?php echo site_url('gallery') ?>">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    $(document).ready(function() {

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#target').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#gallery_image").change(function() {
            readURL(this);
        });
    });
</script>