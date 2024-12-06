<?php include('nav.php');?>

<div class="product bg fx">
    <div class="container">
            <div class="products">
                <div id="menu" class="products__menu1  wow animate__fadeInLeft" data-wow-duration="2s">
                    <ul class="products__menu2">
                        <li class="category category_title" data-category="zernovye">GRAINS
                            <hr class="products__hr">
                            <ul class="subcategory-list">
                                <li class="subcategory" data-category="zernovye" data-subcategory="pshenica">Wheat</li>
                                <li class="subcategory" data-category="zernovye" data-subcategory="yachmen">Barley</li>
                                <li class="subcategory" data-category="zernovye" data-subcategory="kukuruza">Corn</li>
                                <li class="subcategory" data-category="zernovye" data-subcategory="buckwheat">Buckwheat</li>
                            </ul>
                        </li>
                        <li class="category category_title" data-category="maslichnye">OILSEEDS
                            <hr class="products__hr">
                            <ul class="subcategory-list">
                                <li class="subcategory" data-category="maslichnye" data-subcategory="podsolnechnik">Sunflowers</li>
                                <li class="subcategory" data-category="maslichnye" data-subcategory="raps">Rapeseed</li>
                                <li class="subcategory" data-category="maslichnye" data-subcategory="len">Flax</li>
                            </ul>
                        </li>
                        <li class="category category_title" data-category="bobovye">LEGUMES
                            <hr class="products__hr">
                            <ul class="subcategory-list">
                                <li class="subcategory" data-category="bobovye" data-subcategory="goroh">Peas</li>
                                <li class="subcategory" data-category="bobovye" data-subcategory="soya">Soy</li>
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