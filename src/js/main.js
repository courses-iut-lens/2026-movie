import stories from './components/stories.js';

document.addEventListener('alpine:init', () => {
    // Vérifie si stories déjà vues
    const lastClosed = localStorage.getItem('stories_closed');
    const delai = 30 * 60 * 1000;
    const storiesSkipped = lastClosed && (Date.now() - parseInt(lastClosed)) < delai;

    // Store global - ready immédiatement si stories déjà vues
    Alpine.store('main', {
        ready: storiesSkipped
    });

    Alpine.data('stories', stories);
});