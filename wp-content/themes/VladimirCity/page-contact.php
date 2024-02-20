<!-- код page-contact.php -->
<!doctype html>
<html lang="ru">
    <?php $title="Наши школы";
    //require_once('mains/head.php') ?>

<body>
    <?php get_header();//require_once('mains/header.php') ?>
    <main class="main main-contact text-center">
        <p><h2 class="py-5">НАШИ ШКОЛЫ</h2></p>
        <div class="container">
            <div class="row align-items-center">
                <div style="font-size: 1.2em;" class="col-md-6">
                    <p style="font-size: 1.2em;" class="lead">Выберите город:</p>
                    <select name="city" id="changeCity" class="btn btn-outline-dark">
                        <option value="city-1">Владимир</option>
                        <option value="city-2">Ковров</option>
                        <option value="city-3">Москва</option>
                        <option value="city-4">Санкт-Петербург</option>
                        <option value="city-5">Вязники</option>
                    </select>
                    <p class="address d-none mt-3">пр. Октябрьский, д. 11 <br> +7
                        (495) 973-11-11</p>
                    <p class="address d-none mt-3">ул. Степана Разина, 95 <br> 8
                        (343) 344-38-38</p>
                    <p class="address d-none mt-3">ул. Б. Тульская, д. 13, ТРЦ
                        Ереван Плаза, 5 этаж <br> +7 (495) 983-10-10</p>
                    <p class="address d-none mt-3">пр. Энгельса, д. 154, ТРК
                        «Гранд Каньон» <br> 8-800-301-20-20</p>
                    <p class="address d-none mt-3">ул. Ванеева, 10а <br> +7 (312)
                        22-00-75</p>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/city001.jpg" alt="" class="img-fluid main-contact__img d-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/city002.jpg" alt="" class="img-fluid main-contact__img d-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/city003.jpg" alt="" class="img-fluid main-contact__img d-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/city004.jpg" alt="" class="img-fluid main-contact__img d-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/city005.jpg" alt="" class="img-fluid main-contact__img d-none">
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