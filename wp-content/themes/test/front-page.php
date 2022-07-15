<?php 
get_header('front-page');
?>

<main>
    <section id="banner">
        <div class="container">
            <h1 class="heading">
                Экономия нервов и денег <br> — интернет К-Телеком
            </h1>
            <ul>
                <li>5 тарифов для многоквартирных и 4 для частных домов</li>
                <li>безлимит подключенных устройств</li>
                <li>комфортная поддержка 24/7</li>
            </ul>
            <button onclick="print(e)">Подробнее</button>
        </div>
    </section>

    <section id="plans">
        <div class="container">
            <h2 class="sectionHeading">Тарифные планы</h2>
            <!-- Set up your HTML -->
            <div class="owl-carousel">
                <article data-product-id="1">
                    <h4 class="product_title">Мой клик</h4>
                    <div class="speed-internet">
                        <p class="text-muted">Скорость интернета</p>
                        <h3>до 40 Мбит/с</h3>
                        <p>Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.</p>
                    </div>
                    <div class="input-group">
                        <input type="checkbox" id="my_click_1" data-handler="1">
                        <label for="my_click_1" data-amount="100" data-handler="1">
                            <p>ТВ + 100 ₽ <br>(пакет “Базовый”)</p>
                        </label>
                    </div>
                    <div class="price" data-common-price="399">
                        <h2><span class="result-price">399</span> ₽</h2>
                        <p>в месяц</p>
                    </div>
                    <p class="description">
                        *итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
                    </p>
                    <button onclick="select(1)">Выбрать тариф</button>
                </article>

                <article data-product-id="2">
                    <h4 class="product_title">Мой клик</h4>
                    <div class="speed-internet">
                        <p class="text-muted">Скорость интернета</p>
                        <h3>до 80-100 Мбит/с</h3>
                        <p>Отличный вариант для всей семьи. Общайтесь в соцсетях и смотрите любимые фильмы и сериалы!</p>
                    </div>
                    <div class="input-group">
                        <input type="checkbox" id="my_click_2">
                        <label for="my_click_2"  data-amount="100">
                            <p>ТВ + 100 ₽ <br>(пакет “Базовый”)</p>
                        </label>
                    </div>
                    <div class="price" data-common-price="399">
                        <h2><span class="result-price">499</span> ₽</h2>
                        <p>в месяц</p>
                    </div>
                    <p class="description">
                        *итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
                    </p>
                    <button onClick="select(2)">Выбрать тариф</button>
                </article>

                <article data-product-id="3">
                    <h4 class="product_title">Мой клик</h4>
                    <div class="speed-internet">
                        <p class="text-muted">Скорость интернета</p>
                        <h3>до 40 Мбит/с</h3>
                        <p>Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.</p>
                    </div>
                    <div class="input-group">
                        <input type="checkbox" id="my_click_3">
                        <label for="my_click_3"  data-amount="100">
                            <p>ТВ + 100 ₽ <br>(пакет “Базовый”)</p>
                        </label>
                    </div>
                    <div class="price" data-common-price="399">
                        <h2><span class="result-price">399</span> ₽</h2>
                        <p>в месяц</p>
                    </div>
                    <p class="description">
                        *итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
                    </p>
                    <button onClick="select(3)">Выбрать тариф</button>
                </article>

                <article data-product-id="4">
                    <h4 class="product_title">Мой клик</h4>
                    <div class="speed-internet">
                        <p class="text-muted">Скорость интернета</p>
                        <h3>до 80-100 Мбит/с</h3>
                        <p>Отличный вариант для всей семьи. Общайтесь в соцсетях и смотрите любимые фильмы и сериалы!</p>
                    </div>
                    <div class="input-group">
                        <input type="checkbox" id="my_click_4">
                        <label for="my_click_4"  data-amount="100">
                            <p>ТВ + 100 ₽ <br>(пакет “Базовый”)</p>
                        </label>
                    </div>
                    <div class="price" data-common-price="399">
                        <h2><span class="result-price">499</span> ₽</h2>
                        <p>в месяц</p>
                    </div>
                    <p class="description">
                        *итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
                    </p>
                    <button onClick="select(4)">Выбрать тариф</button>
                </article>
            </div>
        </div>
    </section>
    <section id="request">
        <div class="container">
            <div class="wrapper">
                <h2 class="sectionHeading">Подключиться просто!</h2>
                <form id="send">
                    <div class="choose_product">
                        <div class="input-group">
                            <label for="internet">Интернет</label>
                            <input type="radio" value="internet" id="internet" name="choose_product">
                        </div>
                        <div class="input-group">
                            <label for="internettv">Интернет + ТВ</label>
                            <input type="radio" value="internettv" id="internettv" name="choose_product">
                        </div>
                        <div class="input-group">
                            <label for="telephonia">Телефония</label>
                            <input type="radio" value="telephonia" id="telephonia" name="choose_product">
                        </div>
                        <div class="input-group">
                            <label for="video" class="active">Видеонаблюдение</label>
                            <input type="radio" value="video" name="choose_product" id="video">
                        </div>
                    </div>

                    <div class="user-data">
                        <div class="data">
                            <input type="text" name="name" placeholder="Имя">
                            <input type="text" name="phone" placeholder="Номер телефона">
                        </div>
                        <input type="submit" value="Отправить">
                    </div>
                </form>
                <?php // echo( do_shortcode( '[contact-form-7 id="11" title="Contact form 1"]' ));  ?>
            </div>
        </div>
    </section>
</main>

<script>
    function print(e) {
        e.preventDefault()
        console.log('hi')
    }
</script>

<?php
get_footer('front-page');
?>