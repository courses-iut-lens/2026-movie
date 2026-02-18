/**
 * Composant Stories
 * Animations minimalistes - focus sur le contenu
 */
export default (data) => ({
    open: false,
    closing: false,
    current: 0,
    timer: null,
    duration: 10000,
    debug: false,
    ...data,

    init() {
        if (!this.stories?.length) return;

        if (this.debug) {
            this.open = true;
            this.startTimer();
            return;
        }

        // Si store.main.ready est déjà true, stories déjà vues
        if (!Alpine.store('main').ready) {
            this.open = true;
            this.startTimer();
        }
    },

    startTimer() {
        this.stopTimer();
        this.timer = setInterval(() => this.next(), this.duration);
    },

    stopTimer() {
        if (this.timer) {
            clearInterval(this.timer);
            this.timer = null;
        }
    },

    close() {
        this.stopTimer();
        this.closing = true;
        // Animations du main screen démarrent immédiatement (pendant le fade out)
        Alpine.store('main').ready = true;
        setTimeout(() => {
            this.open = false;
            this.closing = false;
            localStorage.setItem('stories_closed', Date.now());
        }, 200);
    },

    goTo(index) {
        if (index === this.current || index < 0 || index >= this.stories.length) return;

        // Changement instantané - l'image crossfade via CSS
        this.current = index;
        this.startTimer();
    },

    next() {
        if (this.current < this.stories.length - 1) {
            this.goTo(this.current + 1);
        } else {
            this.close();
        }
    },

    prev() {
        if (this.current > 0) {
            this.goTo(this.current - 1);
        }
    }
});
