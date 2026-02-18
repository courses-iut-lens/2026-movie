<?php
$img = get_template_directory_uri() . '/src/images/stories/';

$stories = [
    [
        'image'       => $img . 'story1.png',
        'titre'       => 'Bienvenue !',
        'description' => 'Découvrez notre application de cours de cinéma.',
        'bouton'      => 'Suivant',
        'lien'        => '#',
    ],
    [
        'image'       => $img . 'story2.png',
        'titre'       => 'Nouveaux cours',
        'description' => 'Des formations avec des professionnels du cinéma.',
        'bouton'      => 'Découvrir',
        'lien'        => '#',
    ],
    [
        'image'       => $img . 'story3.png',
        'titre'       => 'Story 3',
        'description' => 'Description de la story 3.',
        'bouton'      => 'En savoir plus',
        'lien'        => '#',
    ],
    [
        'image'       => $img . 'story4.png',
        'titre'       => 'Story 4',
        'description' => 'Description de la story 4.',
        'bouton'      => 'Découvrir',
        'lien'        => '#',
    ],
    [
        'image'       => $img . 'story5.png',
        'titre'       => 'Story 5',
        'description' => 'Description de la story 5.',
        'bouton'      => 'Voir',
        'lien'        => '#',
    ],
];
?>

<!-- Stories -->
<div x-data='stories({ stories: <?php echo wp_json_encode( $stories ); ?> })'
     x-show="open"
     x-cloak
     class="stories-container fixed inset-0 z-40 bg-black"
     :class="closing && 'is-closing'">

    <!-- Images (crossfade) -->
    <template x-for="(story, i) in stories" :key="i">
        <img :src="story.image"
             alt=""
             class="story-image absolute inset-0 w-full h-full object-cover brightness-60"
             :class="current === i ? 'opacity-100' : 'opacity-0'">
    </template>

    <!-- Overlay gradient pour lisibilité texte -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/70 pointer-events-none"></div>

    <!-- Zones tap navigation -->
    <div @click="prev()" class="absolute left-0 top-1/4 w-1/3 h-full z-20"></div>
    <div @click="next()" class="absolute right-0 top-1/4 w-1/3 h-full z-20"></div>

    <!-- Header -->
    <div class="story-header absolute top-0 left-0 right-0 p-4 z-10">
        <div class="flex gap-1 mb-4">
            <template x-for="(s, i) in stories" :key="'bar-'+i">
                <div class="h-1 flex-1 rounded-full bg-white/30 overflow-hidden">
                    <div class="h-full rounded-full bg-primary"
                         :class="{
                             'w-full': i < current,
                             'w-0': i > current,
                             'animate-progress': i === current
                         }"></div>
                </div>
            </template>
        </div>
        <div class="flex justify-between items-center">
            <span class="bg-white/10 text-white text-sm font-semibold px-4 py-2 backdrop-blur-lg rounded-full">cinamate</span>
            <button @click="close()" class="btn-ghost border border-white text-white text-sm px-4 py-2 rounded-full">Skip</button>
        </div>
    </div>

    <!-- Titre -->
    <h2 class="absolute top-36 left-4 right-4 z-10 text-white text-3xl font-bold leading-tight"
        x-text="stories[current].titre"></h2>

    <!-- Footer -->
    <div class="absolute bottom-0 left-0 right-0 p-6 z-10">
        <p class="text-white text-center mb-6"
           x-text="stories[current].description"></p>
        <a :href="stories[current].lien"
           class="btn-primary block w-full text-center bg-primary text-white py-3 rounded-xl font-semibold"
           x-text="stories[current].bouton"></a>
    </div>
</div>
