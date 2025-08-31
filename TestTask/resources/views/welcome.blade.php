<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    </head>

    <body>
        {{-- Прехейдер --}}
        <div class="preHeader">
            <p class="basic-small-text" style="display: flex; justify-content: center; mt-2; color: #577F9C;">Имеются противопоказания, необходимо проконсультироваться со специалистом 18+</p>
        </div>

        {{-- Хейдер --}}
        <div class="container">
            <div class="PredLogoDiv">
                <img src="{{ asset('images/logo.png') }}" class="LogoImg" alt="Логотип">

                <div class="SideBar">
                    <a class="basic-normal-text anim-blue" href="#services">Услуги</a>
                    <a class="basic-normal-text anim-blue" href="#stages">Этапы лечения</a>
                    <a class="basic-normal-text anim-blue" href="#about">О нас</a>
                    <a class="basic-normal-text anim-blue" href="#reviews">Отзывы</a>
                    <a class="basic-normal-text anim-blue" href="#contacts">Контакты</a>
                </div>

                <div class="callBlock">
                    <div>
                        <p class="basic-bold-text-18" style="color: #0DA3FF;">8 (906) 180-00-41</p>
                        <p class="basic-regular-text" style="color: #3838388C;">Работаем 24/7</p>
                    </div>
                    <div class="basic-button HeaderButton">
                        <p class="basic-bold-text-16" style="color: #FFFFFF;"> Заказать звонок</p>
                    </div>
                        
                    <div class="GamburgerBlock">
                        <img src="{{ asset('images/Gamburger.png') }}" id="gamburgerMenuBtn">
                    </div>

                        <!-- Мобильное меню -->
                        <div id="mobileMenuPanel" class="mobile-menu-panel" style="display:none;">
                            <div class="mobile-menu-content">
                            <div class="d-flex flex-column">
                                <div class="MobileHeader">
                                    <img src="{{ asset('images/logo.png') }}" class="LogoImgMob" alt="Логотип">
                                    
                                    <div class="d-flex flex-row" style="gap: 20px;">
                                        <div>
                                            <p class="basic-bold-text-18" style="color: #0DA3FF;">8 (906) 180-00-41</p>
                                            <p class="basic-regular-text" style="color: #3838388C;">Работаем 24/7</p>
                                        </div>
                                        
                                        <div class="d-flex" style="align-items: center">
                                            <img src="{{ asset('images/exit.png') }}" class="exit-icon" id="exitMenuBtn">
                                        </div>
                                    </div>                 
                                </div>

                                <div class="mobile-menu-list">
                                    <a class="basic-normal-text anim-blue" href="#services">Услуги</a>
                                    <a class="basic-normal-text anim-blue" href="#stages">Этапы лечения</a>
                                    <a class="basic-normal-text anim-blue" href="#about">О нас</a>
                                    <a class="basic-normal-text anim-blue" href="#reviews">Отзывы</a>
                                    <a class="basic-normal-text anim-blue" href="#contacts">Контакты</a>
                                </div>
                            </div>
                                <div class="d-flex flex-column">
                                    <div class="mobile-menu-bottom">
                                        <p class="basic-bold-text-18" style="color: #0DA3FF; margin-bottom: 0;">8 (906) 180-00-41</p>
                                        <p class="basic-regular-text" style="color: #3838388C; margin-bottom: 16px;">Работаем 24/7</p>
                                        <div class="basic-button HeaderButton" style="width:100%; max-width:300px; margin:0 auto;">
                                            <p class="basic-bold-text-16" style="color: #FFFFFF;"> Заказать звонок</p>
                                        </div>
                                    </div>

                                    <div class="basic-button-mob">
                                        <p class="basic-bold-text-16" style="color: #FFFFFF;">Получить помощь</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
