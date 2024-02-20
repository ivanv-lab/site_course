<!-- код main-news.php -->
<section class="news">
        <h2 class="my-5 text-center">НОВОСТИ</h2>
        <div class="container">
            <div class="row align-items-stretch justify-content-center">
                <?php
                $posts=get_posts(array(
                    'numberposts'=> 3,
                    'category_name'=> 'news',
                ));

                foreach($posts as $post):
                    setup_postdata($post);
                 ?>
                <div class="col-md-6 col-lg-4 my-3">
                    <div class="card h-100">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" 
                        class="img_type_medium img-fluid card-img-top">
                        <div class="card-body bg-dark">
                            <div class="card-title text-center text-light"><strong><?php the_title(); ?>
                                </strong></div>
                            <div class="card-text text-light">
                                <?php the_content(); ?>
                                <em><?php echo get_the_date();?></em>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php endforeach;
                wp_reset_postdata();
                ?>
                <!-- <div class="col-md-6 col-lg-4 my-3">
                    <div class="card h-100">
                        <img src="images/news002.jpg" alt="" class="img_type_medium img-fluid card-img-top">
                        <div class="card-body bg-dark">
                            <div class="card-title text-center text-light"><strong>Мастер-класс в
                                    студии портретной фотографии</strong></div>
                            <div class="card-text text-light ">
                                <p> Вчера мы познакомили 15 обучающихся начального
                                    уровня с портретными фотографиями в студии профессиональной фотографии.
                                    Сегодня проведем конкурс на лучший портрет среди этих студентов. </p>
                                <em>07.12.2023</em>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>