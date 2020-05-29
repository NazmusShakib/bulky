window.Vue = require('vue');
window.axios = require('axios');

Vue.component('history-component', require('./components/HistoryComponent.vue'));

new Vue({
    el: '#app-init'
});
