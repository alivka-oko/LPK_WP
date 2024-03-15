<?php
/*
Template Name: 404
*/
?>
<?php get_header() ?>
<section class="SecondBanner " style="background: url(<?= CFS()->get('banner',71) ?>);">
    <div class="container">
        <div class="titleText">
            <h1>Страница не найдена</h1>
        </div>
    </div>
</section>
<div class="content text-center m-auto">
    <h2 class="m-0">Ошибка</h2>
    <svg class="px-5 pt-3 pb-4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 127.56 56.69" xml:space="preserve">
        <path class="st0" d="M63.78,3.8c-11.15,0-20.19,9.04-20.19,20.19v29.78l3.28-3.9l3.37,3.9l3.37-3.9l3.37,3.9l3.37-3.9l3.37,3.9
			l3.37-3.9l3.37,3.9l3.37-3.9l3.37,3.9l3.37-3.9l3.37,3.9l0.03-0.04V23.99C83.97,12.84,74.93,3.8,63.78,3.8z M53.65,30
			c-1.96,0-3.54-1.59-3.54-3.54s1.59-3.54,3.54-3.54c1.96,0,3.54,1.59,3.54,3.54S55.61,30,53.65,30z M74.3,30
			c-1.96,0-3.54-1.59-3.54-3.54s1.59-3.54,3.54-3.54s3.54,1.59,3.54,3.54S76.25,30,74.3,30z"></path>
        <path class="st0" d="M37.01,36.21H31V4.8H20.67L0.17,36.21v8.2h20.51v10.36H31V44.41h6.02V36.21z M9.96,36.21L20.67,19.8v16.41H9.96z"></path>
        <path class="st0" d="M127.39,36.21h-6.02V4.8h-10.32L90.55,36.21v8.2h20.51v10.36h10.32V44.41h6.02V36.21z M100.34,36.21l10.71-16.41v16.41H100.34z"></path>
        <ellipse class="st1" cx="63.78" cy="54.89" rx="20.19" ry="0.35"></ellipse>
    </svg>
    <a href="/">Вернуться на главную</a>
</div>
<style>
    .content {
        width: 600px;
        padding-bottom: 5rem;
    }

    .content .h2 {
        font-size: 4rem;
        font-weight: 100;
    }

    .content svg {
        max-width: 600px;
    }

    .content svg path {
        fill: #54a957;
    }

    .content svg path:first-child {
        animation-timing-function: linear;
        animation-direction: alternate;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-name: ghost;
        opacity: 75%;
    }

    .content a {
        color: #54a957;
    }

    @keyframes ghost {
        100% {
            transform: translate(0, -3px);
        }
    }
</style>
<?php get_footer() ?>