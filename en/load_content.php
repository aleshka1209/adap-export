<?php
if (!isset($_POST['category']) && !isset($_POST['subcategory'])) {
    // По умолчанию отображается краткое описание всех категорий
    echo "<h2 class='category__title'>Products</h2>";
    echo "<hr>";
    // Краткое описание для "Зерновые культуры"
    echo "<div class='category__item'>";
    echo '<div class="products__img"><img src="/img/content/1/1.png" alt="Зерновые культуры" style="width: 100%; max-width: 300px; margin-bottom: 10px;"> </div>';
    echo '<div class="products__info">';
    echo '<h3>GRAINS</h3>';
    echo "<p class='products__text'>
        Grain crops are the most essential group of cultivated plants serving as the source of grain, the basic food product of human beings, raw material for many industries and forage for farm ani...
    </p>";
    echo '<button class="btn-more btn header__link" data-category="zernovye">Read more</button>';
    echo '</div>';
    echo "</div><hr>";

    // Краткое описание для "Масличные культуры"
    echo "<div class='category__item'>";
    echo '<div class="products__img"><img src="/img/content/2/1.png" alt="Масличные культуры" style="width: 100%; max-width: 300px; margin-bottom: 10px;"> </div>';
    echo '<div class="products__info">';
    echo '<h3>OILSEEDS</h3>';
    echo "<p class='products__text'>
        Oilseeds are plants cultivated to produce fatty oils. They embrace both annuals and perennials belonging to various families.
    </p>";
    echo '<button class="btn-more btn header__link" data-category="zernovye">Read more</button>';
    echo '</div>';
    echo "</div><hr>";

    // Краткое описание для "Бобовые культуры"
    echo "<div class='category__item'>";
    echo '<div class="products__img"><img src="/img/content/3/1.png" alt="Бобовые культуры" style="width: 100%; max-width: 300px; margin-bottom: 10px;"> </div>';
    echo '<div class="products__info">';
    echo '<h3>LEGUMES</h3>';
    echo "<p class='products__text'>
        Legumes (grain legumes crops or just beans in the area of cooking) are a group of some plants belonging to the Legume family and cultivated for their fruit being a food product.
    </p>";
    echo '<button class="btn-more btn header__link" data-category="zernovye">Read more</button>';
    echo '</div>';


} elseif (isset($_POST['category']) && !isset($_POST['subcategory'])) {
    // Логика для отображения конкретной категории (например, "Зерновые культуры")
    $category = $_POST['category'];
    // В зависимости от категории выводим нужную информацию
    if ($category == 'zernovye') {
        echo "<h2 class='category__title'>Products</h2>";
        echo "<hr>";
        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/content/1/2.png" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
        echo '<h3>WHEAT</h3>';
        echo "<p>
            Wheat is the main grain crop. It falls into spring and autumn varieties according to its seeding time. In terms of botanical characteristics, it is divided into basic types: common and durum...
        </p>";
        echo '<button class="btn-more btn header__link" data-category="zernovye" data-subcategory="pshenica">Read more</button>';
        echo '</div>';
        echo '</div>';
        echo '<hr>';

        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/content/1/3.png" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
        echo '<h3>BARLEY</h3>';
        echo "<p>
            Barley is a fast-ripening (its vegetation period lasts 70 days) and widely-grown spring crop. It falls into a six-row and two-row varieties. Barley is used to make pearl and peeled barley gr...
        </p>";
        echo '<button class="btn-more btn header__link" data-category="zernovye" data-subcategory="yachmen">Read more</button>';
        echo '</div>';
        echo '</div>';
        echo '<hr>';

        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/content/1/4.png" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
        echo '<h3>CORN</h3>';
        echo "<p>
            According to the shape and formation of the ear and grain, corn falls into flint, dent, half-dent, sweet, pod, soft, waxy, snap and other varieties. As compared to other crops, it contains l...
        </p>";
        echo '<button class="btn-more btn header__link" data-category="zernovye" data-subcategory="kukuruza">Read more</button>';
        echo '</div>';
        echo '</div>';
        echo '<hr>';

        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/content/1/5.png" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
        echo '<h3>BUCKWHEAT</h3>';
        echo "<p>
            Buckwheat is a three-edged fruit, covered with dense fruit coat, rather than floral shell, as grain varieties have. Under the coat, there is a kernel consisting of episperm, aleurone layer, ...
        </p>";
        echo '<button class="btn-more btn header__link" data-category="zernovye" data-subcategory="buckwheat">Read more</button>';
        echo '</div>';
        echo '</div>';

        

        

    } elseif ($category == 'maslichnye') {
        echo "<h2 class='category__title'>Products</h2>";
        echo "<hr>";
        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/content/2/2.png" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
        echo '<h3>SUNFLOWERS</h3>';
        echo "<p>
            Sunflowers are cross-pollinated plants, which greatly complicates the classification of their various forms, varieties and hybrids. According to the modern classification, sunflowers belong ...
        </p>";
        echo '<button class="btn-more btn header__link" data-category="maslichnye" data-subcategory="podsolnechnik">Read more</button>';
        echo '</div>';
        echo '</div>';
        echo '<hr>';
        
        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/content/2/3.png" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
        echo '<h3>RAPESEED</h3>';
        echo "<p>
            Rapeseed is a herbaceous plant of the cabbage family with an extremely developed root (stem) that penetrates into the soil up to 3 m. The main part of the root lies at the depth of 20 to 30 ...
        </p> ";
        echo '<button class="btn-more btn header__link" data-category="maslichnye" data-subcategory="raps">Read more</button>';
        echo '</div>';
        echo '</div>';
        echo '<hr>';

        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/content/1/4.png" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
        echo '<h3>FLAX</h3>';
        echo "<p>
            The oil content of flax oilseeds is 42 to 44%, and they hold up to 23 % protein. Its seeds are used to produce oil, which is mainly applied for technical purposes. Its ability to rapidly dry...
        </p>";
        echo '<button class="btn-more btn header__link" data-category="maslichnye" data-subcategory="len">Read more</button>';
        echo '</div>';
        echo '</div>';

    } elseif ($category == 'bobovye') {
        echo "<h2 class='category__title'>Products</h2>";
        echo "<hr>";
        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/content/3/2.png" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
        echo '<h3>PEAS</h3>';
        echo "<p>
            Peas originate from Afghanistan and Eastern India. The fruit of peas is bean, consisting of valves and seeds. According to the structure of valves, peas fall into sugar and shelling varietie...
        </p>";
        echo '<button class="btn-more btn header__link" data-category="bobovye" data-subcategory="goroh">Read more</button>';
        echo '</div>';
        echo '</div>';
        echo '<hr>';

        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/content/3/3.png" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
        echo '<h3>SOY</h3>';
        echo "<p>
            Soy is a universal world legume crop. Soy is used to obtain flour, butter, milk and cheese. It is added to confectionery, canned food, sauces and other food products. Soy is used only after ...
        </p>";
        echo '<button class="btn-more btn header__link" data-category="bobovye" data-subcategory="soya">Read more</button>';
        echo '</div>';
        echo '</div>';

    }
} elseif (isset($_POST['subcategory'])) {
    $subcategory = $_POST['subcategory'];
    
    if ($subcategory == 'pshenica') {
        echo "<h2 class='category__title'>Wheat</h2>";
        echo '<hr>';
        echo '<br>';
        echo "<p>
            Wheat is the main grain crop. It falls into spring and autumn varieties according to its seeding time. In terms of botanical characteristics, it is divided into basic types: common and durum.
        </p>";

        echo "<p>
            The grain of common wheat has a glazed, chalky or mealy consistency, rounded or oval shape, which is slightly extended to the germ, as well as an evident brush and a deep crease. It can be white, red or yellow in color. Common wheat is used in confectionery and bread making.
        </p>";

        echo "<p>
            Durum wheat significantly differs from common one. The grain is ribbed and more elongated with a thickened dorsal surface near the germ. Its sectional view is glazed and translucent. The crease is open, poorly developed and does not goes deep inside the grain. Its color varies from light to dark amber. It is more rich in protein, sugar and minerals than common wheat. Durum wheat is used for pasta and semolina, added when grinding wheat with poor baking properties and obtaining granular flour.
        </p>";
        
        echo '<h3>
        Quality Indicator: ST RK 10-46-2008
        </h3>';

        echo '
            <table>
                <thead>
                    <tr>
                        <th>Indicators</th>
                        <th colspan="5">
                            Standard quality requirements for wheat supplied (common varieties)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>Class 1</td>
                        <td>Class 2</td>
                        <td>Class 3</td>
                        <td>Class 4</td>
                        <td>Class 5</td>
                    </tr>
                    <tr>
                        <td>Natural weight, g/l, min</td>
                        <td>750</td>
                        <td>730</td>
                        <td>710</td>
                        <td>700</td>
                        <td>Not limited</td>
                    </tr>
                    <tr>
                        <td>Humidity, %, max</td>
                        <td>14</td>
                        <td>14</td>
                        <td>14</td>
                        <td>14</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>Grain impurities, %, max</td>
                        <td>5</td>
                        <td>5</td>
                        <td>5</td>
                        <td>15</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Weed impurities, %, max</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>5</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Protein mass fraction, % on dry basis, min</td>
                        <td>13.5</td>
                        <td>12.5</td>
                        <td>11.5</td>
                        <td>9.5</td>
                        <td>Not limited</td>
                    </tr>
                    <tr>
                        <td>Crude gluten mass fraction, %, min</td>
                        <td>28</td>
                        <td>25</td>
                        <td>23</td>
                        <td>18</td>
                        <td>Not limited</td>
                    </tr>
                    <tr>
                        <td>Falling number, sec, min</td>
                        <td>200</td>
                        <td>200</td>
                        <td>200</td>
                        <td>80</td>
                        <td>Not limited</td>
                    </tr>
                </tbody>
            </table>
        ';


    } elseif ($subcategory == 'yachmen') {
        echo "<h2 class='category__title'>Barley</h2>";
        echo '<hr>';
        echo '<br>';
        echo "<p>
            Barley is a fast-ripening (its vegetation period lasts 70 days) and widely-grown spring crop. It falls into a six-row and two-row varieties. Barley is used to make pearl and peeled barley groats and partially to obtain flour and malt. This grain crop serves as the main raw material in beer brewing and used as animal forage.
        </p>";
        
        echo '<h3>Barley GOST 28672-90</h3>';

        echo '
            <table>
                <thead>
                    <tr>
                        <th rowspan="2">Indicator</th>
                        <th colspan="3">Standard for barley supplied</th>
                    </tr>
                    <tr>
                        <th>For food purposes</th>
                        <th>For obtaining of malt in alcohol production</th>
                        <th>For forage and manufacturing of formula feed</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Color</td>
                        <td>Yellow with different shades</td>
                        <td colspan="2">Appropriate to sound grain Blackened grain is allowed</td>
                    </tr>
                    <tr>
                        <td>Humidity, %, max</td>
                        <td>14,5</td>
                        <td>15,5</td>
                        <td>Non-limited</td>
                    </tr>
                    <tr>
                        <td>Natural weight, g/l, min</td>
                        <td>630</td>
                        <td>570</td>
                        <td>Non-limited</td>
                    </tr>
                    <tr>
                        <td>Weed impurities, %, max</td>
                        <td>2,0</td>
                        <td>2,0</td>
                        <td>5,0</td>
                    </tr>
                    <tr>
                        <td>Grain impurities, %, max</td>
                        <td>7,0</td>
                        <td>3,0</td>
                        <td>15,0</td>
                    </tr>
                    <tr>
                        <td>Small grains, %, max</td>
                        <td>5,0</td>
                        <td>5,0</td>
                        <td>Non-limited</td>
                    </tr>
                    <tr>
                        <td>Pest infestation</td>
                        <td colspan="3">Not permitted, except infestation with mite not higher than Degree I</td>
                    </tr>
                    <tr>
                        <td>Germinating ability, %, min</td>
                        <td></td>
                        <td>92,0</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        ';
    } elseif ($subcategory == 'kukuruza') {
        echo "<h2 class='category__title'>Corn</h2>";
        echo '<hr>';
        echo '<br>';
        echo "<p>
        According to the shape and formation of the ear and grain, corn falls into flint, dent, half-dent, sweet, pod, soft, waxy, snap and other varieties. As compared to other crops, it contains less protein, but has more fat (up to 5 %), mostly stored in the germ. The germ is separated and used for the production of oil. Corn is processed into cereals, starch, alcohol and molasses.</p>";
        
        echo '<h3>GOST 13634-90</h3>';

        echo '
            <table>
                <thead>
                    <tr>
                        <th>Indicator</th>
                        <th>Restrictive standards for processing into cereals and flour</th>
                        <th>Restrictive standards for production of formula feed and for forage purposes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Humidity, %, max</td>
                        <td>15,0</td>
                        <td>15,0</td>
                    </tr>
                    <tr>
                        <td>Weed impurities, %, max</td>
                        <td>2,0</td>
                        <td>5,0</td>
                    </tr>
                    <tr>
                        <td>Grain impurities, %, max</td>
                        <td>7,0</td>
                        <td>15,0</td>
                    </tr>
                    <tr>
                        <td>Pest infestation</td>
                        <td>Not permitted, except infestation with mite not higher than Degree I</td>
                        <td>Not permitted, except infestation with mite not higher than Degree I</td>
                    </tr>
                </tbody>
            </table>
        ';
    }
    elseif ($subcategory == 'buckwheat') {
        echo "<h2 class='category__title'>Buckwheat</h2>";
        echo '<hr>';
        echo '<br>';
        echo "<p>
            Buckwheat is a three-edged fruit, covered with dense fruit coat, rather than floral shell, as grain varieties have. Under the coat, there is a kernel consisting of episperm, aleurone layer, endosperm and a large germ in the form of a S-shaped curved plate. The fruit of buckwheat is a three-edged nut that is gray, brown or black in color. A hundred fruit weights 20 to 30 g, and the husk content is 18 to 30%.
        </p>";
        
        echo '<h3>GOST 5550-74</h3>';

        echo '
            <table>
                <thead>
                    <tr>
                        <th rowspan="3">
                            Indicator
                        </th>
                        <th colspan="4">Characteristic and standard for</th>
                    </tr>
                    <tr>
                        <th colspan="3">pealed buckwheat and pealed quick-cooking buckwheat</th>
                        <th rowspan="2">Crushed buckwheat and crushed quick-cooking buckwheat</th>
                    </tr>
                    <tr>
                        <th>Grade 1</th>
                        <th>Grade 2</th>
                        <th>Grade 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Color</td>
                        <td colspan="4">Cream with a yellowish or greenish shade; brown of different shades for quick-cooking buckwheat</td>
                    </tr>
                    <tr>
                        <td>Odor</td>
                        <td colspan="4">Characteristic to buckwheat, no foreign smell, no stale or mouldy smell</td>
                    </tr>
                    <tr>
                        <td>Taste</td>
                        <td colspan="4">Characteristic to buckwheat, no foreign flavors, no acid or bitter taste</td>
                    </tr>
                    <tr>
                        <td>Humidity, %, max</td>
                        <td colspan="4">14,0</td>
                    </tr>
                    <tr>
                        <td>Sound kernel, %, min</td>
                        <td>99,2</td>
                        <td>98,4</td>
                        <td>97,5</td>
                        <td>98,3</td>
                    </tr>
                    <tr>
                        <td>Unhulled buckwheat grain, %, max</td>
                        <td>0,3</td>
                        <td>0,4</td>
                        <td>0,7</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Weed impurities, %, max</td>
                        <td>0,4</td>
                        <td>0,5</td>
                        <td>0,6</td>
                        <td>0,7</td>
                    </tr>
                    <tr>
                        <td>Hulling bran, %, max</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>0,5</td>
                    </tr>
                    <tr>
                        <td>Spoiled kernels, %, max</td>
                        <td>0,2</td>
                        <td>0,4</td>
                        <td>1,2</td>
                        <td>0,5</td>
                    </tr>
                    <tr>
                        <td>Cooking quality (for quick-cooking varieties) </td>
                        <td colspan="4">1,5</td>
                    </tr>
                    <tr>
                        <td>Cereal pest infestation</td>
                        <td colspan="4">Not allowed</td>
                    </tr>
                    <tr>
                        <td>Metal magnetic admixture per 1 kg of cereal, mg, max</td>
                        <td colspan="4">3</td>
                    </tr>
                </tbody>
            </table>
        ';
    }elseif ($subcategory == 'podsolnechnik') {
        echo "<h2 class='category__title'>Sunflowers</h2>";
        echo '<hr>';
        echo '<br>';
        echo "<p>
        Sunflowers are cross-pollinated plants, which greatly complicates the classification of their various forms, varieties and hybrids. According to the modern classification, sunflowers belong to the Asteraceae family. Heliа́nthus а́nnuus L. is considered to be a collective category, embracing two individual species of sunflowers: Heliа́nthus cúltus Wenzl., the cultivated sunflower, and Heliа́nthus ruderа́lis Wenzl., the wild sunflower. The former individual species bring together all cultivated field cultures, while the latter consolidates its various wild forms. They tend to strong branching of the stem, form small calathides and small seed pod that shatter when ripe.</p>";
        
        echo '<h3>GOST  22391-89</h3>';

        echo '
            <table>
                <thead>
                    <tr>
                        <th>Indicator</th>
                        <th>Norm</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Humidity, %,</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>min</td>
                        <td>6,0</td>
                    </tr>
                    <tr>
                        <td>max</td>
                        <td>8,0</td>
                    </tr>
                    <tr>
                        <td>Weed impurities, %, max</td>
                        <td>3,0</td>
                    </tr>
                    <tr>
                        <td>Including seeds of the castor plant</td>
                        <td>Not allowed</td>
                    </tr>
                    <tr>
                        <td>Oilseed impurities, %, max</td>
                        <td>7,0</td>
                    </tr>
                    <tr>
                        <td>Oil acid index, mg KOH, max</td>
                        <td>5,0</td>
                    </tr>
                    <tr>
                        <td>Pest infestation</td>
                        <td>Not permitted, except infestation with mite not higher than Degree II</td>
                    </tr>
                </tbody>
            </table>
        ';
    }elseif ($subcategory == 'raps') {
        echo "<h2 class='category__title'>Rapeseed</h2>";
        echo '<hr>';
        echo '<br>';
        echo "<p>
        Rapeseed is a herbaceous plant of the cabbage family with an extremely developed root (stem) that penetrates into the soil up to 3 m. The main part of the root lies at the depth of 20 to 30 cm, which is of great technical importance in enhancing soil fertility. The type of inflorescence is a raceme, flowers are lemon-yellow, with 20 to 37 units at the central branch. The fruit is a pod 6 to 12 cm long, with 20 to 28 seeds. 1,000 seeds weight 3.7 to 4.5 grams.</p>";
        
        echo '<h3>GOST  10583-76</h3>';

        echo '
            <table>
                <thead>
                    <tr>
                        <th>Indicator</th>
                        <th>Norm</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fat mass fraction, %, not less</td>
                        <td>38,0</td>
                    </tr>
                    <tr>
                        <td>Humidity, %, max</td>
                        <td>12,0</td>
                    </tr>
                    <tr>
                        <td>Weed impurities, %, max</td>
                        <td>2,0</td>
                    </tr>
                    <tr>
                        <td>Oilseed impurities, %, max</td>
                        <td>6,0</td>
                    </tr>
                    <tr>
                        <td>Cereal pest infestation</td>
                        <td>Not allowed</td>
                    </tr>
                </tbody>
            </table>
        ';
    }elseif ($subcategory == 'len') {
        echo "<h2 class='category__title'>Flax</h2>";
        echo '<hr>';
        echo '<br>';
        echo "<p>
        The oil content of flax oilseeds is 42 to 44%, and they hold up to 23 % protein. Its seeds are used to produce oil, which is mainly applied for technical purposes. Its ability to rapidly dry forming a solid thin and flexible film makes it possible to manufacture high-quality paint oil, as well as varnishes and enamels.</p>";

        echo "<p>
            Flax oil has a world lead among technical oils by overall production. It is commonly used in electrical engineering, paper and soap industries, as well as in the manufacturing medicine and perfumes. Flax oil is used as a food component in small amounts.
        </p>";

        echo "<p>
            As compared to oilseeds and legumes, flax stands out due to its nutritional value and functional properties. Flax seeds are extremely rich in fat с with high levels of α-linolenic acid (hereinafter ALA) ‑ fatty acid of the omega-3 family, dietary fiber, protein with a high biological value, lignans and phenolic compounds. Due to the high content of phytocompounds with phytoestrogenic activity (lignans) and ALA, flax seeds fall into the functional food category.
        </p>";
        
        echo '<h3>GOST 10582-76</h3>';

        echo "<p>Restrictive standards for peas supplied for processing into formula feed and forage</p>";

        echo '
            <table>
                <thead>
                    <tr>
                        <th>Indicator</th>
                        <th>Norm</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fat mass fraction, %, not less</td>
                        <td>40,0</td>
                    </tr>
                    <tr>
                        <td>Humidity, %, max</td>
                        <td>11,0</td>
                    </tr>
                    <tr>
                        <td>Weed impurities, %, max</td>
                        <td>3,0</td>
                    </tr>
                    <tr>
                        <td>Oilseed impurities, %, max</td>
                        <td>6,0</td>
                    </tr>
                    <tr>
                        <td>Cereal pest infestation</td>
                        <td>Not allowed</td>
                    </tr>
                </tbody>
            </table>
        ';
    }elseif ($subcategory == 'goroh') {
        echo "<h2 class='category__title'>Peas</h2>";
        echo '<hr>';
        echo '<br>';
        echo "<p>
            Peas originate from Afghanistan and Eastern India. The fruit of peas is bean, consisting of valves and seeds. According to the structure of valves, peas fall into sugar and shelling varieties. Beans of sugar species are eaten along with their seeds in the form of so-called pods. The valves of shelling species are not edible. When seeds ripen, pod valves easily shell. Therefore, these varieties of peas are called shelling.
        </p>";
        
        echo '<h3>GOST 28674-90</h3>';

        echo "<p>Restrictive standards for peas supplied for processing into formula feed and forage</p>";

        echo '
            <table>
                <thead>
                    <tr>
                        <th rowspan="2">Indicator</th>
                        <th colspan="3">Class standard</th>
                    </tr>
                    <tr>
                        <th>Class 1</th>
                        <th>Class 2</th>
                        <th>Class 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Humidity, %, max</td>
                        <td>15,0</td>
                        <td>15,0</td>
                        <td>15,0</td>
                    </tr>
                    <tr>
                        <td>Weed impurities, %, max</td>
                        <td>1,0</td>
                        <td>4,0</td>
                        <td>8,0</td>
                    </tr>
                    <tr>
                        <td>Grain impurities, %, max</td>
                        <td>3,0</td>
                        <td>5,0</td>
                        <td>15,0</td>
                    </tr>
                    <tr>
                        <td>Small peas, %, max</td>
                        <td>2,5</td>
                        <td>5,0</td>
                        <td>Non-limited</td>
                    </tr>
                    <tr>
                        <td>Pest infestation</td>
                        <td>Not allowed</td>
                        <td colspan="2">Not permitted, except infestation with mite not higher than Degree I</td>
                    </tr>
                </tbody>
            </table>
        ';
    }elseif ($subcategory == 'soya') {
        echo "<h2 class='category__title'>Soy</h2>";
        echo '<hr>';
        echo '<br>';
        echo "<p>Soy is a universal world legume crop. Soy is used to obtain flour, butter, milk and cheese. It is added to confectionery, canned food, sauces and other food products. Soy is used only after it is industrially processed. Soybeans are not edible in their natural form.</p>";
        
        echo '<h3>GOST 17109-88</h3>';

        echo '
            <table>
                <thead>
                    <tr>
                        <th>Indicator</th>
                        <th>Norm</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Humidity, %, max</td>
                        <td>12,0</td>
                    </tr>
                    <tr>
                        <td>Weed impurities, %, max</td>
                        <td>2,0</td>
                    </tr>
                    <tr>
                        <td>Oilseed impurities, %, max</td>
                        <td>6,0</td>
                    </tr>
                    <tr>
                        <td>Pest infestation</td>
                        <td>Not allowed</td>
                    </tr>
                </tbody>
            </table>
        ';
    }
    // Аналогично для остальных подкатегорий
}
?>
