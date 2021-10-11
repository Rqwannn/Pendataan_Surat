import VueRouter from "vue-router";
import Vue from "vue";
Vue.use(VueRouter);

// Import File

import Home from "../page/Home.vue";
import Login from "../page/auth/login.vue"

const Url = [
    {
        name : "Home",
        path : "/Home",
        component : Home
    },
    {
        name : "Login",
        path : "/",
        component : Login
    }
];

const router = new VueRouter({
    linkActiveClass: "Active",
    mode: "history",
    routes: Url
});

export default router;
