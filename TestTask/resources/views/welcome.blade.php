        <style>
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(.4,2,.6,1), opacity 0.4s;
            opacity: 0;
        }
        .accordion-content.open {
            opacity: 1;
            max-height: 500px;
        }
        .AccardeonBlock {
            cursor: pointer;
        }
        </style>
        <style>
        .fade-text {
            opacity: 0;
            transition: opacity 0.5s;
        }
        .fade-text.show {
            opacity: 1;
        }
        </style>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    </head>

    <body>
        {{-- Прехейдер --}}
        <div class="preHeader">
            <p class="basic-small-text" style="display: flex; justify-content: center; mt-2; color: #577F9C;">Имеются противопоказания, необходимо проконсультироваться со специалистом 18+</p>
        </div>

        {{-- Хейдер --}}
        <div class="container">
            <div class="d-flex flex-row justify-content-between align-items-center p-3">
                <img src="{{ asset('images/logo.png') }}" alt="Логотип">

                <div class="SideBar">
                    <p class="basic-normal-text anim-blue" >Услуги</p>
                    <p class="basic-normal-text anim-blue">Этапы лечения</p>
                    <p class="basic-normal-text anim-blue">О нас</p>
                    <p class="basic-normal-text anim-blue">Отзывы</p>
                    <p class="basic-normal-text anim-blue">Контакты</p>
                </div>

                <div class="callBlock">
                    <div>
                        <p class="basic-bold-text-18" style="color: #0DA3FF;">8 (906) 180-00-41</p>
                        <p class="basic-regular-text" style="color: #3838388C;">Работаем 24/7</p>
                    </div>
                    <div class="basic-button">
                        <p class="basic-bold-text-16" style="color: #FFFFFF;"> Заказать звонок</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Встречный блок --}}
        <div class="BlockMain">
            <div class="container">
                <div class="d-flex flex-row justify-content-between">
                    <div class="d-flex flex-column justify-content-center w-max-content" style="gap: 60px;">
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <p class="basic-big-text-62">Срочный вызов <br> врача-нарколога</p>

                            <div class="d-flex flex-column" style="gap: 5px; margin-t">
                                <div class="d-flex flex-row" style="gap: 10px;">
                                    <img src="{{ asset('images/ci_check-all.png') }}" alt="Логотип">
                                    <p class="basic-normal-text">Сохраняем анонимность, не требуем паспорт и не ставим на учёт</p>
                                </div>

                                <div class="d-flex flex-row" style="gap: 10px;">
                                    <img src="{{ asset('images/ci_check-all.png') }}" alt="Логотип">
                                    <p class="basic-normal-text">Помощь квалифицированного врача на дому</p>
                                </div>

                                <div class="d-flex flex-row" style="gap: 10px;">
                                    <img src="{{ asset('images/ci_check-all.png') }}" alt="Логотип">
                                    <p class="basic-normal-text">Приедем на адрес за 20 минут</p>
                                </div>

                                <div class="d-flex flex-row" style="gap: 10px;">
                                    <img src="{{ asset('images/ci_check-all.png') }}" alt="Логотип">
                                    <p class="basic-normal-text">Первичная консультация - бесплатно</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row" style="gap: 20px;">
                            <div class="basic-button">
                                <p class="basic-bold-text-16" style="color: #FFFFFF;">Получить помощь</p>
                            </div>

                            <div class="basic-button-press">
                                <p class="basic-bold-text-16" style="color: #0DA3FF;"> Заказать звонок</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-end" style="overflow: hidden;" >
                        <img style="height: 90%; position: relative;" src="{{ asset('images/Woman.png') }}">
                    </div>
                </div>
            </div>
        </div>

        {{-- Наши услуги (2 - блок) --}}
        <div class="OurServices">
            <div class="container">
                <div class="Services">
                    
                    <div>
                        <p class="basic-big-text-52 mb-4">Наши услуги</p>

                        <div style="gap: 20px;" class="d-flex flex-column">
                            <div class="BlockLine">
                                <div class="Block">
                                    <img src="{{ asset('images/Services1.jpg') }}">

                                    <div class="p-4" style="display: flex; flex-direction: column; gap: 40px;">
                                        <div>
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

                                <div class="Block">
                                    <img src="{{ asset('images/Services2.jpg') }}">
                                    
                                    <div class="p-4" style="display: flex; flex-direction: column; gap: 40px;">
                                        <div>
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

                                <div class="Block">
                                    <img src="{{ asset('images/Services3.jpg') }}">
                                    
                                    <div class="p-4" style="display: flex; flex-direction: column; gap: 40px;">
                                        <div>
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

                            <div class="BlockLine">
                                <div class="Block">
                                    <img src="{{ asset('images/Services4.jpg') }}">

                                    <div class="p-4" style="display: flex; flex-direction: column; gap: 40px;">
                                        <div>
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

                                <div class="Block">
                                    <img src="{{ asset('images/Services5.jpg') }}">
                                    
                                    <div class="p-4" style="display: flex; flex-direction: column; gap: 40px;">
                                        <div>
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

                                <div class="Block">
                                    <img src="{{ asset('images/Services6.jpg') }}">
                                    
                                    <div class="p-4" style="display: flex; flex-direction: column; gap: 40px;">
                                        <div>
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


                    <div style="margin: 100px 0px;">
                        <p class="basic-big-text-52">Этапы лечения</p>

                        <div class="HorizontalBlock">
                            <div class="HorizontalBlockLine">
                                <div class="mb-4">
                                    <p class="basic-big-text-grey" style="color: #E8EFF3;">01</p>

                                    <div class="cube">
                                        <div class="line"></div>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center" style="gap: 10px">
                                <img src="{{ asset('images/Icon1.png') }}" style="width: 50px; height: 50px;">
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
                                <img src="{{ asset('images/Icon2.png') }}" style="width: 50px; height: 50px;">
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
                                <img src="{{ asset('images/Icon3.png') }}" style="width: 50px; height: 50px;">
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
                                <img src="{{ asset('images/Icon4.png') }}" style="width: 50px; height: 50px;">
                                <p class="basic-regular-text-16">ДиВосстановление <br> организма</p>
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
                                <img src="{{ asset('images/Icon5.png') }}" style="width: 50px; height: 50px;">
                                <p class="basic-regular-text-16">Бесплатные <br> консультации</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Блок о нас --}}
        <div class="AboutBlock">
            <div class="container">
                <div class="row">
                    <div style="border-bottom: 1px solid #DDEBF4; padding: 60px 0px;" class="d-flex flex-row">
                        <div class="col-6 d-flex flex-column" style="gap: 20px; padding: 0px 20px 0px 0px;">
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

                        <div class="col-6 position-relative image-slider-one">
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
                    </div>

                    <div class="mt-5">
                        <p class="basic-bold-text-24">Имеем все необходимые документы для предоставления медицинских услуг:</p>

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
            <div class="container d-flex flex-row" style="gap: 100px;">
                
                <div style="width: max-content;" class="d-flex flex-column justify-between">
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

                    <div class="d-flex flex-row" style="gap: 5px;">
                        <div class="Circle" id="medPrevBtn">
                            <img src="http://127.0.0.1:8000/images/strL.png" class="img-fluid">
                        </div>
                        <div class="Circle" id="medNextBtn">
                            <img src="{{ asset('images/strR.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="MedPhotos" id="medPhotos">
                    <!-- Фото будут рендериться динамически -->
                </div>
            </div>
        </div>

        <script>
            // Данные о персонале
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
                    <div class="col-6">
                        <img style="border-radius: 20px;" src="{{ asset('images/Woman.jpg') }}">
                    </div>

                    <div class="col-6 d-flex flex-column" style="gap: 50px;">
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
                        <div class="col-6 d-flex flex-column justify-content-center" style="gap: 20px;">
                            <p class="basic-big-text-white" style="color: white;">Больной не хочет <br> лечиться?</p>
                            <p class="basic-normal-text" style="color: white;">Врачами создана эффективная технология мотивации пациентов согласиться на терапию.</p>
                            <p class="basic-normal-text" style="color: white;">Метод показывает высокие результаты — 8 из 10 людей добровольно решаются начать лечение от зависимости.</p>
                        </div>

                        <div class="col-6">
                            <div class="d-flex flex-column align-items-center"style="padding: 0px 40px; gap: 20px;">
                                <div class="row">
                                    <div class='col-6'>
                                        <input type="text" class="InputBlock" placeholder="Ваше имя">
                                    </div>

                                    <div class='col-6'>
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
        <div class="FAQ">
            <div class="container">
                <p class="basic-big-text-52 mb-5">Частые вопросы и ответы</p>

                <div class="row">
                    <div class="col-8">
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
                        </div>
                        <script>
                        // Аккордеон с анимацией
                        document.querySelectorAll('.AccardeonBlock').forEach(block => {
                            const wrap = block.querySelector('.accordion-toggle-wrap');
                            const plus = wrap ? wrap.querySelector('.accordion-toggle') : null;
                            const minus = wrap ? wrap.querySelector('.accordion-toggle-minus') : null;
                            const content = block.querySelector('.accordion-content');
                            if (plus && minus) {
                                plus.addEventListener('click', e => {
                                    e.stopPropagation();
                                    content.classList.toggle('open');
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
                                    plus.style.display = 'inline';
                                    minus.style.display = 'none';
                                });
                            }
                        });
                        </script>
                    </div>

                    <div class="col-4">
                        <div class="ContactFAQ">
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

                        <div class="d-flex flex-row" style="gap: 5px;">
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
                    <style>
                    .review-slide {
                        transition: transform 0.25s cubic-bezier(.4,2,.6,1), opacity 0.25s;
                    }
                    .slide-left {
                        transform: translateX(-100%);
                        opacity: 0;
                    }
                    .slide-right {
                        transform: translateX(100%);
                        opacity: 0;
                    }
                    </style>
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
                                <img src="/images/skoba.png">
                                <div class="d-flex flex-column" style="gap: 10px;">
                                    <p class="basic-bold-text-20">${r.name}</p>
                                    <p class="basic-normal-text">${r.text}</p>
                                    ${r.read ? '<p class="basic-normal-text" style="color: #0DA3FF;">Читать полностью</p>' : ''}
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
                    document.querySelectorAll('.BlockOtzyv').forEach(b => b.remove()); // удалить старые
                    renderReviews();
                    // Выбираем стрелки только внутри блока отзывов
                    const reviewsBlock = reviewsRow.closest('.mt-5');
                    if (reviewsBlock) {
                        const nav = reviewsBlock.querySelector('.d-flex.flex-row[style*="gap: 5px"]');
                        if (nav) {
                            const circles = nav.querySelectorAll('.Circle');
                            if (circles.length >= 2) {
                                circles[0].addEventListener('click', slideReviewsRight);
                                circles[1].addEventListener('click', slideReviewsLeft);
                            }
                        }
                    }
                    </script>
                </div>
            </div>
        </div>

        {{-- Футер --}}
        <div class="Footer">
            <div class="container">
                <div class="row d-flex flex-row" style="padding: 40px 0px 0px 0px;">
                    <div class="col-8 d-flex flex-column" style="gap: 30px; padding: 40px; 0px;">
                        <div style="gap: -5px;">
                            <p class="basic-big-text-52" style="color: white;">Остались вопросы?</p>
                            <p class="basic-bold-text-20" style="color: white; font-weight: 400;">Просто оставьте заявку и мы вам перезвоним в ближайшее время</p>
                        </div>

                        <div style="gap: 20px;" class="d-flex flex-column">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="InputBlock" placeholder="Ваше имя">
                                </div>

                                <div class="col-6">
                                    <input type="text" class="InputBlock" placeholder="+7 999-999-99-99">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="basic-button-press d-flex justify-content-center" style="background-color: white; width: 100% !important;"><p class="basic-bold-text-16" style="color: #0DA3FF;">Получить консультацию</p></div>
                                </div>

                                <div class="col-6">
                                    <p class="basic-regular-text-14" style="color: #9CB4C5;">Нажимая кнопку «Получить консультацию», вы соглашаетесь с <span style="text-decoration: underline;">политикой конфиденциальности</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <img src="{{ asset('images/WomanFooter.png') }}">
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
    </body>
</html>
