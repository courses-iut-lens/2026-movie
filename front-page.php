<?php get_header(); ?>

    <main id="primary" class="site-main">
        <section class="relative w-full h-svh max-h-svh overflow-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/poster.webp"
                 loading="eager"
                 fetchpriority="high"
                 alt="Poster of my movie"
                 class="size-full object-cover object-bottom"
            >
            <div class="absolute inset-x-0 top-1/2 bottom-0 pointer-events-none bg-gradient-poster"></div>

            <!-- Contenu -->
            <div x-data
                 :class="$store.main.ready && 'animate-in'"
                 class="hero-content absolute inset-0 flex flex-col justify-end px-4 py-6 space-y-2 z-1">
                <div class="text-netral-300">
                    <h1 class="hero-title text-2xl font-semibold text-white">
                        Welcome to Samdal-ri
                    </h1>
                    <div class="hero-meta flex items-center gap-2 text-base leading-snug">
                        <span>2023</span>
                        <span class="text-3xl">·</span>
                        <span>Romance</span>
                        <span class="text-3xl">·</span>
                        <span>45 minutes</span>
                    </div>
                    <p class="hero-description">
                        Après avoir perdu sa mère, qui travaillait comme haenyeo (plongeuse récoltant des fruits de mer), à
                        un jeune âge à cause d'une erreur dans les prévisions météorologiques...
                    </p>
                </div>

                <div class="mt-4 space-y-3">

                    <div class="grid grid-cols-4 gap-3 text-netral-400 leading-snug">
                        <a href="#" class="action-btn flex flex-col items-center justify-center gap-2.5 px-4 py-3
                                    w-full h-20 rounded-xl bg-white/5 backdrop-blur-[10px]">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/src/images/icons/mark.svg"
                                alt="Icon Mark"
                                class="size-5 object-contain"
                            >
                            <span>Ajouter</span>
                        </a>
                        <a href="#" class="action-btn flex flex-col items-center justify-center gap-2.5 px-4 py-3
                                    w-full h-20 rounded-xl bg-white/5 backdrop-blur-[10px]">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/src/images/icons/share.svg"
                                alt="Icon Share"
                                class="size-5 object-contain"
                            >
                            <span>Partager</span>
                        </a>
                        <a href="#" class="action-btn flex flex-col items-center justify-center gap-2.5 px-4 py-3
                                    w-full h-20 rounded-xl bg-white/5 backdrop-blur-[10px]">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/src/images/icons/like.svg"
                                alt="Icon Mark"
                                class="size-5 object-contain"
                            >
                            <span>Noter</span>
                        </a>
                        <a href="#" class="action-btn flex flex-col items-center justify-center gap-2.5 px-4 py-3
                                    w-full h-20 rounded-xl bg-white/5 backdrop-blur-[10px]">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/src/images/icons/info.svg"
                                alt="Icon Mark"
                                class="size-5 object-contain"
                            >
                            <span>Autre</span>
                        </a>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <a href="#"
                           class="cta-primary flex items-center justify-center gap-2.5 w-full p-3 bg-primary text-white
                                    font-semibold rounded-xl">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/images/icons/player.svg"
                                 alt=""
                                 class="size-4 object-contain"
                            >
                            Commencez à regarder
                        </a>

                        <div class="flex items-center gap-3 w-full">
                            <a href="#"
                               class="cta-secondary flex items-center justify-center gap-2.5 w-full p-3 bg-netral-900 text-white
                                    font-semibold rounded-xl">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/images/icons/playerCircle.svg"
                                     alt=""
                                     class="size-4 object-contain"
                                >
                                Bande annonce
                            </a>

                            <a href="#"
                               class="cta-secondary flex items-center justify-center gap-2.5 w-full p-3 bg-netral-900 text-white
                                    font-semibold rounded-xl">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/images/icons/docs.svg"
                                     alt=""
                                     class="size-4 object-contain"
                                >
                                Voir des extraits
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </section>
    </main>

<?php get_footer();
