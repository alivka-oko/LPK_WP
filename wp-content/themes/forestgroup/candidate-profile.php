<?php
/*
Template Name: Анкета кандидата
*/
?>
<?php get_header() ?>
<section class="SecondBanner " style="background: url(/assets/template/images/banner/backgroundBanner8.jpg);">
    <div class="container">
        <div class="titleText">
            <h1>Анкета кандидата</h1>
            <h3>Максимально полно заполните анкету, для того чтобы мы сразу обратили на вас внимание</h3>
        </div>
    </div>
</section>
<section class="CandidateProfile content">
    <div class="container">
        <div class="link_back">
            <a href="jobs/">Вернуться назад</a>
        </div>
        <form action="candidate-profile" method="post" class="ajax_form af_example" id="CandidateProfile">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nameCandidate">Фамилия Имя Отчество</label>
                    <input type="text" class="form-control" id="nameCandidate" name="nameCandidate"
                        placeholder="Иванов Иван Иванович">
                </div>
                <div class="form-group col-md-6">
                    <label for="gender">Ваш пол</label>
                    <select id="gender" name="gender" class="form-control" style="font-weight: 200;">
                        <option selected="" value="Не указано">Выберите один из вариантов</option>
                        <option value="Мужчина">Мужчина</option>
                        <option value="Женщина">Женщина</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="DOB">Дата рождения</label>
                    <input type="text" class="form-control" id="DOB" name="DOB" placeholder="01.01.1990">
                </div>
                <div class="form-group col-md-6">
                    <label for="citizenship">Гражданство</label>
                    <input type="text" class="form-control" id="citizenship" name="citizenship"
                        placeholder="Российское">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="familyStatus">Семейное положение</label>
                    <select id="familyStatus" name="familyStatus" class="form-control men" style="font-weight: 200;">
                        <option selected="" value="Не указано">Выберите один из вариантов</option>
                        <option class="men" value="Не женат">Не женат</option>
                        <option class="men" value="Разведен">Разведен</option>
                        <option class="men" value="Женат">Женат</option>
                        <option class="women" value="Не замужем">Не замужем</option>
                        <option class="women" value="Разведена">Разведена</option>
                        <option class="women" value="Замужем">Замужем</option>
                    </select>
                </div>
                <div class="form-group col-md-6 familyStatus">
                    <label for="nameSpouse" class="nameSpouse-ending men">ФИО супруг</label>
                    <input type="text" class="form-control" id="nameSpouse" name="nameSpouse"
                        placeholder="Иванов Иван Иванович">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="haveChildren">Наличие детей</label>
                    <select id="haveChildren" name="haveChildren" class="form-control" style="font-weight: 200;">
                        <option selected="" value="Не указано">Выберите один из вариантов</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3 и более">3 и более</option>
                        <option>Детей нет</option>
                    </select>
                </div>

                <div class="form-group col-md-6 ageChildren">
                    <label for="ageChildren">Возраст</label>
                    <input type="text" class="form-control" id="ageChildren" name="ageChildren" placeholder="15 лет">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone">Телефон для связи</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="+7 999 888 77 66">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Электронная почта</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="ivanov@mail.ru">
                </div>
            </div>
            <div class="form-row address">
                <input type="checkbox" id="addressCheck">
                <div class="form-group registrationAddress col-md-8">
                    <label for="registrationAddress">Адрес по прописке</label>
                    <input type="text" class="form-control" id="registrationAddress" name="registrationAddress"
                        placeholder="215113, Россия, Смоленская обл., Вязьма, ул.Новая Бозня, д.3, помещение 12">
                </div>
                <div class="form-group addressCheck col-md-4">
                    <div class="form-check">
                        <label class="form-check-label" for="addressCheck">
                            <span class="addressCheck-input"></span>
                            Не проживаю по месту прописки
                        </label>
                    </div>
                </div>
                <div class="form-group residenceAddress col-md-8">
                    <label for="residenceAddress">Адрес места жительства</label>
                    <input type="text" class="form-control" id="residenceAddress" name="residenceAddress"
                        placeholder="215113, Россия, Смоленская обл., Вязьма, ул.Новая Бозня, д.3, помещение 12">
                </div>
            </div>
            <hr>
            <h4>Образование</h4>
            <div class="form-row">
                <div class="col-md-10" id="education">

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="dateStudy1">Года обучения</label>
                            <input type="text" class="form-control" id="dateStudy1" name="dateStudy1"
                                placeholder="2008-2013">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="educationalInstitution1">Наименование учебного заведения</label>
                            <input type="text" class="form-control" id="educationalInstitution1"
                                name="educationalInstitution1" placeholder="Московский государственный Университет">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="specialty1">Специальность</label>
                            <input type="text" class="form-control" id="specialty1" name="specialty1"
                                placeholder="Инженер">
                        </div>
                    </div>

                </div>
                <div class="col-md-2 addRow">
                    <a class="btn btn-green" onclick="addRuwEducation()">Добавить строку</a>
                </div>
            </div>
            <hr>
            <h4>Опыт работы</h4>
            <div class="form-row">
                <div class="col-md-10" id="experience">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="yearsWork1">Года работы</label>
                            <input type="text" class="form-control" id="yearsWork1" name="yearsWork1"
                                placeholder="2008-2013">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nameCompany1">Наименование организации</label>
                            <input type="text" class="form-control" id="nameCompany1" name="nameCompany1"
                                placeholder="500 000">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="positionResponsibilities1">Должность и основные обязанности</label>
                            <textarea type="text" class="form-control" id="positionResponsibilities1"
                                name="positionResponsibilities1"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reasonForDismissal1">Причина увольнения</label>
                            <textarea type="text" class="form-control" id="reasonForDismissal1"
                                name="reasonForDismissal1"></textarea>
                        </div>
                    </div>

                </div>
                <div class="col-md-2 addRow">
                    <a class="btn btn-green" onclick="addRuwExperience()">Добавить строку</a>
                </div>
            </div>

            <hr>
            <h4>Дополнительные сведения</h4>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Знание ПК</label>
                </div>
                <div class="form-group col-md-9">
                    <div class="form-check form-check-inline">
                        <label class="custom" for="firstLevel">
                            <input class="radio" type="radio" name="PCknowledge" id="firstLevel"
                                value="Начальный уровень">
                            <span class="radio-custom"></span>
                            <span class="label">Начальный уровень</span>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="custom" for="confidentLevel">
                            <input class="radio" type="radio" name="PCknowledge" id="confidentLevel"
                                value="Уверенный пользователь">
                            <span class="radio-custom"></span>
                            <span class="label">Уверенный пользователь</span>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="custom" for="advancedLevel">
                            <input class="radio" type="radio" name="PCknowledge" id="advancedLevel"
                                value="Продвинутый пользователь">
                            <span class="radio-custom"></span>
                            <span class="label">Продвинутый пользователь</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Знание иностранных языков</label>
                </div>
                <div class="form-group col-md-9">
                    <div class="form-check form-check-inline">
                        <label class="custom" for="english">
                            <input class="checkbox" type="checkbox" id="english" name="english" value="Английский">
                            <span class="checkbox-custom"></span>
                            <span class="label">Английский</span>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="custom" for="deutsch">
                            <input class="checkbox" type="checkbox" id="deutsch" name="deutsch" value="Немецкий">
                            <span class="checkbox-custom"></span>
                            <span class="label">Немецкий</span>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="custom" for="otherLanguages">
                            <input class="checkbox" type="checkbox" id="otherLanguages" name="otherLanguages"
                                value="Другие языки">
                            <span class="checkbox-custom"></span>
                            <span class="label">Другие языки</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Наличие водительских прав</label>
                </div>
                <div class="form-group col-md-9">
                    <div class="form-check form-check-inline">
                        <label class="custom" for="categoryA">
                            <input class="checkbox" type="checkbox" id="categoryA" name="categoryA" value="Категория A">
                            <span class="checkbox-custom"></span>
                            <span class="label">Категория A</span>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="custom" for="categoryB">
                            <input class="checkbox" type="checkbox" id="categoryB" name="categoryB" value="Категория B">
                            <span class="checkbox-custom"></span>
                            <span class="label">Категория B</span>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="custom" for="categoryC">
                            <input class="checkbox" type="checkbox" id="categoryC" name="categoryC" value="Категория C">
                            <span class="checkbox-custom"></span>
                            <span class="label">Категория C</span>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="custom" for="categoryD">
                            <input class="checkbox" type="checkbox" id="categoryD" name="categoryD" value="Категория D">
                            <span class="checkbox-custom"></span>
                            <span class="label">Категория D</span>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="custom" for="categoryE">
                            <input class="checkbox" type="checkbox" id="categoryE" name="categoryE" value="Категория E">
                            <span class="checkbox-custom"></span>
                            <span class="label">Категория E</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Служба в армии</label>
                </div>
                <div class="form-group col-md-9">
                    <div class="form-check form-check-inline">
                        <label class="custom" for="draftee">
                            <input class="radio" type="radio" name="militaryService" id="draftee" value="Призывник">
                            <span class="radio-custom"></span>
                            <span class="label">Призывник</span>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="custom" for="deferment">
                            <input class="radio" type="radio" name="militaryService" id="deferment" value="Отсрочка">
                            <span class="radio-custom"></span>
                            <span class="label">Отсрочка</span>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="custom" for="served">
                            <input class="radio" type="radio" name="militaryService" id="served" value="Служил">
                            <span class="radio-custom"></span>
                            <span class="label">Служил</span>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="custom" for="unfit">
                            <input class="radio" type="radio" name="militaryService" id="unfit" value="Не годен">
                            <span class="radio-custom"></span>
                            <span class="label">Не годен</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>У Вас есть вредные привычки?</label>
                </div>
                <input type="checkbox" class="input-question-hide" id="badHabits-question">
                <div class="form-group col-md-2 question">
                    <div class="form-check">
                        <label class="form-check-label" for="badHabits-question">
                            <span class="questionCheck-input"></span>
                            Да
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-7 answer">
                    <input type="text" class="form-control" id="badHabits-text" name="badHabits-text"
                        placeholder="Курение">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>У Вас есть судимость?</label>
                </div>
                <input type="checkbox" class="input-question-hide" id="criminalRecord-question">
                <div class="form-group col-md-2 question">
                    <div class="form-check">
                        <label class="form-check-label" for="criminalRecord-question">
                            <span class="questionCheck-input"></span>
                            Да
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-7 answer">
                    <input type="text" class="form-control" id="criminalRecord-text" name="criminalRecord-text"
                        placeholder="Укажите статью">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Вы уже работали в нашей компании?</label>
                </div>
                <input type="checkbox" class="input-question-hide" id="workedCompany-question">
                <div class="form-group col-md-2 question">
                    <div class="form-check">
                        <label class="form-check-label" for="workedCompany-question">
                            <span class="questionCheck-input"></span>
                            Да
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-7 answer">
                    <input type="text" class="form-control" id="workedCompany-text" name="workedCompany-text"
                        placeholder="Укажите должность">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Работают ли родственники/друзья в нашей компании?</label>
                </div>
                <input type="checkbox" class="input-question-hide" id="relativesCompany-question">
                <div class="form-group col-md-2 question">
                    <div class="form-check">
                        <label class="form-check-label" for="relativesCompany-question">
                            <span class="questionCheck-input"></span>
                            Да
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-7 answer">
                    <input type="text" class="form-control" id="relativesCompany-text" name="relativesCompany-text"
                        placeholder="ФИО и должность">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="careerObjective">Желаемая должность</label>
                    <input type="text" class="form-control" id="CareerObjective" name="CareerObjective"
                        placeholder="Директор">
                </div>
                <div class="form-group col-md-6">
                    <label for="expectedSalary">Ожидаемая заработная плата</label>
                    <input type="text" class="form-control" id="expectedSalary" name="expectedSalary"
                        placeholder="500 000">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="jobAvailability">Откуда получена информация о наличии вакансии</label>
                    <textarea type="text" class="form-control" id="jobAvailability" name="jobAvailability"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="yourGoal">Какие цели Вы преследуете поступая к нам на работу</label>
                    <textarea type="text" class="form-control" id="yourGoal" name="yourGoal"></textarea>
                </div>
            </div>
            <div class="form-group privacy-policy">
                <label class="custom">
                    <input class="checkbox" type="checkbox"
                        onchange="document.getElementById('CandidateProfileBtn').disabled = !this.checked">
                    <span class="checkbox-custom"></span>
                    <span class="label"> <a href="https://forest-groups.ru/ru/doc/privacy-policy.pdf" target="_blank">Я
                            соглашаюсь с политикой обработки персональных данных</a></span>
                </label>
            </div>
            <div class="form-button">
                <input type="submit" class="btn btn-big btn-green" id="CandidateProfileBtn" value="Отправить"
                    disabled="">
            </div>

            <input type="hidden" name="af_action" value="ae1c562f7fb42c74a64d12b12c64af35">
        </form>
    </div>
