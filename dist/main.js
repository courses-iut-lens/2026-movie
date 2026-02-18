(() => {
  // src/js/components/stories.js
  var stories_default = (data) => ({
    open: false,
    closing: false,
    current: 0,
    timer: null,
    duration: 1e4,
    debug: false,
    ...data,
    init() {
      if (!this.stories?.length) return;
      if (this.debug) {
        this.open = true;
        this.startTimer();
        return;
      }
      if (!Alpine.store("main").ready) {
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
      Alpine.store("main").ready = true;
      setTimeout(() => {
        this.open = false;
        this.closing = false;
        localStorage.setItem("stories_closed", Date.now());
      }, 200);
    },
    goTo(index) {
      if (index === this.current || index < 0 || index >= this.stories.length) return;
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

  // src/js/main.js
  document.addEventListener("alpine:init", () => {
    const lastClosed = localStorage.getItem("stories_closed");
    const delai = 30 * 60 * 1e3;
    const storiesSkipped = lastClosed && Date.now() - parseInt(lastClosed) < delai;
    Alpine.store("main", {
      ready: storiesSkipped
    });
    Alpine.data("stories", stories_default);
  });
})();
