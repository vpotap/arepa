<?php include('style.inc.php'); ?>

<ul id="<?php echo $id; ?>" data-counter="false" class="social-sharing social-media-horizontal-bubble social-sharing-style-4">
    <li><div class="fb-like" data-href="<?php echo $fb_like_url; ?>" data-send="false" data-layout="box_count" data-width="450" data-show-faces="true" data-colorscheme="<?php echo $fb_color; ?>"></div></li>
    <li><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $tw_url; ?>" <?php echo ($tw_name != ''?' data-via="'.op_attr($tw_name).'"':'');?> <?php echo (ucfirst($tw_text) != ''?' data-text="'.op_attr($tw_text).'"':'');?> data-lang="<?php echo $tw_lang;?>" data-related="anywhereTheJavascriptAPI" data-count="vertical"><?php __('Tweet', 'optimizepress-plus-pack');?></a></li>
</ul>

<?php require_once('facebook-sdk.inc.php'); ?>

<?php require_once('twitter-sdk.inc.php'); ?>