</section>
<script type="text/javascript">
    var numEdu = 2;
    var numExp = 2;
    function addRuwEducation() {
        var html = "<div class='form-row'>\n <div class='form-group col-md-3'>\n <label for='dateStudy" + numEdu + "'>Года обучения<\/label>\n <input type='text' class='form-control' id='dateStudy" + numEdu + "' name='dateStudy" + numEdu + "' placeholder='2008-2013'>\n <\/div>\n <div class='form-group col-md-5'>\n <label for='educationalInstitution" + numEdu + "'>Наименование учебного заведения<\/label>\n <input type='text' class='form-control' id='educationalInstitution" + numEdu + "' name='educationalInstitution" + numEdu + "' placeholder='Московский государственный Университет'>\n <\/div>\n <div class='form-group col-md-4'>\n <label for='specialty" + numEdu + "'>Специальность<\/label>\n <input type='text' class='form-control' id='specialty" + numEdu + "' name='specialty" + numEdu + "' placeholder='Инженер'>\n <\/div>\n <\/div>";
        $('#education').append(html);
        numEdu++;
        return false;
    }
    function addRuwExperience() {
        var html = "<div class='form-row'>\n <div class='form-group col-md-6'>\n <label for='yearsWork" + numExp + "'>Года работы<\/label>\n <input type='text' class='form-control' id='yearsWork" + numExp + "'  name='yearsWork" + numExp + "' placeholder='2008-2013'>\n <\/div>\n <div class='form-group col-md-6'>\n <label for='nameCompany" + numExp + "'>Наименование организации<\/label>\n <input type='text' class='form-control' id='nameCompany" + numExp + "' name='nameCompany" + numExp + "' placeholder='500 000'>\n <\/div>\n <div class='form-group col-md-6'>\n <label for='positionResponsibilities" + numExp + "'>Должность и основные обязанности<\/label>\n <textarea type='text' class='form-control' id='positionResponsibilities" + numExp + "' name='positionResponsibilities" + numExp + "'><\/textarea>\n <\/div>\n <div class='form-group col-md-6'>\n <label for='reasonForDismissal" + numExp + "'>Причина увольнения<\/label>\n <textarea type='text' class='form-control' id='reasonForDismissal" + numExp + "' name='reasonForDismissal" + numExp + "'><\/textarea>\n <\/div>\n <\/div>";
        $('#experience').append(html);
        numEdu++;
        return false;
    }
</script>
<?php get_footer() ?>