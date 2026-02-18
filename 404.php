<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package myMovie
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="grain relative w-full h-svh flex flex-col items-center justify-center px-6 bg-black overflow-hidden">

        <!-- Repère de changement de bobine -->
        <p class="absolute top-5 right-5 text-[10px] font-mono tracking-[0.2em] text-white/20 uppercase select-none">
            Frame&nbsp;·&nbsp;404
        </p>

        <div class="e404-content relative z-1 flex flex-col items-center text-center w-full max-w-xs space-y-4">

            <p class="text-[11px] font-semibold tracking-[0.3em] uppercase text-netral-400">
                Scène manquante
            </p>

            <h1 class="glitch text-[8rem] leading-none font-semibold text-white select-none"
                data-text="404">
                404
            </h1>

            <div class="w-8 h-px bg-white/20"></div>

            <p class="text-sm text-netral-400 leading-relaxed">
                Cette page a été coupée au montage final. Elle n'existe pas dans notre catalogue.
            </p>

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
               class="e404-cta flex items-center justify-center gap-2.5 w-full p-3 mt-2 bg-primary text-white font-semibold rounded-xl">
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/icons/player.svg"
                     alt=""
                     class="size-4 object-contain"
                >
                Retour à l'accueil
            </a>

        </div>

    </section>
</main>

<?php get_footer(); ?>
