
window._ = require('lodash');
/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

window.Vue = require('vue');
require('vue-resource');


/**
 * var MobileDetect = require('mobile-detect'),
 * @type {MobileDetect}
 */
let mb = require('mobile-detect')
window.MobileDetect = new mb(window.navigator.userAgent);

/**
 * Initialize Vee Validate
 */
import VeeValidate from 'vee-validate';
import Spanish from 'vee-validate/dist/locale/es'
Vue.use(VeeValidate, {
  locale: 'es',
  dictionary: {
    es: {   // locale key
      messages: Spanish
    }
  }
});

/**
 * VueScroll
 */
import VueScroll from 'vue-scroll';
Vue.use(VueScroll)

/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */

Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken);

    next();
});

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
