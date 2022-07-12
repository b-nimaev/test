<?php
/**
 * Footer for front-page
 */

 ?>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="logotype">
                        <?php echo(get_custom_logo()); ?>
                    </div>
                    <div class="footer-text">
                        <p>© 2018–2022 ООО «К-Телеком»</p>
                    </div>
                    <div class="socials">
                        <ul>
                            <li><a href="javascript:void(0)"><img src="<?php echo(get_template_directory_uri()); ?>/assets/icons/inst.png" alt=""></a></li>
                            <li><a href="javascript:void(0)"><img src="<?php echo(get_template_directory_uri()); ?>/assets/icons/youtube.png" alt=""></a></li>
                            <li><a href="javascript:void(0)"><img src="<?php echo(get_template_directory_uri()); ?>/assets/icons/vk.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
