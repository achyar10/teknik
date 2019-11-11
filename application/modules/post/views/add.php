<?php

if (isset($post)) {

    $id = $post->post_id;
    $title = $post->post_title;
    $desc = $post->post_desc;
    $status = $post->post_status;
} else {
    $title = set_value('post_title');
    $desc = set_value('post_desc');
    $status = set_value('status');
}

?>
<link rel="stylesheet" href="<?php echo media_url() ?>js/wysiwyg/ui/trumbowyg.min.css">

<div class="container-fluid">
    <div class="card-box">
        <form action="<?php echo current_url() ?>" method="post">
            <div class="row">
                <div class="col-md-9">
                    <?php echo validation_errors(); ?>
                    <?php if (isset($id)) : ?>
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                    <?php endif ?>
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Judul Redaksi" autocomplete="off" value="<?php echo $title ?>">
                    </div>

                    <div class="form-group">
                        <label for="desc">Isi Redaksi</label>
                        <textarea name="desc" id="local-upload" class="form-control" placeholder=""><?php echo $desc ?></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group mt-1">
                        <label>Status <span class="text-danger">*</span></label><br>
                        <label><input type="radio" name="status" value="1" <?php echo ($status) ? 'checked' : '' ?>> Aktif</label>
                        <label class="ml-2"><input type="radio" name="status" value="0" <?php echo (!$status) ? 'checked' : '' ?>> Non Aktif</label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Simpan</button>
                    <a class="btn btn-secondary btn-block" href="<?php echo site_url('post') ?>">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="<?php echo media_url() ?>js/wysiwyg/trumbowyg.min.js"></script>
<script src="<?php echo media_url() ?>js/wysiwyg/plugins/upload/trumbowyg.upload.min.js"></script>
<script>
    $('textarea').trumbowyg({
        btnsDef: {
            // Customizables dropdowns
            image: {
                dropdown: ['insertImage', 'upload'],
                ico: 'insertImage'
            }
        },
        btns: [
            ['viewHTML'],
            ['undo', 'redo'],
            ['formatting'],
            'btnGrp-design',
            ['link'],
            ['image'],
            'btnGrp-justify',
            'btnGrp-lists',
            ['foreColor', 'backColor'],
            ['preformatted'],
            ['horizontalRule'],
            ['fullscreen'],
            ['strong', 'em']
        ],
        plugins: {
            upload: {
                serverPath: "<?= site_url('post/upload') ?>",
                fileFieldName: 'image',
                headers: {
                    'Authorization': 'Client-ID 9e57cb1c4791cea'
                }
            }
        },
        autogrow: true
    });
</script>