<!-- код page-services.php -->
<!doctype html>
<html lang="ru">
<?php $title = "Наши услуги";
//require_once('mains/head.php') ?>

<body>
    <?php get_header();//require_once('mains/header.php') ?>
    <main class="main main-services">
        <p>
        <h2 class="py-5 text-center">НАШИ УСЛУГИ</h2>
        </p>
        <div class="container">
            <div class="row text-center">
                <div id="service-1" class="col-md-4">
                    <strong>Искусство фотографии для начинающих. </strong>
                    <p>Курс состоит из занятий, включающих в себя теоретические
                        основы и опыты. Все изучаемые явления
                        обучающиеся проверяют на практике, эксперементируя с настройками камеры.
                        Каждый урок содержит вопросы, ответы на которые обучающиеся находят
                        экспериментальным путем. </p>
                </div>
                <div id="service-2" class="col-md-4">
                    <strong>Искусство фотографии для любителей.</strong>
                    <p>Курс позволяет обучающимся получить навыки
                        настройки камеры, выбора ракурса, света.
                        Каждое занятие — это новые фотографии и
                        применение знаний в сочетании с новыми
                        знаниями о работе камеры, фотографиях. </p>
                </div>
                <div id="service-3" class="col-md-4">
                    <strong>Индивидуальные занятия.</strong>
                    <p>Курс рассчитан на продвинутое изучение фотографии и
                        детальное рассмотрение настроек камеры и света. Здесь рассматриваются
                        конкретные задачи: портрет, фото пейзажа, съемка видео для рекламы.</p>
                </div>
            </div>
        </div>
        <h2 id="calc" class="my-5 text-center">КАЛЬКУЛЯТОР СТОИМОСТИ
            УСЛУГ</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-6">
                    <div style="border: none;" class="card">
                        <div style="border-radius: 1.2em;" class="card-body bg-dark text-light">
                            <!-- <form>
                                <div class="form-group">
                                    <label for="selectCourse">Курс</label>
                                    <select name="course" id="selectCourse" class="form-control">
                                        <option value="1">Начинающий</option>
                                        <option value="1.2">Любитель</option>
                                        <option value="1.5">Индивидуальный</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="selectCity">Город</label>
                                    <select name="city" id="selectCity" class="form-control">
                                        <option value="1">Владимир</option>
                                        <option value="0.9">Ковров</option>
                                        <option value="1.2">Москва</option>
                                        <option value="1.1">Санкт-Петербург</option>
                                        <option value="0.8">Вязники</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="selectIntensity">Интенсивность</label>
                                    <select name="intensity" id="selectIntensity" class="form-control">
                                        <option value="36">36 часов</option>
                                        <option value="72">72 часа</option>
                                        <option value="128">128 часов</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="priceField">Стоимость</label>
                                    <input type="text" class="form-control" id="priceField" disabled>
                                    <small class="form-text text-muted">
                                        Формула:
                                        <span id="priceField2">курс</span> *
                                        <span id="priceField3">город</span> * <span id="priceField4">интенсивность</span>
                                    </small>
                                </div>
                            </form> -->
                            <?php echo do_shortcode('[CP_CALCULATED_FIELDS id="6"]') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="my-5 text-center">ЗАПИСАТЬСЯ НА ПРОБНОЕ
            ЗАНЯТИЕ</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-6">
                    <div style="border: none;" class="card">
                        <div style="border-radius: 1.2em;" class="card-body bg-dark text-light">
                            <!-- <form>
                                <div class="form-group">
                                    <label for="inputFullname">ФИО</label>
                                    <input type="text" class="form-control" id="inputFullname">
                                    <small class="form-text text-muted">Кириллица с
                                        пробелами</small>
                                </div>
                                <div class="form-group">
                                    <label for="inputAge">Возраст</label>
                                    <input type="text" class="form-control" id="inputAge">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">E-mail</label>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="example@email.com">
                                    <small class="form-text text-muted">Уникальный e-mail</small>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone">Телефон</label>
                                    <input type="text" class="form-control" id="inputPhone">
                                    <small class="form-text text-muted">Не менее 11
                                        символов</small>
                                </div>
                                <div class="form-group">
                                    <label for="inputCourse">Курс</label>
                                    <select name="" id="inputCourse" class="form-control">
                                        <option value="Дошкольный">Дошкольный</option>
                                        <option value="Школьный">Школьный</option>
                                        <option value="Индивидуальный">Индивидуальный</option>
                                    </select>
                                </div>
                                <div style="margin-top: 1.2em;" class="form-group">
                                    <button type="submit" class="form-control btn btn-dark">Отправить</button>
                                </div>
                            </form> -->
                            <?php echo do_shortcode('[contact-form-7 id="9d109db" title="Контактная форма 1"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
    <?php get_footer();//require_once('mains/footer.php') ?>
    </div>
    <script src="js/scripts.js"></script>
</body>

</html>