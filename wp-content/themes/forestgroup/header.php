<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (is_404()) {
            echo 'Ошибка 404';
        } else {
            if (is_category()) {
                single_cat_title();
            } else {
                the_title();
            }
        }
        ?>
    </title>
    <?php wp_head() ?>
</head>

<body>

    <header>

        <?php get_sidebar() ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a href="<?= home_url(); ?>" class="logotype">
                    <?php the_custom_logo() ?>
                </a>
                <ul class="nav mainMenu desktop" id="navbar">
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

                <div class="right-block d-flex">

                    <!--div class="languages align-self-center">
                        <div class="languages-active"><i class="flag ru"></i><span class="languages-name">Русский</span></div>
                        <div class="languages-dropdown">
                            <ul>
                                [
                            </ul>
                        </div>
                    </div-->
                    <div class="callback">
                        <a href="#tel:+79646182808" class="phone">
                            <?= CFS()->get('s_tel', 71); ?>
                        </a>
                        <button class="btn btn-outline-green" data-toggle="modal" data-target="#callbackModal">Заказать
                            звонок</button>
                    </div>
                </div>
                <div class="menuMobil">
                    <button class="menuMobil_btn" type="button">
                        <svg version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <?php ?>
    </header>

    <script>
        let menu = document.querySelector('.mainMenu');
        let current_li = menu.querySelector('.current-menu-item');
        current_li.classList.add('active');

        let firstlvl = document.querySelectorAll('.mainMenu>li');
        let first_elem = firstlvl[0].classList.add('first');
        let last_elem = firstlvl[firstlvl.length - 1].classList.add('last');

        let links = menu.querySelectorAll('li');
        for (link of links) {
            let a = link.querySelector('a');
            a.classList.add('nav-link');

        }
        let children = menu.querySelectorAll('.menu-item-has-children');
        for (child of children) {
            child.classList.add('submenu')
            let div = document.createElement('div');
            div.classList.add('dropdown-submenu');
            let ul = child.querySelector('ul');
            ul.classList.add('list-submenu');
            div.append(ul);
            child.append(div);
        }
    </script>