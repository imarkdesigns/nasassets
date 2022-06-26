<?php get_header();

    global $post;
    switch ( $post->ID ) {

        // Pages
        case '9': $pageName = 'about'; break;
        case '12': $pageName = 'team'; break;
        case '14': $pageName = 'stories'; break;
        case '16': $pageName = 'comments'; break;
        case '18': $pageName = 'loan'; break;
        case '20': $pageName = 'faqs'; break;
        case '22': $pageName = 'outreach'; break;
        case '24': $pageName = 'asset'; break;
        case '26': $pageName = 'property'; break;
        case '28': $pageName = 'news'; break;
        case '30': $pageName = 'map'; break;
        case '32': $pageName = 'contact'; break;
        case '34': $pageName = 'sitemap'; break;

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