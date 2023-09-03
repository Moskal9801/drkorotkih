document.addEventListener('DOMContentLoaded', function () {
    let getCoords = (elem) => {
        let box = elem.getBoundingClientRect();
            return {
                top: box.top + window.scrollY,
                right: box.right + window.scrollX,
                bottom: box.bottom + window.scrollY,
                left: box.left + window.scrollX,
                height: box.height,
            };
        },
        isOnScreen = (elem) => {
            let coefficient;
            window.innerWidth <= 768 ? coefficient = .75 : coefficient = .9;
            return window.scrollY > (getCoords(elem).top - window.innerHeight / coefficient);
        },
        isMobile = () => {
            return window.outerWidth <= 767;
        },
        isExist = (selector) => {
            return document.querySelector(selector);
        },
        playAnimations = () => {
            let toAnimate = document.querySelectorAll('.animated');
            if (toAnimate) {
                for (let i of toAnimate) {
                    if (isOnScreen(i)) {
                        i.style.transform = 'translate(0, 0)';
                        i.style.opacity = '1';
                    }
                }
                window.addEventListener('scroll', function () {
                    for (let i of toAnimate) {
                        if (isOnScreen(i)) {
                            i.style.transform = 'translateX(0)';
                            i.style.opacity = '1';
                        }
                    }
                });
            }
        },
        playAnimationsSyncTop = () => {
            let toAnimate = document.querySelectorAll('.animated-sync-top');
            if (toAnimate) {
                for (let i of toAnimate) {
                    if ( isOnScreen( i ) ) {
                        i.classList.add( 'sync-to-top' );
                    }
                }
                window.addEventListener('scroll', function () {
                    for (let i of toAnimate) {
                        if ( isOnScreen( i ) ) {
                            i.classList.add( 'sync-to-top' );
                        }
                    }
                });
            }
        },
        playAnimationsSyncLeft = () => {
            let toAnimate = document.querySelectorAll('.animated-sync-left');
            if (toAnimate) {
                for (let i of toAnimate) {
                    if ( isOnScreen( i ) ) {
                        i.classList.add( 'sync-to-left' );
                    }
                }
                window.addEventListener('scroll', function () {
                    for (let i of toAnimate) {
                        if ( isOnScreen( i ) ) {
                            i.classList.add( 'sync-to-left' );
                        }
                    }
                });
            }
        },
        playAnimationsSyncFade = () => {
            let toAnimate = document.querySelectorAll('.animated-sync-fade');
            if (toAnimate) {
                for (let i of toAnimate) {
                    if ( isOnScreen( i ) ) {
                        i.classList.add( 'sync-to-fade' );
                    }
                }
                window.addEventListener('scroll', function () {
                    for (let i of toAnimate) {
                        if ( isOnScreen( i ) ) {
                            i.classList.add( 'sync-to-fade' );
                        }
                    }
                });
            }
        }

        playAnimations();
        playAnimationsSyncTop();
        playAnimationsSyncLeft();
        playAnimationsSyncFade();

    //МЕНЮ ХЭДЕРА НА ЭКРАНАХ МЕНЬШЕ 1280px
    if (window.outerWidth <= 1024) {
        let hamburgerIcon = document.querySelector('#hamburger-icon'),
            mobileHeader = document.querySelector('#mobile-header'),
            mobileMenu = document.querySelector('#mobile-menu'),
            backgroundMenu = document.querySelector('#background-menu'),
            prevScrollpos = window.scrollY;

        //АКТИВАЦИЯ МЕНЮ
        hamburgerIcon.onclick = function (e) {
            e.preventDefault();
            hamburgerIcon.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            backgroundMenu.classList.toggle('active');
            if (mobileMenu.classList.contains('active')) {
                mobileMenu.style.top = window.scrollY + mobileHeader.clientHeight + "px";
            } else {
                mobileMenu.style.top = -500 + "px";
            }
        };

        //НАЖАТИЕ НА БЭКГРАУНД АКТИВНОГО МЕНЮ
        backgroundMenu.onclick = function (e) {
            e.preventDefault();
            hamburgerIcon.classList.remove('active');
            mobileMenu.classList.remove('active');
            backgroundMenu.classList.remove('active');
            if (mobileMenu.classList.contains('active')) {
                mobileMenu.style.top = window.scrollY + mobileHeader.clientHeight + "px";
            } else {
                mobileMenu.style.top = -500 + "px";
            }
        }

        //ФУНКЦИОНАЛ ХЭДЕРА И МЕНЮ ПРИ СКРОЛЛЕ
        window.addEventListener('scroll', function () {
            let currentScrollPos = window.scrollY;

            if (window.scrollY <= 2) {
                mobileHeader.classList.remove('active');
            } else if (prevScrollpos > currentScrollPos) {
                mobileHeader.classList.add('active');
                mobileHeader.classList.remove('hide');
                hamburgerIcon.classList.remove('active');
                mobileMenu.classList.remove('active');
                backgroundMenu.classList.remove('active');
                if (mobileMenu.classList.contains('active')) {
                    mobileMenu.style.top = window.scrollY + mobileHeader.clientHeight + "px";
                } else {
                    mobileMenu.style.top = -500 + "px";
                }
            } else {
                mobileHeader.classList.add('hide');
                mobileHeader.classList.remove('active');
                hamburgerIcon.classList.remove('active');
                mobileMenu.classList.remove('active');
                backgroundMenu.classList.remove('active');
                if (mobileMenu.classList.contains('active')) {
                    mobileMenu.style.top = window.scrollY + mobileHeader.clientHeight + "px";
                } else {
                    mobileMenu.style.top = -500 + "px";
                }
            }
            prevScrollpos = currentScrollPos;
        });
    }

    if (isExist('.home-body')) {

        //ПОПАП ЧИТАТЬ ДАЛЕЕ
        if (isMobile()) {
            $(function () {
                $('.card__morePopup').magnificPopup({
                    type: 'inline',
                    preloader: false,
                    focus: '#username',
                    modal: true,
                    fixedContentPos: true,
                    overflowY: 'auto',
                });
            });
        }

        let mobileHeader = document.querySelector('#mobile-header'),
            homeBody = document.querySelector('.home-body');
        homeBody.style.paddingTop = mobileHeader.clientHeight + "px";

        //РАСКРЫВАЮЩИЙСЯ БАЯН
        let activeDirections = document.querySelectorAll('#activeDirection');

        activeDirections.forEach(function (activeDirection) {
            activeDirection.onclick = function (e) {
                e.preventDefault();
                activeDirections.forEach(function (elem) {
                    if (elem !== activeDirection && elem.classList.contains('active')) {
                        elem.classList.remove('active');
                    }
                });
                activeDirection.classList.toggle('active');
            };
        });

        //СВАЙПЕР СПАСАЯ ЖИЗНИ
        var swiper = new Swiper(".savingSwiper", {
            slidesPerView: 1,
            spaceBetween: 50,
            pagination: {
                el: ".saving-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".saving-button-next",
                prevEl: ".saving-button-prev",
            },
        });

        //СКРОЛЛИНГ ОБРАЗОВАНИЯ
        const educationBody = document.querySelector('#education__scroll');
        const leftEducationArrow = document.querySelector('#education__left-scroll');
        const rightEducationArrow = document.querySelector('#education__right-scroll');

        leftEducationArrow.classList.add('hide');

        educationBody.addEventListener('scroll', () => {
            if (educationBody.scrollLeft === 0) {
                leftEducationArrow.classList.add('hide');
            } else {
                leftEducationArrow.classList.remove('hide');
            }

            if (educationBody.scrollLeft === educationBody.scrollWidth - educationBody.clientWidth) {
                rightEducationArrow.classList.add('hide');
            } else {
                rightEducationArrow.classList.remove('hide');
            }
        });

        //СКРОЛЛИНГ НАГРАД
        const awardsBody = document.querySelector('#awards__scroll');
        const leftAwardsArrow = document.querySelector('#awards__left-scroll');
        const rightAwardsArrow = document.querySelector('#awards__right-scroll');

        leftAwardsArrow.classList.add('hide');

        awardsBody.addEventListener('scroll', () => {
            if (awardsBody.scrollLeft === 0) {
                leftAwardsArrow.classList.add('hide');
            } else {
                leftAwardsArrow.classList.remove('hide');
            }

            if (awardsBody.scrollLeft === awardsBody.scrollWidth - awardsBody.clientWidth) {
                rightAwardsArrow.classList.add('hide');
            } else {
                rightAwardsArrow.classList.remove('hide');
            }
        });

        //ПОПАП ОБРАЗОВАНИЯ И НАГРАД
        $(document).ready(function() {
            $('.open_image-popup').magnificPopup({
                type: 'image',
                fixedBgPos: true,
                fixedContentPos: true,
                overflowY: 'auto',
            });
        });

        //СВАЙПЕР ОТЗЫВОВ
        var swiper = new Swiper(".reviewsSwiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            slidesPerGroup: 1,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                    slidesPerGroup: 2,
                },
                1281: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    slidesPerGroup: 3,
                },
            },
        });

        //ЯНДЕКС КАРТА
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map('map', {
                    center: [50.265720, 127.544421],
                    zoom: 17,
                }),
                objectManager = new ymaps.ObjectManager({
                    clusterize: true,
                    gridSize: 32
                });
            myMap.geoObjects.add(objectManager);
            objectManager.objects.options.set('preset', 'islands#redDotIcon');
            myMap.geoObjects.add(objectManager);
            objectManager.add({
                "type": "FeatureCollection",
                "features": [
                    {
                        "type": "Feature",
                        "id": 1,
                        "geometry": {
                            "type": "Point",
                            "coordinates": [50.265720, 127.544421]
                        },
                        "properties": {
                            "balloonContent": 'Клиника кардиохирургии',
                        }
                    }
                ]
            });

            //Клик по метке в карте
            objectManager.objects.events.add('click', function (e) {
                var objectId = e.get('objectId');
                viewObject(objectId);
            });
            //Клик в списке
            [].forEach.call(document.querySelectorAll('[data-objectId]'), function (el) {
                el.addEventListener('click', function () {
                    var objectId = el.getAttribute("data-objectId");
                    viewObject(objectId);
                });
            });

            // Что происходит при выборе метки или варианта из списка
            function viewObject(objectId) {
                // Удаляем со всего списка класс active затем добавляем к выбранному
                for (var object of document.querySelectorAll('[data-objectId]')) {
                    object.classList.remove('active');
                }
                document.querySelector('[data-objectId="' + objectId + '"]').classList.add('active');
                // Выделяем все метки в синий, затем выбранную в красную
                objectManager.objects.each(function (item) {
                    objectManager.objects.setObjectOptions(item.id, {
                        preset: 'islands#blueIcon'
                    });
                });
                objectManager.objects.setObjectOptions(objectId, {
                    preset: 'islands#redDotIcon'
                });
                // Центрирование по метке
                myMap.setCenter(objectManager.objects.getById(objectId).geometry.coordinates, 15, {
                    checkZoomRange: true
                });
            }
        }
    }
    if (isExist('.about-body')) {

        playAnimations();

        let mobileHeader = document.querySelector('#mobile-header'),
            aboutBody = document.querySelector('.about-body');
        aboutBody.style.paddingTop = mobileHeader.clientHeight + "px";

        //СКРОЛЛИНГ ОБРАЗОВАНИЯ
        const educationBody = document.querySelector('#education__scroll');
        const leftEducationArrow = document.querySelector('#education__left-scroll');
        const rightEducationArrow = document.querySelector('#education__right-scroll');

        leftEducationArrow.classList.add('hide');

        educationBody.addEventListener('scroll', () => {
            if (educationBody.scrollLeft === 0) {
                leftEducationArrow.classList.add('hide');
            } else {
                leftEducationArrow.classList.remove('hide');
            }

            if (educationBody.scrollLeft === educationBody.scrollWidth - educationBody.clientWidth) {
                rightEducationArrow.classList.add('hide');
            } else {
                rightEducationArrow.classList.remove('hide');
            }
        });

        //СКРОЛЛИНГ НАГРАД
        const awardsBody = document.querySelector('#awards__scroll');
        const leftAwardsArrow = document.querySelector('#awards__left-scroll');
        const rightAwardsArrow = document.querySelector('#awards__right-scroll');

        leftAwardsArrow.classList.add('hide');

        awardsBody.addEventListener('scroll', () => {
            if (awardsBody.scrollLeft === 0) {
                leftAwardsArrow.classList.add('hide');
            } else {
                leftAwardsArrow.classList.remove('hide');
            }

            if (awardsBody.scrollLeft === awardsBody.scrollWidth - awardsBody.clientWidth) {
                rightAwardsArrow.classList.add('hide');
            } else {
                rightAwardsArrow.classList.remove('hide');
            }
        });

        //ТАБЫ ДЛЯ ДИПЛОМОВ И СЕРТИФИКАТОВ
        const awardsTabs = document.querySelectorAll('.awards-tab__active');
        const awardsAreas = document.querySelectorAll('.awards-area__active');
        const awardsControl = document.querySelectorAll('.area__control');

        awardsTabs.forEach(tab => {
            tab.addEventListener('click', (event) => {
                event.preventDefault();
                const tabData = tab.getAttribute('data-tab');
                awardsAreas.forEach(area => {
                    const areaData = area.getAttribute('data-tab');
                    if (areaData === tabData) {
                        area.classList.add('active');
                    } else {
                        area.classList.remove('active');
                    }
                });
                awardsTabs.forEach(t => {
                    const tData = t.getAttribute('data-tab');
                    if (tData === tabData) {
                        t.classList.add('active');
                    } else {
                        t.classList.remove('active');
                    }
                });
                awardsControl.forEach(control => {
                    const controlData = control.getAttribute('data-tab');
                    if (controlData === tabData) {
                        control.classList.add('active');
                    } else {
                        control.classList.remove('active');
                    }
                });
            });
        });


        //СВАЙПЕР ДЛЯ ДИПЛОМОВ
        var swiper = new Swiper(".awardsSwiper", {
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerGroup: 2,
            pagination: {
                el: ".awards-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".awards-button-next",
                prevEl: ".awards-button-prev",
            },
            breakpoints: {
                1280: {
                    slidesPerView: 5,
                    grid: {
                        rows: 2,
                        fill: 'row',
                    },
                    spaceBetween: 55,
                    slidesPerGroup: 5,
                },
                1024: {
                    slidesPerView: 4,
                    grid: {
                        rows: 2,
                        fill: 'row',
                    },
                    spaceBetween: 55,
                    slidesPerGroup: 4,
                },
                834: {
                    slidesPerView: 3,
                    grid: {
                        rows: 2,
                        fill: 'row',
                    },
                    spaceBetween: 55,
                    slidesPerGroup: 3,
                }

            }
        });

        //СВАЙПЕР ДЛЯ СЕРТИФИКАТОВ
        var swiper = new Swiper(".certificateSwiper", {
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerGroup: 2,
            pagination: {
                el: ".certificate-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".certificate-button-next",
                prevEl: ".certificate-button-prev",
            },
            breakpoints: {
                1280: {
                    slidesPerView: 5,
                    grid: {
                        rows: 2,
                        fill: 'row',
                    },
                    spaceBetween: 55,
                    slidesPerGroup: 5,
                },
                1024: {
                    slidesPerView: 4,
                    grid: {
                        rows: 2,
                        fill: 'row',
                    },
                    spaceBetween: 55,
                    slidesPerGroup: 4,
                },
                834: {
                    slidesPerView: 3,
                    grid: {
                        rows: 2,
                        fill: 'row',
                    },
                    spaceBetween: 55,
                    slidesPerGroup: 3,
                }

            }
        });

        //ПОПАП ДЛЯ ДИПЛОМОВ И СЕРТИФИКАТОВ
        $(document).ready(function() {
            $('.open_image-popup').magnificPopup({
                type: 'image',
                fixedContentPos: true,
                overflowY: 'auto',
            });
        });

        //ТАБЫ ДЛЯ ПУБЛИКАЦИЙ
        const publicationsTabs = document.querySelectorAll('.publications-tab__active');
        const publicationsAreas = document.querySelectorAll('.publications-area__active');

        publicationsTabs.forEach(tab => {
            tab.addEventListener('click', (event) => {
                event.preventDefault();
                const tabData = tab.getAttribute('data-tab');
                publicationsAreas.forEach(area => {
                    const areaData = area.getAttribute('data-tab');
                    if (areaData === tabData) {
                        area.classList.add('active');
                    } else {
                        area.classList.remove('active');
                    }
                });
                publicationsTabs.forEach(t => {
                    const tData = t.getAttribute('data-tab');
                    if (tData === tabData) {
                        t.classList.add('active');
                    } else {
                        t.classList.remove('active');
                    }
                });
            });
        });

        //СВАЙПЕР ЕН ПУБЛИКАЦИИ
        var swiper = new Swiper(".enPublicationsSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            grid: {
                rows: 7,
                fill: 'row',
            },
            pagination: {
                el: ".enPublications-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".enPublications-button-next",
                prevEl: ".enPublications-button-prev",
            }
        });

        //СВАЙПЕР РУ ПУБЛИКАЦИИ
        var swiper = new Swiper(".ruPublicationsSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            grid: {
                rows: 7,
                fill: 'row',
            },
            pagination: {
                el: ".ruPublications-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".ruPublications-button-next",
                prevEl: ".ruPublications-button-prev",
            },
        });

        //СВАЙПЕР ТЕЗИСЫ
        var swiper = new Swiper(".thesesSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            grid: {
                rows: 7,
                fill: 'row',
            },
            pagination: {
                el: ".theses-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".theses-button-next",
                prevEl: ".theses-button-prev",
            },
        });

        //СВАЙПЕР ПАТЕНТЫ
        var swiper = new Swiper(".patentsSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            grid: {
                rows: 7,
                fill: 'row',
            },
            pagination: {
                el: ".patents-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".patents-button-next",
                prevEl: ".patents-button-prev",
            },
        });

        //СВАЙПЕР НАГРАДЫ
        var swiper = new Swiper(".prizeSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            grid: {
                rows: 7,
                fill: 'row',
            },
            pagination: {
                el: ".prize-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".prize-button-next",
                prevEl: ".prize-button-prev",
            },
        });
    }
    if (isExist('.news-body')) {
        let mobileHeader = document.querySelector('#mobile-header'),
            aboutBody = document.querySelector('.news-body');
        aboutBody.style.paddingTop = mobileHeader.clientHeight + "px";
    }
    if (isExist('.page-inner')) {

        let mobileHeader = document.querySelector('#mobile-header'),
            aboutBody = document.querySelector('.page-inner__body');
        aboutBody.style.paddingTop = mobileHeader.clientHeight + "px";

        //ПРЕОБРАЗОВАНИЕ ФАЙЛОВ В ПОДОБАЩИЙ ВИД
        var links = document.querySelectorAll('.wp-block-file a');
        for (var i = 0; i < links.length; i++) {
            var link = links[i];
            var href = link.getAttribute('href');
            var ext = href.substr(href.lastIndexOf('.') + 1);
            var size = link.getAttribute('data-size');
            if (!size) {
                fetch(href)
                    .then(response => response.headers.get('content-length'))
                    .then(size => {
                        link.setAttribute('data-size', size);
                        var weight = (size / 1024).toFixed(2);
                        var fileFormat = link.querySelector('.file__format');
                        var fileWeight = link.querySelector('.file__weight');
                        fileFormat.textContent = ext.toUpperCase();
                        fileWeight.textContent = weight + ' KB';
                    });
            } else {
                var weight = (size / 1024).toFixed(2);
                var fileFormat = link.querySelector('.file__format');
                var fileWeight = link.querySelector('.file__weight');
                fileFormat.textContent = ext.toUpperCase();
                fileWeight.textContent = weight + ' KB';
            }
            var fileName = link.textContent.trim();
            link.innerHTML = '<p class="file__name">' + fileName + '</p>' +
                '<div class="file__info">' +
                '<p class="file__format">' + ext.toUpperCase() + '</p>' +
                '<p class="file__weight">' + weight + ' KB</p>' +
                '</div>';
            link.classList.add('file');
        }

        //ОБОРАЧИВАЕМ БЛОК ГАЛЛЕРЕИ-2 В СТРУКТУРУ <a>
        if (document.querySelector('.page-inner .wp-block-gallery.columns-2') !== null) {

            let galItem = document.querySelectorAll('.wp-block-gallery.columns-2 .wp-block-image');
            galItem.forEach(e => {
                src = e.querySelector('img').src;
                org_html = e.innerHTML;
                new_html = "<a href='" + src + "'>" + org_html + "</a>";
                e.innerHTML = new_html;
            })
        }

        //ПОПАП ГАЛЛЕРЕИ-2
        $('.page-inner .wp-block-gallery.columns-2 .wp-block-image').each(function () {

            $(this).magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                },
                fixedContentPos: true,
                overflowY: 'auto',
            });

        });

        //ОБОРАЧИВАЕМ БЛОК ГАЛЛЕРЕИ-1 В СТРУКТУРУ СВАЙПЕРА
        const galleries = document.querySelectorAll('.wp-block-gallery.columns-1');

        galleries.forEach(gallery => {

            const swiperContainer = document.createElement('div');
            swiperContainer.classList.add('innerSwiper', 'swiper');

            const swiperWrapper = document.createElement('div');
            swiperWrapper.classList.add('swiper-wrapper');

            const images = gallery.querySelectorAll('.wp-block-image');

            images.forEach(image => {
                const swiperSlide = document.createElement('div');
                swiperSlide.classList.add('swiper-slide');
                swiperSlide.appendChild(image);
                swiperWrapper.appendChild(swiperSlide);
            });

            swiperContainer.appendChild(swiperWrapper);

            const galleryWrapper = document.createElement('div');

            Array.from(gallery.attributes).forEach(attr => {
                galleryWrapper.setAttribute(attr.name, attr.value);
            });

            galleryWrapper.innerHTML = swiperContainer.outerHTML;

            const contentControl = document.createElement('div');
            contentControl.classList.add('content__control');

            const controlPrev = document.createElement('div');
            controlPrev.classList.add('control__prev', 'inner-button-prev');

            const svgPrev = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            svgPrev.setAttribute('width', '40');
            svgPrev.setAttribute('height', '40');
            svgPrev.setAttribute('viewBox', '0 0 40 40');
            svgPrev.setAttribute('fill', 'none');

            const circlePrev = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
            circlePrev.setAttribute('cx', '20');
            circlePrev.setAttribute('cy', '20');
            circlePrev.setAttribute('r', '19.5');
            circlePrev.setAttribute('stroke', '#0070C0');
            svgPrev.appendChild(circlePrev);

            const pathPrev = document.createElementNS('http://www.w3.org/2000/svg', 'path');
            pathPrev.setAttribute('d', 'M22.625 26.75L16.375 20.5L22.625 14.25');
            pathPrev.setAttribute('stroke', '#0070C0');
            pathPrev.setAttribute('stroke-linecap', 'round');
            pathPrev.setAttribute('stroke-linejoin', 'round');
            svgPrev.appendChild(pathPrev);

            controlPrev.appendChild(svgPrev);
            contentControl.appendChild(controlPrev);

            const controlPagination = document.createElement('div');
            controlPagination.classList.add('control__pagination', 'inner-pagination');
            contentControl.appendChild(controlPagination);

            const controlNext = document.createElement('div');
            controlNext.classList.add('control__next', 'inner-button-next');

            const svgNext = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            svgNext.setAttribute('width', '40');
            svgNext.setAttribute('height', '40');
            svgNext.setAttribute('viewBox', '0 0 40 40');
            svgNext.setAttribute('fill', 'none');

            const circleNext = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
            circleNext.setAttribute('cx', '20');
            circleNext.setAttribute('cy', '20');
            circleNext.setAttribute('r', '19.5');
            circleNext.setAttribute('transform', 'matrix(-1 0 0 1 40 0)');
            circleNext.setAttribute('stroke', '#0070C0');
            svgNext.appendChild(circleNext);

            const pathNext = document.createElementNS('http://www.w3.org/2000/svg', 'path');
            pathNext.setAttribute('d', 'M17.375 26.75L23.625 20.5L17.375 14.25');
            pathNext.setAttribute('stroke', '#0070C0');
            pathNext.setAttribute('stroke-linecap', 'round');
            pathNext.setAttribute('stroke-linejoin', 'round');
            svgNext.appendChild(pathNext);

            controlNext.appendChild(svgNext);
            contentControl.appendChild(controlNext);

            galleryWrapper.appendChild(contentControl);

            gallery.replaceWith(galleryWrapper);
        });

        //СВАЙПЕР ГАЛЛЕРЕИ-2
        var swiper = new Swiper(".innerSwiper", {
            slidesPerView: 1,
            spaceBetween: 50,
            pagination: {
                el: ".inner-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".inner-button-next",
                prevEl: ".inner-button-prev",
            },
            fixedContentPos: true,
            overflowY: 'auto',
        });
    }

    window.addEventListener('load', function () {

        const backToUp = document.querySelector('#backToUp');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset >= 1000) {
                backToUp.classList.add('active');
            } else {
                backToUp.classList.remove('active');
            }
        });

        backToUp.onclick = function (e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }

        var zhLink = document.querySelector('a[title="简体中文"]');
        zhLink.innerHTML = '<img class="trp-flag-image" src="https://drkorotkikh.ru/wp-content/plugins/translatepress-multilingual/assets/images/flags/zh_CN.png" width="18" height="12" alt="zh_CN" title="简体中文"> 中文';

        //ЯКОРЬ КОНТАКТОВ

        const contactLink = document.querySelector('#menu-item-27 a');

        contactLink.href = '/#contact-anchor';

        //ПОПАП ЗАПИСИ
        $('.open-popup__entry').magnificPopup({
            type: 'inline',
            callbacks: {
                beforeOpen: function () {
                    this.st.mainClass = this.st.el.attr('data-effect');
                },
                beforeClose: function() {
                    var form = this.content.find('form');
                    if (form.length) {
                        form[0].reset();
                    }
                    var links = this.content.find('a.remove-file[data-storage="your-file-popup_count_files"]');

                    links.each(function() {
                        $(this).click();
                    });
                },
            },
            fixedContentPos: true,
            overflowY: 'auto',
            midClick: true,
            items: {
                src: '.popup-entry',
            }
        });

        //const input = document.getElementById('your-file');

        //input.addEventListener('change', function() {
            //const file = this.files[0];
            //const validExtensions = ['doc', 'pdf', 'docx', 'rtf'];
            //const extension = file.name.split('.').pop().toLowerCase();

            //if (!validExtensions.includes(extension)) {
                //const errorSpan = document.createElement('span');
                //errorSpan.textContent = 'Данный файл неправильного формата';
                //errorSpan.classList.add('error-format');
                //const uploadStatus = document.querySelector('.dnd-upload-status');
                //uploadStatus.appendChild(errorSpan);

                //const errorProgressBar = uploadStatus.querySelector('.dnd-progress-bar');
                //errorProgressBar.style.setProperty('display', 'none', 'important');

            //}
        //});

        //const popupInput = document.getElementById('your-file-popup');

        //popupInput.addEventListener('change', function() {
            //const file = this.files[0];
            //const validExtensions = ['doc', 'pdf', 'docx', 'rtf'];
            //const extension = file.name.split('.').pop().toLowerCase();

            //if (!validExtensions.includes(extension)) {
                //const errorSpan = document.createElement('span');
                //errorSpan.textContent = 'Данный файл неправильного формата';
                //errorSpan.classList.add('error-format');
                //const uploadStatus = document.querySelector('.dnd-upload-status');
                //uploadStatus.appendChild(errorSpan);

                //const errorProgressBar = uploadStatus.querySelector('.dnd-progress-bar');
                //errorProgressBar.style.setProperty('display', 'none', 'important');

            //}
        //});

        //[mfile your-file limit:5242880 filetypes:doc|pdf|docx|rtf min-file:0 max-file:20 id:your-file]
        document.querySelectorAll('input[name=your-name]').forEach(function(input) {
            input.addEventListener('input', function() {
                this.value = this.value.replace(/[^a-zA-Zа-яА-Я\s]/g, '');
            });
        });

        document.querySelectorAll('input[name=your-phone]').forEach(function(input) {
            input.addEventListener('input', function() {
                this.value = this.value.replace(/[^\d]/g, '');
            });
        });

        document.querySelectorAll('input[name=your-mail]').forEach(function(input) {
            input.addEventListener('input', function() {
                this.value = this.value.replace(/[^a-zA-Z0-9@.]/g, '');
            });
        });

        //ПОПАП ПОДТВЕРЖДЕНИЯ ИЛИ ОШИБКИ
        let wpcf7 = document.querySelectorAll('.wpcf7');
        for (let form of wpcf7) {
            form.addEventListener('wpcf7mailsent', function () {
                $.magnificPopup.close();
                $.magnificPopup.open({
                    type: 'inline',
                    items: {
                        src: '.popup__sent',
                    },
                    fixedContentPos: true,
                    overflowY: 'auto',
                });
            });
            form.addEventListener('wpcf7mailfailed', function () {
                $.magnificPopup.close();
                $.magnificPopup.open({
                    type: 'inline',
                    items: {
                        src: '.popup__failed',
                    },
                    fixedContentPos: true,
                    overflowY: 'auto',
                });
            });
        }
    });
});