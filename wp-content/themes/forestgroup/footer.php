<footer>
    <div class="gray-block lightGray">
        <div class="container">
            <div class="row">
                <div class="block left col-sm-12 col-md-3">
                    <a href="<?= get_home_url() ?>" class="logotype"><?php the_custom_logo() ?></a>
                    <div class="phone">
                        <a href="tel:<?= CFS()->get('s_tel',71)?>"><?= CFS()->get('s_tel',71)?></a>
                    </div>
                    <span class="address"><?= CFS()->get('s_address',71)?></span>
                </div>
                <div class="block center col-sm-12 col-md-6">
                    <div class="nav row">
                        <?php if (is_active_sidebar('footer_sidebar')) : ?>
                            <?php dynamic_sidebar('footer_sidebar'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="block right col-sm-12 col-md-3">
                    <h5>Напишите нам:</h5>
                    <a target="_blank" href="mailto:<?= CFS()->get('s_mail', 71) ?>?subject=Вопрос с сайта"><?= CFS()->get('s_mail', 71) ?></a>

                    <div class="social decktop">
                        <a target="_blank" href="https://t.me/ForestGroups_bot">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.3 28.3" xml:space="preserve">
                                <path class="st0" d="M11.1,17.6L11.1,17.6L11.1,17.6L11.1,17.6L11.1,17.6L23.2,6.7c0.5-0.5-0.1-0.7-0.8-0.3L7.5,15.8l-6.4-2
                                    c-1.4-0.4-1.4-1.4,0.3-2.1L26.4,2c1.1-0.5,2.3,0.3,1.8,2L24,24.2c-0.3,1.4-1.2,1.8-2.4,1.1l-6.5-4.8l-3.1,3c0,0,0,0,0,0
                                    c-0.4,0.3-0.6,0.6-1.3,0.6L11.1,17.6z" fill="#169CDE"></path>
                            </svg>
                        </a>
                        <a target="_blank" href="http://wa.me/79646182808">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.3 28.3" fill="none">
                                <path class="st0" d="M24.2,4.2C21.6,1.5,18,0,14.2,0C6.5,0,0.1,6.3,0.1,14c0,2.5,0.6,4.9,1.9,7l-2,7.3l7.5-2c2,1.2,4.4,1.8,6.7,1.8
                                        c7.8,0,14.1-6.3,14.1-14C28.3,10.3,26.8,6.8,24.2,4.2z M21.1,18.9c-0.3,0.9-1.7,1.6-2.4,1.7c-0.6,0.1-1.4,0.2-2.2-0.1
                                        c-0.5-0.1-1.2-0.3-2-0.7c-3.5-1.5-5.8-5.1-6-5.3c-0.1-0.2-1.4-1.9-1.4-3.6C7.1,9.2,8,8.3,8.3,8C8.6,7.6,9,7.6,9.2,7.8
                                        c0.3,0,0.5,0,0.7,0c0.2,0,0.5-0.1,0.8,0.6c0.3,0.7,1,2.4,1.1,2.6c0.1,0.2,0.1,0.4,0,0.6c-0.2,0.2-0.2,0.4-0.4,0.6
                                        c-0.1,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.3-0.2,0.7c0.2,0.3,1,1.5,2,2.4c1.3,1.2,2.4,1.5,2.8,1.7c0.4,0.2,0.6,0.1,0.8-0.1
                                        c0.2-0.3,0.9-1,1.1-1.4c0.2-0.4,0.5-0.3,0.8-0.2c0.3,0.1,2,0.9,2.4,1.1c0.4,0.2,0.6,0.3,0.7,0.4C21.4,17.5,21.4,18.2,21.1,18.9z" fill="#58e870"></path>
                            </svg>
                        </a>
                    </div>

                    <div class="social mobil">
                        <a target="_blank" href="https://t.me/ForestGroups_bot">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.3 28.3" xml:space="preserve">
                                <path class="st0" d="M11.1,17.6L11.1,17.6L11.1,17.6L11.1,17.6L11.1,17.6L23.2,6.7c0.5-0.5-0.1-0.7-0.8-0.3L7.5,15.8l-6.4-2
                                    c-1.4-0.4-1.4-1.4,0.3-2.1L26.4,2c1.1-0.5,2.3,0.3,1.8,2L24,24.2c-0.3,1.4-1.2,1.8-2.4,1.1l-6.5-4.8l-3.1,3c0,0,0,0,0,0
                                    c-0.4,0.3-0.6,0.6-1.3,0.6L11.1,17.6z" fill="#169CDE"></path>
                            </svg>
                        </a>
                        <a target="_blank" href="http://wa.me/79646182808">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.3 28.3" fill="none">
                                <path class="st0" d="M24.2,4.2C21.6,1.5,18,0,14.2,0C6.5,0,0.1,6.3,0.1,14c0,2.5,0.6,4.9,1.9,7l-2,7.3l7.5-2c2,1.2,4.4,1.8,6.7,1.8
                                        c7.8,0,14.1-6.3,14.1-14C28.3,10.3,26.8,6.8,24.2,4.2z M21.1,18.9c-0.3,0.9-1.7,1.6-2.4,1.7c-0.6,0.1-1.4,0.2-2.2-0.1
                                        c-0.5-0.1-1.2-0.3-2-0.7c-3.5-1.5-5.8-5.1-6-5.3c-0.1-0.2-1.4-1.9-1.4-3.6C7.1,9.2,8,8.3,8.3,8C8.6,7.6,9,7.6,9.2,7.8
                                        c0.3,0,0.5,0,0.7,0c0.2,0,0.5-0.1,0.8,0.6c0.3,0.7,1,2.4,1.1,2.6c0.1,0.2,0.1,0.4,0,0.6c-0.2,0.2-0.2,0.4-0.4,0.6
                                        c-0.1,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.3-0.2,0.7c0.2,0.3,1,1.5,2,2.4c1.3,1.2,2.4,1.5,2.8,1.7c0.4,0.2,0.6,0.1,0.8-0.1
                                        c0.2-0.3,0.9-1,1.1-1.4c0.2-0.4,0.5-0.3,0.8-0.2c0.3,0.1,2,0.9,2.4,1.1c0.4,0.2,0.6,0.3,0.7,0.4C21.4,17.5,21.4,18.2,21.1,18.9z" fill="#58e870"></path>
                            </svg>
                        </a>
                    </div>
                    <span>Пишите в любое время дня и ночи</span>
                </div>
            </div>
        </div>
    </div>
    <div class="black-block">
        <div class="container">
            <div class="row">
                <div class="block left col-sm-12 col-md-4">
                    <a href="<?= CFS()->get('s_footer_doc-file', 71); ?>" target="_blank"><?= CFS()->get('s_footer_doc-name', 71); ?></a>
                </div>
                <div class="block center col-sm-12 col-md-4">
                    2018 - 2024 © <?= CFS()->get('s_footer_company', 71); ?>. Все права защищены.
                </div>
                <div class="block right col-sm-12 col-md-4">
                    <?= CFS()->get('s_footer_info', 71); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Modal -->
<div class="remodal-wrapper modal fade" id="callbackModal" tabindex="-1" role="dialog" aria-labelledby="callbackModalLabel" style="display: none;" aria-hidden="true">
    <div class="remodal modal-dialog" role="document">
        <div class="remodal-content">
            <div class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"></div>
            <div class="remodal-title">
                <h3>Заказать звонок</h3>
                <span>Оставьте заявку и наш менеджер свяжется с Вами в ближайшее время</span>
            </div>
           <?= do_shortcode('[contact-form-7 id="afad669" title="Заказать звонок"]')?>
        </div>
    </div>
</div>
<!-- End modal -->


<script>
    let footer_a =document.querySelector('footer .nav.row').querySelectorAll('a');
    footer_a.forEach(element => {
        element.style.color = '#6e797f';
    });

</script>
<?php wp_footer(); ?>
</body>

</html>