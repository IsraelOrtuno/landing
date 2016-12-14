/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
  name: 'WebArtisans',
  el: '#app',
  data: {
    busy: false,
    response: '',
    position: 0,
    menu: false,
    isMobile: MobileDetect.phone(),
    email: '',
  },

  computed: {
    showMenu(){
      return this.position.scrollTop >= (this.isMobile ? 50 : 315);
    },
    showLinks(){
      return (this.position != 0 || !this.showMenu) && !this.isMobile;
    },
  },

  mounted: () => {
  },

  methods: {
    toggleMenu() {
      this.menu = !this.menu
    },

    onScroll(e, position) {
      this.position = position;
    },

    validateBeforeSubmit(e) {
      this.$validator.validateAll();
      e.preventDefault()
      if (!this.errors.any()) {
        this.subscribe()
      }
    },

    subscribe(){
      this.busy = true;
      if (!this.errors.any()) {
        this.$http.post('api/subscriptions', {
          'email': this.email
        }).then(
          (response) => {
            this.response = response.data.message
            this.busy = false
          },
          () => {
            this.busy = false
          }
        )
      }
      }
    }
  });