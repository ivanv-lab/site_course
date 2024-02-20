<!-- код page-news.php -->
<!doctype html>
<html lang="ru">
<?php $title = "Новости";
//require_once('mains/head.php') ?>
<body>
    <?php get_header();//require_once('mains/header.php')  ?>
    <main class="main main-news text-light">
        <p>
        <h2 class="py-5 text-center text-dark">НОВОСТИ</h2>
        </p>
        <div class="container">
            <div class="row align-items-stretch justify-content-center ">
                <!-- <script>
                    document.addEventListener('DOMContentLoaded',()=>{
                        async function fetchPosts(){
                            const row=document.querySelector(',row,align-items-stretch,justify-content-center');
                            const response1=await fetch('http://localhost/wp-json/wp/v2/posts?_embed&per_page=$(per_page)&page')
                        }
                    })
                </script> -->
                <?php
                $posts=get_posts(array(
                    'numberposts'=> 4,
                    'category_name'=> 'news',
                ));

                foreach($posts as $post):
                    setup_postdata($post);
                 ?>
                <div class="col-md-6 my-3">
                    <div class="card h-100">
                        <img src=<?php echo get_the_post_thumbnail_url()?> alt="" class="img_type_big img-fluid card-img-top">
                        <div class="card-body bg-dark">
                            <div class="card-title">
                                <strong><?php the_title(); ?></strong>
                            </div>
                            <div class="card-text">
                            <?php the_content(); ?>
                                <em><?php echo get_the_date();?></em>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
                <!-- <div class="col-md-6 my-3">
                    <div class="card h-100">
                        <img src="images/news002.jpg" alt="" class="img_type_big img-fluid card-img-top">
                        <div class="card-body bg-dark">
                            <div class="card-title">
                                <strong>Мастер-класс в студии портретной фотографии </strong>
                            </div>
                            <div class="card-text">
                                <p>Вчера мы познакомили 15 обучающихся начального уровня с портретными фотографиями в студии профессиональной фотографии.
                                    Сегодня проведем конкурс на лучший портрет среди этих студентов. </p>
                                <em>07.12.2023</em>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <div class="card h-100">
                        <img src="images/news003.jpg" alt="" class="img_type_big img-fluid card-img-top">
                        <div class="card-body bg-dark">
                            <div class="card-title">
                                <strong>Бесплатные уроки по видеомонтажу</strong>
                            </div>
                            <div class="card-text">
                                <p>Мы решили ввести несколько бесплатных уроков по видеомонтажу.
                                    Вести их будет наш преподаватель, каждый посетитель сайта может ознакомиться с материалом.
                                </p>
                                <em>07.12.2023</em>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <div class="card h-100">
                        <img src="images/news004.jpg" alt="" class="img_type_big img-fluid card-img-top">
                        <div class="card-body bg-dark">
                            <div class="card-title">
                                <strong>Урок внутреннего устройства камеры</strong>
                            </div>
                            <div class="card-text">
                                <p>Совместно с инженером компании Nikon мы проведем для студентов урок, посвященный
                                    внутреннему устройству камеры. Полученные знания позволят различать виды матриц, понимать
                                    разницу в диафрагмах и многое другое.
                                </p>
                                <em>07.12.2023</em>
                            </div>
                        </div>
                    </div>
                </div> -->
                <button class="mt-3 btn btn-outline-dark">Еще
                    новости</button>
            </div>
        </div>
    </main>
    </div>
    <?php get_footer();//require_once('mains/footer.php') ?>
    </div>
    <script src="js/scripts.js"></script>
</body>

</html>