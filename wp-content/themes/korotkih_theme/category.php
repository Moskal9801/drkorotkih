<?php
get_header();
?>

<div class="news-body">
    <div class="news-body__content content">
        <div class="content__name">Новости</div>
        <div class="content__body">
            <div class="body__cards" id="cardСontainer">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        <a class="cards__card" href="<?php echo get_permalink(); ?>">
                            <div class="card__image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="card__date">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.99663 1H15.0033C16.106 1 16.9999 1.89595 16.9999 3.00116V14.9989C16.9999 16.0538 16.1854 16.9181 15.1523 16.9945L14.9937 17L2.98705 16.9422C1.88809 16.937 1 16.0426 1 14.9411V3.00116C1 1.89595 1.89392 1 2.99663 1V1Z" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 5.00244H17" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4.99246 10.0051C5.54381 10.0051 5.99077 9.55709 5.99077 9.00449C5.99077 8.45188 5.54381 8.00391 4.99246 8.00391C4.4411 8.00391 3.99414 8.45188 3.99414 9.00449C3.99414 9.55709 4.4411 10.0051 4.99246 10.0051Z" fill="#0070C0"/>
                                </svg>
                                <p><?php the_date();?></p>
                            </div>
                            <p class="card__name"><?php the_title(); ?></p>
                            <div class="card__more"><?php the_excerpt(); ?></div>
                        </a>
                    <?php endwhile;
                endif; ?>
            </div>
            <a class="body__more" id="loadMoreNews">Загрузить еще</a>
        </div>
        <div class="body__form">
            <div class="form__content">
                <div class="content__body">
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
</div>

<script>
    jQuery(document).ready(function($) {
        var offset = 9;
        var loadMoreBtn = $('#loadMoreNews');
        var bodyCards = $('.body__cards');
        var totalPosts = <?php echo $query->found_posts; ?>;

        if (totalPosts <= 9) {
            loadMoreBtn.hide();
            bodyCards.addClass('body__cards-margin');
        }

        loadMoreBtn.click(function() {
            $.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                data: {
                    action: 'load_more_news',
                    offset: offset,
                },
                success: function(response) {
                    if (response) {
                        $('#cardСontainer').append(response);
                        offset += 9;

                        // проверяем, есть ли еще записи
                        if (offset >= totalPosts) {
                            loadMoreBtn.hide();
                            bodyCards.addClass('body__cards-margin');
                        }
                    } else {
                        loadMoreBtn.hide();
                        bodyCards.addClass('body__cards-margin');
                    }
                },
                error: function() {
                    console.log('error');
                }
            });
        });
    });
</script>


<?php
get_footer();
?>
