<!-- код main-reviews.php -->
<section class="reviews">
        <h2 id="reviews" class="my-5 text-center">ОТЗЫВЫ</h2>
        <div class="container">
            <div class="row align-items-stretch justify-content-center">
                <?php
                $posts=get_posts(array(
                    'category_name'=> 'reviews',
                ));

                foreach($posts as $post):
                setup_postdata($post);
                ?>
                <div class="col-md-6 my-3">
                    <div class="card h-100">
                        <!-- <img src="images/ans001.jpeg" alt="" class="img_type_big img-fluid card-img-top"> -->
                        <div class="card-body bg-dark">
                            <div class="card-title text-light"><strong><h3><?php the_title(); ?></h3></strong></div>
                            <div class="card-text text-light">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>
                <!-- <div class="col-md-6 my-3">
                    <div class="card h-100">
                        <div class="card-body bg-dark">
                            <div class="card-title text-light"><strong><h3>Elena</h3></strong></div>
                            <div class="card-text text-light">
                                <p> Здравствуйте! </p>
                                <p>Самый главный критерий качества для меня —
                                    довольная иду на занятия и такая же довольная
                                    возвращаюсь с них) Со всеми, с кем
                                    приходилось общаться из преподавателей и контакт-центром по
                                    вопросам организации — все предельно ясно и чётко
                                    излагается, при этом все очень доброжелательные. Ставлю
                                    твёрдую 5) </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <div class="card h-100">
                        <div class="card-body bg-dark">
                            <div class="card-title text-light"><strong><h3>Stas</h3></strong></div>
                            <div class="card-text text-light">
                                <p>Обучаюсь на курсе для профессионалов.
                                    Пошел для закрепления имеющихся знаний, разбора мелких(местами непонятных) деталей.
                                    Преподаватели - настоящие профессионалы, на курсах получил немало знаний,
                                    закрепил, что уже знаю, проходили сложную практику с именитыми компаниями.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <div class="card h-100">
                        <div class="card-body bg-dark">
                            <div class="card-title text-light"><strong><h3>Дулина Татьяна</h3></strong></div>
                            <div class="card-text text-light">
                                <p>В нашей семье есть 2 больших
                                    поклонника фотографии: папа и сын. У сына с 14 лет Nikon D3500, потом
                                    появилось 2 дополнительных объектива, стабилизатор. Несколько месяцев
                                    назад попалась информация о наборе в школу искусства фотографии
                                    — и тут стало ясно, что сыну повезло
                                    больше, чем папе )))) — его ждет еще больше фотографий,
                                    уникального опыта, новые знания в области работы камеры, интересные проекты, общение с
                                    единомышленниками и преподавателями, с которыми обучающиеся на
                                    одной волне и которые всегда помогут советом. </p>
                                <p>Желаю дальнейшего процветания и успехов!
                                    Спасибо! </p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>