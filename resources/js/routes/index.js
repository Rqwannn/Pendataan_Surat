import VueRouter from "vue-router";
import Vue from "vue";
Vue.use(VueRouter);

// Import File

import Home from "../page/Home.vue";
import Login from "../page/auth/login.vue";
import SuratMasuk from "../page/SuratMasuk.vue"
import SuratKeluar from "../page/SuratKeluar.vue"

const Url = [
    {
        name : "Login",
        path : "/",
        component : Login
    },
    {
        name : "Home",
        path : "/Home",
        component : Home
    },
    {
        name : "SuratMasuk",
        path : "/SuratMasuk",
        component : SuratMasuk
    },
    {
        name : "SuratKeluar",
        path : "/SuratKeluar",
        component : SuratKeluar
    },
];

const router = new VueRouter({
    // linkActiveClass: "active",
    linkExactActiveClass: "active",
    mode: "history",
    routes: Url
});

export default router;
