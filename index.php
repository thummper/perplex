<?php get_header(); ?>
<!-- POSTS HERE -->
<!-- INDEX PHP START -->

<div class="postWrapper">
    <?php if (have_posts()) : ?>
    <script>
        var ads = 0;
        var adArr = ['<ins class="adsbygoogle" id="ad1" data-ad-client="ca-pub-2061141398222316" data-ad-slot="3377558721" data-ad-format="auto"></ins>',
            '<ins class="adsbygoogle" data-ad-client="ca-pub-2061141398222316" data-ad-slot="7771512573" data-ad-format="auto"></ins> '
        ];

    </script>

    <?php while (have_posts()) : the_post();?>


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

    <?php if(is_front_page()) : ?>
    <script>
        ads++;
        if (ads % 3 == 0) {
            console.log("AD HERE");
            if (adArr.length > 0) {
                var value = adArr.splice(0, 1)[0];
                document.write(value);
            }
        }
        if(ads == 2){
            sadMessage = "<div style='display:none' class='sadMessage'>It looks like you're using Adblock :(</div>";
            document.write(sadMessage);
        }

    </script>
    <?php endif; ?>




    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>


</div>


</div>
<div class="right"></div>


    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});


    </script>

<!-- INDEX PHP END -->
<script>
if(document.getElementById("ad1").childElementCount == 0){
    //Ad unable to load?
    document.getElementsByClassName("sadMessage")[0].style.display = "block";
}
</script>
<?php get_footer(); ?>
