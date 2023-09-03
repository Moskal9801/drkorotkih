<?php
/* Template name: Обо мне */
get_header();
?>

<div class="about-body">
    <div class="about-body__banner">
        <div class="banner__content content">
            <div class="content__left-content">
                <p class="left-content__name animated-sync-top">
                    Меня зовут Александр Коротких
                </p>
                <p class="left-content__position animated-sync-top"><?php the_field( 'banner_speciality' ); ?></p>
                <p class="left-content__about animated-sync-top"><?php the_field( 'banner_about' ); ?></p>
            </div>
            <div class="content__right-content">
                <?php if ( have_rows( 'banner_images' ) ) : ?>
                    <?php while ( have_rows( 'banner_images' ) ) : the_row(); ?>
                        <?php if ( get_sub_field( 'images_image' ) ) : ?>
                            <div class="right-content__photo animated-sync-fade">
                                <img src="<?php the_sub_field( 'images_image' ); ?>" />
                            </div>
                        <?php endif ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="content__mobile-content">
                <?php if ( have_rows( 'banner_mobile-images' ) ) : ?>
                    <?php while ( have_rows( 'banner_mobile-images' ) ) : the_row(); ?>
                        <?php if ( get_sub_field( 'images_image' ) ) : ?>
                            <div class="right-content__photo">
                                <img src="<?php the_sub_field( 'images_image' ); ?>" />
                            </div>
                        <?php endif ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="about-body__achievements">
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
        </div>
    </div>
    <div class="about-body__membership">
        <div class="membership__content content">
            <p class="content__name animated fade-in">Членство в медицинских организациях</p>
            <div class="content__cards animated to-top">
                <?php if ( have_rows( 'membership' ) ) : ?>
                    <?php $counter = 1;
                    while ( have_rows( 'membership' ) ) : the_row();
                    $number = sprintf("%02d", $counter);?>
                        <div class="cards__card">
                            <p class="card__number"><?php echo $number; ?></p>
                            <p class="card__text"><?php the_sub_field( 'membership_name' ); ?></p>
                        </div>
                    <?php $counter++; endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="about-body__awards">
        <div class="awards__content content">
            <p class="content__name animated fade-in">Дипломы и сертификаты</p>
            <div class="content__cards animated to-top">
                <div class="cards__tab">
                    <a class="awards-tab__active active" data-tab="1" href="#">Дипломы</a>
                    <a class="awards-tab__active" data-tab="2" href="#">Сертификаты</a>
                </div>
                <div class="cards__area">
                    <div class="awards-area__active active swiper awardsSwiper" data-tab="1">
                        <div class="swiper-wrapper">
                            <?php if ( have_rows( 'diplomas' ) ) : ?>
                                <?php while ( have_rows( 'diplomas' ) ) : the_row(); ?>
                                    <a class="active__card swiper-slide open_image-popup" href="<?php the_sub_field( 'diplomas_image' ); ?>">
                                        <div class="card__image">
                                            <img src="<?php the_sub_field( 'diplomas_image' ); ?>" />
                                        </div>
                                        <p class="card__text"><?php the_sub_field( 'diplomas_text' ); ?></p>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="awards-area__active swiper certificateSwiper" data-tab="2">
                        <div class="swiper-wrapper">
                            <?php if ( have_rows( 'certificate' ) ) : ?>
                                <?php while ( have_rows( 'certificate' ) ) : the_row(); ?>
                                    <a class="active__card swiper-slide open_image-popup" href="<?php the_sub_field( 'certificate_image' ); ?>">
                                        <div class="card__image">
                                            <img src="<?php the_sub_field( 'certificate_image' ); ?>" />
                                        </div>
                                        <p class="card__text"><?php the_sub_field( 'certificate_text' ); ?></p>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="area__control awardsControl active" data-tab="1">
                        <div class="control__prev awards-button-prev">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="19.5" stroke="#0070C0"/>
                                <path d="M22.625 26.75L16.375 20.5L22.625 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="control__pagination awards-pagination"></div>
                        <div class="control__next awards-button-next">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="19.5" transform="matrix(-1 0 0 1 40 0)" stroke="#0070C0"/>
                                <path d="M17.375 26.75L23.625 20.5L17.375 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="area__control certificateControl" data-tab="2">
                        <div class="control__prev certificate-button-prev">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="19.5" stroke="#0070C0"/>
                                <path d="M22.625 26.75L16.375 20.5L22.625 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="control__pagination certificate-pagination"></div>
                        <div class="control__next certificate-button-next">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="19.5" transform="matrix(-1 0 0 1 40 0)" stroke="#0070C0"/>
                                <path d="M17.375 26.75L23.625 20.5L17.375 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-body__publications">
        <div class="publications__content content">
            <p class="content__name animated fade-in">Публикации, исследования и другие материалы</p>
            <div class="content__cards animated to-top">
                <div class="cards__tab">
                    <a class="publications-tab__active active" data-tab="1" href="#">Публикации в зарубежных журналах</a>
                    <a class="publications-tab__active" data-tab="2" href="#">Публикации в российских журналах</a>
                    <a class="publications-tab__active" data-tab="3" href="#">Тезисы конференций</a>
                    <a class="publications-tab__active" data-tab="4" href="#">Патенты</a>
                    <a class="publications-tab__active" data-tab="5" href="#">Награды</a>
                </div>
                <div class="cards__area">
                    <div class="publications-area__active active" data-tab="1">
                        <p class="area__name">Публикации в зарубежных журналах</p>
                        <div class="area__cards swiper enPublicationsSwiper">
                            <div class="swiper-wrapper">
                                <?php if ( have_rows( 'enPublications' ) ) : ?>
                                    <?php $count = 0; ?>
                                    <div class="cards__card swiper-slide">
                                    <?php while ( have_rows( 'enPublications' ) ) : the_row(); ?>
                                        <?php $enPublications_file = get_sub_field( 'enPublications_file' ); ?>
                                        <?php if ( $enPublications_file ) : ?>
                                            <?php $file_extension = pathinfo($enPublications_file['url'], PATHINFO_EXTENSION); ?>
                                            <a class="card__file" href="<?php echo esc_url( $enPublications_file['url'] ); ?>" target="_blank">
                                                <div>
                                                    <?php if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif', 'bmp'))) { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#50BEE8"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#50BEE8"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#50BEE8"/>
                                                            <path d="M7.59533 18.355C7.59533 17.704 8.61833 17.704 8.61833 18.355V21.4143C8.61833 22.6311 8.03708 23.3673 6.6973 23.3673C6.03855 23.3673 5.48927 23.1881 5.00877 22.5691C4.61352 22.0963 5.35752 21.4153 5.76052 21.9103C6.08602 22.3133 6.43477 22.4063 6.7748 22.3908C7.20783 22.3753 7.58855 22.1806 7.5963 21.4143V18.355H7.59533ZM9.97942 18.355C9.97942 18.0993 10.1809 17.8203 10.5064 17.8203H12.2957C13.3032 17.8203 14.21 18.4945 14.21 19.7868C14.21 21.0113 13.3032 21.6933 12.2957 21.6933H11.0024V22.7163C11.0024 23.0573 10.7854 23.2501 10.5064 23.2501C10.2507 23.2501 9.97942 23.0573 9.97942 22.7163V18.355ZM11.0024 18.7958V20.7255H12.2957C12.815 20.7255 13.2257 20.2673 13.2257 19.7868C13.2257 19.2453 12.815 18.7958 12.2957 18.7958H11.0024ZM19.7415 22.6543C19.1913 23.1116 18.517 23.3053 17.836 23.3053C16.2085 23.3053 15.0547 22.3763 15.0547 20.5318C15.0547 18.9682 16.2715 17.7524 17.9048 17.7524C18.517 17.7524 19.1903 17.9607 19.6708 18.4335C20.1426 18.8975 19.4615 19.5873 18.9975 19.1775C18.7108 18.8985 18.3078 18.6892 17.9048 18.6892C16.968 18.6892 16.0622 19.44 16.0622 20.5318C16.0622 21.6788 16.8207 22.3763 17.836 22.3763C18.3078 22.3763 18.7108 22.2358 18.9975 22.0275V21.0753H17.836C17.1462 21.0753 17.216 20.1298 17.836 20.1298H19.385C19.6718 20.1298 19.9343 20.3468 19.9343 20.587V22.2368C19.9343 22.3763 19.8733 22.5061 19.7415 22.6543Z" fill="white"/>
                                                        </svg>
                                                    <?php } elseif ($file_extension == 'pdf') { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#F15642"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#F15642"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#F15642"/>
                                                            <path d="M5.16016 18.3548C5.16016 18.0991 5.36166 17.8201 5.68619 17.8201H7.47547C8.48297 17.8201 9.38972 18.4943 9.38972 19.7866C9.38972 21.0111 8.48297 21.6931 7.47547 21.6931H6.18219V22.7161C6.18219 23.0571 5.96519 23.2499 5.68619 23.2499C5.43044 23.2499 5.16016 23.0571 5.16016 22.7161V18.3548ZM6.18219 18.7956V20.7253H7.47547C7.99472 20.7253 8.40547 20.2671 8.40547 19.7866C8.40547 19.2451 7.99472 18.7956 7.47547 18.7956H6.18219ZM10.9068 23.2499C10.651 23.2499 10.372 23.1104 10.372 22.7704V18.3703C10.372 18.0923 10.651 17.8898 10.9068 17.8898H12.6806C16.2204 17.8898 16.1429 23.2499 12.7503 23.2499H10.9068ZM11.395 18.8353V22.3054H12.6806C14.7721 22.3054 14.8651 18.8353 12.6806 18.8353H11.395ZM17.3984 18.8973V20.1286H19.3737C19.6527 20.1286 19.9317 20.4076 19.9317 20.6779C19.9317 20.9336 19.6527 21.1429 19.3737 21.1429H17.3984V22.7694C17.3984 23.0407 17.2056 23.2489 16.9343 23.2489C16.5933 23.2489 16.3851 23.0407 16.3851 22.7694V18.3693C16.3851 18.0913 16.5943 17.8888 16.9343 17.8888H19.6536C19.9946 17.8888 20.1961 18.0913 20.1961 18.3693C20.1961 18.6173 19.9946 18.8963 19.6536 18.8963H17.3984V18.8973Z" fill="white"/>
                                                        </svg>
                                                    <?php } elseif (in_array($file_extension, array('txt', 'pdf', 'doc', 'docx', 'rtf'))) { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#50BEE8"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#50BEE8"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#50BEE8"/>
                                                            <path d="M4.60506 23.2499C4.34931 23.2499 4.07031 23.1094 4.07031 22.7694V18.3703C4.07031 18.0913 4.34931 17.8898 4.60506 17.8898H6.37884C9.91866 17.8898 9.84019 23.2499 6.44762 23.2499H4.60506ZM5.09331 18.8343V22.3044H6.37884C8.47038 22.3044 8.56241 18.8343 6.37884 18.8343H5.09331ZM12.8046 23.3274C11.3718 23.3894 9.88378 22.4361 9.88378 20.5384C9.88378 18.6328 11.3708 17.696 12.8046 17.696C14.1598 17.7648 15.5771 18.7026 15.5771 20.5384C15.5771 22.3751 14.1598 23.3274 12.8046 23.3274ZM12.7193 18.7035C11.8513 18.7035 10.9068 19.3158 10.9068 20.5393C10.9068 21.7561 11.8523 22.3761 12.7193 22.3761C13.6106 22.3761 14.5628 21.7561 14.5628 20.5393C14.5628 19.3148 13.6106 18.7035 12.7193 18.7035ZM16.4887 20.5306C16.4887 19.0358 17.4265 17.7503 19.208 17.7503C19.8823 17.7503 20.417 17.9518 20.9818 18.44C21.191 18.6328 21.2143 18.9738 21.005 19.1908C20.7958 19.3759 20.478 19.3536 20.292 19.1676C19.9752 18.8343 19.6498 18.7423 19.208 18.7423C18.0155 18.7423 17.4429 19.587 17.4429 20.5316C17.4429 21.4926 18.0077 22.3751 19.208 22.3751C19.6498 22.3751 20.0605 22.1959 20.417 21.8791C20.6563 21.6931 20.9895 21.7851 21.129 21.9721C21.253 22.1426 21.3141 22.4294 21.0438 22.6996C20.5013 23.2044 19.8512 23.3051 19.207 23.3051C17.3335 23.3051 16.4887 22.0254 16.4887 20.5306Z" fill="white"/>
                                                        </svg>
                                                    <?php } ?>
                                                </div>
                                                <p><?php echo esc_html( get_the_title( $enPublications_file['ID'] ) ); ?></p>
                                            </a>
                                            <?php $count++; ?>
                                            <?php if ($count == 7) { ?>
                                                <?php $count = 0; ?>
                                                </div><div class="cards__card swiper-slide">
                                            <?php } ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="area__control">
                            <div class="control__prev enPublications-button-prev">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="19.5" stroke="#0070C0"/>
                                    <path d="M22.625 26.75L16.375 20.5L22.625 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="control__pagination enPublications-pagination"></div>
                            <div class="control__next enPublications-button-next">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="19.5" transform="matrix(-1 0 0 1 40 0)" stroke="#0070C0"/>
                                    <path d="M17.375 26.75L23.625 20.5L17.375 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="publications-area__active" data-tab="2">
                        <p class="area__name">Публикации в российских журналах</p>
                        <div class="area__cards swiper ruPublicationsSwiper">
                            <div class="swiper-wrapper">
                                <?php if ( have_rows( 'ruPublications' ) ) : ?>
                                    <?php $count = 0; ?>
                                    <div class="cards__card swiper-slide">
                                    <?php while ( have_rows( 'ruPublications' ) ) : the_row(); ?>
                                        <?php $ruPublications_file = get_sub_field( 'ruPublications_file' ); ?>
                                        <?php if ( $ruPublications_file ) : ?>
                                            <?php $file_extension = pathinfo($ruPublications_file['url'], PATHINFO_EXTENSION); ?>
                                            <a class="card__file" href="<?php echo esc_url( $ruPublications_file['url'] ); ?>" target="_blank">
                                                <div>
                                                    <?php if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif', 'bmp'))) { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#50BEE8"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#50BEE8"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#50BEE8"/>
                                                            <path d="M7.59533 18.355C7.59533 17.704 8.61833 17.704 8.61833 18.355V21.4143C8.61833 22.6311 8.03708 23.3673 6.6973 23.3673C6.03855 23.3673 5.48927 23.1881 5.00877 22.5691C4.61352 22.0963 5.35752 21.4153 5.76052 21.9103C6.08602 22.3133 6.43477 22.4063 6.7748 22.3908C7.20783 22.3753 7.58855 22.1806 7.5963 21.4143V18.355H7.59533ZM9.97942 18.355C9.97942 18.0993 10.1809 17.8203 10.5064 17.8203H12.2957C13.3032 17.8203 14.21 18.4945 14.21 19.7868C14.21 21.0113 13.3032 21.6933 12.2957 21.6933H11.0024V22.7163C11.0024 23.0573 10.7854 23.2501 10.5064 23.2501C10.2507 23.2501 9.97942 23.0573 9.97942 22.7163V18.355ZM11.0024 18.7958V20.7255H12.2957C12.815 20.7255 13.2257 20.2673 13.2257 19.7868C13.2257 19.2453 12.815 18.7958 12.2957 18.7958H11.0024ZM19.7415 22.6543C19.1913 23.1116 18.517 23.3053 17.836 23.3053C16.2085 23.3053 15.0547 22.3763 15.0547 20.5318C15.0547 18.9682 16.2715 17.7524 17.9048 17.7524C18.517 17.7524 19.1903 17.9607 19.6708 18.4335C20.1426 18.8975 19.4615 19.5873 18.9975 19.1775C18.7108 18.8985 18.3078 18.6892 17.9048 18.6892C16.968 18.6892 16.0622 19.44 16.0622 20.5318C16.0622 21.6788 16.8207 22.3763 17.836 22.3763C18.3078 22.3763 18.7108 22.2358 18.9975 22.0275V21.0753H17.836C17.1462 21.0753 17.216 20.1298 17.836 20.1298H19.385C19.6718 20.1298 19.9343 20.3468 19.9343 20.587V22.2368C19.9343 22.3763 19.8733 22.5061 19.7415 22.6543Z" fill="white"/>
                                                        </svg>
                                                    <?php } elseif ($file_extension == 'pdf') { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#F15642"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#F15642"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#F15642"/>
                                                            <path d="M5.16016 18.3548C5.16016 18.0991 5.36166 17.8201 5.68619 17.8201H7.47547C8.48297 17.8201 9.38972 18.4943 9.38972 19.7866C9.38972 21.0111 8.48297 21.6931 7.47547 21.6931H6.18219V22.7161C6.18219 23.0571 5.96519 23.2499 5.68619 23.2499C5.43044 23.2499 5.16016 23.0571 5.16016 22.7161V18.3548ZM6.18219 18.7956V20.7253H7.47547C7.99472 20.7253 8.40547 20.2671 8.40547 19.7866C8.40547 19.2451 7.99472 18.7956 7.47547 18.7956H6.18219ZM10.9068 23.2499C10.651 23.2499 10.372 23.1104 10.372 22.7704V18.3703C10.372 18.0923 10.651 17.8898 10.9068 17.8898H12.6806C16.2204 17.8898 16.1429 23.2499 12.7503 23.2499H10.9068ZM11.395 18.8353V22.3054H12.6806C14.7721 22.3054 14.8651 18.8353 12.6806 18.8353H11.395ZM17.3984 18.8973V20.1286H19.3737C19.6527 20.1286 19.9317 20.4076 19.9317 20.6779C19.9317 20.9336 19.6527 21.1429 19.3737 21.1429H17.3984V22.7694C17.3984 23.0407 17.2056 23.2489 16.9343 23.2489C16.5933 23.2489 16.3851 23.0407 16.3851 22.7694V18.3693C16.3851 18.0913 16.5943 17.8888 16.9343 17.8888H19.6536C19.9946 17.8888 20.1961 18.0913 20.1961 18.3693C20.1961 18.6173 19.9946 18.8963 19.6536 18.8963H17.3984V18.8973Z" fill="white"/>
                                                        </svg>
                                                    <?php } elseif (in_array($file_extension, array('txt', 'pdf', 'doc', 'docx', 'rtf'))) { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#50BEE8"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#50BEE8"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#50BEE8"/>
                                                            <path d="M4.60506 23.2499C4.34931 23.2499 4.07031 23.1094 4.07031 22.7694V18.3703C4.07031 18.0913 4.34931 17.8898 4.60506 17.8898H6.37884C9.91866 17.8898 9.84019 23.2499 6.44762 23.2499H4.60506ZM5.09331 18.8343V22.3044H6.37884C8.47038 22.3044 8.56241 18.8343 6.37884 18.8343H5.09331ZM12.8046 23.3274C11.3718 23.3894 9.88378 22.4361 9.88378 20.5384C9.88378 18.6328 11.3708 17.696 12.8046 17.696C14.1598 17.7648 15.5771 18.7026 15.5771 20.5384C15.5771 22.3751 14.1598 23.3274 12.8046 23.3274ZM12.7193 18.7035C11.8513 18.7035 10.9068 19.3158 10.9068 20.5393C10.9068 21.7561 11.8523 22.3761 12.7193 22.3761C13.6106 22.3761 14.5628 21.7561 14.5628 20.5393C14.5628 19.3148 13.6106 18.7035 12.7193 18.7035ZM16.4887 20.5306C16.4887 19.0358 17.4265 17.7503 19.208 17.7503C19.8823 17.7503 20.417 17.9518 20.9818 18.44C21.191 18.6328 21.2143 18.9738 21.005 19.1908C20.7958 19.3759 20.478 19.3536 20.292 19.1676C19.9752 18.8343 19.6498 18.7423 19.208 18.7423C18.0155 18.7423 17.4429 19.587 17.4429 20.5316C17.4429 21.4926 18.0077 22.3751 19.208 22.3751C19.6498 22.3751 20.0605 22.1959 20.417 21.8791C20.6563 21.6931 20.9895 21.7851 21.129 21.9721C21.253 22.1426 21.3141 22.4294 21.0438 22.6996C20.5013 23.2044 19.8512 23.3051 19.207 23.3051C17.3335 23.3051 16.4887 22.0254 16.4887 20.5306Z" fill="white"/>
                                                        </svg>
                                                    <?php } ?>
                                                </div>
                                                <p><?php echo esc_html( get_the_title( $ruPublications_file['ID'] ) ); ?></p>
                                            </a>
                                            <?php $count++; ?>
                                            <?php if ($count == 7) { ?>
                                                <?php $count = 0; ?>
                                                </div><div class="cards__card swiper-slide">
                                            <?php } ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="area__control">
                            <div class="control__prev ruPublications-button-prev">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="19.5" stroke="#0070C0"/>
                                    <path d="M22.625 26.75L16.375 20.5L22.625 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="control__pagination ruPublications-pagination"></div>
                            <div class="control__next ruPublications-button-next">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="19.5" transform="matrix(-1 0 0 1 40 0)" stroke="#0070C0"/>
                                    <path d="M17.375 26.75L23.625 20.5L17.375 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="publications-area__active" data-tab="3">
                        <p class="area__name">Тезисы конференций</p>
                        <div class="area__cards swiper thesesSwiper">
                            <div class="swiper-wrapper">
                                <?php if ( have_rows( 'theses' ) ) : ?>
                                    <?php $count = 0; ?>
                                    <div class="cards__card swiper-slide">
                                    <?php while ( have_rows( 'theses' ) ) : the_row(); ?>
                                        <?php $theses_file = get_sub_field( 'theses_file' ); ?>
                                        <?php if ( $theses_file ) : ?>
                                            <?php $file_extension = pathinfo($theses_file['url'], PATHINFO_EXTENSION); ?>
                                            <a class="card__file" href="<?php echo esc_url( $theses_file['url'] ); ?>" target="_blank">
                                                <div>
                                                    <?php if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif', 'bmp'))) { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#50BEE8"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#50BEE8"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#50BEE8"/>
                                                            <path d="M7.59533 18.355C7.59533 17.704 8.61833 17.704 8.61833 18.355V21.4143C8.61833 22.6311 8.03708 23.3673 6.6973 23.3673C6.03855 23.3673 5.48927 23.1881 5.00877 22.5691C4.61352 22.0963 5.35752 21.4153 5.76052 21.9103C6.08602 22.3133 6.43477 22.4063 6.7748 22.3908C7.20783 22.3753 7.58855 22.1806 7.5963 21.4143V18.355H7.59533ZM9.97942 18.355C9.97942 18.0993 10.1809 17.8203 10.5064 17.8203H12.2957C13.3032 17.8203 14.21 18.4945 14.21 19.7868C14.21 21.0113 13.3032 21.6933 12.2957 21.6933H11.0024V22.7163C11.0024 23.0573 10.7854 23.2501 10.5064 23.2501C10.2507 23.2501 9.97942 23.0573 9.97942 22.7163V18.355ZM11.0024 18.7958V20.7255H12.2957C12.815 20.7255 13.2257 20.2673 13.2257 19.7868C13.2257 19.2453 12.815 18.7958 12.2957 18.7958H11.0024ZM19.7415 22.6543C19.1913 23.1116 18.517 23.3053 17.836 23.3053C16.2085 23.3053 15.0547 22.3763 15.0547 20.5318C15.0547 18.9682 16.2715 17.7524 17.9048 17.7524C18.517 17.7524 19.1903 17.9607 19.6708 18.4335C20.1426 18.8975 19.4615 19.5873 18.9975 19.1775C18.7108 18.8985 18.3078 18.6892 17.9048 18.6892C16.968 18.6892 16.0622 19.44 16.0622 20.5318C16.0622 21.6788 16.8207 22.3763 17.836 22.3763C18.3078 22.3763 18.7108 22.2358 18.9975 22.0275V21.0753H17.836C17.1462 21.0753 17.216 20.1298 17.836 20.1298H19.385C19.6718 20.1298 19.9343 20.3468 19.9343 20.587V22.2368C19.9343 22.3763 19.8733 22.5061 19.7415 22.6543Z" fill="white"/>
                                                        </svg>
                                                    <?php } elseif ($file_extension == 'pdf') { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#F15642"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#F15642"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#F15642"/>
                                                            <path d="M5.16016 18.3548C5.16016 18.0991 5.36166 17.8201 5.68619 17.8201H7.47547C8.48297 17.8201 9.38972 18.4943 9.38972 19.7866C9.38972 21.0111 8.48297 21.6931 7.47547 21.6931H6.18219V22.7161C6.18219 23.0571 5.96519 23.2499 5.68619 23.2499C5.43044 23.2499 5.16016 23.0571 5.16016 22.7161V18.3548ZM6.18219 18.7956V20.7253H7.47547C7.99472 20.7253 8.40547 20.2671 8.40547 19.7866C8.40547 19.2451 7.99472 18.7956 7.47547 18.7956H6.18219ZM10.9068 23.2499C10.651 23.2499 10.372 23.1104 10.372 22.7704V18.3703C10.372 18.0923 10.651 17.8898 10.9068 17.8898H12.6806C16.2204 17.8898 16.1429 23.2499 12.7503 23.2499H10.9068ZM11.395 18.8353V22.3054H12.6806C14.7721 22.3054 14.8651 18.8353 12.6806 18.8353H11.395ZM17.3984 18.8973V20.1286H19.3737C19.6527 20.1286 19.9317 20.4076 19.9317 20.6779C19.9317 20.9336 19.6527 21.1429 19.3737 21.1429H17.3984V22.7694C17.3984 23.0407 17.2056 23.2489 16.9343 23.2489C16.5933 23.2489 16.3851 23.0407 16.3851 22.7694V18.3693C16.3851 18.0913 16.5943 17.8888 16.9343 17.8888H19.6536C19.9946 17.8888 20.1961 18.0913 20.1961 18.3693C20.1961 18.6173 19.9946 18.8963 19.6536 18.8963H17.3984V18.8973Z" fill="white"/>
                                                        </svg>
                                                    <?php } elseif (in_array($file_extension, array('txt', 'pdf', 'doc', 'docx', 'rtf'))) { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#50BEE8"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#50BEE8"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#50BEE8"/>
                                                            <path d="M4.60506 23.2499C4.34931 23.2499 4.07031 23.1094 4.07031 22.7694V18.3703C4.07031 18.0913 4.34931 17.8898 4.60506 17.8898H6.37884C9.91866 17.8898 9.84019 23.2499 6.44762 23.2499H4.60506ZM5.09331 18.8343V22.3044H6.37884C8.47038 22.3044 8.56241 18.8343 6.37884 18.8343H5.09331ZM12.8046 23.3274C11.3718 23.3894 9.88378 22.4361 9.88378 20.5384C9.88378 18.6328 11.3708 17.696 12.8046 17.696C14.1598 17.7648 15.5771 18.7026 15.5771 20.5384C15.5771 22.3751 14.1598 23.3274 12.8046 23.3274ZM12.7193 18.7035C11.8513 18.7035 10.9068 19.3158 10.9068 20.5393C10.9068 21.7561 11.8523 22.3761 12.7193 22.3761C13.6106 22.3761 14.5628 21.7561 14.5628 20.5393C14.5628 19.3148 13.6106 18.7035 12.7193 18.7035ZM16.4887 20.5306C16.4887 19.0358 17.4265 17.7503 19.208 17.7503C19.8823 17.7503 20.417 17.9518 20.9818 18.44C21.191 18.6328 21.2143 18.9738 21.005 19.1908C20.7958 19.3759 20.478 19.3536 20.292 19.1676C19.9752 18.8343 19.6498 18.7423 19.208 18.7423C18.0155 18.7423 17.4429 19.587 17.4429 20.5316C17.4429 21.4926 18.0077 22.3751 19.208 22.3751C19.6498 22.3751 20.0605 22.1959 20.417 21.8791C20.6563 21.6931 20.9895 21.7851 21.129 21.9721C21.253 22.1426 21.3141 22.4294 21.0438 22.6996C20.5013 23.2044 19.8512 23.3051 19.207 23.3051C17.3335 23.3051 16.4887 22.0254 16.4887 20.5306Z" fill="white"/>
                                                        </svg>
                                                    <?php } ?>
                                                </div>
                                                <p><?php echo esc_html( get_the_title( $theses_file['ID'] ) ); ?></p>
                                            </a>
                                            <?php $count++; ?>
                                            <?php if ($count == 7) { ?>
                                                <?php $count = 0; ?>
                                                </div><div class="cards__card swiper-slide">
                                            <?php } ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="area__control">
                            <div class="control__prev theses-button-prev">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="19.5" stroke="#0070C0"/>
                                    <path d="M22.625 26.75L16.375 20.5L22.625 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="control__pagination theses-pagination"></div>
                            <div class="control__next theses-button-next">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="19.5" transform="matrix(-1 0 0 1 40 0)" stroke="#0070C0"/>
                                    <path d="M17.375 26.75L23.625 20.5L17.375 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="publications-area__active" data-tab="4">
                        <p class="area__name">Патенты</p>
                        <div class="area__cards swiper patentsSwiper">
                            <div class="swiper-wrapper">
                                <?php if ( have_rows( 'patents' ) ) : ?>
                                    <?php $count = 0; ?>
                                    <div class="cards__card swiper-slide">
                                    <?php while ( have_rows( 'patents' ) ) : the_row(); ?>
                                        <?php $patents_file = get_sub_field( 'patents_file' ); ?>
                                        <?php if ( $patents_file ) : ?>
                                            <?php $file_extension = pathinfo($patents_file['url'], PATHINFO_EXTENSION); ?>
                                            <a class="card__file" href="<?php echo esc_url( $patents_file['url'] ); ?>" target="_blank">
                                                <div>
                                                    <?php if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif', 'bmp'))) { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#50BEE8"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#50BEE8"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#50BEE8"/>
                                                            <path d="M7.59533 18.355C7.59533 17.704 8.61833 17.704 8.61833 18.355V21.4143C8.61833 22.6311 8.03708 23.3673 6.6973 23.3673C6.03855 23.3673 5.48927 23.1881 5.00877 22.5691C4.61352 22.0963 5.35752 21.4153 5.76052 21.9103C6.08602 22.3133 6.43477 22.4063 6.7748 22.3908C7.20783 22.3753 7.58855 22.1806 7.5963 21.4143V18.355H7.59533ZM9.97942 18.355C9.97942 18.0993 10.1809 17.8203 10.5064 17.8203H12.2957C13.3032 17.8203 14.21 18.4945 14.21 19.7868C14.21 21.0113 13.3032 21.6933 12.2957 21.6933H11.0024V22.7163C11.0024 23.0573 10.7854 23.2501 10.5064 23.2501C10.2507 23.2501 9.97942 23.0573 9.97942 22.7163V18.355ZM11.0024 18.7958V20.7255H12.2957C12.815 20.7255 13.2257 20.2673 13.2257 19.7868C13.2257 19.2453 12.815 18.7958 12.2957 18.7958H11.0024ZM19.7415 22.6543C19.1913 23.1116 18.517 23.3053 17.836 23.3053C16.2085 23.3053 15.0547 22.3763 15.0547 20.5318C15.0547 18.9682 16.2715 17.7524 17.9048 17.7524C18.517 17.7524 19.1903 17.9607 19.6708 18.4335C20.1426 18.8975 19.4615 19.5873 18.9975 19.1775C18.7108 18.8985 18.3078 18.6892 17.9048 18.6892C16.968 18.6892 16.0622 19.44 16.0622 20.5318C16.0622 21.6788 16.8207 22.3763 17.836 22.3763C18.3078 22.3763 18.7108 22.2358 18.9975 22.0275V21.0753H17.836C17.1462 21.0753 17.216 20.1298 17.836 20.1298H19.385C19.6718 20.1298 19.9343 20.3468 19.9343 20.587V22.2368C19.9343 22.3763 19.8733 22.5061 19.7415 22.6543Z" fill="white"/>
                                                        </svg>
                                                    <?php } elseif ($file_extension == 'pdf') { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#F15642"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#F15642"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#F15642"/>
                                                            <path d="M5.16016 18.3548C5.16016 18.0991 5.36166 17.8201 5.68619 17.8201H7.47547C8.48297 17.8201 9.38972 18.4943 9.38972 19.7866C9.38972 21.0111 8.48297 21.6931 7.47547 21.6931H6.18219V22.7161C6.18219 23.0571 5.96519 23.2499 5.68619 23.2499C5.43044 23.2499 5.16016 23.0571 5.16016 22.7161V18.3548ZM6.18219 18.7956V20.7253H7.47547C7.99472 20.7253 8.40547 20.2671 8.40547 19.7866C8.40547 19.2451 7.99472 18.7956 7.47547 18.7956H6.18219ZM10.9068 23.2499C10.651 23.2499 10.372 23.1104 10.372 22.7704V18.3703C10.372 18.0923 10.651 17.8898 10.9068 17.8898H12.6806C16.2204 17.8898 16.1429 23.2499 12.7503 23.2499H10.9068ZM11.395 18.8353V22.3054H12.6806C14.7721 22.3054 14.8651 18.8353 12.6806 18.8353H11.395ZM17.3984 18.8973V20.1286H19.3737C19.6527 20.1286 19.9317 20.4076 19.9317 20.6779C19.9317 20.9336 19.6527 21.1429 19.3737 21.1429H17.3984V22.7694C17.3984 23.0407 17.2056 23.2489 16.9343 23.2489C16.5933 23.2489 16.3851 23.0407 16.3851 22.7694V18.3693C16.3851 18.0913 16.5943 17.8888 16.9343 17.8888H19.6536C19.9946 17.8888 20.1961 18.0913 20.1961 18.3693C20.1961 18.6173 19.9946 18.8963 19.6536 18.8963H17.3984V18.8973Z" fill="white"/>
                                                        </svg>
                                                    <?php } elseif (in_array($file_extension, array('txt', 'pdf', 'doc', 'docx', 'rtf'))) { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#50BEE8"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#50BEE8"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#50BEE8"/>
                                                            <path d="M4.60506 23.2499C4.34931 23.2499 4.07031 23.1094 4.07031 22.7694V18.3703C4.07031 18.0913 4.34931 17.8898 4.60506 17.8898H6.37884C9.91866 17.8898 9.84019 23.2499 6.44762 23.2499H4.60506ZM5.09331 18.8343V22.3044H6.37884C8.47038 22.3044 8.56241 18.8343 6.37884 18.8343H5.09331ZM12.8046 23.3274C11.3718 23.3894 9.88378 22.4361 9.88378 20.5384C9.88378 18.6328 11.3708 17.696 12.8046 17.696C14.1598 17.7648 15.5771 18.7026 15.5771 20.5384C15.5771 22.3751 14.1598 23.3274 12.8046 23.3274ZM12.7193 18.7035C11.8513 18.7035 10.9068 19.3158 10.9068 20.5393C10.9068 21.7561 11.8523 22.3761 12.7193 22.3761C13.6106 22.3761 14.5628 21.7561 14.5628 20.5393C14.5628 19.3148 13.6106 18.7035 12.7193 18.7035ZM16.4887 20.5306C16.4887 19.0358 17.4265 17.7503 19.208 17.7503C19.8823 17.7503 20.417 17.9518 20.9818 18.44C21.191 18.6328 21.2143 18.9738 21.005 19.1908C20.7958 19.3759 20.478 19.3536 20.292 19.1676C19.9752 18.8343 19.6498 18.7423 19.208 18.7423C18.0155 18.7423 17.4429 19.587 17.4429 20.5316C17.4429 21.4926 18.0077 22.3751 19.208 22.3751C19.6498 22.3751 20.0605 22.1959 20.417 21.8791C20.6563 21.6931 20.9895 21.7851 21.129 21.9721C21.253 22.1426 21.3141 22.4294 21.0438 22.6996C20.5013 23.2044 19.8512 23.3051 19.207 23.3051C17.3335 23.3051 16.4887 22.0254 16.4887 20.5306Z" fill="white"/>
                                                        </svg>
                                                    <?php } ?>
                                                </div>
                                                <p><?php echo esc_html( get_the_title( $patents_file['ID'] ) ); ?></p>
                                            </a>
                                            <?php $count++; ?>
                                            <?php if ($count == 7) { ?>
                                                <?php $count = 0; ?>
                                                </div><div class="cards__card swiper-slide">
                                            <?php } ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="area__control">
                            <div class="control__prev patents-button-prev">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="19.5" stroke="#0070C0"/>
                                    <path d="M22.625 26.75L16.375 20.5L22.625 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="control__pagination patents-pagination"></div>
                            <div class="control__next patents-button-next">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="19.5" transform="matrix(-1 0 0 1 40 0)" stroke="#0070C0"/>
                                    <path d="M17.375 26.75L23.625 20.5L17.375 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="publications-area__active" data-tab="5">
                        <p class="area__name">Награды</p>
                        <div class="area__cards swiper prizeSwiper">
                            <div class="swiper-wrapper">
                                <?php if ( have_rows( 'prize' ) ) : ?>
                                    <?php $count = 0; ?>
                                    <div class="cards__card swiper-slide">
                                    <?php while ( have_rows( 'prize' ) ) : the_row(); ?>
                                        <?php $prize_file = get_sub_field( 'prize_file' ); ?>
                                        <?php if ( $prize_file ) : ?>
                                            <?php $file_extension = pathinfo($prize_file['url'], PATHINFO_EXTENSION); ?>
                                            <a class="card__file" href="<?php echo esc_url( $prize_file['url'] ); ?>" target="_blank">
                                                <div>
                                                    <?php if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif', 'bmp'))) { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#50BEE8"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#50BEE8"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#50BEE8"/>
                                                            <path d="M7.59533 18.355C7.59533 17.704 8.61833 17.704 8.61833 18.355V21.4143C8.61833 22.6311 8.03708 23.3673 6.6973 23.3673C6.03855 23.3673 5.48927 23.1881 5.00877 22.5691C4.61352 22.0963 5.35752 21.4153 5.76052 21.9103C6.08602 22.3133 6.43477 22.4063 6.7748 22.3908C7.20783 22.3753 7.58855 22.1806 7.5963 21.4143V18.355H7.59533ZM9.97942 18.355C9.97942 18.0993 10.1809 17.8203 10.5064 17.8203H12.2957C13.3032 17.8203 14.21 18.4945 14.21 19.7868C14.21 21.0113 13.3032 21.6933 12.2957 21.6933H11.0024V22.7163C11.0024 23.0573 10.7854 23.2501 10.5064 23.2501C10.2507 23.2501 9.97942 23.0573 9.97942 22.7163V18.355ZM11.0024 18.7958V20.7255H12.2957C12.815 20.7255 13.2257 20.2673 13.2257 19.7868C13.2257 19.2453 12.815 18.7958 12.2957 18.7958H11.0024ZM19.7415 22.6543C19.1913 23.1116 18.517 23.3053 17.836 23.3053C16.2085 23.3053 15.0547 22.3763 15.0547 20.5318C15.0547 18.9682 16.2715 17.7524 17.9048 17.7524C18.517 17.7524 19.1903 17.9607 19.6708 18.4335C20.1426 18.8975 19.4615 19.5873 18.9975 19.1775C18.7108 18.8985 18.3078 18.6892 17.9048 18.6892C16.968 18.6892 16.0622 19.44 16.0622 20.5318C16.0622 21.6788 16.8207 22.3763 17.836 22.3763C18.3078 22.3763 18.7108 22.2358 18.9975 22.0275V21.0753H17.836C17.1462 21.0753 17.216 20.1298 17.836 20.1298H19.385C19.6718 20.1298 19.9343 20.3468 19.9343 20.587V22.2368C19.9343 22.3763 19.8733 22.5061 19.7415 22.6543Z" fill="white"/>
                                                        </svg>
                                                    <?php } elseif ($file_extension == 'pdf') { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#F15642"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#F15642"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#F15642"/>
                                                            <path d="M5.16016 18.3548C5.16016 18.0991 5.36166 17.8201 5.68619 17.8201H7.47547C8.48297 17.8201 9.38972 18.4943 9.38972 19.7866C9.38972 21.0111 8.48297 21.6931 7.47547 21.6931H6.18219V22.7161C6.18219 23.0571 5.96519 23.2499 5.68619 23.2499C5.43044 23.2499 5.16016 23.0571 5.16016 22.7161V18.3548ZM6.18219 18.7956V20.7253H7.47547C7.99472 20.7253 8.40547 20.2671 8.40547 19.7866C8.40547 19.2451 7.99472 18.7956 7.47547 18.7956H6.18219ZM10.9068 23.2499C10.651 23.2499 10.372 23.1104 10.372 22.7704V18.3703C10.372 18.0923 10.651 17.8898 10.9068 17.8898H12.6806C16.2204 17.8898 16.1429 23.2499 12.7503 23.2499H10.9068ZM11.395 18.8353V22.3054H12.6806C14.7721 22.3054 14.8651 18.8353 12.6806 18.8353H11.395ZM17.3984 18.8973V20.1286H19.3737C19.6527 20.1286 19.9317 20.4076 19.9317 20.6779C19.9317 20.9336 19.6527 21.1429 19.3737 21.1429H17.3984V22.7694C17.3984 23.0407 17.2056 23.2489 16.9343 23.2489C16.5933 23.2489 16.3851 23.0407 16.3851 22.7694V18.3693C16.3851 18.0913 16.5943 17.8888 16.9343 17.8888H19.6536C19.9946 17.8888 20.1961 18.0913 20.1961 18.3693C20.1961 18.6173 19.9946 18.8963 19.6536 18.8963H17.3984V18.8973Z" fill="white"/>
                                                        </svg>
                                                    <?php } elseif (in_array($file_extension, array('txt', 'pdf', 'doc', 'docx', 'rtf'))) { ?>
                                                        <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.3125 1.9375C5.3125 1.14802 5.96052 0.5 6.75 0.5H20.1054L27.5625 7.95711V29.0625C27.5625 29.852 26.9145 30.5 26.125 30.5H6.75C5.96052 30.5 5.3125 29.852 5.3125 29.0625V1.9375Z" stroke="#50BEE8"/>
                                                            <path d="M22.25 7.75H28.0625L20.3125 0V5.8125C20.3125 6.87813 21.1844 7.75 22.25 7.75Z" fill="#50BEE8"/>
                                                            <path d="M24.1875 25.1875C24.1875 25.7203 23.7516 26.1562 23.2188 26.1562H1.90625C1.37344 26.1562 0.9375 25.7203 0.9375 25.1875V15.5C0.9375 14.9672 1.37344 14.5312 1.90625 14.5312H23.2188C23.7516 14.5312 24.1875 14.9672 24.1875 15.5V25.1875Z" fill="#50BEE8"/>
                                                            <path d="M4.60506 23.2499C4.34931 23.2499 4.07031 23.1094 4.07031 22.7694V18.3703C4.07031 18.0913 4.34931 17.8898 4.60506 17.8898H6.37884C9.91866 17.8898 9.84019 23.2499 6.44762 23.2499H4.60506ZM5.09331 18.8343V22.3044H6.37884C8.47038 22.3044 8.56241 18.8343 6.37884 18.8343H5.09331ZM12.8046 23.3274C11.3718 23.3894 9.88378 22.4361 9.88378 20.5384C9.88378 18.6328 11.3708 17.696 12.8046 17.696C14.1598 17.7648 15.5771 18.7026 15.5771 20.5384C15.5771 22.3751 14.1598 23.3274 12.8046 23.3274ZM12.7193 18.7035C11.8513 18.7035 10.9068 19.3158 10.9068 20.5393C10.9068 21.7561 11.8523 22.3761 12.7193 22.3761C13.6106 22.3761 14.5628 21.7561 14.5628 20.5393C14.5628 19.3148 13.6106 18.7035 12.7193 18.7035ZM16.4887 20.5306C16.4887 19.0358 17.4265 17.7503 19.208 17.7503C19.8823 17.7503 20.417 17.9518 20.9818 18.44C21.191 18.6328 21.2143 18.9738 21.005 19.1908C20.7958 19.3759 20.478 19.3536 20.292 19.1676C19.9752 18.8343 19.6498 18.7423 19.208 18.7423C18.0155 18.7423 17.4429 19.587 17.4429 20.5316C17.4429 21.4926 18.0077 22.3751 19.208 22.3751C19.6498 22.3751 20.0605 22.1959 20.417 21.8791C20.6563 21.6931 20.9895 21.7851 21.129 21.9721C21.253 22.1426 21.3141 22.4294 21.0438 22.6996C20.5013 23.2044 19.8512 23.3051 19.207 23.3051C17.3335 23.3051 16.4887 22.0254 16.4887 20.5306Z" fill="white"/>
                                                        </svg>
                                                    <?php } ?>
                                                </div>
                                                <p><?php echo esc_html( get_the_title( $prize_file['ID'] ) ); ?></p>
                                            </a>
                                            <?php $count++; ?>
                                            <?php if ($count == 7) { ?>
                                                <?php $count = 0; ?>
                                                </div><div class="cards__card swiper-slide">
                                            <?php } ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="area__control">
                            <div class="control__prev prize-button-prev">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="19.5" stroke="#0070C0"/>
                                    <path d="M22.625 26.75L16.375 20.5L22.625 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="control__pagination prize-pagination"></div>
                            <div class="control__next prize-button-next">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="19.5" transform="matrix(-1 0 0 1 40 0)" stroke="#0070C0"/>
                                    <path d="M17.375 26.75L23.625 20.5L17.375 14.25" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
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
</div>

<?php
get_footer();
?>
