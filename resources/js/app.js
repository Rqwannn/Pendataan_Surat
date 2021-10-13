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
        },
        checkTokens: function(event){
            if(JSON.parse(localStorage.getItem('Authentication'))){
                const getStorage = JSON.parse(localStorage.getItem('Authentication'));
                const Time = new Date().getTime();

                if(getStorage.waktu != null){
                    if(Time > getStorage.waktu){
                        const data = {
                            status: false,
                        }
    
                        localStorage.setItem('Authentication', JSON.stringify(data))
                        this.$router.push(`/`).catch(() => {
    
                        });
                    }
                }
                
                if(getStorage.status){
                    this.$router.push(`${event}`).catch(() => {
    
                    });
                } else {
                    this.$router.push(`/`).catch(() => {

                    });
                }
            } else {
                this.$router.push(`/`).catch(() => {

                });
            }
        }
    }
}).$mount('#app')