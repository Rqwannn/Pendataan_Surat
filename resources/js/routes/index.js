import VueRouter from "vue-router";
import Vue from "vue";
Vue.use(VueRouter);

// Import File

import Home from "../page/Home.vue";
import Login from "../page/auth/login.vue";
import SuratMasuk from "../page/SuratMasuk.vue";
import SuratKeluar from "../page/SuratKeluar.vue";
import TambahSuratMasuk from "../page/FormSuratMasuk/Tambah.vue";
import UpdateSuratMasuk from "../page/FormSuratMasuk/Update.vue";
import TambahSuratKeluar from "../page/FormSuratKeluar/Tambah.vue";
import UpdateSuratKeluar from "../page/FormSuratKeluar/Update.vue";

const Url = [
    {
        name : "Login",
        path : "/Login",
        component : Login
    },
    {
        name : "Home",
        path : "/",
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
    {
        name : "TambahSuratMasuk",
        path : "/TambahSuratMasuk",
        component : TambahSuratMasuk
    },
    {
        name : "UpdateSuratMasuk",
        path : "/UpdateSuratMasuk/:id",
        component : UpdateSuratMasuk,
        props: true
    },
    {
        name : "TambahSuratKeluar",
        path : "/TambahSuratKeluar",
        component : TambahSuratKeluar
    },
    {
        name : "UpdateSuratKeluar",
        path : "/UpdateSuratKeluar",
        component : UpdateSuratKeluar
    },
];

const router = new VueRouter({
    // linkActiveClass: "active",
    linkExactActiveClass: "active",
    mode: "history",
    routes: Url
});

router.afterEach((to, from) => {
    // Reinitialize perfect scrollbar
    (async function() {
        if (!$.fn.perfectScrollbar) return

        // Wait for DOM updates
        await Vue.nextTick()

        const isWindows = navigator.platform.indexOf('Win') > -1 ? true : false;
          
        if (isWindows) {
            // if we are on windows OS we activate the perfectScrollbar function
            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
        }
    })();
})

export default router;
