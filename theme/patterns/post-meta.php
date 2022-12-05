<?php
/**
 * Title: 投稿メタ情報
 * Description: 投稿日、投稿者、カテゴリー、タグを2カラムで表示します
 * Slug: kiwi-dev-wp-block-theme/post-meta
 * Categories: featured, columns
 * Keywords: Post meta, 投稿 メタ
 * Block Types: core/columns
 */
?>
<!-- wp:columns -->
<div class="wp-block-columns">
    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- wp:post-date /-->
        <!-- wp:post-author {"avatarSize":32,"isLink":true} /-->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph -->
                <p><strong>カテゴリー</strong></p>
            <!-- /wp:paragraph -->
            <!-- wp:post-terms {"term":"category"} /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph -->
                <p><strong>タグ</strong></p>
            <!-- /wp:paragraph -->
            <!-- wp:post-terms {"term":"post_tag"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->