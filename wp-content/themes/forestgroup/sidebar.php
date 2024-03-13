<div class="menuMobil">
    <div class="menuMobil_container">
        <div class="menuMobil_content d-flex flex-column">
            <div class="mb-auto">
                <?php the_custom_logo() ?>
                <ul class="navMobil">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'top',
                        'container' => '',
                        'menu_class' => 'collapse navbar-collapse sub-menu-bar',
                        'menu_id' => '',
                        'items_wrap' => '%3$s',
                        'add_li_class' => 'nav-item',
                    ])
                    ?>
                </ul>
            </div>
            <div class="menuMobil_bottom-block">

                <div class="callback">
                    <a href="#tel:+79646182808" class="phone"><?= CFS()->get('s_tel',71)?></a>
                    <button class="btn btn-green menuMobil_btn-callback" data-toggle="modal" data-target="#callbackModal">Заказать звонок</button>
                </div>

                <div class="social">
                    <h5>Напишите нам:</h5>
                    <div class="social-icon">
                        <a target="_blank" href="#https://t.me/ForestGroups_bot">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.3 28.3" xml:space="preserve">
                                <path class="st0" d="M11.1,17.6L11.1,17.6L11.1,17.6L11.1,17.6L11.1,17.6L23.2,6.7c0.5-0.5-0.1-0.7-0.8-0.3L7.5,15.8l-6.4-2
                                        c-1.4-0.4-1.4-1.4,0.3-2.1L26.4,2c1.1-0.5,2.3,0.3,1.8,2L24,24.2c-0.3,1.4-1.2,1.8-2.4,1.1l-6.5-4.8l-3.1,3c0,0,0,0,0,0
                                        c-0.4,0.3-0.6,0.6-1.3,0.6L11.1,17.6z" fill="#169CDE"></path>
                            </svg>
                        </a>
                        <a target="_blank" href="#http://wa.me/79646182808">
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
                </div>
            </div>
        </div>
    </div>
    <div class="menuMobil_overlay" style="display: none;"></div>
</div>

<script>
    let logo = document.querySelector('.custom-logo-link');
    logo.classList.add('logotype');

    let nav_Mobil = document.querySelector('ul.navMobil');
    let navMobil_links = nav_Mobil.querySelectorAll('li');
    for (link of navMobil_links) {
        let a = link.querySelector('a');
        a.classList.add('navMobil-link');
    }

    let mobil_children = nav_Mobil.querySelectorAll('li.menu-item-has-children');
    for (children of mobil_children) {
        let a = children.querySelector('a');
        a.classList.add('parent');
        var svg = document.createElementNS("http://www.w3.org/2000/svg",'svg');
        svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
        svg.setAttribute('viewBox', '0 0 15 13');
        svg.innerHTML = `<path d="M7.6.3h0a1.1,1.1,0,0,0,0,1.5l3.7,3.7H1a1.1,1.1,0,0,0-1,1H0A1.1,1.1,0,0,0,1,7.6H11.3L7.6,11.2a1.1,1.1,0,0,0,0,1.5h0a1.1,1.1,0,0,0,1.5,0L14.8,7a.6.6,0,0,0,0-.9L9.1.3A1.1,1.1,0,0,0,7.6.3Z" fill="#444444"></path>`;
        a.append(svg);
        // assets/images/icon/right.svg

        let ul = children.querySelector('ul.sub-menu');
        ul.classList.add('navMobil-sub');

        // Создание строки SVG
        let svgString = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 8.7"><path d="M4.9,9.1h0a.6.6,0,0,0,0-.9L2.5,5.7H9.3A.7.7,0,0,0,10,5h0a.7.7,0,0,0-.7-.7H2.5L4.9,1.9a.7.7,0,0,0,0-1h0a.7.7,0,0,0-1,0L.1,4.7a.6.6,0,0,0,0,.6L3.9,9.1A.7.7,0,0,0,4.9,9.1Z" fill="#444444"></path></svg>';

        // Вставка SVG перед существующим контентом
        ul.insertAdjacentHTML('afterbegin', `<li><button class="back btn">${svgString} назад</button></li>`);

    }
</script>