<?php
/*
Template Name: Вопросы и ответы
*/
?>
<?php get_header() ?>

<section class="SecondBanner " style="background: url(<?= CFS()->get('background') ?>);">
    <div class="container">
        <div class="titleText">
            <h1><?= CFS()->get('name') ?></h1>
            <h3><?= CFS()->get('slogan') ?></h3>
        </div>
    </div>
</section>
<section class="QuestionsAnswers content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                $questions = CFS()->get('questions');
                foreach ($questions as $question) {
                ?>
                    <div class="questions-item">
                        <div class="question">
                            <h5><?= $question['question'] ?></h5>
                        </div>
                        <div class="answer">
                            <?= $question['answer'] ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-md-4">
                <div class="ask_a_question">
                    <div class="question-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57.6 53">
                            <g id="fdd24c5f-cca7-4e08-8a02-6c66fdb5a592" class="fon">
                                <path d="M52.4,27.5,29.9,39,7.4,27.5V47.1a3.9,3.9,0,0,0,4,3.9h37a3.9,3.9,0,0,0,4-3.9Z" transform="translate(-1.1 -3.7)"></path>
                            </g>
                            <g id="b27b2577-408b-4d74-95ad-10efead1c0b7" class="body">
                                <path d="M56.4,24.5,44,16.9a1,1,0,0,0-1.4.3h0a1,1,0,0,0,.3,1.4L53,24.8a.5.5,0,0,1,0,.9l-22.4,12a1.4,1.4,0,0,1-1.5,0L6.8,25.7a.5.5,0,0,1,0-.9l10-6.2a1,1,0,0,0,.4-1.4,1,1,0,0,0-1.4-.3L3.4,24.5a6.3,6.3,0,0,0-2.3,4.8V50.1a6.7,6.7,0,0,0,6.6,6.6H52.1a6.6,6.6,0,0,0,6.6-6.6V29.3A6,6,0,0,0,56.4,24.5Zm-1.2,2.3a.6.6,0,0,1,.8.2,3.7,3.7,0,0,1,.7,2.3V49.7c0,.5,0,1.7-.5,2.1s-1.8-.4-1.8-.4l-17-14.1a.6.6,0,0,1,.2-1Zm-33,10.5L5.4,51.3s-.9,1-1.8.5-.5-1.3-.5-1.7V29.3A4.5,4.5,0,0,1,3.8,27a.7.7,0,0,1,.9-.2l17.4,9.5A.6.6,0,0,1,22.2,37.3ZM7.1,54.7A.9.9,0,0,1,6.5,53l18-15a.6.6,0,0,1,.7-.1L29.1,40a1.4,1.4,0,0,0,1.5,0l3.9-2.1a.6.6,0,0,1,.7.1L53.3,53.1a.9.9,0,0,1-.6,1.6Z" transform="translate(-1.1 -3.7)"></path>
                                <path d="M22.5,12a.9.9,0,0,0,.9-.8,6.5,6.5,0,0,1,12.9,1.3c-.1,2-1.4,3-2.9,4.1s-4.1,3.2-4.4,7.2a.9.9,0,0,0,.9,1,.9.9,0,0,0,.9-.8c.2-3.2,1.9-4.5,3.7-5.9s3.8-2.9,3.7-6.3a8.4,8.4,0,0,0-6.4-7.9A8.3,8.3,0,0,0,21.6,11,.8.8,0,0,0,22.5,12Z" transform="translate(-1.1 -3.7)"></path>
                                <circle cx="28.8" cy="25.3" r="1.5"></circle>
                            </g>
                        </svg>
                    </div>
                    <div class="question-text">
                        <h5 class="introtext">Нужна консультация?</h5>
                        <span>Наши специалисты ответят на любой интересующий вопрос</span>
                    </div>
                    <div class="question-btn">
                        <button class="btn btn-outline-green" data-toggle="modal" data-target="#callbackModal">Задать вопрос</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php get_footer() ?>