document.getElementById('exitMenuBtn')?.addEventListener('click', function() {
    document.getElementById('mobileMenuPanel').style.display = 'none';
    document.body.style.overflow = '';
});
                            const gamburgerMenuBtn = document.getElementById('gamburgerMenuBtn');
                            const mobileMenuPanel = document.getElementById('mobileMenuPanel');
                            let menuOpen = false;
                            gamburgerMenuBtn.addEventListener('click', function(e) {
                                e.stopPropagation();
                                mobileMenuPanel.style.display = 'flex';
                                menuOpen = true;
                                document.body.style.overflow = 'hidden';
                            });
                            mobileMenuPanel.addEventListener('click', function(e) {
                                // Закрытие по клику вне меню
                                if (e.target === mobileMenuPanel) {
                                    mobileMenuPanel.style.display = 'none';
                                    menuOpen = false;
                                    document.body.style.overflow = '';
                                }
                            });
                            document.addEventListener('keydown', function(e) {
                                if (menuOpen && e.key === 'Escape') {
                                    mobileMenuPanel.style.display = 'none';
                                    menuOpen = false;
                                    document.body.style.overflow = '';
                                }
                            });
                        </script>
                </div>
            </div>
        </div>

        {{-- Встречный блок --}}
        <div class="BlockMain">
            <div class="container">
                <div class="D-flex_row justify-content-between">
                    <div class=" BlockMainDiv">
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <p class="basic-big-text-62">Срочный вызов <br> врача-нарколога</p>

                            <div class="LineHeaderBlock">
                                <div class="d-flex flex-row" style="gap: 10px;">
                                    <img style="max-height: 25px; max-width: 25px;" src="{{ asset('images/ci_check-all.png') }}" alt="Логотип">
                                    <p class="basic-normal-text">Сохраняем анонимность, не требуем паспорт и не ставим на учёт</p>
                                </div>

                                <div class="d-flex flex-row" style="gap: 10px;">
                                    <img style="max-height: 25px; max-width: 25px;" src="{{ asset('images/ci_check-all.png') }}" alt="Логотип">
                                    <p class="basic-normal-text">Помощь квалифицированного врача на дому</p>
                                </div>

                                <div class="d-flex flex-row" style="gap: 10px;">
                                    <img style="max-height: 25px; max-width: 25px;" src="{{ asset('images/ci_check-all.png') }}" alt="Логотип">
                                    <p class="basic-normal-text">Приедем на адрес за 20 минут</p>
                                </div>

                                <div class="d-flex flex-row" style="gap: 10px;">
                                    <img style="max-height: 25px; max-width: 25px;" src="{{ asset('images/ci_check-all.png') }}" alt="Логотип">
                                    <p class="basic-normal-text">Первичная консультация - бесплатно</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row" style="gap: 20px;">
                            <div class="basic-button">
                                <p class="basic-bold-text-16" style="color: #FFFFFF;">Получить помощь</p>
                            </div>

                            <div class="basic-button-press" data-bs-toggle="modal" data-bs-target="#callbackModal">
                                <p class="basic-bold-text-16" style="color: #0DA3FF;"> Заказать звонок</p>
                            </div>


                            <div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    
                                        <!-- Шапка -->
                                        <div class="modal-header">
                                            <h5 class="basic-big-text-52" id="callbackModalLabel">Заказать звонок</h5>
                                            <p class="basic-normal-text">Просто оставьте заявку и мы вам перезвоним в ближайшее время</p>
                                            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button> --}}
                                        </div>
                                        
                                        <!-- Тело -->
                                        <div class="modal-body">
                                            <form id="callbackForm">
                                                <div id="callbackFormError" style="color:#d00; margin-bottom:10px; display:none;"></div>
                                                <div id="callbackFormSuccess" style="color:#0DA3FF; margin-bottom:10px; display:none;"></div>
                                                <div class="AnswerAnketDiv" style="padding: 0px;">
                                                    <div class="row otstup">
                                                        <div class="col-12 col-md-6 col-lg-6">
                                                            <input type="text" name="name" class="InputBlockModal" placeholder="Ваше имя" required>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-6">
                                                            <input type="text" name="phone" class="InputBlockModal" placeholder="+7 999-999-99-99" required>
                                                        </div>
                                                        <div class="col-12 col-md-12 col-lg-12 mt-3">
                                                            <input type="email" name="email" class="InputBlockModal" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="basic-button d-flex justify-content-center" style="width: 100% !important;"><p class="basic-bold-text-16" style="color: white;">Отправить</p></button>
                                                    <p class="basic-regular-text-14" style="color: #9CB4C5; text-align: left;">Нажимая кнопку «Получить консультацию», вы соглашаетесь с <span style="text-decoration: underline;">политикой конфиденциальности</span></p>
                                                </div>
                                            </form>
                                            <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const form = document.getElementById('callbackForm');
                                                const errorDiv = document.getElementById('callbackFormError');
                                                const successDiv = document.getElementById('callbackFormSuccess');
                                                form.onsubmit = function(e) {
                                                    e.preventDefault();
                                                    errorDiv.style.display = 'none';
                                                    successDiv.style.display = 'none';
                                                    const formData = new FormData(form);
                                                    fetch('/request', {
                                                        method: 'POST',
                                                        headers: {
                                                            'X-Requested-With': 'XMLHttpRequest',
                                                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                                                        },
                                                        body: formData
                                                    })
                                                    .then(async res => {
                                                        const data = await res.json();
                                                        if (res.ok && data.success) {
                                                            // Заменяем содержимое модального окна на сообщение об успехе
                                                            const modalBody = form.closest('.modal-body');
                                                            if (modalBody) {
                                                                modalBody.innerHTML = `<div style='padding:40px 0;text-align:center;'><h4 style='color:#0DA3FF;'>${data.message || 'Заявка успешно отправлена!'}</h4><p class='basic-normal-text' style='margin-top:16px;'>Мы свяжемся с вами в ближайшее время.</p></div>`;
                                                            }
                                                        } else {
                                                            errorDiv.textContent = (data.errors && data.errors.join('\n')) || 'Ошибка отправки.';
                                                            errorDiv.style.display = 'block';
                                                        }
                                                    })
                                                    .catch(() => {
                                                        errorDiv.textContent = 'Ошибка отправки.';
                                                        errorDiv.style.display = 'block';
                                                    });
                                                };
                                            });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="PredWomanImg">
                        <img class="WomanImg" src="{{ asset('images/Woman.png') }}">
                    </div>
                </div>
            </div>
        </div>

        {{-- Наши услуги (2 - блок) --}}
    <div class="OurServices" id="services">
            <div class="container">
                <div class="Services">

                    <div class="container">
                        <p class="basic-big-text-52 mb-4">Наши услуги</p>
                    </div>

                    <div style="gap: 20px;" class="d-flex flex-column">
                        <div class="BlockLine">
                            <div class="container">
                                <div class="row CartBlock">
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <div class="Block">
                                            <img class="ImgServices" src="{{ asset('images/Services1.jpg') }}">

                                            <div class="BlockDivOurServices">
                                                <div class="MegdText">
                                                    <p class="basic-bold-text-24">Cтандартная терапия</p>
                                                    <p class="basic-normal-text" style="color: #383838BF">Для облегчения похмельного синдрома и прерывания запоя. А также при алкогольном отравлении</p>
                                                </div>

                                                <div class="ButtonServices">
                                                    
                                                    <div class="w-100 d-flex justify-content-center align-items-center">
                                                        <p class="basic-bold-text-16" style="color: #0DA3FF;"> от 2400 ₽ </p>
                                                    </div>

                                                    <div class="ButtonServicesInside">
                                                        <p class="basic-bold-text-16" style="color: white; white-space: nowrap;">Начать лечение</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 col-lg-4">
                                        <div class="Block">
                                            <img class="ImgServices" src="{{ asset('images/Services2.jpg') }}">
                                        
                                            <div class="BlockDivOurServices">
                                                <div class="MegdText">
                                                    <p class="basic-bold-text-24">Cтандартная терапия</p>
                                                    <p class="basic-normal-text" style="color: #383838BF">Для облегчения похмельного синдрома и прерывания запоя. А также при алкогольном отравлении</p>
                                                </div>

                                                <div class="ButtonServices">
                                                    
                                                    <div class="w-100 d-flex justify-content-center align-items-center">
                                                        <p class="basic-bold-text-16" style="color: #0DA3FF;"> от 2400 ₽ </p>
                                                    </div>

                                                    <div class="ButtonServicesInside">
                                                        <p class="basic-bold-text-16" style="color: white; white-space: nowrap;">Начать лечение</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 col-lg-4">
                                        <div class="Block">
                                            <img class="ImgServices" src="{{ asset('images/Services3.jpg') }}">
                                        
                                            <div class="BlockDivOurServices">
                                                <div class="MegdText">
                                                    <p class="basic-bold-text-24">Cтандартная терапия</p>
                                                    <p class="basic-normal-text" style="color: #383838BF">Для облегчения похмельного синдрома и прерывания запоя. А также при алкогольном отравлении</p>
                                                </div>

                                                <div class="ButtonServices">
                                                    
                                                    <div class="w-100 d-flex justify-content-center align-items-center">
                                                        <p class="basic-bold-text-16" style="color: #0DA3FF;"> от 2400 ₽ </p>
                                                    </div>

                                                    <div class="ButtonServicesInside">
                                                        <p class="basic-bold-text-16" style="color: white; white-space: nowrap;">Начать лечение</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="BlockLine">
                            <div class="container">
                                <div class="row CartBlock">
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <div class="Block">
                                            <img class="ImgServices" src="{{ asset('images/Services4.jpg') }}">

                                            <div class="BlockDivOurServices">
                                                <div class="MegdText">
                                                    <p class="basic-bold-text-24">Cтандартная терапия</p>
                                                    <p class="basic-normal-text" style="color: #383838BF">Для облегчения похмельного синдрома и прерывания запоя. А также при алкогольном отравлении</p>
                                                </div>

                                                <div class="ButtonServices">
                                                    
                                                    <div class="w-100 d-flex justify-content-center align-items-center">
                                                        <p class="basic-bold-text-16" style="color: #0DA3FF;"> от 2400 ₽ </p>
                                                    </div>

                                                    <div class="ButtonServicesInside">
                                                        <p class="basic-bold-text-16" style="color: white; white-space: nowrap;">Начать лечение</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 col-lg-4">
                                        <div class="Block">
                                            <img class="ImgServices" src="{{ asset('images/Services5.jpg') }}">
                                        
                                            <div class="BlockDivOurServices">
                                                <div class="MegdText">
                                                    <p class="basic-bold-text-24">Cтандартная терапия</p>
                                                    <p class="basic-normal-text" style="color: #383838BF">Для облегчения похмельного синдрома и прерывания запоя. А также при алкогольном отравлении</p>
                                                </div>

                                                <div class="ButtonServices">
                                                    
                                                    <div class="w-100 d-flex justify-content-center align-items-center">
                                                        <p class="basic-bold-text-16" style="color: #0DA3FF;"> от 2400 ₽ </p>
                                                    </div>

                                                    <div class="ButtonServicesInside">
                                                        <p class="basic-bold-text-16" style="color: white; white-space: nowrap;">Начать лечение</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 col-lg-4">
                                        <div class="Block">
                                            <img class="ImgServices" src="{{ asset('images/Services6.jpg') }}">
                                        
                                            <div class="BlockDivOurServices">
                                                <div class="MegdText"   >
                                                    <p class="basic-bold-text-24">Cтандартная терапия</p>
                                                    <p class="basic-normal-text" style="color: #383838BF">Для облегчения похмельного синдрома и прерывания запоя. А также при алкогольном отравлении</p>
                                                </div>

                                                <div class="ButtonServices">
                                                    
                                                    <div class="w-100 d-flex justify-content-center align-items-center">
                                                        <p class="basic-bold-text-16" style="color: #0DA3FF;"> от 2400 ₽ </p>
                                                    </div>

                                                    <div class="ButtonServicesInside">
                                                        <p class="basic-bold-text-16" style="color: white; white-space: nowrap;">Начать лечение</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="EtapLech" id="stages">
                        <div class="container">
                            <p class="basic-big-text-52">Этапы лечения</p>
                        </div>

                        <div class="HorizontalBlock">
                            <div class="HorizontalBlockLine">
                                <div class="mb-4">
                                    <p class="basic-big-text-grey" style="color: #E8EFF3;">01</p>

                                    <div class="cube">
                                        <div class="line"></div>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center" style="gap: 10px">
                                <img src="{{ asset('images/Icon1.png') }}" class="IconLine">
                                <p class="basic-regular-text-16">Диагностика <br> состояния</p>
                                </div>
                            </div>

                            <div class="HorizontalBlockLine">
                                <div class="mb-4">
                                    <p class="basic-big-text-grey" style="color: #E8EFF3;">02</p>

                                    <div class="cube">
                                        <div class="line"></div>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center" style="gap: 10px">
                                <img src="{{ asset('images/Icon2.png') }}" class="IconLine">
                                <p class="basic-regular-text-16">Составление <br> плана лечения</p>
                                </div>
                            </div>

                            <div class="HorizontalBlockLine">
                                <div class="mb-4">
                                    <p class="basic-big-text-grey" style="color: #E8EFF3;">03</p>

                                    <div class="cube">
                                        <div class="line"></div>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center" style="gap: 10px">
                                <img src="{{ asset('images/Icon3.png') }}" class="IconLine">
                                <p class="basic-regular-text-16">Снятие <br> симптомов</p>
                                </div>
                            </div>

                            <div class="HorizontalBlockLine">
                                <div class="mb-4">
                                    <p class="basic-big-text-grey" style="color: #E8EFF3;">04</p>

                                    <div class="cube">
                                        <div class="line"></div>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center" style="gap: 10px">
                                <img src="{{ asset('images/Icon4.png') }}" class="IconLine">
                                <p class="basic-regular-text-16">Восстановление <br> организма</p>
                                </div>
                            </div>

                            <div class="HorizontalBlockLine">
                                <div class="mb-4">
                                    <p class="basic-big-text-grey" style="color: #E8EFF3;">05</p>

                                    <div class="cube">
                                        <div class="line"></div>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center" style="gap: 10px">
                                <img src="{{ asset('images/Icon5.png') }}" class="IconLine">
                                <p class="basic-regular-text-16">Бесплатные <br> консультации</p>
                                </div>
                            </div>
                        </div>

                        <div class="HorizontalBlockMob">
                            <div class="container">
                                <div class="HorizontalBlockLineMob">
                                    <div class="MobVersionLineBlock">
                                        <img src="{{ asset('images/Icon1.png') }}" class="IconLine">
                                        <p class="basic-regular-text-16">Диагностика <br> состояния</p>
                                    </div>

                                    <p class="basic-big-text-grey" style="color: #E8EFF3;">01</p>
                                </div>

                                <div class="HorizontalBlockLineMob">
                                    <div class="MobVersionLineBlock">
                                        <img src="{{ asset('images/Icon2.png') }}" class="IconLine">
                                        <p class="basic-regular-text-16">Диагностика <br> состояния</p>
                                    </div>

                                    <p class="basic-big-text-grey" style="color: #E8EFF3;">01</p>
                                </div>

                                <div class="HorizontalBlockLineMob">
                                    <div class="MobVersionLineBlock">
                                        <img src="{{ asset('images/Icon3.png') }}" class="IconLine">
                                        <p class="basic-regular-text-16">Диагностика <br> состояния</p>
                                    </div>

                                    <p class="basic-big-text-grey" style="color: #E8EFF3;">01</p>
                                </div>

                                <div class="HorizontalBlockLineMob">
                                    <div class="MobVersionLineBlock">
                                        <img src="{{ asset('images/Icon4.png') }}" class="IconLine">
                                        <p class="basic-regular-text-16">Диагностика <br> состояния</p>
                                    </div>

                                    <p class="basic-big-text-grey" style="color: #E8EFF3;">01</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Блок о нас --}}
        <div class="AboutBlock" id="about">
            <div class="container">
                <div class="row">
                    {{-- AboutBlockMarg --}}

                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="http://127.0.0.1:8000/images/Carusel1.jpg" class="d-block w-100 rounded-4 ImageSliderMob" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="http://127.0.0.1:8000/images/Carusel2.jpg" class="d-block w-100 rounded-4 ImageSliderMob" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="http://127.0.0.1:8000/images/Carusel1.jpg" class="d-block w-100 rounded-4 ImageSliderMob" alt="...">
                            </div>
                        </div>

                        <!-- индикаторы (точки снизу) -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const images = [
                                "http://127.0.0.1:8000/images/Carusel1.jpg",
                                "http://127.0.0.1:8000/images/Carusel2.jpg",
                                "http://127.0.0.1:8000/images/Carusel3.jpg"
                            ];
                            let currentIndex = 0;
                            const sliderImage = document.getElementById("sliderImage");
                            const prevBtn = document.getElementById("prevBtn");
                            const nextBtn = document.getElementById("nextBtn");

                            function showImage(index) {
                                if (index < 0) {
                                    currentIndex = images.length - 1;
                                } else if (index >= images.length) {
                                    currentIndex = 0;
                                } else {
                                    currentIndex = index;
                                }
                                sliderImage.src = images[currentIndex];
                            }

                            function prevImage() {
                                showImage(currentIndex - 1);
                            }
                            function nextImage() {
                                showImage(currentIndex + 1);
                            }

                            if (prevBtn) prevBtn.addEventListener("click", prevImage);
                            if (nextBtn) nextBtn.addEventListener("click", nextImage);

                            // автопрокрутка отключена — изображения меняются только по клику
                        });
                    </script>

                    <div class="col-12 col-md-6 col-lg-6 PaddingClassTextInCarusel">
                        <p class="basic-big-text-52">О клинике</p>
                        <p class="basic-normal-text">Наши квалифицированные врачи и наркологи предлагают широкий спектр наркологических услуг, включая стационарное лечение, кодирование, и многие другие виды лечения. Мы заботимся о каждом пациенте и гарантируем высокое качество нашей работы. Не стесняйтесь обращаться к нам в любое время, мы всегда готовы оказать наркологическую помощь.</p>

                        <div style="gap: 10px;" class="d-flex flex-column">
                            <div class="d-flex direction-row align-items-center" style="gap: 10px;">
                                <img src="{{ asset('images/MiniIcon1.png') }}">
                                <p class="basic-normal-text">Квалифицированные врачи-наркологи</p>
                            </div>

                            <div class="d-flex direction-row align-items-center" style="gap: 10px;">
                                <img src="{{ asset('images/MiniIcon2.png') }}">
                                <p class="basic-normal-text">Квалифицированные врачи-наркологи</p>
                            </div>

                            <div class="d-flex direction-row align-items-center" style="gap: 10px;">
                                <img src="{{ asset('images/MiniIcon3.png') }}">
                                <p class="basic-normal-text">Квалифицированные врачи-наркологи</p>
                            </div>

                            <div class="d-flex direction-row align-items-center" style="gap: 10px;">
                                <img src="{{ asset('images/MiniIcon4.png') }}">
                                <p class="basic-normal-text">Квалифицированные врачи-наркологи</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 position-relative image-slider-one">
                        <img id="sliderImage" src="http://127.0.0.1:8000/images/Carusel1.jpg" class="img-fluid">

                        <div class="ButtonSliderAbsolute d-flex justify-content-between">
                            <div class="Circle" id="prevBtn">
                                <img src="http://127.0.0.1:8000/images/strL.png" class="img-fluid">
                            </div>
                            <div class="Circle" id="nextBtn">
                                <img src="http://127.0.0.1:8000/images/strR.png" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <script>
                        const images = [
                            "http://127.0.0.1:8000/images/Carusel1.jpg",
                            "http://127.0.0.1:8000/images/Carusel2.jpg"
                        ];

                        let currentIndex = 0;
                        const sliderImage = document.getElementById("sliderImage");
                        const prevBtn = document.getElementById("prevBtn");
                        const nextBtn = document.getElementById("nextBtn");

                        function changeImage(newIndex) {
                            sliderImage.classList.add("fade-out");
                            setTimeout(() => {
                                currentIndex = newIndex;
                                sliderImage.src = images[currentIndex];
                                sliderImage.classList.remove("fade-out");
                            }, 500);
                        }

                        nextBtn.addEventListener("click", () => {
                            let newIndex = (currentIndex + 1) % images.length;
                            changeImage(newIndex);
                        });

                        prevBtn.addEventListener("click", () => {
                            let newIndex = (currentIndex - 1 + images.length) % images.length;
                            changeImage(newIndex);
                        });
                    </script>

                    <div class="mt-5">
                        <p class="basic-bold-text-24">Имеем все необходимые документы для предоставления медицинских услуг:</p>

                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                <img src="{{ asset('images/Doc1.jpg') }}" class="img-fluid rounded-4" />
                                </div>
                                <div class="swiper-slide">
                                <img src="{{ asset('images/Doc2.jpg') }}" class="img-fluid rounded-4" />
                                </div>
                                <div class="swiper-slide">
                                <img src="{{ asset('images/Doc3.jpg') }}" class="img-fluid rounded-4" />
                                </div>
                            </div>
                        </div>

                        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

                        <script>
                            // Открытие BlockOtzyv на весь экран на мобилке
                            function isMobile() {
                                return window.innerWidth < 768;
                            }
                            function openReviewFullscreen(contentHtml) {
                                if (document.getElementById('reviewFullscreen')) return;
                                const overlay = document.createElement('div');
                                overlay.id = 'reviewFullscreen';
                                overlay.style.position = 'fixed';
                                overlay.style.top = 0;
                                overlay.style.left = 0;
                                overlay.style.width = '100vw';
                                overlay.style.height = '100vh';
                                overlay.style.background = 'rgba(241, 248, 253, 0.98)';
                                overlay.style.zIndex = 99999;
                                overlay.style.display = 'flex';
                                overlay.style.justifyContent = 'center';
                                overlay.style.alignItems = 'center';
                                overlay.style.padding = '24px';
                                // Remove <img src="/images/skoba.png"> from modal content
                                const tempDiv = document.createElement('div');
                                tempDiv.innerHTML = contentHtml;
                                const skobaImg = tempDiv.querySelector('img[src="/images/skoba.png"]');
                                if (skobaImg) skobaImg.remove();
                                overlay.innerHTML = `
                                    <div style="background: #fff; border-radius: 16px; max-width: 95vw; width: 100%; max-height: 90vh; overflow-y: auto; box-shadow: 0 4px 32px #0DA3FF22; padding: 24px; position: relative;">
                                        <span id="closeReviewFullscreen" style="position:absolute;top:16px;right:16px;cursor:pointer;font-size:28px;color:#0DA3FF;">×</span>
                                        ${tempDiv.innerHTML}
                                    </div>
                                `;
                                document.body.appendChild(overlay);
                                document.body.style.overflow = 'hidden';
                                document.getElementById('closeReviewFullscreen').onclick = function() {
                                    overlay.remove();
                                    document.body.style.overflow = '';
                                };
                                overlay.onclick = function(e) {
                                    if (e.target === overlay) {
                                        overlay.remove();
                                        document.body.style.overflow = '';
                                    }
                                };
                            }
                            function attachReviewMobHandlers() {
                                if (!isMobile()) return;
                                document.querySelectorAll('.reviewsMobBlock .BlockOtzyv').forEach(block => {
                                    block.onclick = function() {
                                        openReviewFullscreen(block.innerHTML);
                                    };
                                });
                            }
                            window.addEventListener('resize', attachReviewMobHandlers);
                            setTimeout(attachReviewMobHandlers, 500);
                            if (window.renderMobSwiperReviews) {
                                const origRender = window.renderMobSwiperReviews;
                                window.renderMobSwiperReviews = function() {
                                    origRender();
                                    setTimeout(attachReviewMobHandlers, 100);
                                };
                            }
                        </script>

                        <script>
                            const swiper = new Swiper(".mySwiper", {
                            slidesPerView: 1.3,   
                            spaceBetween: 20,
                            centeredSlides: true,
                            loop: true,
                            loopAdditionalSlides: 1,
                            autoplay: {
                                delay: 3000,
                                disableOnInteraction: false,
                            },
                            });
                        </script>

                        <div class="row mt-4 gallery">
                            <div class="col-3 gallery-item position-relative">
                                <img src="{{ asset('images/Doc1.jpg') }}" class="img-fluid">
                                <div class="Circle plus-circle">+</div>
                            </div>

                            <div class="col-3 gallery-item position-relative">
                                <img src="{{ asset('images/Doc2.jpg') }}" class="img-fluid">
                                <div class="Circle plus-circle">+</div>
                            </div>

                            <div class="col-3 gallery-item position-relative">
                                <img src="{{ asset('images/Doc3.jpg') }}" class="img-fluid">
                                <div class="Circle plus-circle">+</div>
                            </div>

                            <div class="col-3 gallery-item position-relative">
                                <img src="{{ asset('images/Doc4.jpg') }}" class="img-fluid">
                                <div class="Circle plus-circle">+</div>
                            </div>
                        </div>

                        <div id="imageModal" class="modal-overlay">
                            <img id="modalImage" src="">
                        </div>

                        <script>
                            const modal = document.getElementById("imageModal");
                            const modalImg = document.getElementById("modalImage");
                            const plusCircles = document.querySelectorAll(".plus-circle");

                            plusCircles.forEach(circle => {
                                circle.addEventListener("click", (e) => {
                                    const imgSrc = e.target.parentElement.querySelector("img").src;
                                    modalImg.src = imgSrc;
                                    modal.style.display = "flex";
                                });
                            });

                            modal.addEventListener("click", () => {
                                modal.style.display = "none";
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>

        {{-- Блок со слайдером --}}
        <div class="MedPersonal">
            <div class="container PositionMedPersonal">
                
                <div class="MainBlockMedPersonal">
                    <div>
                        <p class="basic-big-text-52 mb-4">Медицинский <br> персонал</p>
                        <div class="BlockAboutPersonal">
                            <p class="basic-bold-text-24 fade-text show" id="personalName">Меринов Артём Вячеславович</p>
                            <div style="gap: 5px;" class="d-flex flex-column">
                                <div class="d-flex flex-row" style="gap: 5px;">
                                    <p class="basic-normal-text" style="color: #3838388C;">Cпециализация:</p>
                                    <p class="basic-bold-text-16 fade-text show" style="color: #0DA3FF" id="personalSpec">Врач-Нарколог</p>
                                </div>
                                <div class="d-flex flex-row" style="gap: 5px;">
                                    <p class="basic-normal-text" style="color: #3838388C;">Опыт работы:</p>
                                    <p class="basic-bold-text-16 fade-text show" style="color: #0DA3FF" id="personalExp">12 лет</p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="StrelkLg">
                        <div class="Circle" id="medPrevBtn">
                            <img src="http://127.0.0.1:8000/images/strL.png" class="img-fluid">
                        </div>
                        <div class="Circle" id="medNextBtn">
                            <img src="{{ asset('images/strR.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>

                {{-- <div class="CartPersonalMob">
                    <img class="CartPersonalMobImg" src="http://127.0.0.1:8000/images/Med1.jpg">

                    <div class="BlockAboutPersonalMob">
                        <p class="basic-bold-text-24 fade-text show" id="personalName">Меринов Артём Вячеславович</p>
                        <div style="gap: 5px;" class="d-flex flex-column">
                            <div class="d-flex flex-row" style="gap: 5px;">
                                <p class="basic-normal-text" style="color: #3838388C;">Cпециализация:</p>
                                <p class="basic-bold-text-16 fade-text show" style="color: #0DA3FF" id="personalSpec">Врач-Нарколог</p>
                            </div>
                            <div class="d-flex flex-row" style="gap: 5px;">
                                <p class="basic-normal-text" style="color: #3838388C;">Опыт работы:</p>
                                <p class="basic-bold-text-16 fade-text show" style="color: #0DA3FF" id="personalExp">12 лет</p>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- Слайдер -->
                <style>

                </style>
                <div class="swiper personalSwiper">
                    <div class="swiper-wrapper">

                        <!-- Карточка 1 -->
                        <div class="swiper-slide">
                            <div class="CartPersonalMob">
                                <img class="CartPersonalMobImg" src="http://127.0.0.1:8000/images/Med1.jpg">
                                <div class="BlockAboutPersonalMob">
                                <p class="basic-bold-text-24">Меринов Артём Вячеславович</p>
                                <div class="d-flex flex-column" style="gap: 5px;">
                                    <div class="d-flex flex-row" style="gap: 5px;">
                                    <p class="basic-normal-text" style="color:#3838388C;">Cпециализация:</p>
                                    <p class="basic-bold-text-16" style="color:#0DA3FF">Врач-Нарколог</p>
                                    </div>
                                    <div class="d-flex flex-row" style="gap: 5px;">
                                    <p class="basic-normal-text" style="color:#3838388C;">Опыт работы:</p>
                                    <p class="basic-bold-text-16" style="color:#0DA3FF">12 лет</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <!-- Карточка 2 -->
                        <div class="swiper-slide">
                            <div class="CartPersonalMob">
                                <img class="CartPersonalMobImg" src="http://127.0.0.1:8000/images/Med2.jpg">
                                <div class="BlockAboutPersonalMob">
                                <p class="basic-bold-text-24">Иванова Светлана Петровна</p>
                                <div class="d-flex flex-column" style="gap: 5px;">
                                    <div class="d-flex flex-row" style="gap: 5px;">
                                    <p class="basic-normal-text" style="color:#3838388C;">Cпециализация:</p>
                                    <p class="basic-bold-text-16" style="color:#0DA3FF">Психотерапевт</p>
                                    </div>
                                    <div class="d-flex flex-row" style="gap: 5px;">
                                    <p class="basic-normal-text" style="color:#3838388C;">Опыт работы:</p>
                                    <p class="basic-bold-text-16" style="color:#0DA3FF">8 лет</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- точки-индикаторы -->
                    <div class="swiper-pagination"></div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    if (window.personalSwiperInstance) {
                        window.personalSwiperInstance.destroy(true, true);
                    }
                    window.personalSwiperInstance = new Swiper(".personalSwiper", {
                        slidesPerView: 1.5, // только чуть выглядывает следующая
                        spaceBetween: 20,
                        centeredSlides: true,
                        loop: true,
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction: false,
                        },
                        breakpoints: {
                            768: { slidesPerView: 1.2 },
                            1024: { slidesPerView: 1.3 }
                        }
                    });
                });
                </script>

                <div class="MedPhotos" id="medPhotos">
                </div>
                
            </div>
        </div>

        <script>
            const personals = [
                {
                    name: 'Меринов Артём Вячеславович',
                    spec: 'Врач-Нарколог',
                    exp: '12 лет',
                    img: '/images/Med1.jpg'
                },
                {
                    name: 'Иванова Светлана Петровна',
                    spec: 'Психиатр-Нарколог',
                    exp: '8 лет',
                    img: '/images/Med2.jpg'
                },
                {
                    name: 'Петров Алексей Сергеевич',
                    spec: 'Врач-Реаниматолог',
                    exp: '15 лет',
                    img: '/images/Med3.jpg'
                },
                {
                    name: 'Сидорова Мария Ивановна',
                    spec: 'Врач-Нарколог',
                    exp: '10 лет',
                    img: '/images/Med2.jpg'
                }
            ];

            let medIndex = 0;
            const medPhotos = document.getElementById('medPhotos');
            const medPrevBtn = document.getElementById('medPrevBtn');
            const medNextBtn = document.getElementById('medNextBtn');
            const personalName = document.getElementById('personalName');
            const personalSpec = document.getElementById('personalSpec');
            const personalExp = document.getElementById('personalExp');

            const shift = 120;
            const duration = 500;
            let isAnimating = false;

            function renderPhotos() {
                medPhotos.innerHTML = '';
                for (let i = 0; i < 4; i++) {
                    const idx = (medIndex + i) % personals.length;
                    const img = document.createElement('img');
                    img.src = personals[idx].img;
                    medPhotos.appendChild(img);
                }
            }

            function updatePersonalInfo() {
                const p = personals[medIndex % personals.length];
                // Анимация исчезновения
                personalName.classList.remove('show');
                personalSpec.classList.remove('show');
                personalExp.classList.remove('show');
                setTimeout(() => {
                    personalName.textContent = p.name;
                    personalSpec.textContent = p.spec;
                    personalExp.textContent = p.exp;
                    // Анимация появления
                    personalName.classList.add('show');
                    personalSpec.classList.add('show');
                    personalExp.classList.add('show');
                }, 250);
            }

            function slideLeft() {
                if (isAnimating) return;
                isAnimating = true;
                const imgs = medPhotos.querySelectorAll('img');
                imgs.forEach((img, i) => {
                    img.style.transition = `transform ${duration}ms cubic-bezier(.4,2,.6,1), opacity ${duration}ms`;
                    img.style.transform = `translateX(-${shift}px)`;
                    if (i === 0) img.style.opacity = '0';
                });
                setTimeout(() => {
                    medIndex = (medIndex + 1) % personals.length;
                    renderPhotos();
                    updatePersonalInfo();
                    isAnimating = false;
                }, duration);
            }

            function slideRight() {
                if (isAnimating) return;
                isAnimating = true;
                const imgs = medPhotos.querySelectorAll('img');
                imgs[imgs.length - 1].style.transition = 'none';
                imgs[imgs.length - 1].style.transform = `translateX(-${shift}px)`;
                imgs[imgs.length - 1].style.opacity = '0';
                setTimeout(() => {
                    medIndex = (medIndex - 1 + personals.length) % personals.length;
                    renderPhotos();
                    updatePersonalInfo();
                    isAnimating = false;
                }, duration);
            }

            medNextBtn.addEventListener('click', slideLeft);
            medPrevBtn.addEventListener('click', slideRight);

            // Инициализация
            renderPhotos();
            updatePersonalInfo();
        </script>

        {{-- Блок приемуществ --}}
        <div class="Priemych">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 PriemychDivImage">
                        <img class="WomanJpg" style="" src="{{ asset('images/Woman.jpg') }}">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 DivPriemych">
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <p class="basic-big-text-52">Преимущества вызова нарколога</p>
                            <p class="basic-normal-text">Обслуживание наркологом на дому имеет ряд плюсов, особенно для тех, кто боится огласки. В этой ситуации обращение в частную наркологию максимально отвечает интересам пациента или его родственников.</p>
                        </div>

                        <div style="gap:20px;" class="d-flex flex-column">
                            <p class='basic-bold-text-24'>Преимущества нашей клиники:</p>

                            <div class="BlockLeftLine">
                                <p class="basic-normal-text">Нарколог на дом прибывает конфиденциально, автомобиль не имеет опознавательных знаков специализированного центра.</p>
                            </div>

                            <div class="BlockLeftLine">
                                <p class="basic-normal-text">Обрыв запойного состояния или снятие абстинентного синдрома проводятся под контролем профессионала, что исключает риски появления осложнений.</p>
                            </div>

                            <div class="BlockLeftLine">
                                <p class="basic-normal-text">Зависимый и его родственники бесплатно получают развернутую консультацию по окончании процедур. Если необходимо, доктор оставляет медикаменты на несколько дней приёма.</p>
                            </div>

                            <div class="BlockLeftLine">
                                <p class="basic-normal-text">Мы не передаем личных данных наших клиентов для постановки на учёт в наркологический диспансер. Обращение к нам для пациентов полностью анонимно.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="AnswerAnket mt-5">
                    <div class="row ">
                        <div class="col-12 col-md-6 col-lg-6 my-flex">
                            <p class="basic-big-text-white" style="color: white;">Больной не хочет <br> лечиться?</p>
                            <p class="basic-normal-text" style="color: white;">Врачами создана эффективная технология мотивации пациентов согласиться на терапию.</p>
                            <p class="basic-normal-text" style="color: white;">Метод показывает высокие результаты — 8 из 10 людей добровольно решаются начать лечение от зависимости.</p>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="AnswerAnketDiv">
                                <div class="row otstup">
                                    <div class='col-12 col-md-6 col-lg-6'>
                                        <input type="text" class="InputBlock" placeholder="Ваше имя">
                                    </div>

                                    <div class='col-12 col-md-6 col-lg-6'>
                                        <input type="text" class="InputBlock" placeholder="+7 999-999-99-99">
                                    </div>
                                </div>

                                <div class="basic-button-press d-flex justify-content-center" style="background-color: white; width: 100% !important;"><p class="basic-bold-text-16" style="color: #0DA3FF;">Получить консультацию</p></div>

                                <p class="basic-regular-text-14" style="color: #FFFFFF8C;">Нажимая кнопку «Получить консультацию», вы соглашаетесь с <span style="text-decoration: underline;">политикой конфиденциальности</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Блок часто задаваемых вопросов --}}
        <div class="FAQ" id="reviews">
                <div class="container">
                    <p class="basic-big-text-52 mb-5">Частые вопросы и ответы</p>

                    <div class="row">
                        <div class="col-12 col-md-8 col-lg-8">
                            <div class="d-flex flex-column" style="gap: 10px;">
                                <div class="AccardeonBlock">
                                    <div class="d-flex flex-row justify-between align-items-center">
                                        <p class="basic-bold-text-20">Когда нужно обращаться в наркологическую клинику?</p>
                                        <span class="accordion-toggle-wrap">
                                            <img src="{{ asset('images/pls.png') }}" class="accordion-toggle" style="display:inline;">
                                            <img src="http://127.0.0.1:8000/images/mns.png" class="accordion-toggle-minus" style="display:none;">
                                        </span>
                                    </div>
                                    <div class="accordion-content">
                                        <p class="basic-normal-text">Наши квалифицированные врачи и наркологи предлагают широкий спектр наркологических услуг, включая стационарное лечение, кодирование, и многие другие виды лечения. Мы заботимся о каждом пациенте и гарантируем высокое качество нашей работы. Не стесняйтесь обращаться к нам в любое время, мы всегда готовы оказать наркологическую.</p>
                                    </div>
                                </div>

                                <div class="AccardeonBlock">
                                    <div class="d-flex flex-row justify-between align-items-center">
                                        <p class="basic-bold-text-20">Сколько ждать приезда врача?</p>
                                        <span class="accordion-toggle-wrap">
                                            <img src="{{ asset('images/pls.png') }}" class="accordion-toggle" style="display:inline;">
                                            <img src="http://127.0.0.1:8000/images/mns.png" class="accordion-toggle-minus" style="display:none;">
                                        </span>
                                    </div>
                                    <div class="accordion-content">
                                        <p class="basic-normal-text">Наши квалифицированные врачи и наркологи предлагают широкий спектр наркологических услуг, включая стационарное лечение, кодирование, и многие другие виды лечения. Мы заботимся о каждом пациенте и гарантируем высокое качество нашей работы. Не стесняйтесь обращаться к нам в любое время, мы всегда готовы оказать наркологическую.</p>
                                    </div>
                                </div>

                                <div class="AccardeonBlock">
                                    <div class="d-flex flex-row justify-between align-items-center">
                                        <p class="basic-bold-text-20">Какие методики используются для лечения?</p>
                                        <span class="accordion-toggle-wrap">
                                            <img src="{{ asset('images/pls.png') }}" class="accordion-toggle" style="display:inline;">
                                            <img src="http://127.0.0.1:8000/images/mns.png" class="accordion-toggle-minus" style="display:none;">
                                        </span>
                                    </div>
                                    <div class="accordion-content">
                                        <p class="basic-normal-text">Наши квалифицированные врачи и наркологи предлагают широкий спектр наркологических услуг, включая стационарное лечение, кодирование, и многие другие виды лечения. Мы заботимся о каждом пациенте и гарантируем высокое качество нашей работы. Не стесняйтесь обращаться к нам в любое время, мы всегда готовы оказать наркологическую.</p>
                                    </div>
                                </div>

                                <div class="AccardeonBlock">
                                    <div class="d-flex flex-row justify-between align-items-center">
                                        <p class="basic-bold-text-20">Как сохранить анонимность при обращении?</p>
                                        <span class="accordion-toggle-wrap">
                                            <img src="{{ asset('images/pls.png') }}" class="accordion-toggle" style="display:inline;">
                                            <img src="http://127.0.0.1:8000/images/mns.png" class="accordion-toggle-minus" style="display:none;">
                                        </span>
                                    </div>
                                    <div class="accordion-content">
                                        <p class="basic-normal-text">Наши квалифицированные врачи и наркологи предлагают широкий спектр наркологических услуг, включая стационарное лечение, кодирование, и многие другие виды лечения. Мы заботимся о каждом пациенте и гарантируем высокое качество нашей работы. Не стесняйтесь обращаться к нам в любое время, мы всегда готовы оказать наркологическую.</p>
                                    </div>
                                </div>

                                <div class="AccardeonBlock">
                                    <div class="d-flex flex-row justify-between align-items-center">
                                        <p class="basic-bold-text-20">Как сохранить анонимность при обращении?</p>
                                        <span class="accordion-toggle-wrap">
                                            <img src="{{ asset('images/pls.png') }}" class="accordion-toggle" style="display:inline;">
                                            <img src="http://127.0.0.1:8000/images/mns.png" class="accordion-toggle-minus" style="display:none;">
                                        </span>
                                    </div>
                                    <div class="accordion-content">
                                        <p class="basic-normal-text">Наши квалифицированные врачи и наркологи предлагают широкий спектр наркологических услуг, включая стационарное лечение, кодирование, и многие другие виды лечения. Мы заботимся о каждом пациенте и гарантируем высокое качество нашей работы. Не стесняйтесь обращаться к нам в любое время, мы всегда готовы оказать наркологическую.</p>
                                    </div>
                                </div>
                            </div>
                            <script>
                            // Аккордеон с анимацией
                            document.querySelectorAll('.AccardeonBlock').forEach((block, idx) => {
                                const wrap = block.querySelector('.accordion-toggle-wrap');
                                const plus = wrap ? wrap.querySelector('.accordion-toggle') : null;
                                const minus = wrap ? wrap.querySelector('.accordion-toggle-minus') : null;
                                const content = block.querySelector('.accordion-content');
                                const question = block.querySelector('.basic-bold-text-20');
                                if (plus && minus) {
                                    plus.addEventListener('click', e => {
                                        e.stopPropagation();
                                        content.classList.toggle('open');
                                        block.classList.toggle('open');
                                        if (content.classList.contains('open')) {
                                            plus.style.display = 'none';
                                            minus.style.display = 'inline';
                                        } else {
                                            plus.style.display = 'inline';
                                            minus.style.display = 'none';
                                        }
                                    });
                                    minus.addEventListener('click', e => {
                                        e.stopPropagation();
                                        content.classList.remove('open');
                                        block.classList.remove('open');
                                        plus.style.display = 'inline';
                                        minus.style.display = 'none';
                                    });
                                }
                            });
                            </script>
                        </div>

                        <div class="col-12 col-md-4 col-lg-4 OtzyvBlock">
                        <div class="ContactFAQ" id="contacts">
                                <p class="basic-bold-text-20">Задайте вопрос специалисту</p>

                                <input type="text" class="InputBlockWhite" placeholder="Ваше имя">

                                <textarea class="InputBlockWhite" placeholder="Ваш вопрос" style="min-height: 120px;"></textarea>

                                <div class="ButtonServicesInside">
                                    <p class="basic-bold-text-16 d-flex justify-content-center" style="color: white; white-space: nowrap;">Отправить</p>
                                </div>

                                <p class="basic-regular-text-14" style="color: #9CB4C5;">Нажимая кнопку «Получить консультацию», вы соглашаетесь с <span style="text-decoration: underline;">политикой конфиденциальности</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <p class="basic-big-text-52">Отзывы пациентов</p>

                            <div class="BlockStrlki StrelkLg">
                                <div class="Circle">
                                    <img src="http://127.0.0.1:8000/images/strL.png" class="img-fluid">
                                </div>

                                <div class="Circle">
                                    <img src="http://127.0.0.1:8000/images/strR.png" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="row" id="reviewsRow">
                            <!-- Отзывы будут рендериться динамически -->
                        </div>

                        <div class="row" id="reviewsRowMob">
                        </div>

                        <!-- SwiperJS для мобильных отзывов -->
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
                        <div class="reviewsMobBlock" style="display:none;">
                            <div class="d-flex flex-column align-items-center">
                                <div class="swiper reviewsMobSwiper">
                                    <div class="swiper-wrapper" id="reviewsMobSwiperWrapper">
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-center align-items-center" style="gap:24px; margin:32px 0 0 0;">
                                    <div class="Circle" id="mobReviewPrev" style="background:#fff;">
                                        <img src="/images/strL.png" class="img-fluid" style="width:32px;">
                                    </div>
                                    <div class="Circle" id="mobReviewNext" style="background:#fff;">
                                        <img src="/images/strR.png" class="img-fluid" style="width:32px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                        
                        <script>
                            // Массив отзывов для мобильной версии
                            const reviewsMob = [
                                {
                                    name: 'ИННА',
                                    text: 'Моему сыну 28 лет, но он начал злоупотреблять алкоголем, связался с компанией таких же неприятных ребят, бросил работу. Пришлось выводить его из запоя и отправлять на лечение, реабилитацию. Сотрудники центра сделали для нашей семьи очень многое, они вылечили моего ребенка от зависимости и помогли мне пережить этот сложный период.',
                                    date: '28.04.2023',
                                    read: true
                                },
                                {
                                    name: 'АЛИНА',
                                    text: 'Добрый день! В клинику обращались по поводу вывода из запоя, хочу выразить свою благодарность Михаилу и Артуру за профессиональный подход и поддержку, спасибо вам за помощь.',
                                    date: '28.04.2023',
                                    read: false
                                },
                                // Можно добавить больше отзывов
                            ];

                            let reviewsMobSwiperInstance = null;

                            function renderMobSwiperReviews() {
                                const wrapper = document.getElementById('reviewsMobSwiperWrapper');
                                if (!wrapper) return;
                                wrapper.innerHTML = '';
                                reviewsMob.forEach(r => {
                                    const slide = document.createElement('div');
                                    slide.className = 'swiper-slide';
                                    slide.innerHTML = `
                                        <div class='BlockOtzyv'>
                                            <img src='/images/skoba.png'>
                                            <div class='d-flex flex-column' style='gap: 10px;'>
                                                <p class='basic-bold-text-20'>${r.name}</p>
                                                <p class='basic-normal-text'>${r.text}</p>
                                                ${r.read ? "<p class='basic-normal-text text-click' style='color: #0DA3FF;'>Читать полностью</p>" : ''}
                                            </div>
                                            <p class='basic-normal-text' style='color: #7192A9;'>${r.date}</p>
                                        </div>
                                    `;
                                    wrapper.appendChild(slide);
                                });
                            }

                            function showMobSwiperIfNeeded() {
                                const mobBlock = document.querySelector('.reviewsMobBlock');
                                const reviewsRowMob = document.getElementById('reviewsRowMob');
                                if (window.innerWidth < 768) {
                                    if (mobBlock) mobBlock.style.display = '';
                                    if (reviewsRowMob) reviewsRowMob.style.display = 'none';
                                    renderMobSwiperReviews();
                                    if (reviewsMobSwiperInstance) reviewsMobSwiperInstance.destroy(true, true);
                                    reviewsMobSwiperInstance = new Swiper('.reviewsMobSwiper', {
                                        slidesPerView: 1,
                                        spaceBetween: 12,
                                        loop: true,
                                    });
                                    // Стрелки
                                    setTimeout(() => {
                                        const prevBtn = document.getElementById('mobReviewPrev');
                                        const nextBtn = document.getElementById('mobReviewNext');
                                        if (prevBtn && nextBtn && reviewsMobSwiperInstance) {
                                            prevBtn.onclick = () => reviewsMobSwiperInstance.slidePrev();
                                            nextBtn.onclick = () => reviewsMobSwiperInstance.slideNext();
                                        }
                                    }, 100);
                                } else {
                                    if (mobBlock) mobBlock.style.display = 'none';
                                    if (reviewsRowMob) reviewsRowMob.style.display = '';
                                    if (reviewsMobSwiperInstance) reviewsMobSwiperInstance.destroy(true, true);
                                }
                            }
                            window.addEventListener('DOMContentLoaded', showMobSwiperIfNeeded);
                            window.addEventListener('resize', showMobSwiperIfNeeded);
                        </script>
                        </div>

                        <script>
                            // Массив отзывов для мобильной версии
                            const reviewsMob = [
                                {
                                    name: 'ИННА',
                                    text: 'Моему сыну 28 лет, но он начал злоупотреблять алкоголем, связался с компанией таких же неприятных ребят, бросил работу. Пришлось выводить его из запоя и отправлять на лечение, реабилитацию. Сотрудники центра сделали для нашей семьи очень многое, они вылечили моего ребенка от зависимости и помогли мне пережить этот сложный период.',
                                    date: '28.04.2023',
                                    read: true
                                },
                                {
                                    name: 'АЛИНА',
                                    text: 'Добрый день! В клинику обращались по поводу вывода из запоя, хочу выразить свою благодарность Михаилу и Артуру за профессиональный подход и поддержку, спасибо вам за помощь.',
                                    date: '28.04.2023',
                                    read: false
                                },
                                // Можно добавить больше отзывов
                            ];

                            function renderMobileReview() {
                                const reviewsRowMob = document.getElementById('reviewsRowMob');
                                if (!reviewsRowMob) return;
                                reviewsRowMob.innerHTML = '';
                                // Показываем только первый отзыв
                                const r = reviewsMob[0];
                                const col = document.createElement('div');
                                col.className = 'col-12';
                                const block = document.createElement('div');
                                block.className = 'BlockOtzyv';
                                block.innerHTML = `
                                    <img src="/images/skoba.png">
                                    <div class="d-flex flex-column" style="gap: 10px;">
                                        <p class="basic-bold-text-20">${r.name}</p>
                                        <p class="basic-normal-text">${r.text}</p>
                                        ${r.read ? '<p class="basic-normal-text text-click" style="color: #0DA3FF;">Читать полностью</p>' : ''}
                                    </div>
                                    <p class="basic-normal-text" style="color: #7192A9;">${r.date}</p>
                                `;
                                col.appendChild(block);
                                reviewsRowMob.appendChild(col);
                            }

                            // Рендерим только на мобильных устройствах
                            function checkAndRenderMobReview() {
                                if (window.innerWidth < 768) {
                                    renderMobileReview();
                                } else {
                                    const reviewsRowMob = document.getElementById('reviewsRowMob');
                                    if (reviewsRowMob) reviewsRowMob.innerHTML = '';
                                }
                            }
                            window.addEventListener('DOMContentLoaded', checkAndRenderMobReview);
                            window.addEventListener('resize', checkAndRenderMobReview);
                        </script>
                        
                        <script>
                            const reviews = [
                                {
                                    name: 'ИННА',
                                    text: 'Моему сыну 28 лет, но он начал злоупотреблять алкоголем, связался с компанией таких же неприятных ребят, бросил работу. Пришлось выводить его из запоя и отправлять на лечение, реабилитацию. Сотрудники центра сделали для нашей семьи очень многое, они вылечили моего ребенка от зависимости и помогли мне пережить этот сложный период.',
                                    date: '28.04.2023',
                                    read: true
                                },
                                {
                                    name: 'АЛИНА',
                                    text: 'Добрый день! В клинику обращались по поводу вывода из запоя, хочу выразить свою благодарность Михаилу и Артуру за профессиональный подход и поддержку, спасибо вам за помощь.',
                                    date: '28.04.2023',
                                    read: false
                                },
                                // Можно добавить больше отзывов
                            ];
                            let reviewIndex = 0;
                            const reviewsRow = document.getElementById('reviewsRow');
                            function renderReviews(animClass = '') {
                                reviewsRow.innerHTML = '';
                                for (let i = 0; i < 2; i++) {
                                    const idx = (reviewIndex + i) % reviews.length;
                                    const r = reviews[idx];
                                    const col = document.createElement('div');
                                    col.className = 'col-6';
                                    const block = document.createElement('div');
                                    block.className = 'BlockOtzyv review-slide' + (animClass ? ' ' + animClass : '');
                                    block.innerHTML = `
                                        <img src="/images/skoba.png"    >
                                        <div class="d-flex flex-column" style="gap: 10px;">
                                            <p class="basic-bold-text-20">${r.name}</p>
                                            <p class="basic-normal-text">${r.text}</p>
                                            ${r.read ? '<p class="basic-normal-text text-click" style="color: #0DA3FF;">Читать полностью</p>' : ''}
                                        </div>
                                        <p class="basic-normal-text" style="color: #7192A9;">${r.date}</p>
                                    `;
                                    col.appendChild(block);
                                    reviewsRow.appendChild(col);
                                }
                            }
                            function slideReviewsLeft() {
                                const blocks = reviewsRow.querySelectorAll('.review-slide');
                                blocks.forEach(b => b.classList.add('slide-left'));
                                setTimeout(() => {
                                    reviewIndex = (reviewIndex + 1) % reviews.length;
                                    renderReviews('slide-right');
                                    setTimeout(() => {
                                        const newBlocks = reviewsRow.querySelectorAll('.review-slide');
                                        newBlocks.forEach(b => b.classList.remove('slide-right'));
                                    }, 20);
                                }, 250);
                            }
                            function slideReviewsRight() {
                                const blocks = reviewsRow.querySelectorAll('.review-slide');
                                blocks.forEach(b => b.classList.add('slide-right'));
                                setTimeout(() => {
                                    reviewIndex = (reviewIndex - 1 + reviews.length) % reviews.length;
                                    renderReviews('slide-left');
                                    setTimeout(() => {
                                        const newBlocks = reviewsRow.querySelectorAll('.review-slide');
                                        newBlocks.forEach(b => b.classList.remove('slide-left'));
                                    }, 20);
                                }, 250);
                            }
                            // Навешиваем обработчики на стрелки
                            renderReviews();
                            // Находим стрелки внутри блока отзывов
                            const blockStrlki = document.querySelector('.BlockStrlki.StrelkLg');
                            if (blockStrlki) {
                                const circles = blockStrlki.querySelectorAll('.Circle');
                                if (circles.length >= 2) {
                                    circles[0].onclick = slideReviewsRight;
                                    circles[1].onclick = slideReviewsLeft;
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>

            {{-- Футер --}}
            <div class="Footer">
                <div class="container">
                    <div class="row d-flex flex-row pfzzz">
                        <div class="col-12 col-md-8 col-lg-8 d-flex flex-column" style="gap: 30px; padding: 40px; 0px;">
                            <div style="gap: -5px;">
                                <p class="basic-big-text-52" style="color: white;">Остались вопросы?</p>
                                <p class="basic-bold-text-20" style="color: white; font-weight: 400;">Просто оставьте заявку и мы вам перезвоним в ближайшее время</p>
                            </div>

                            <div style="gap: 20px;" class="d-flex flex-column">
                                <div class="row otstup">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <input type="text" class="InputBlock" placeholder="Ваше имя">
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-6">
                                        <input type="text" class="InputBlock" placeholder="+7 999-999-99-99">
                                    </div>
                                </div>

                                <div class="row otstup">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="basic-button-press d-flex justify-content-center" style="background-color: white; width: 100% !important;"><p class="basic-bold-text-16" style="color: #0DA3FF;">Получить консультацию</p></div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-6">
                                        <p class="basic-regular-text-14" style="color: #9CB4C5;">Нажимая кнопку «Получить консультацию», вы соглашаетесь с <span style="text-decoration: underline;">политикой конфиденциальности</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-4 WomanFooterBlock">
                            <img src="{{ asset('images/WomanFooter.png') }}" class="WomanFooter">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Блок информации --}}
            <div class="BlockInfo">
                <p class="InfoText">Услуги предоставляются ООО «ДЕТОКС» по лицензии Л041-01177-91/00561129 от 02.02.2022 г. ОГРН - 1182375001511; ИНН: 2312268085</p>
                <p class="InfoText">295017, Республика Крым, г. Симферополь, ул. Киевская/пр-кт Победы, д. 75/1 (литера А)</p>
                <p class="InfoText">350000, Краснодарский край, г. Краснодар, тер Западный внутригородской округ, ул. Северная, д. 324, кв. 8, 9, 9/1, 10, 11, 3-й этаж</p>
                <p class="InfoText">Информация, предоставляемая на данном сайте, не замещает посещения вашего лечащего доктора. Она носит исключительно информационный характер и не является публичной офертой.</p>
            </div>

            <div class="DownBlock">
                <p class="InfoText" style="color:white;">Имеются противопоказания. Проконсультируйтесь с врачом.</p>
            </div>
        </div>
    </body>
</html>
