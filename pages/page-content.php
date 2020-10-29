<?php
/**
 * 文章列表
 * @author Seaton Jiang <seaton@vtrois.com>
 * @license MIT License
 * @version 2020.09.27
 */
?>
<div class="article-panel">
    <?php if (kratos_option('g_thumbnail',true)) { ?>
    <div class="a-thumb">
        <a href="<?php the_permalink(); ?>">
            <?php post_thumbnail(); ?>
        </a>
    </div>
    <?php }?>
    <div class="a-post <?php if (!kratos_option('g_thumbnail',true)) { echo 'a-none'; } ?>">
        <div class="header">
            <?php
            $category = get_the_category();
            if ($category) {
                echo '<a class="label" href="'. get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '<i class="label-arrow"></i></a>';
            } else {
                echo '<span class="label">'. __('页面','kratos') .'<i class="label-arrow"></i></span>';
            }
            ?>
            <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </div>
        <div class="content">
            <p><?php echo wp_trim_words(get_the_excerpt(), 260); ?></p>
        </div>
    </div>
    <div class="a-meta">
        <span class="float-left d-none d-md-block">
            <span class="mr-2"><?php echo get_the_date('Y年m月d日'); ?></span>
            <span class="mr-2"><?php comments_number('0', '1', '%'); _e('条评论', 'kratos'); ?></span>
        </span>
        <span class="float-left d-block">
            <span class="mr-2"><?php echo get_post_views(); _e('点热度', 'kratos'); ?></span>
            <!-- <span class="mr-2"><i class="kicon i-good"></i><?php if (get_post_meta($post->ID, 'love', true)) {echo get_post_meta($post->ID, 'love', true);} else {echo '0';} _e('人点赞', 'kratos'); ?></span> -->
            <!-- <?php if(kratos_option('multiusers',false)){ ?>
                <span class="mr-2"><i class="kicon i-author"></i><?php echo get_the_author_meta('display_name'); ?></span>
            <?php } ?> -->
        </span>
        <span class="float-right">
            <a href="<?php the_permalink(); ?>"><?php _e('阅读全文', 'kratos'); ?> >></a>
        </span>
    </div>
</div>