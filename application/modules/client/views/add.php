<?php
if (isset($client)) {
    $name = $client->client_name;
} else {
    $name = set_value('client_name');
}

?>

<div class="container-fluid">
    <div class="card-box">
        <form action="<?php echo current_url() ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-9">

                    <div class="form-group">
                        <label for="client_name">Nama Partner</label>
                        <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Nama Partner" autocomplete="off" value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <label>Logo Partner</label><br>
                        <?php if (isset($client->client_logo) != NULL) { ?>
                            <img src="<?php echo upload_url('client/' . $client->client_logo) ?>" id="target" class="img-thumbnail">
                        <?php } else { ?>
                            <img src="<?php echo media_url('images/missing_image.png') ?>" id="target" alt="Choose image to upload" class="img-thumbnail">
                        <?php } ?>
                        <br>
                        <input type="file" id="client_logo" name="client_logo">
                    </div>

                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary btn-block mt-3">Simpan</button>
                    <a class="btn btn-secondary btn-block" href="<?php echo site_url('client') ?>">Batal</a>
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

        $("#client_logo").change(function() {
            readURL(this);
        });
    });
</script>