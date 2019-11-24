<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo base_url(); ?></loc>
        <priority>1.0</priority>
    </url>

    <!-- Your Sitemap -->

    <url>
        <loc><?php echo site_url('/') ?></loc>
        <priority>0.5</priority>
    </url>
    <url>
        <loc><?php echo site_url('pages/profile') ?></loc>
        <priority>0.5</priority>
    </url>
    <url>
        <loc><?php echo site_url('pages/product') ?></loc>
        <priority>0.5</priority>
    </url>
    <url>
        <loc><?php echo site_url('pages/contact') ?></loc>
        <priority>0.5</priority>
    </url>
    <url>
        <loc><?php echo site_url('pages/post') ?></loc>
        <priority>0.5</priority>
    </url>

</urlset>