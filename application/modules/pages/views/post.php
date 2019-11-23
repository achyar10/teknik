<div class="container mt-3">
    <h3 class="text-center">Redaksi</h3>
    <hr>
    <div class="blog-post">
        <?php foreach ($post as $row) : ?>
            <h4 class="blog-post-title"><?php echo $row['post_title']; ?></h4>
            <p class="blog-post-meta"><?php echo pretty_date($row['post_created_at'], 'd F Y', false); ?> by <span class="text-muted"><?php echo $row['user_fullname'] ?></span></p>
            <p><?php echo word_limiter($row['post_desc'], 30) ?></p>
            <a href="<?php echo posts_url($row) ?>" class="btn btn-info btn-sm">Detail</a>
            <hr>
        <?php endforeach; ?>
    </div>
    <?php echo $this->pagination->create_links(); ?>
</div>