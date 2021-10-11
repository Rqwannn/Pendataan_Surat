require("./bootstrap");
window.Vue = require("vue").default;
Vue.component(
    "header-component",
    require("./components/Tamplate/Header.vue").default
);

// Import Routes

import router from './routes/index.js'

new Vue({
    router,
    data : {
        SetHeader: ""
    },
    methods: {
        ChangeHeader: function(event){
            this.SetHeader = event;
        }
    }
}).$mount('#app')