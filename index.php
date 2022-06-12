<?php get_header();

    global $post;
    switch ( $post->ID ) {

        // Pages
        case '11': $pageName = 'about'; break;
        case '13': $pageName = 'team'; break;
        case '15': $pageName = 'stories'; break;
        case '17': $pageName = 'comments'; break;
        case '19': $pageName = 'loan'; break;
        case '21': $pageName = 'faqs'; break;
        case '23': $pageName = 'outreach'; break;
        case '25': $pageName = 'asset'; break;
        case '27': $pageName = 'property'; break;
        case '29': $pageName = 'news'; break;
        case '31': $pageName = 'map'; break;
        case '33': $pageName = 'contact'; break;
        case '35': $pageName = 'sitemap'; break;

        // Legal
        case '3': $pageName = 'legal'; break;

        default:
            $pageName = 'home';
            break;

    }

    if ( post_password_required() ) : ?>
        <main class="main" role="main">
            <section class="uk-section uk-section-muted">
                <div class="uk-container uk-container-small uk-height-meidum uk-flex uk-flex-middle uk-flex-center uk-text-center">
                    
                    <article>
                        <span uk-icon="icon: lock; ratio: 5"></span>
                        <hr class="uk-divider-small uk-margin-auto">
                        <?php the_content(); ?>
                    </article>

                </div>
            </section>
        </main>
    <?php else :
        get_template_part( _page.$pageName );
    endif;
    
get_footer();