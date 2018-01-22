<?php get_header(); ?>
<!-- POSTS HERE -->
<!-- INDEX PHP START -->
<div class="postWrapper">
    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>


    <div class="post">
        <div class="postInformation">

            <a class="postLink" href="<?php the_permalink() ?>">
                <h1 class="postTitle">
                    <?php the_title(); ?>
                </h1>

                <div class="postDate">
                    <?php the_time('d/m/y') ?>


                </div>
                <div class="titleSep"></div>
            </a>
        </div>


        <?php if (is_front_page()) : ?>
        <div class="postContent">

            <div class="contents">
                <?php the_excerpt(); ?>
            </div>
            <a class="readMore" href="<?php the_permalink() ?>">More</a>
        </div>
        <?php else : ?>
        <div class="postContent">
            <div class="contents">
                <?php the_content(); ?>
            </div>
            <a class="readMore" href="http://perplex.space">Back</a>
        </div>
        <!--        Magic Similar Posts -->


        <div class="prevPost">
            <?php previous_post_link(); ?>
        </div>
        <div class="nextPost">
            <?php next_post_link(); ?>
        </div>



        <?php endif; ?>


    </div>




    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>

</div>


</div>
<div class="right"></div>

<!-- INDEX PHP END -->
<?php get_footer(); ?>
