<?php $category_color=get_field( "category_color" ); ?>
<div class="post-section lines-fullwidth-blog">

    <div class="black-plate"></div>

    <div class="site-wrapper-boxed">

            <div class="post-navigation">
                
                <div class="post-title-text">
                    <h1 class="h1 single-post-title"><?php the_title(); ?></h1>

                    <div class="post-sub-title-wrapper">
                        <p class="category" style="background-color: <?php echo $category_color ;?>;" ><?php $category = get_the_category(); echo $category[0]->name; ?> </p>
                    <div>

                        <div class="orange-vertical-line"></div>

                        <h2 class="h2 post-sub-title"><?php echo get_the_author() ;?></h2>

                    </div>
                </div>


            </div>

            <div class="post-content">
                <?php the_content(); ?>
                <p class="entry-date"><?php echo get_the_date(); ?></p>
            </div>

    </div>

</div>

@include('partials.article-articles')