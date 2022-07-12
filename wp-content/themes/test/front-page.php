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