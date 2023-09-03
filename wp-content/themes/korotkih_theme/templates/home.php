<?php
    /* Template name: Главная */
    get_header();
?>

    <div class="home-body">
        <div class="home-body__banner">
            <div class="banner__content content">
                <div class="content__left-content">
                    <p class="left-content__name">
                        Александр Коротких
                    </p>
                    <p class="left-content__position"><?php the_field( 'banner_speciality' ); ?></p>
                    <p class="left-content__about"><?php the_field( 'banner_about' ); ?></p>
                    <div class="left-content__statistics <?php if(is_mobile()): ?>animated to-top<?php endif; ?>">
                        <div class="statistics__statistic <?php if(!is_mobile()): ?>animated-sync-left<?php endif; ?>">
                            <p class="statistic__name">Операций всего</p>
                            <p class="statistic__number"><?php the_field( 'banner_total-operations' ); ?></p>
                        </div>
                        <div class="statistics__statistic <?php if(!is_mobile()): ?>animated-sync-left<?php endif; ?>">
                            <p class="statistic__name">Операций ежегодно</p>
                            <p class="statistic__number"><?php the_field( 'banner_annually-operations' ); ?></p>
                        </div>
                        <div class="statistics__statistic <?php if(!is_mobile()): ?>animated-sync-left<?php endif; ?>">
                            <p class="statistic__name">Патентов</p>
                            <p class="statistic__number"><?php the_field( 'banner_patents' ); ?></p>
                        </div>
                        <div class="statistics__statistic <?php if(!is_mobile()): ?>animated-sync-left<?php endif; ?>">
                            <p class="statistic__name">Публикаций</p>
                            <p class="statistic__number"><?php the_field( 'banner_publications' ); ?></p>
                        </div>
                    </div>
                </div>
                <div class="content__right-content">
                    <img src="<?php the_field( 'banner_image' ); ?>">
                </div>
            </div>
            <div class="banner__line">
                <img src="/wp-content/themes/korotkih_theme/assets/images/banner-line.png">
            </div>
        </div>
        <div class="home-body__direction">
            <div class="direction__content content">
                <p class="content__name animated fade-in">Направления деятельности</p>
                <div class="content__cards">
                    <?php if ( have_rows( 'activities' ) ) : ?>
                        <?php $counter = 1;
                        while ( have_rows( 'activities' ) ) : the_row();
                        $number = sprintf("%02d", $counter);?>
                            <a class="cards__card animated-sync-top" href="#" id="activeDirection">
                                <div class="card__top">
                                    <p class="top__number"><?php echo $number; ?></p>
                                    <p class="top__name"><?php the_sub_field( 'activities_name' ); ?></p>
                                    <div class="top__arrow">
                                        <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L11 11L21 1" stroke="#0070C0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="card__bottom">
                                    <?php if( !get_sub_field( 'activities_image' ) ) : ?>
                                        <p class="bottom__info noImage"><?php the_sub_field( 'activities_text' ); ?></p>
                                    <?php else: ?>
                                        <p class="bottom__info"><?php the_sub_field( 'activities_text' ); ?></p>
                                        <div class="bottom__image">
                                            <img src="<?php the_sub_field( 'activities_image' ); ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </a>
                        <?php $counter++; endwhile; ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="body__form">
            <div class="form__content content">
                <div class="content__body animated to-top">
                    <div class="content__sign">
                        <svg width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M60 73.3333L73.3333 86.6667L103.333 56.6667M66 128L75.7333 140.978C77.1808 142.908 77.9045 143.873 78.7918 144.218C79.5689 144.52 80.4311 144.52 81.2082 144.218C82.0955 143.873 82.8192 142.908 84.2667 140.978L94 128C95.9543 125.394 96.9315 124.091 98.1234 123.097C99.7126 121.77 101.589 120.832 103.603 120.357C105.114 120 106.743 120 110 120C119.319 120 123.978 120 127.654 118.478C132.554 116.448 136.448 112.554 138.478 107.654C140 103.978 140 99.3188 140 90V52C140 40.799 140 35.1984 137.82 30.9202C135.903 27.1569 132.843 24.0973 129.08 22.1799C124.802 20 119.201 20 108 20H52C40.7989 20 35.1984 20 30.9202 22.1799C27.1569 24.0973 24.0973 27.1569 22.1799 30.9202C20 35.1984 20 40.7989 20 52V90C20 99.3188 20 103.978 21.5224 107.654C23.5523 112.554 27.4458 116.448 32.3463 118.478C36.0218 120 40.6812 120 50 120C53.2572 120 54.8858 120 56.3967 120.357C58.4113 120.832 60.2874 121.77 61.8766 123.097C63.0685 124.091 64.0457 125.394 66 128Z" stroke="#0070C0" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p class="content__name">Чем я могу помочь?</p>
                    <p class="content__more">Оставьте свои контакты в форме ниже, а я свяжусь с вами в ближайшее время</p>
                    <?php echo do_shortcode('[contact-form-7 id="43" title="Запись на прием"]') ?>
                </div>
            </div>
        </div>
        <div class="home-body__saving-lives">
            <div class="saving-lives__content content">
                <div class="content__name animated fade-in">
                    <p class="name__top">Спасая жизни</p>
                    <p class="name__bottom">Конкретные кейсы из клинической практики</p>
                </div>
                <div class="content__cards swiper savingSwiper animated to-top">
                    <div class="swiper-wrapper">
                        <?php if ( have_rows( 'lives' ) ) : ?>
                            <?php $popupCounter = 1; ?>
                            <?php while ( have_rows( 'lives' ) ) : the_row(); ?>
                                <div class="cards__card swiper-slide">
                                    <div class="card__left-content">
                                        <img class="left-content__first-image" src="<?php the_sub_field( 'lives_top-text' ); ?>">
                                        <img class="left-content__second-image" src="<?php the_sub_field( 'lives_bottom-text' ); ?>">
                                    </div>
                                    <div class="card__right-content">
                                        <p class="right-content__name"><?php the_sub_field( 'lives_name' ); ?></p>
                                        <p class="right-content__info"><?php the_sub_field( 'lives_text' ); ?></p>
                                    </div>
                                    <a class="card__morePopup" href="#popup__more<?php echo $popupCounter; ?>">Читать далее</a>

                                    <div id="popup__more<?php echo $popupCounter; ?>" class="card__popup mfp-hide">
                                        <div class="popup__closed">
                                            <svg class="mfp-close" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="29" height="29" rx="5.5" stroke="black"/>
                                                <path d="M22.0711 8.07107L7.92893 22.2132M22.0711 22.2132L7.92893 8.07107" stroke="black" stroke-linecap="round"/>
                                            </svg>
                                        </div>
                                        <div class="popup__title">

                                        </div>
                                        <div class="popup__top-content">
                                            <p class="right-content__name"><?php the_sub_field( 'lives_name' ); ?></p>
                                            <p class="right-content__info"><?php the_sub_field( 'lives_text' ); ?></p>
                                        </div>
                                        <div class="popup__bottom-content">
                                            <img class="left-content__first-image" src="<?php the_sub_field( 'lives_top-text' ); ?>">
                                            <img class="left-content__second-image" src="<?php the_sub_field( 'lives_bottom-text' ); ?>">
                                        </div>
                                    </div>
                                    <?php $popupCounter++; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class="content__control">
                    <div class="control__prev saving-button-prev">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="19.5" stroke="#0070C0"/>
                            <path d="M22.625 26.75L16.375 20.5L22.625 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="control__pagination saving-pagination"></div>
                    <div class="control__next saving-button-next">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="19.5" transform="matrix(-1 0 0 1 40 0)" stroke="#0070C0"/>
                            <path d="M17.375 26.75L23.625 20.5L17.375 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-body__achievements">
            <div class="achievements__content content">
                <div class="content__awards">
                    <p class="awards__name animated fade-in">Образование</p>
                    <div class="awards__scroll">
                        <div class="scroll__left-arrow">
                            <svg id="education__left-scroll" width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.141083 3.61487L3.22495 0.158215C3.2697 0.108055 3.32282 0.0682659 3.38129 0.0411196C3.43976 0.0139734 3.50242 1.29875e-06 3.56571 1.29377e-06C3.629 1.28879e-06 3.69166 0.0139734 3.75013 0.0411196C3.8086 0.0682658 3.86173 0.108055 3.90648 0.158214C3.95123 0.208374 3.98673 0.267922 4.01095 0.333459C4.03516 0.398996 4.04763 0.469238 4.04763 0.540174C4.04763 0.611111 4.03516 0.681353 4.01095 0.74689C3.98673 0.812427 3.95123 0.871975 3.90648 0.922134L1.64524 3.45672L19.5181 3.45672C19.6459 3.45672 19.7685 3.51363 19.8589 3.61492C19.9492 3.7162 20 3.85358 20 3.99682C20 4.14007 19.9492 4.27745 19.8589 4.37873C19.7685 4.48002 19.6459 4.53693 19.5181 4.53693L1.64524 4.53693L3.90648 7.07152C3.95249 7.12136 3.98918 7.18096 4.01442 7.24687C4.03966 7.31277 4.05293 7.38365 4.05347 7.45536C4.05401 7.52707 4.0418 7.59819 4.01755 7.66456C3.99331 7.73093 3.95751 7.79122 3.91226 7.84192C3.867 7.89261 3.81319 7.9327 3.75397 7.95984C3.69474 7.98698 3.63129 8.00062 3.56731 7.99998C3.50333 7.99934 3.4401 7.98442 3.38132 7.95609C3.32254 7.92777 3.26938 7.88661 3.22495 7.83501L0.141083 4.37835C0.0963387 4.32824 0.0608429 4.26873 0.0366234 4.20322C0.0124058 4.13772 -6.06403e-05 4.06751 -6.06472e-05 3.99661C-6.0654e-05 3.92571 0.0124058 3.8555 0.0366234 3.79C0.0608429 3.72449 0.0963386 3.66498 0.141083 3.61487Z" fill="#C9D1D7"/>
                            </svg>
                        </div>
                        <p class="scroll__info">листайте вправо и влево</p>
                        <div class="scroll__right-arrow">
                            <svg id="education__right-scroll" width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.8589 4.38513L16.7751 7.84179C16.7303 7.89195 16.6772 7.93174 16.6187 7.95888C16.5602 7.98603 16.4976 8 16.4343 8C16.371 8 16.3083 7.98603 16.2499 7.95888C16.1914 7.93174 16.1383 7.89195 16.0935 7.84179C16.0488 7.79163 16.0133 7.73208 15.9891 7.66654C15.9648 7.60101 15.9524 7.53076 15.9524 7.45983C15.9524 7.38889 15.9648 7.31865 15.9891 7.25311C16.0133 7.18757 16.0488 7.12803 16.0935 7.07787L18.3548 4.54328H0.481853C0.354058 4.54328 0.231497 4.48637 0.141132 4.38508C0.0507666 4.2838 0 4.14642 0 4.00318C0 3.85993 0.0507666 3.72255 0.141132 3.62127C0.231497 3.51998 0.354058 3.46307 0.481853 3.46307H18.3548L16.0935 0.928483C16.0475 0.878646 16.0108 0.819037 15.9856 0.753135C15.9603 0.687232 15.9471 0.616355 15.9465 0.544641C15.946 0.472927 15.9582 0.401811 15.9824 0.335442C16.0067 0.269073 16.0425 0.208781 16.0877 0.158084C16.133 0.107387 16.1868 0.0672994 16.246 0.0401611C16.3053 0.0130234 16.3687 -0.000621796 16.4327 2.14577e-05C16.4967 0.000664711 16.5599 0.015584 16.6187 0.0439086C16.6775 0.0722332 16.7306 0.113396 16.7751 0.164995L19.8589 3.62165C19.9037 3.67177 19.9392 3.73128 19.9634 3.79678C19.9876 3.86228 20.0001 3.93249 20.0001 4.00339C20.0001 4.0743 19.9876 4.1445 19.9634 4.21001C19.9392 4.27551 19.9037 4.33502 19.8589 4.38513Z" fill="#C9D1D7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="awards__body" id="education__scroll">
                        <?php if ( have_rows( 'education' ) ) : ?>
                            <?php while ( have_rows( 'education' ) ) : the_row(); ?>

                                <div class="body__card animated-sync-top">
                                    <p class="card__year"><?php the_sub_field( 'education_name' ); ?></p>
                                    <p class="card__text"><?php the_sub_field( 'education_text' ); ?></p>
                                    <div class="card__more">
                                        <div class="more__icon">
                                            <?php if (get_sub_field( 'education_sign' ) === 'Иконка книжки'): ?>
                                                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M27.5 16.3808C29.3929 8.8932 36.5419 5.06996 52.1071 5.00001C52.356 4.99907 52.6025 5.04749 52.8326 5.14248C53.0627 5.23747 53.2717 5.37715 53.4477 5.55348C53.6236 5.7298 53.763 5.93927 53.8578 6.16983C53.9526 6.40038 54.0009 6.64746 54 6.89681V41.0392C54 41.5423 53.8006 42.0247 53.4456 42.3805C53.0906 42.7362 52.6091 42.936 52.1071 42.936C36.9643 42.936 31.1142 45.9958 27.5 50.5232C23.9071 46.0183 18.0357 42.936 2.89287 42.936C1.72403 42.936 1.00001 41.9817 1.00001 40.8104V6.89681C0.999075 6.64746 1.04739 6.40038 1.14219 6.16983C1.23698 5.93927 1.37637 5.7298 1.55233 5.55348C1.72828 5.37715 1.93732 5.23747 2.1674 5.14248C2.39747 5.04749 2.64403 4.99907 2.89287 5.00001C18.4581 5.06996 25.6071 8.8932 27.5 16.3808Z" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M27.5 16.3809V50.5233" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M20.6191 15.9663L5.87479 15.9663" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M20.6191 19.8979H5.87479" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.7227 23.8301H5.87604" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            <?php elseif (get_sub_field( 'education_sign' ) === 'Иконка ученика'): ?>
                                                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 12.25V32.5" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.86523 50.5C10.8536 47.5062 13.5713 45.0466 16.7723 43.3441C19.9733 41.6416 23.5564 40.75 27.197 40.75C30.8376 40.75 34.4206 41.6416 37.6216 43.3441C40.8226 45.0466 43.5404 47.5062 45.5287 50.5" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M51.3957 12.25L27.1979 20.5L3 12.25L27.1979 4L51.3957 12.25Z" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M37.4727 16.75C39.2984 18.8 40.5046 21.3519 40.9443 24.0946C41.384 26.8372 41.0382 29.6522 39.949 32.1963C38.8598 34.7404 37.0743 36.9037 34.8102 38.4225C32.5461 39.9413 29.9011 40.75 27.1977 40.75C24.4944 40.75 21.8494 39.9413 19.5853 38.4225C17.3211 36.9037 15.5356 34.7404 14.4464 32.1963C13.3573 29.6522 13.0115 26.8372 13.4512 24.0946C13.8909 21.3519 15.0971 18.8 16.9228 16.75" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            <?php elseif (get_sub_field( 'education_sign' ) === 'Иконка доктора'): ?>
                                                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.11914 50.1298V44.117C6.11914 40.1495 8.92773 36.768 12.7467 36.1468L17.9929 35.2912C20.6416 34.8575 22.5882 32.5134 22.5882 29.759V23.4238" stroke="#0070C0" stroke-linecap="round"/>
                                                    <path d="M49.8812 50.1298V44.117C49.8812 40.1495 47.0726 36.768 43.2536 36.1468L38.0075 35.2912C35.3587 34.8575 33.4121 32.5134 33.4121 29.759V23.4238" stroke="#0070C0" stroke-linecap="round"/>
                                                    <path d="M27.9983 30.351C33.5849 30.351 38.1138 24.4815 38.1138 17.2412C38.1138 10.0008 33.5849 4.13135 27.9983 4.13135C22.4117 4.13135 17.8828 10.0008 17.8828 17.2412C17.8828 24.4815 22.4117 30.351 27.9983 30.351Z" fill="white" stroke="#0070C0" stroke-linecap="round"/>
                                                    <path d="M39.2844 15.2843C39.2844 15.2843 34.7461 13.1921 27.9986 13.1921C21.2512 13.1921 16.7129 15.2843 16.7129 15.2843V6.22401C16.7129 6.22401 21.2512 4.13184 27.9986 4.13184C34.7461 4.13184 39.2844 6.22401 39.2844 6.22401V15.2843Z" fill="white" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M30.7287 17.8685C32.6834 17.8685 34.268 16.2417 34.268 14.235C34.268 12.2283 32.6834 10.6016 30.7287 10.6016C28.774 10.6016 27.1895 12.2283 27.1895 14.235C27.1895 16.2417 28.774 17.8685 30.7287 17.8685Z" fill="white" stroke="#0070C0" stroke-linecap="round"/>
                                                    <path d="M36.2541 34.6934L27.9824 41.2922L19.7051 34.6934" fill="white"/>
                                                    <path d="M36.2541 34.6934L27.9824 41.2922L19.7051 34.6934" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M27.9844 41.2925V50.8684" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M36.4277 44.4102H41.2743" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            <?php endif ?>
                                        </div>
                                        <a class="more__button open_image-popup" href="<?php the_sub_field( 'education_image' ); ?>">
                                            Смотреть фото
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class="content__awards">
                    <p class="awards__name animated fade-in">Профессиональные<br>награды</p>
                    <div class="awards__scroll">
                        <div class="scroll__left-arrow">
                            <svg id="awards__left-scroll" width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.141083 3.61487L3.22495 0.158215C3.2697 0.108055 3.32282 0.0682659 3.38129 0.0411196C3.43976 0.0139734 3.50242 1.29875e-06 3.56571 1.29377e-06C3.629 1.28879e-06 3.69166 0.0139734 3.75013 0.0411196C3.8086 0.0682658 3.86173 0.108055 3.90648 0.158214C3.95123 0.208374 3.98673 0.267922 4.01095 0.333459C4.03516 0.398996 4.04763 0.469238 4.04763 0.540174C4.04763 0.611111 4.03516 0.681353 4.01095 0.74689C3.98673 0.812427 3.95123 0.871975 3.90648 0.922134L1.64524 3.45672L19.5181 3.45672C19.6459 3.45672 19.7685 3.51363 19.8589 3.61492C19.9492 3.7162 20 3.85358 20 3.99682C20 4.14007 19.9492 4.27745 19.8589 4.37873C19.7685 4.48002 19.6459 4.53693 19.5181 4.53693L1.64524 4.53693L3.90648 7.07152C3.95249 7.12136 3.98918 7.18096 4.01442 7.24687C4.03966 7.31277 4.05293 7.38365 4.05347 7.45536C4.05401 7.52707 4.0418 7.59819 4.01755 7.66456C3.99331 7.73093 3.95751 7.79122 3.91226 7.84192C3.867 7.89261 3.81319 7.9327 3.75397 7.95984C3.69474 7.98698 3.63129 8.00062 3.56731 7.99998C3.50333 7.99934 3.4401 7.98442 3.38132 7.95609C3.32254 7.92777 3.26938 7.88661 3.22495 7.83501L0.141083 4.37835C0.0963387 4.32824 0.0608429 4.26873 0.0366234 4.20322C0.0124058 4.13772 -6.06403e-05 4.06751 -6.06472e-05 3.99661C-6.0654e-05 3.92571 0.0124058 3.8555 0.0366234 3.79C0.0608429 3.72449 0.0963386 3.66498 0.141083 3.61487Z" fill="#C9D1D7"/>
                            </svg>
                        </div>
                        <p class="scroll__info">листайте вправо и влево</p>
                        <div class="scroll__right-arrow">
                            <svg id="awards__right-scroll" width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.8589 4.38513L16.7751 7.84179C16.7303 7.89195 16.6772 7.93174 16.6187 7.95888C16.5602 7.98603 16.4976 8 16.4343 8C16.371 8 16.3083 7.98603 16.2499 7.95888C16.1914 7.93174 16.1383 7.89195 16.0935 7.84179C16.0488 7.79163 16.0133 7.73208 15.9891 7.66654C15.9648 7.60101 15.9524 7.53076 15.9524 7.45983C15.9524 7.38889 15.9648 7.31865 15.9891 7.25311C16.0133 7.18757 16.0488 7.12803 16.0935 7.07787L18.3548 4.54328H0.481853C0.354058 4.54328 0.231497 4.48637 0.141132 4.38508C0.0507666 4.2838 0 4.14642 0 4.00318C0 3.85993 0.0507666 3.72255 0.141132 3.62127C0.231497 3.51998 0.354058 3.46307 0.481853 3.46307H18.3548L16.0935 0.928483C16.0475 0.878646 16.0108 0.819037 15.9856 0.753135C15.9603 0.687232 15.9471 0.616355 15.9465 0.544641C15.946 0.472927 15.9582 0.401811 15.9824 0.335442C16.0067 0.269073 16.0425 0.208781 16.0877 0.158084C16.133 0.107387 16.1868 0.0672994 16.246 0.0401611C16.3053 0.0130234 16.3687 -0.000621796 16.4327 2.14577e-05C16.4967 0.000664711 16.5599 0.015584 16.6187 0.0439086C16.6775 0.0722332 16.7306 0.113396 16.7751 0.164995L19.8589 3.62165C19.9037 3.67177 19.9392 3.73128 19.9634 3.79678C19.9876 3.86228 20.0001 3.93249 20.0001 4.00339C20.0001 4.0743 19.9876 4.1445 19.9634 4.21001C19.9392 4.27551 19.9037 4.33502 19.8589 4.38513Z" fill="#C9D1D7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="awards__body" id="awards__scroll">
                        <?php if ( have_rows( 'awards' ) ) : ?>
                            <?php while ( have_rows( 'awards' ) ) : the_row(); ?>
                                <div class="body__card animated-sync-top">
                                    <p class="card__year"><?php the_sub_field( 'awards_name' ); ?></p>
                                    <p class="card__text"><?php the_sub_field( 'awards_text' ); ?></p>
                                    <div class="card__more">
                                        <div class="more__icon">
                                            <?php if (get_sub_field( 'awards_sign' ) === 'Иконка грамоты'): ?>
                                                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <mask id="mask0_507_3649" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="1" width="54" height="54">
                                                        <path d="M54.5 54.5V1.5H1.5V54.5H54.5Z" fill="white" stroke="white"/>
                                                    </mask>
                                                    <g mask="url(#mask0_507_3649)">
                                                        <path d="M12.3681 40.2451H2.58203V6.35738H53.418V40.2451H26.1241" stroke="#0070C0" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </g>
                                                    <path d="M34.8672 33.8486H47.0511" stroke="#0070C0" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M34.8672 27.5205H47.0511" stroke="#0070C0" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <mask id="mask1_507_3649" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="1" width="54" height="54">
                                                        <path d="M54.5 54.5V1.5H1.5V54.5H54.5Z" fill="white" stroke="white"/>
                                                    </mask>
                                                    <g mask="url(#mask1_507_3649)">
                                                        <path d="M26.1252 34.6717V49.6426L19.2472 46.4785L12.3691 49.6426V35.3927" stroke="#0070C0" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M28.7784 27.9761C28.7784 29.24 27.3095 30.2028 26.8538 31.3018C26.3812 32.4412 26.7213 34.1565 25.8627 35.0151C25.0042 35.8737 23.2889 35.5336 22.1496 36.0061C21.0506 36.4618 20.0877 37.9307 18.8238 37.9307C17.5599 37.9307 16.5972 36.4618 15.4981 36.006C14.3587 35.5336 12.6436 35.8736 11.7848 35.015C10.9262 34.1565 11.2663 32.4412 10.7938 31.3018C10.3381 30.2028 8.86914 29.24 8.86914 27.9761C8.86914 26.7122 10.3381 25.7494 10.7938 24.6504C11.2663 23.511 10.9262 21.7957 11.7849 20.9371C12.6436 20.0785 14.3587 20.4186 15.4981 19.9462C16.5972 19.4904 17.5599 18.0215 18.8238 18.0215C20.0877 18.0215 21.0506 19.4904 22.1496 19.9462C23.2889 20.4186 25.0042 20.0786 25.8627 20.9372C26.7214 21.7958 26.3813 23.511 26.8538 24.6504C27.3095 25.7494 28.7784 26.7122 28.7784 27.9761Z" stroke="#0070C0" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M19.2461 46.4785V37.8771" stroke="#0070C0" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </g>
                                                </svg>
                                            <?php elseif (get_sub_field( 'awards_sign' ) === 'Иконка кубка'): ?>
                                                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <mask id="mask0_507_3674" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="4" y="4" width="48" height="48">
                                                        <path d="M51.5 51.5V4.5H4.5V51.5H51.5Z" fill="white" stroke="white"/>
                                                    </mask>
                                                    <g mask="url(#mask0_507_3674)">
                                                        <path d="M28 33.5312C16.75 33.5312 14.9381 15.4116 13.9375 5.40625H42.0625C40.8479 17.5527 39.25 33.5312 28 33.5312Z" stroke="#0070C0" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M19 27.9062C13.0975 27.9062 8.3125 23.1212 8.3125 17.2188V11.0312H14.5538" stroke="#0070C0" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M41.4627 11.0312H47.6875V17.2188C47.6875 23.1212 42.9026 27.9062 37 27.9062" stroke="#0070C0" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M27.9981 12.1055L29.6513 15.4551L33.3477 15.9923L30.6729 18.5997L31.3045 22.2812L27.9981 20.543L24.6917 22.2812L25.3233 18.5997L22.6484 15.9923L26.3449 15.4551L27.9981 12.1055Z" stroke="#0070C0" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M25.1875 33.5312V37.9375C25.1875 40.523 23.7267 42.8867 21.4142 44.043L20.5233 44.4883C18.2108 45.6446 16.75 48.0082 16.75 50.5938H39.25C39.25 48.0082 37.7892 45.6446 35.4767 44.4883L34.5858 44.043C32.2733 42.8867 30.8125 40.523 30.8125 37.9375V33.5312" stroke="#0070C0" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </g>
                                                </svg>
                                            <?php elseif (get_sub_field( 'awards_sign' ) === 'Иконка медали'): ?>
                                                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.1725 9.4674H43.8253M52.2957 1H3.70508M27.9989 54C36.9365 54 44.2253 46.7112 44.2253 37.7736C44.2253 28.836 36.9365 21.5472 27.9989 21.5472C19.0643 21.5472 11.7755 28.836 11.7755 37.7736C11.7755 46.7112 19.0643 54 27.9989 54Z" stroke="#0070C0" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M24.6095 21.9044L3.70508 1V12.976L16.7802 26.0511M31.3913 21.9044L52.2957 1V12.976L39.2176 26.0511M27.9989 29.2756L31.1287 33.3948L36.0114 35.0956L33.0616 39.3431L32.9517 44.5127L27.9989 43.0225L23.0491 44.5127L22.9392 39.3431L19.9895 35.0956L24.8721 33.3948L27.9989 29.2756Z" stroke="#0070C0" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            <?php endif ?>
                                        </div>
                                        <a class="more__button open_image-popup" href="<?php the_sub_field( 'awards_image' ); ?>">Смотреть фото</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class="content__line">
                    <svg width="973" height="278" viewBox="0 0 973 278" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_f_507_3201)">
                            <path d="M11 198.733H643.163L694.308 70.7333L732.668 267L822.173 11L864.795 190.2H1162" stroke="#0070C0" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <filter id="filter0_f_507_3201" x="0" y="0" width="1173" height="278" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                <feGaussianBlur stdDeviation="3" result="effect1_foregroundBlur_507_3201"/>
                            </filter>
                        </defs>
                    </svg>
                </div>
                <div class="content__more">
                    <a class="animated fade-in" href="/about">Подробнее обо мне</a>
                </div>
            </div>
        </div>
        <div class="home-body__news">
            <div class="news__content content">
                <p class="content__name animated fade-in">Новости</p>
                <div class="content__body">
                    <div class="body__cards">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 6
                        );
                        $query = new WP_Query( $args );
                        if ( $query->have_posts() ) :
                            while ( $query->have_posts() ) : $query->the_post(); ?>
                                <a class="cards__card animated-sync-top" href="<?php echo get_permalink(); ?>">
                                    <div class="card__image">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="card__date">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.99663 1H15.0033C16.106 1 16.9999 1.89595 16.9999 3.00116V14.9989C16.9999 16.0538 16.1854 16.9181 15.1523 16.9945L14.9937 17L2.98705 16.9422C1.88809 16.937 1 16.0426 1 14.9411V3.00116C1 1.89595 1.89392 1 2.99663 1V1Z" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M1 5.00244H17" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M4.99246 10.0051C5.54381 10.0051 5.99077 9.55709 5.99077 9.00449C5.99077 8.45188 5.54381 8.00391 4.99246 8.00391C4.4411 8.00391 3.99414 8.45188 3.99414 9.00449C3.99414 9.55709 4.4411 10.0051 4.99246 10.0051Z" fill="#0070C0"/>
                                        </svg>
                                        <p><?php echo get_the_date();?></p>
                                    </div>
                                    <p class="card__name"><?php the_title(); ?></p>
                                    <div class="card__more"><?php the_excerpt(); ?></div>
                                </a>
                            <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                    <div class="body__more animated fade-in">
                        <a href="<?php echo get_category_link('30') ?>">Все новости</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-body__reviews">
            <div class="reviews__content content">
                <p class="content__name animated fade-in">Отзывы пациентов</p>
                <div class="content__cards swiper reviewsSwiper">
                    <div class="swiper-wrapper">
                        <?php if ( have_rows( 'reviews' ) ) : ?>
                            <?php while ( have_rows( 'reviews' ) ) : the_row(); ?>
                                <div class="cards__card swiper-slide animated-sync-top">
                                    <div class="card__header">
                                        <div class="header__avatar">
                                            <?php echo mb_strtoupper(mb_substr(get_sub_field( 'reviews_name' ), 0, 1, 'UTF-8'),'UTF-8');?>
                                        </div>
                                        <div class="header__info">
                                            <p class="info__name"><?php the_sub_field( 'reviews_name' ); ?></p>
                                            <p class="info__date"><?php the_sub_field( 'reviews_date' ); ?></p>
                                        </div>
                                    </div>
                                    <p class="card__text"><?php the_sub_field( 'reviews_text' ); ?></p>
                                    <a class="card__photo open_image-popup" href="<?php the_sub_field( 'reviews_image' ); ?>">Смотреть фото отзыва</a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="content__control">
                    <div class="control__prev swiper-button-prev">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="19.5" stroke="#0070C0"/>
                            <path d="M22.625 26.75L16.375 20.5L22.625 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="control__pagination swiper-pagination"></div>
                    <div class="control__next swiper-button-next">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="19.5" transform="matrix(-1 0 0 1 40 0)" stroke="#0070C0"/>
                            <path d="M17.375 26.75L23.625 20.5L17.375 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-body__contacts">
            <div class="contacts__content content" id="contact-anchor">
                <p class="content__name animated fade-in">
                    Контакты
                </p>
                <div class="content__body animated-sync-top">
                    <div class="body__maps" id="map"></div>
                    <div class="body__info">
                        <div class="info__reception">
                            <div class="reception__sign">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 22.75C23.8995 22.75 26.25 20.3995 26.25 17.5C26.25 14.6005 23.8995 12.25 21 12.25C18.1005 12.25 15.75 14.6005 15.75 17.5C15.75 20.3995 18.1005 22.75 21 22.75Z" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21 38.5C28 31.5 35 25.232 35 17.5C35 9.76801 28.732 3.5 21 3.5C13.268 3.5 7 9.76801 7 17.5C7 25.232 14 31.5 21 38.5Z" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="21" cy="17" r="6" fill="#0070C0"/>
                                </svg>
                            </div>
                            <div class="reception__content">
                                <p class="content__name">Прием</p>
                                <p class="content__info">В <span>«Клинике кардиохирургии АГМА»</span><br>по предварительной записи:<br><br>
                                    Амурская область, г. Благовещенск, ул. Горького 97 .</p>
                            </div>
                        </div>
                        <div class="info__telegram">
                            <div class="telegram__sign">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="32" height="32" rx="16" stroke="#0070C0"/>
                                    <path d="M23.1008 10.3967L20.6213 23.341C20.6213 23.341 20.2744 24.2385 19.3214 23.8081L13.6006 19.2658L13.574 19.2524C14.3468 18.5339 20.339 12.9546 20.6009 12.7017C21.0063 12.31 20.7546 12.0769 20.2839 12.3727L11.4326 18.1936L8.01783 17.0038C8.01783 17.0038 7.48044 16.8058 7.42875 16.3754C7.37637 15.9443 8.03552 15.7111 8.03552 15.7111L21.9566 10.0558C21.9566 10.0558 23.1008 9.53519 23.1008 10.3967Z" fill="#0070C0"/>
                                </svg>
                            </div>
                            <div class="telegram__content">
                                <p class="content__name">Telegram</p>
                                <a class="content__info" target="_blank" href="https://t.me/<?php the_field( 'telegram', 'option' ); ?>"><?php the_field( 'telegram', 'option' ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    get_footer();
?>








