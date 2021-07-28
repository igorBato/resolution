<div class="post-section lines-fullwidth-blog">

    <div class="black-plate"></div>

    <div class="site-wrapper-boxed">

            <div class="post-navigation">
                
                <div class="post-title-text">
                    <h1 class="h1 post-title"><?php the_title(); ?></h1>

                    <div class="post-sub-title-wrapper">
                        <p class="category"><?php $category = get_the_category(); echo $category[0]->name; ?> </p>
                    <div>

                        <div class="orange-vertical-line"></div>

                        <h2 class="h2 post-sub-title"><?php echo get_the_author() ;?></h2>

                    </div>
                </div>


            </div>

            <div class="post-content">
                <?php the_content(); ?>
            </div>
    </div>

</div>

@include('partials.article-articles')