<div class="container mt-3">
    <div class="blog-post">
        <h4 class="blog-post-title"><?php echo $post->post_title; ?></h4>

        <p class="blog-post-meta"><?php echo pretty_date($post->post_created_at, 'd F Y', false); ?> by <span class="text-muted"><?php echo $post->user_fullname ?></span></p>
        <hr>
        <div style="text-align:justify">
            <?php echo $post->post_desc ?>
        </div>
        <a href="<?= site_url('pages/post') ?>" class="btn btn-secondary">Kembali</a>
    </div>
</div>