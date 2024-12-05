<?php include('nav.php');?>

<div class="product bg fx">
    <div class="container">
            <div class="products">
                <div id="menu" class="products__menu1  wow animate__fadeInLeft" data-wow-duration="2s">
                    <ul class="products__menu2">
                        <li class="category category_title" data-category="zernovye">Зерновые культуры
                            <hr class="products__hr">
                            <ul class="subcategory-list">
                                <li class="subcategory" data-category="zernovye" data-subcategory="pshenica">Пшеница</li>
                                <li class="subcategory" data-category="zernovye" data-subcategory="yachmen">Ячмень</li>
                                <li class="subcategory" data-category="zernovye" data-subcategory="kukuruza">Кукуруза</li>
                                <li class="subcategory" data-category="zernovye" data-subcategory="buckwheat">Гречиха</li>
                            </ul>
                        </li>
                        <li class="category category_title" data-category="maslichnye">Масличные культуры
                            <hr class="products__hr">
                            <ul class="subcategory-list">
                                <li class="subcategory" data-category="maslichnye" data-subcategory="podsolnechnik">Подсолнечник</li>
                                <li class="subcategory" data-category="maslichnye" data-subcategory="raps">Рапс</li>
                                <li class="subcategory" data-category="maslichnye" data-subcategory="len">Лен</li>
                            </ul>
                        </li>
                        <li class="category category_title" data-category="bobovye">Бобовые культуры
                            <hr class="products__hr">
                            <ul class="subcategory-list">
                                <li class="subcategory" data-category="bobovye" data-subcategory="goroh">Горох</li>
                                <li class="subcategory" data-category="bobovye" data-subcategory="soya">Соя</li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div id="content" class="products__content wow animate__fadeInRight" data-wow-duration="2s">
                    <!-- Контент подгрузится сюда -->
                </div>
            </div>

        <div id="loading" style="display: none;">Загрузка...</div>
    </div>
</div>

<?php include('footer.php');?>