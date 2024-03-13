<?php
/*
Template Name: Калькулятор
*/
?>
<?php get_header() ?>

<section class="SecondBanner " style="background: url(<?= CFS()->get('background') ?>);">
    <div class="container">
        <div class="titleText">
            <h1><?= CFS()->get('name') ?></h1>
        </div>
    </div>
</section>
<section class="content">
    <div class="container">
        <div id="calculator" class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="parameters block p-4">
                    <h3>Укажите параметры</h3>
                    <div class="form-group d-flex align-items-center">
                        <label class="w-100" for="height">Высота</label>
                        <input type="text" class="form-control text-center" id="height" name="height" value="1">
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <label class="w-100" for="width">Ширина</label>
                        <input type="text" class="form-control text-center" id="width" name="width" value="1">
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <label class="w-100" for="length">Длина</label>
                        <input type="text" class="form-control text-center" id="length" name="length" value="1">
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <label class="w-100" for="count">Количество</label>
                        <input type="text" class="form-control text-center" id="count" name="count" value="1">
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <label class="w-100" for="price">Цена за 1 м<sup>3</sup></label>
                        <input type="text" class="form-control text-center" id="price" name="price" value="1">
                    </div>
                    <button class="btn btn-big btn-green w-100" data-action="calculate">Расчитать</button>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="original-data block p-4">
                    <h3>Исходные данные</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span>Высота</span>
                            <div class="height w-50 text-end">
                                <b>- - -</b><span>мм</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span>Ширина</span>
                            <div class="width w-50 text-end">
                                <b>- - -</b><span>мм</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span>Длина</span>
                            <div class="length w-50 text-end">
                                <b>- - -</b><span>мм</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span>Количество</span>
                            <div class="count w-50 text-end">
                                <b>- - -</b><span>шт</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span>Цена за 1 м<sup>3</sup></span>
                            <div class="price w-50 text-end">
                                <b>- - -</b><span>руб</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="calculation-result block p-4">
                    <h3>Результаты расчёта</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span>Объём 1 шт</span>
                            <div class="volume-piece w-50 text-end">
                                <b>- - -</b><span>м<sup>3</sup></span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span>Объём</span>
                            <div class="volume w-50 text-end">
                                <b>- - -</b><span>м<sup>3</sup></span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span>Количество в м<sup>3</sup></span>
                            <div class="count-cube w-50 text-end">
                                <b>- - -</b><span>шт</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span>Количество м<sup>2</sup></span>
                            <div class="count-square w-50 text-end">
                                <b>- - -</b><span>м<sup>2</sup></span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span>Цена за шт</span>
                            <div class="amount-piece w-50 text-end">
                                <b>- - -</b><span>руб</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span>Общая цена</span>
                            <div class="total-amount w-50 text-end">
                                <b>- - -</b><span>руб</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function calculate() {
        const parameters = $('#calculator .parameters'),
            original = $('#calculator .original-data'),
            result = $('#calculator .calculation-result')

        let height = parameters.find('input[name="height"]').val(),
            width = parameters.find('input[name="width"]').val(),
            length = parameters.find('input[name="length"]').val(),
            count = parameters.find('input[name="count"]').val(),
            price = parameters.find('input[name="price"]').val(),
            volumePiece = (height / 1000) * (width / 1000) * (length / 1000),
            volume = (Math.round((volumePiece * count) * 1000)) / 1000,
            quantityPack = (Math.round((1 / volumePiece) * 1000)) / 1000,
            amountPiece = volumePiece * price,
            totalAmount = volume * price,
            countSquare = (Math.round(((width / 1000) * (length / 1000) * count) * 1000)) / 1000

        // Указываем вводные данные
        original.find('.height b').text(height)
        original.find('.width b').text(width)
        original.find('.length b').text(length)
        original.find('.count b').text(count)
        original.find('.price b').text(price)

        // Указываем итоговые данные
        result.find('.volume-piece b').text(volumePiece.toFixed(4))
        result.find('.volume b').text(volume.toFixed(3))
        result.find('.count-cube b').text(quantityPack.toFixed(2))
        result.find('.count-square b').text(quantityPack.toFixed(2))
        result.find('.amount-piece b').text(amountPiece.toFixed(2))
        result.find('.total-amount b').text(totalAmount.toFixed(2))
        result.find('.count-square b').text(countSquare.toFixed(2))
    }

    $().ready(function() {
        $('#calculator').on('click', 'button[data-action="calculate"]', function() {
            calculate()
        })
    })
</script>

<?php get_footer() ?>