<?php
if (isset($item)) {
    $name = $item->item_name;
    $price = $item->item_price;
    $desc = $item->item_desc;
    $category_id = $item->category_id;
 } else {
    $name = set_value('item_name');
    $price = set_value('item_price');
    $desc = set_value('item_desc');
    $category_id = set_value('category_id');
}

?>

<div class="container-fluid">
    <div class="card-box">
        <form action="<?php echo current_url() ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-9">

                    <div class="form-group">
                        <label for="">Kategori <span class="text-danger">*</span></label>
                        <select name="category_id" id="category" class="form-control" required="">
                        </select>
                        <button type="button" class="btn btn-warning btn-sm mt-2" data-toggle="modal" data-target="#showModal">Tambah Kategori</button>
                    </div>

                    <div class="form-group">
                        <label for="item_name">Nama Produk</label>
                        <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Nama Produk" autocomplete="off" value="<?php echo $name ?>">
                    </div>

                    <div class="form-group">
                        <label for="item_price">Harga Produk</label>
                        <input type="text" class="form-control numeric" id="item_price" name="item_price" placeholder="Isi 0 jika tidak diberi harga" autocomplete="off" value="<?php echo $price ?>">
                    </div>
                    <div class="form-group">
                        <label for="item_price">Deskripsi Produk</label>
                        <textarea name="item_desc" class="form-control"><?php echo $desc; ?></textarea>
                    </div>

                </div>
                <div class="col-md-3">
                    <label>Gambar Produk</label>
                    <?php if (isset($item->item_image) != NULL) { ?>
                        <img src="<?php echo upload_url('item/' . $item->item_image) ?>" id="target" class="img-thumbnail">
                    <?php } else { ?>
                        <img src="<?php echo media_url('images/missing_image.png') ?>" id="target" alt="Choose image to upload" class="img-thumbnail">
                    <?php } ?>
                    <input type="file" id="item_image" name="item_image">
                    <button type="submit" class="btn btn-primary btn-block mt-3">Simpan</button>
                    <a class="btn btn-secondary btn-block" href="<?php echo site_url('item') ?>">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="showModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="formModalLabel">Tambah Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" class="form-control" id="category_name" required="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success waves-effect send" data-dismiss="modal">Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        category();

        $('form').submit(function(event) {
            if ($(this).hasClass('submitted')) {
                event.preventDefault();
            } else {
                $(this).find(':submit')
                    .html('<i class="fa fa-spinner fa-spin"></i> Loading...')
                    .attr('disabled', 'disabled');
                $(this).addClass('submitted');
            }
        });

        $('.send').on('click', function() {
            var name = $('#category_name').val();
            $.ajax({
                url: "<?php echo site_url('item/addCat') ?>",
                data: {
                    category_name: name
                },
                method: 'post',
                dataType: 'json',
                success: function(response) {
                    if (response.status) {
                        category();
                    }
                }
            });
        });

        function category() {
            $.ajax({
                url: "<?php echo site_url('item/getCat/') ?>",
                method: 'get',
                dataType: 'json',
                success: function(res) {
                    var opt = '';
                    var option = '';
                    var category = '<?php echo $category_id ?>';
                    $.each(res, function(i, row) {
                        var sel = (row.category_id == category) ? 'selected' : '';
                        opt += '<option value="' + row.category_id + '"' + sel + '>' + row.category_name + '</option>'
                    });
                    option += opt;
                    $('#category').html(option);
                }
            })
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#target').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#item_image").change(function() {
            readURL(this);
        });
    });
</script>