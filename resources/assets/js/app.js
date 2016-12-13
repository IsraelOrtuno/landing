
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
    position: 0,
    menu: false,
    isMobile: MobileDetect.phone()
  },

  computed: {
    showMenu(){
      return this.position.scrollTop >= (this.isMobile ? 50 : 315);
    },
    showLinks(){
      return (this.position != 0 ||!this.showMenu) && !this.isMobile;
    },
  },

  mounted: () => {
  },

  methods: {
    toggleMenu() {
      this.menu  = !this.menu
      console.log("alo")
    },
    onScroll(e, position) {
      console.log(position)
      console.log(this.showMenu)
      this.position = position;
    }
  }
});