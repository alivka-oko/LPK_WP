<?php
/*
Template Name: Товар домостроения
*/
?>
<?php get_header() ?>
<section class="SecondBanner" style="background: url(<?= CFS()->get('banner') ?>);">
    <div class="container">
        <div class="titleText">
            <h1>
                <?= CFS()->get('project_name') ?>
            </h1>
        </div>
    </div>
</section>
<section class="HouseItem py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4">
                <div class="house__btn-back"><a href="building/" class="link">← Вернуться назад</a></div>
                <div class="HouseGeneralData">
                    <div class="area pb-3">
                        <label>Общяя площадь</label>
                        <i><span>
                                <?= CFS()->get('project_area') ?>
                            </span> м²</i>
                    </div>
                    <div class="general_data__container d-flex flex-wrap py-3">
                        <?php if (CFS()->get('project_rooms')) {
                            ?>
                            <div class="general_data__item d-flex flex-wrap pb-3">
                                <span>
                                    <?= CFS()->get('project_rooms') ?>
                                </span>
                                <div class="general_data__img"> <!-- кровать -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73.7 73.7">
                                        <path
                                            d="M10.22,20.4V16.48c2.11-.1,4.75-.57,4.75-2.3L12.79,2.79H5.66L3.5,14l0,.19c0,.93.76,1.59,2.24,2a14,14,0,0,0,2.5.34V20.4a1,1,0,0,0,2,0ZM5.54,14l1.77-9.2h3.83L12.91,14C11.71,14.66,6.74,14.66,5.54,14Z">
                                        </path>
                                        <path
                                            d="M70.44,2.79H63.3L61.15,14l0,.19c0,1.73,2.64,2.2,4.74,2.3V20.4a1,1,0,1,0,2,0V16.48c2.11-.1,4.74-.57,4.74-2.3ZM63.18,14,65,4.79h3.83L70.56,14C69.36,14.66,64.38,14.66,63.18,14Z">
                                        </path>
                                        <path
                                            d="M63.36,35.69V26a6,6,0,0,0-6-6H18.78a6,6,0,0,0-6,6v9.72A4.45,4.45,0,0,0,9.29,40V65.48a1.18,1.18,0,0,0,1.18,1.18H17a1.18,1.18,0,0,0,1.18-1.18v-.3A1.18,1.18,0,0,1,19.37,64H56.73a1.17,1.17,0,0,1,1.17,1.18v.3a1.18,1.18,0,0,0,1.18,1.18h6.55a1.18,1.18,0,0,0,1.18-1.18V40A4.45,4.45,0,0,0,63.36,35.69ZM18.78,21.93H57.31a4,4,0,0,1,4,4v9.72A4.45,4.45,0,0,0,57.9,40v.61h-.82V36.11A4.14,4.14,0,0,0,52.94,32H43.11A4.14,4.14,0,0,0,39,36.11v4.52H37.13V36.11A4.14,4.14,0,0,0,33,32H23.16A4.14,4.14,0,0,0,19,36.11v4.52h-.82V40a4.45,4.45,0,0,0-3.45-4.33V26A4,4,0,0,1,18.78,21.93Zm36.3,18.7H41V36.11A2.14,2.14,0,0,1,43.11,34h9.83a2.14,2.14,0,0,1,2.14,2.14Zm-19.95,0H21V36.11A2.14,2.14,0,0,1,23.16,34H33a2.14,2.14,0,0,1,2.15,2.14Zm28.5,24H61.08a1.18,1.18,0,0,1-1.18-1.18v-.3A1.17,1.17,0,0,0,58.73,62H17.37a1.18,1.18,0,0,0-1.18,1.18v.3A1.18,1.18,0,0,1,15,64.66H12.47a1.18,1.18,0,0,1-1.18-1.18V40.16a2.55,2.55,0,0,1,2.19-2.58A2.45,2.45,0,0,1,16.19,40v1.54a1.07,1.07,0,0,0,1.07,1.07H58.84a1.06,1.06,0,0,0,1.06-1.07v-1.4a2.56,2.56,0,0,1,2.2-2.58A2.45,2.45,0,0,1,64.81,40V63.48A1.18,1.18,0,0,1,63.63,64.66Z">
                                        </path>
                                        <circle class="cls-2" cx="17.19" cy="58.63" r="1"></circle>
                                        <circle class="cls-2" cx="17.19" cy="46.63" r="1"></circle>
                                        <circle class="cls-2" cx="17.19" cy="50.63" r="1"></circle>
                                        <circle class="cls-2" cx="17.19" cy="54.63" r="1"></circle>
                                        <circle class="cls-2" cx="58.9" cy="50.63" r="1"></circle>
                                        <circle class="cls-2" cx="58.9" cy="58.63" r="1"></circle>
                                        <circle class="cls-2" cx="58.9" cy="54.63" r="1"></circle>
                                        <circle class="cls-2" cx="58.9" cy="46.63" r="1"></circle>
                                        <rect class="cls-2" x="48.96" y="24.97" width="2" height="2" rx="1"></rect>
                                        <rect class="cls-2" x="52.96" y="24.97" width="2" height="2" rx="1"></rect>
                                        <rect class="cls-2" x="56.96" y="24.97" width="2" height="2" rx="1"></rect>
                                        <rect class="cls-2" x="44.96" y="24.97" width="2" height="2" rx="1"></rect>
                                        <rect class="cls-2" x="24.96" y="24.97" width="2" height="2" rx="1"></rect>
                                        <rect class="cls-2" x="40.96" y="24.97" width="2" height="2" rx="1"></rect>
                                        <rect class="cls-2" x="16.96" y="24.97" width="2" height="2" rx="1"></rect>
                                        <rect class="cls-2" x="28.96" y="24.97" width="2" height="2" rx="1"></rect>
                                        <rect class="cls-2" x="20.96" y="24.97" width="2" height="2" rx="1"></rect>
                                        <rect class="cls-2" x="32.96" y="24.97" width="2" height="2" rx="1"></rect>
                                        <rect class="cls-2" x="36.96" y="24.97" width="2" height="2" rx="1"></rect>
                                    </svg>
                                </div>
                                <div class="w-100">Комнаты</div>
                            </div>
                            <?php
                        } ?>
                        <?php if (CFS()->get('project_bathroom')) {
                            ?>
                            <div class="general_data__item d-flex flex-wrap pb-3">
                                <span>
                                    <?= CFS()->get('project_bathroom') ?>
                                </span>
                                <div class="general_data__img"> <!-- санузел -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73.7 73.7">
                                        <rect x="64.11" y="9.5" width="1.93" height="2" rx="0.96"></rect>
                                        <rect x="60.79" y="12.82" width="1.93" height="2" rx="0.96"></rect>
                                        <rect x="57.66" y="15.95" width="1.93" height="2" rx="0.96"></rect>
                                        <rect x="60.41" y="5.8" width="1.93" height="2" rx="0.96"></rect>
                                        <rect x="57.09" y="9.12" width="1.93" height="2" rx="0.96"></rect>
                                        <rect x="53.96" y="12.25" width="1.93" height="2" rx="0.96"></rect>
                                        <rect x="54.66" y="18.95" width="1.93" height="2" rx="0.96"></rect>
                                        <path
                                            d="M19.72,45.55a1,1,0,0,0-1,1v.07a1,1,0,0,0,1.93,0v-.07A1,1,0,0,0,19.72,45.55Z">
                                        </path>
                                        <path d="M12,45.55a1,1,0,0,0-1,1v.07a1,1,0,0,0,1.93,0v-.07A1,1,0,0,0,12,45.55Z">
                                        </path>
                                        <path
                                            d="M15.87,45.55a1,1,0,0,0-1,1v.07a1,1,0,0,0,1.93,0v-.07A1,1,0,0,0,15.87,45.55Z">
                                        </path>
                                        <path
                                            d="M27.44,45.55a1,1,0,0,0-1,1v.07a1,1,0,0,0,1.93,0v-.07A1,1,0,0,0,27.44,45.55Z">
                                        </path>
                                        <path
                                            d="M32.6,40.66a.3.3,0,0,1-.27-.3V24.61a6.16,6.16,0,0,0-6.16-6.16H13.28a6.16,6.16,0,0,0-6.16,6.16V40.36a.31.31,0,0,1-.27.3,3.47,3.47,0,0,0-.64,6.68.29.29,0,0,1,.2.29v2.6a13.2,13.2,0,0,0,5.29,10.6.3.3,0,0,1,.07.41,9.42,9.42,0,0,0-1.55,5.18c0,.68.34,1,.95,1h17.1c.65,0,1-.26.95-1a9.5,9.5,0,0,0-1.54-5.18.3.3,0,0,1,.07-.41A13.19,13.19,0,0,0,33,50.23v-2.6a.3.3,0,0,1,.21-.29,3.47,3.47,0,0,0-.64-6.68Zm-23.48-16a4.16,4.16,0,0,1,4.16-4.16H26.17a4.16,4.16,0,0,1,4.16,4.16V40.28a.31.31,0,0,1-.31.32H9.43a.31.31,0,0,1-.31-.32ZM32,45.55H30.6a.56.56,0,0,0-.16.05.94.94,0,0,0-.74.92v.07a1,1,0,0,0,.73.92.31.31,0,0,0,.14,0H31v2.68a11.22,11.22,0,0,1-5.49,9.68,1,1,0,0,0-.23,1.52,7.5,7.5,0,0,1,1.79,3.62.32.32,0,0,1-.32.37H12.67a.32.32,0,0,1-.32-.37,7.57,7.57,0,0,1,1.78-3.62c.53-.66.45-1.17-.23-1.52a11.24,11.24,0,0,1-5.49-9.68V47.55h.52a.21.21,0,0,0,.1,0,1,1,0,0,0,.78-.93v-.07a1,1,0,0,0-.8-.93l-.13,0H7.41a1.48,1.48,0,0,1,0-2.95H32a1.48,1.48,0,1,1,0,2.95Z">
                                        </path>
                                        <path
                                            d="M23.58,45.55a1,1,0,0,0-1,1v.07a1,1,0,1,0,1.92,0v-.07A1,1,0,0,0,23.58,45.55Z">
                                        </path>
                                        <path
                                            d="M68.54,34.28v-19A11.15,11.15,0,0,0,57.41,4.11H52.7A11.15,11.15,0,0,0,41.57,15.24v19H39.84c-1,0-1.26.52-1,1.41a18,18,0,0,0,9.15,9l1,22.18c.08.76.43,1.09,1,1H60.19c.6,0,1-.29,1-1.1l1-22.1a18,18,0,0,0,9.16-9c.34-.85.21-1.38-.65-1.41Zm-25-19A9.14,9.14,0,0,1,52.7,6.11h4.71a9.15,9.15,0,0,1,9.13,9.13v19h-5V32.57h0v0a1,1,0,0,0-2,0v1.75h-3V25.45a4.78,4.78,0,0,0-9.55,0v.95h0v.07a1,1,0,0,0,2,0V26.4h0v-.95a2.78,2.78,0,0,1,5.55,0v8.83h-3V32.53a1,1,0,0,0-2,0v0h0v1.71H43.57ZM59.19,65.86H50.91L50,45H60.1ZM61,43H49.15a16.09,16.09,0,0,1-7.77-6.73H68.72A16,16,0,0,1,61,43Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="w-100">Санузел</div>
                            </div>
                            <?php
                        } ?>
                        <?php if (CFS()->get('project_storeroom')) {
                            ?>
                            <div class="general_data__item d-flex flex-wrap pb-3">
                                <span>
                                    <?= CFS()->get('project_storeroom') ?>
                                </span>
                                <div class="general_data__img"><!-- кладовка -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73.7 73.7">
                                        <path
                                            d="M31.91,41.75a1,1,0,0,0-1.41,0l0,0a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0l0,0A1,1,0,0,0,31.91,41.75Z">
                                        </path>
                                        <path
                                            d="M34.8,38.86a1,1,0,0,0-1.41,0l0,0a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0l0,0A1,1,0,0,0,34.8,38.86Z">
                                        </path>
                                        <path
                                            d="M29,44.64a1,1,0,0,0-1.41,0l0,0a1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0l0,0A1,1,0,0,0,29,44.64Z">
                                        </path>
                                        <path
                                            d="M23.24,50.43a1,1,0,0,0-1.42,0l0,0a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0l0,0A1,1,0,0,0,23.24,50.43Z">
                                        </path>
                                        <path
                                            d="M26.13,47.54a1,1,0,0,0-1.42,0l0,0a1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0l0,0A1,1,0,0,0,26.13,47.54Z">
                                        </path>
                                        <path
                                            d="M35.38,48.11a1,1,0,0,0,1.41-.06l0,0a1,1,0,1,0-1.47-1.36l0,0A1,1,0,0,0,35.38,48.11Z">
                                        </path>
                                        <path
                                            d="M32.6,51.12A1,1,0,0,0,34,51.06l0,0a1,1,0,1,0-1.47-1.36l0,0A1,1,0,0,0,32.6,51.12Z">
                                        </path>
                                        <path
                                            d="M38.15,45.1A1,1,0,0,0,39.56,45l0,0a1,1,0,0,0-.06-1.42,1,1,0,0,0-1.41.06l0,0A1,1,0,0,0,38.15,45.1Z">
                                        </path>
                                        <path
                                            d="M29.83,54.13h0a1,1,0,0,0,1.41-.06l0,0a1,1,0,0,0-.05-1.41h0a1,1,0,0,0-1.42,0l0,0A1,1,0,0,0,29.83,54.13Z">
                                        </path>
                                        <path
                                            d="M28.44,55.64h0a1,1,0,0,0-1.41,0l0,0a1,1,0,0,0,.05,1.41h0a1,1,0,0,0,1.42-.06l0,0A1,1,0,0,0,28.44,55.64Z">
                                        </path>
                                        <path
                                            d="M37.63,56.15A1,1,0,0,0,39,56l0,0A1,1,0,0,0,39,54.58a1,1,0,0,0-1.41.12l0,0A1,1,0,0,0,37.63,56.15Z">
                                        </path>
                                        <path
                                            d="M35,59.28a1,1,0,0,0,1.41-.12l0,0a1,1,0,1,0-1.53-1.29l0,0A1,1,0,0,0,35,59.28Z">
                                        </path>
                                        <path
                                            d="M33.65,60.84a1,1,0,0,0-1.41.12l0,0a1,1,0,1,0,1.53,1.29l0,0A1,1,0,0,0,33.65,60.84Z">
                                        </path>
                                        <path
                                            d="M42.94,49.89h0a1,1,0,0,0,1.42-.12l0,0a1,1,0,0,0-.12-1.41h0a1,1,0,0,0-1.41.11l0,0A1,1,0,0,0,42.94,49.89Z">
                                        </path>
                                        <path
                                            d="M40.29,53a1,1,0,0,0,1.41-.12l0,0a1,1,0,1,0-1.52-1.29l0,0A1,1,0,0,0,40.29,53Z">
                                        </path>
                                        <path
                                            d="M21,42.45a1,1,0,0,0-1.41-.06l0,0A1,1,0,1,0,21,43.89l0,0A1,1,0,0,0,21,42.45Z">
                                        </path>
                                        <path
                                            d="M30.07,34.13a1,1,0,0,0-1.41-.06l0,0A1,1,0,0,0,30,35.57l0,0A1,1,0,0,0,30.07,34.13Z">
                                        </path>
                                        <path
                                            d="M27.06,36.9a1,1,0,0,0-1.41-.06l0,0A1,1,0,0,0,27,38.35l0,0A1,1,0,0,0,27.06,36.9Z">
                                        </path>
                                        <path
                                            d="M18,45.22a1,1,0,0,0-1.41,0l0,0a1,1,0,1,0,1.36,1.47l0,0A1,1,0,0,0,18,45.22Z">
                                        </path>
                                        <path
                                            d="M24.05,39.68a1,1,0,0,0-1.41-.06l0,0A1,1,0,1,0,24,41.12l0,0A1,1,0,0,0,24.05,39.68Z">
                                        </path>
                                        <path
                                            d="M16,37.36a1,1,0,0,0-1.41-.11l0,0a1,1,0,0,0,1.3,1.53l0,0A1,1,0,0,0,16,37.36Z">
                                        </path>
                                        <path
                                            d="M19.08,34.71a1,1,0,0,0-1.41-.12l0,0a1,1,0,0,0,1.3,1.53l0,0A1,1,0,0,0,19.08,34.71Z">
                                        </path>
                                        <path
                                            d="M12.82,40a1,1,0,0,0-1.41-.12l0,0a1,1,0,1,0,1.3,1.52l0,0A1,1,0,0,0,12.82,40Z">
                                        </path>
                                        <path
                                            d="M25.34,29.39a1,1,0,0,0-1.41-.11l0,0a1,1,0,0,0-.11,1.41,1,1,0,0,0,1.4.11l0,0A1,1,0,0,0,25.34,29.39Z">
                                        </path>
                                        <path
                                            d="M22.21,32.05a1,1,0,0,0-1.41-.12l0,0a1,1,0,0,0-.11,1.41,1,1,0,0,0,1.4.11l.05,0A1,1,0,0,0,22.21,32.05Z">
                                        </path>
                                        <rect class="cls-2" x="49.91" y="36.04" width="2" height="1.97" rx="0.99"
                                            transform="translate(-11.27 46.84) rotate(-45)"></rect>
                                        <path
                                            d="M40.47,25.16a1,1,0,0,0-1.39,0l0,0a1,1,0,0,0,1.4,1.4l0,0A1,1,0,0,0,40.47,25.16Z">
                                        </path>
                                        <path
                                            d="M37.68,22.38a1,1,0,0,0-1.39,0l0,0a1,1,0,0,0,0,1.39,1,1,0,0,0,1.39,0l0,0A1,1,0,0,0,37.68,22.38Z">
                                        </path>
                                        <rect class="cls-2" x="44.34" y="30.46" width="2" height="1.97" rx="0.99"
                                            transform="translate(-8.96 41.27) rotate(-45)"></rect>
                                        <path d="M43.26,29.35a1,1,0,1,0-1.4-1.4l0,0a1,1,0,0,0,1.4,1.4Z"></path>
                                        <rect class="cls-2" x="47.13" y="33.25" width="2" height="1.97" rx="0.99"
                                            transform="translate(-10.11 44.06) rotate(-45)"></rect>
                                        <path
                                            d="M55.18,44.92c1.26-1.76,1.26-3.68,0-5l1.58-1.58a3.29,3.29,0,0,0,0-4.63l-5.45-5.45L70.91,8.64A4.16,4.16,0,0,0,65,2.75l-19.6,19.6L40,16.9a3.27,3.27,0,0,0-4.63,0l-1.58,1.57a3.86,3.86,0,0,0-5,0L3,37.16l-.12.1a3.24,3.24,0,0,0,0,4.57L5.07,44A3.19,3.19,0,0,0,7.28,45a3.21,3.21,0,0,0,.94,2.21l2.2,2.2a3.24,3.24,0,0,0,2.21.95,3.24,3.24,0,0,0,.95,2.21l2.2,2.2a3.21,3.21,0,0,0,2.21.94,3.19,3.19,0,0,0,.94,2.21l2.2,2.2a3.23,3.23,0,0,0,2.21.94,3.23,3.23,0,0,0,.94,2.21l2.2,2.2a3.19,3.19,0,0,0,2.21.94,3.21,3.21,0,0,0,.94,2.21l2.2,2.2a3.24,3.24,0,0,0,4.57,0ZM66.44,4.17A2.16,2.16,0,0,1,69.5,7.23L49.9,26.82l-3-3.06ZM33.25,69.38l-2.2-2.2a1.23,1.23,0,0,1,0-1.74h0a1,1,0,0,0,.07-1.35A1,1,0,0,0,29.7,64l0,0,0,0h0a1.22,1.22,0,0,1-1.73,0l-2.2-2.2a1.23,1.23,0,0,1,0-1.74h0a1,1,0,0,0,.07-1.35,1,1,0,0,0-1.41-.12l0,0,0,0h0a1.23,1.23,0,0,1-1.74,0l-2.2-2.2a1.22,1.22,0,0,1,0-1.73h0A1,1,0,0,0,19,53.26l0,0,0,0h0a1.23,1.23,0,0,1-1.74,0L15,51.12a1.23,1.23,0,0,1,0-1.74h0a1,1,0,0,0-1.34-1.47l0,0,0,0h0a1.23,1.23,0,0,1-1.74,0l-2.2-2.2a1.23,1.23,0,0,1,0-1.74h0a1,1,0,0,0,.07-1.35,1,1,0,0,0-1.41-.12l0,0,0,0h0a1.22,1.22,0,0,1-1.73,0l-2.2-2.2a1.23,1.23,0,0,1,0-1.69L29.91,20.1a2,2,0,0,1,2.57-.1l1.3,1.3h0l.05.07h0a1,1,0,0,0,1.39,0l0,0a1,1,0,0,0,0-1.39h0l-.07,0,1.59-1.59a1.27,1.27,0,0,1,1.8,0L44,23.76l5.88,5.89,5.45,5.45a1.27,1.27,0,0,1,0,1.8l-1.57,1.57h0a1,1,0,0,0-1.39,0l0,0a1,1,0,0,0,0,1.4h0l1.29,1.29a1.9,1.9,0,0,1-.1,2.58L34.94,69.43A1.24,1.24,0,0,1,33.25,69.38Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="w-100">Кладовка</div>
                            </div>
                            <?php
                        } ?>
                        <?php if (CFS()->get('project_balcony')) {
                            ?>
                            <div class="general_data__item d-flex flex-wrap pb-3">
                                <span>
                                    <?= CFS()->get('project_laundryroom') ?>
                                </span>
                                <div class="general_data__img">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73.7 73.7">
                                        <path
                                            d="M61.48,4.92H11A2.9,2.9,0,0,0,8.09,7.81v8.51a2.89,2.89,0,0,0,2.07,2.77V63.4a4.4,4.4,0,0,0,4.39,4.39H58.09a4.4,4.4,0,0,0,4.39-4.39V19a2.9,2.9,0,0,0,1.89-2.71V7.81A2.9,2.9,0,0,0,61.48,4.92Zm.89,11.4a.89.89,0,0,1-.89.89h-1a1,1,0,0,0,0,2V63.4a2.39,2.39,0,0,1-2.39,2.39H14.55a2.39,2.39,0,0,1-2.39-2.39V19.21h.32a1,1,0,0,0,0-2H11a.89.89,0,0,1-.89-.89V7.81A.89.89,0,0,1,11,6.92h50.5a.89.89,0,0,1,.89.89Z">
                                        </path>
                                        <path d="M48.55,13.07h7.58a1,1,0,0,0,0-2H48.55a1,1,0,0,0,0,2Z"></path>
                                        <circle cx="24.19" cy="12.07" r="1"></circle>
                                        <circle cx="20.19" cy="12.07" r="1"></circle>
                                        <path
                                            d="M35.84,24.08A17.55,17.55,0,1,0,53.38,41.63,17.57,17.57,0,0,0,35.84,24.08Zm0,33.1A15.55,15.55,0,1,1,51.38,41.63,15.57,15.57,0,0,1,35.84,57.18Z">
                                        </path>
                                        <path
                                            d="M46.07,36.57c.5-.4.66-.83.28-1.34a12.32,12.32,0,1,0,0,12.8,1,1,0,0,0-.28-1.34,6.16,6.16,0,0,1,0-10.12Zm-4.65,5.06a8.16,8.16,0,0,0,2.74,6.09,10.32,10.32,0,1,1,0-12.18A8.16,8.16,0,0,0,41.42,41.63Z">
                                        </path>
                                        <circle cx="28.48" cy="18.21" r="1"></circle>
                                        <circle cx="32.48" cy="18.21" r="1"></circle>
                                        <circle cx="36.48" cy="18.21" r="1"></circle>
                                        <circle cx="40.48" cy="18.21" r="1"></circle>
                                        <circle cx="48.48" cy="18.21" r="1"></circle>
                                        <circle cx="44.48" cy="18.21" r="1"></circle>
                                        <circle cx="56.48" cy="18.21" r="1"></circle>
                                        <circle cx="24.48" cy="18.21" r="1"></circle>
                                        <circle cx="52.48" cy="18.21" r="1"></circle>
                                        <circle cx="16.48" cy="18.21" r="1"></circle>
                                        <circle cx="20.48" cy="18.21" r="1"></circle>
                                        <circle cx="16.15" cy="12.07" r="1"></circle>
                                        <circle cx="52.34" cy="60.16" r="1"></circle>
                                        <circle cx="56.31" cy="60.16" r="1"></circle>
                                    </svg>
                                </div>
                                <div class="w-100">Постирочная</div>
                            </div>
                            <?php
                        } ?>
                        <?php if (CFS()->get('project_laundryroom')) {
                            ?>
                            <div class="general_data__item d-flex flex-wrap pb-3">
                                <span>
                                    <?= CFS()->get('project_balcony') ?>
                                </span>
                                <div class="general_data__img">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73.7 73.7">
                                        <path
                                            d="M49.09,35.05a1,1,0,0,0,1-1V8.21H22.26V34.05a1,1,0,0,0,2,0V23l.07,0a1,1,0,0,0,0-2h-.07V10.21h11.1a1,1,0,0,0,1.93,0h10.8V21.1a1,1,0,0,0,0,1.9v11A1,1,0,0,0,49.09,35.05Z">
                                        </path>
                                        <path
                                            d="M19.14,35.05a1,1,0,0,0,1-1V6.1H52.21V34.05a1,1,0,0,0,2,0V4.1H18.14V34.05A1,1,0,0,0,19.14,35.05Z">
                                        </path>
                                        <circle cx="36.32" cy="34.05" r="1"></circle>
                                        <circle cx="36.32" cy="18.05" r="1"></circle>
                                        <circle cx="36.32" cy="26.05" r="1"></circle>
                                        <circle cx="36.32" cy="30.05" r="1"></circle>
                                        <circle cx="36.32" cy="14.05" r="1"></circle>
                                        <circle cx="32.33" cy="22.05" r="1"></circle>
                                        <circle cx="28.33" cy="22.05" r="1"></circle>
                                        <circle cx="40.33" cy="22.05" r="1"></circle>
                                        <circle cx="44.33" cy="22.05" r="1"></circle>
                                        <path d="M36.33,21.05h0a1,1,0,0,0,0,2h0a1,1,0,0,0,0-2Z"></path>
                                        <path
                                            d="M66.49,33.42a4.42,4.42,0,0,0-8.6-.17.88.88,0,0,0,.84,1.12H59a.9.9,0,0,0,.85-.68,2.41,2.41,0,0,1,3-1.65,2.37,2.37,0,0,1,1.69,1.69,2.42,2.42,0,0,1-2.33,3.06H10.48a2.42,2.42,0,0,1-2.34-3.06A2.39,2.39,0,0,1,9.83,32a2.43,2.43,0,0,1,3,1.65.9.9,0,0,0,.85.68h.26a.88.88,0,0,0,.84-1.12,4.42,4.42,0,1,0-5.42,5.38A83.26,83.26,0,0,0,9,63.27V67.9A1.09,1.09,0,0,0,10.07,69H62.58a1.09,1.09,0,0,0,1.09-1.09V63.23a84.31,84.31,0,0,0,.75-11.15,82.75,82.75,0,0,0-1.11-13.45A4.42,4.42,0,0,0,66.49,33.42Zm-4.7,28.79h-4a93.93,93.93,0,0,0,.56-10.13,90.67,90.67,0,0,0-1-13.29h4a80.71,80.71,0,0,1,1.09,13.29A83.36,83.36,0,0,1,61.79,62.21ZM56.32,52.08a89.06,89.06,0,0,1-.57,10.13h-5.4A84.13,84.13,0,0,0,51,52.08,81.57,81.57,0,0,0,49.9,38.79h5.43A87.89,87.89,0,0,1,56.32,52.08Zm-7.35,0a82,82,0,0,1-.62,10.13H43.43a76.07,76.07,0,0,0,.66-10.13,70.52,70.52,0,0,0-1.17-13.29h5A80.19,80.19,0,0,1,49,52.08Zm-6.88,0a75.84,75.84,0,0,1-.66,10.13H37.32V38.79h3.57A68.27,68.27,0,0,1,42.09,52.08ZM35.32,38.79V62.21h-4.1a74.17,74.17,0,0,1-.67-10.13,68.3,68.3,0,0,1,1.21-13.29Zm-5.6,0a71.44,71.44,0,0,0-1.17,13.29,77.78,77.78,0,0,0,.66,10.13H24.29a83.9,83.9,0,0,1-.61-10.13,79.13,79.13,0,0,1,1.08-13.29Zm-7,0a81.57,81.57,0,0,0-1.07,13.29,84.15,84.15,0,0,0,.61,10.13h-5.4a89.06,89.06,0,0,1-.57-10.13,87.88,87.88,0,0,1,1-13.29Zm-11.43,0h4a90,90,0,0,0-.42,23.42h-4a81.39,81.39,0,0,1-.63-10.13A79.72,79.72,0,0,1,11.32,38.79ZM61.67,66.48a.51.51,0,0,1-.51.51H11.49a.51.51,0,0,1-.51-.52V64.21H61.67Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="w-100">Балкона</div>
                            </div>

                            <?php
                        } ?>
                    </div>
                </div>
                <div class="house__btn-order">
                    <button class="btn btn-green" data-toggle="modal" data-target="#callbackModal">
                        <?= CFS()->get('project_btn') ?>
                    </button>
                </div>
                <?php
                if (CFS()->get('project_pdf')) {
                    ?>
                    <div class="house__btn-pdf my-3">
                        <a href="<?= CFS()->get('project_pdf') ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49.9 62.19">
                                <path
                                    d="M48.55,5H13V67.21h49.9V19.34ZM60,19.34H48.55V7.85Zm.83,45.87H15V7H46.55V21.34H60.87Z"
                                    transform="translate(-12.97 -5.02)"></path>
                                <path
                                    d="M29.73,36.17a4.45,4.45,0,0,1-1.47,3.59A6.28,6.28,0,0,1,24.08,41H22.76v5.18H19.68V31.63h4.64a6.19,6.19,0,0,1,4,1.14A4.15,4.15,0,0,1,29.73,36.17Zm-7,2.3h1a3.36,3.36,0,0,0,2.13-.56,2,2,0,0,0,.7-1.63A2,2,0,0,0,26,34.67a2.79,2.79,0,0,0-1.86-.52h-1.4Z"
                                    transform="translate(-12.97 -5.02)"></path>
                                <path
                                    d="M44.55,38.76a7.16,7.16,0,0,1-2,5.51,8.34,8.34,0,0,1-5.9,1.91H32.48V31.63H37a7.69,7.69,0,0,1,5.54,1.88A6.91,6.91,0,0,1,44.55,38.76Zm-3.21.08c0-3.12-1.38-4.69-4.14-4.69H35.56v9.48h1.32C39.86,43.63,41.34,42,41.34,38.84Z"
                                    transform="translate(-12.97 -5.02)"></path>
                                <path d="M50.6,46.18h-3V31.63h8.35v2.52H50.6v3.76h4.94v2.52H50.6Z"
                                    transform="translate(-12.97 -5.02)"></path>
                            </svg>
                            <span>Скачать проект в PDF</span>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php
            if (CFS()->get('gallery')) {
                ?>
                <div class="col-lg-7 col-xl-8">
                    <div id="slider" class="flexslider">
                        <div class="flex-viewport" style="overflow: hidden; position: relative;">
                            <ul class="slides list"
                                style="width: 1400%; transition-duration: 0s; transform: translate3d(-730px, 0px, 0px);">
                                <?php
                                $gallery = CFS()->get('gallery');
                                foreach ($gallery as $image) {
                                    if ($gallery[0] == $image) {
                                        ?>
                                        <li class="slides__item flex-active-slide"
                                            style="width: 730px; margin-right: 0px; float: left; display: block;" data-thumb-alt="">
                                            <a href="<?= $image['gallery_img'] ?>" data-lightbox="20" title="<?= CFS()->get('project_name') ?>"
                                                class="slides__item-link">
                                                <img src="<?= $image['gallery_img'] ?>" width="600" alt="" class="slides__item-img"
                                                    draggable="false">
                                                <span class="zoom">
                                                    <svg width="16" height="16" viewBox="0 0 16 16">
                                                        <path
                                                            d="M588,203h-3v-2h3v-3h2v3A2,2,0,0,1,588,203Zm0-14h-3v-2h3a2,2,0,0,1,2,2v3h-2v-3Zm-2,3v6a1,1,0,0,1-1,1h-6a1,1,0,0,1-1-1v-6a1,1,0,0,1,1-1h6A1,1,0,0,1,586,192Zm-2,1h-4v4h4v-4Zm-8-1h-2v-3a2,2,0,0,1,2-2h3v2h-3v3Zm0,9h3v2h-3a2,2,0,0,1-2-2v-3h2v3Z"
                                                            transform="translate(-574 -187)"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <?php
                                    } else {
                                        ?>
                                        <li class="slides__item" data-thumb-alt=""
                                            style="width: 730px; margin-right: 0px; float: left; display: block;">
                                            <a href="<?= $image['gallery_img'] ?>" data-lightbox="20" title="<?= CFS()->get('project_name') ?>"
                                                class="slides__item-link">
                                                <img src="<?= $image['gallery_img'] ?>" width="600" alt="" class="slides__item-img"
                                                    draggable="false">
                                                <span class="zoom">
                                                    <svg width="16" height="16" viewBox="0 0 16 16">
                                                        <path
                                                            d="M588,203h-3v-2h3v-3h2v3A2,2,0,0,1,588,203Zm0-14h-3v-2h3a2,2,0,0,1,2,2v3h-2v-3Zm-2,3v6a1,1,0,0,1-1,1h-6a1,1,0,0,1-1-1v-6a1,1,0,0,1,1-1h6A1,1,0,0,1,586,192Zm-2,1h-4v4h4v-4Zm-8-1h-2v-3a2,2,0,0,1,2-2h3v2h-3v3Zm0,9h3v2h-3a2,2,0,0,1-2-2v-3h2v3Z"
                                                            transform="translate(-574 -187)"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <ol class="flex-control-nav flex-control-thumbs">
                            <li><img class="flex-active" draggable="false"></li>
                            <li><img draggable="false"></li>
                            <li><img draggable="false"></li>
                            <li><img draggable="false"></li>
                            <li><img draggable="false"></li>
                        </ol>
                        <ul class="flex-direction-nav">
                            <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                            <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
                <?php
            } ?>
        </div>
    </div>
</section>
<?php
if (CFS()->get('project_about')) {
    ?>
    <section class="HouseDescription">
        <div class="container">
            <div class="block px-5 py-4">
                <h2 class="mb-3">О проекте</h2>
                <div class="description">
                    <?= CFS()->get('project_about') ?>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>

<?php
if (CFS()->get('project_plans')) {
    $plans = CFS()->get('project_plans');
    ?>
    <section class="HousePlan py-5">
        <div class="container">
            <h3>Планировки</h3>
            <div class="row">
                <?php
                foreach ($plans as $plan) {
                    ?>
                    <div class="col-md-6">
                        <img class="w-100 house_plan__img mb-4" src="<?= $plan['project_floor_img'] ?>"
                            alt="План первого этажа">
                        <div class="area">
                            <label>Площадь
                                <?= $plan['project_floor'] ?> этажа
                            </label>
                            <i><span>
                                    <?= $plan['project_floor_area'] ?>
                                </span> м²</i>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php
}
?>


<?php
get_footer();
?>