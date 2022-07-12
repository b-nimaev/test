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
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
            </div>
        </div>
    </section>
    <section id="request">
        <div class="container">
            <div class="wrapper">
                <h2 class="sectionHeading">Подключиться просто!</h2>
                <form action="">
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
                            <label fokr="video" class="active">Видеонаблюдение</label>
                            <input type="radio" value="video" name="choose_product" id="video">
                        </div>
                    </div>

                    <div class="user-data">
                        <div class="data">
                            <input type="text" placeholder="Имя">
                            <input type="text" placeholder="Номер телефона">
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