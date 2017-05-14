require('./bootstrap');

window.Vue = require('vue');

import axios from 'axios';

const app = new Vue({
    el: '#app',
    methods: {
        removeCategory() {
            let target = $(event.target);
            let url = target.attr('href');


           axios.delete(url).then(() => {
               target.parent().parent().remove();
            });
        }
    }
});
