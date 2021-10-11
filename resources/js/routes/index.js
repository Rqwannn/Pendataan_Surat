import VueRouter from "vue-router";
import Vue from "vue";
Vue.use(VueRouter);

// Import File

import Home from "../page/Home.vue";
import Login from "../page/auth/login.vue"

const Url = [
    {
        name : "Home",
        path : "/login",
        component : Login
    },
    {
        name : "Login",
        path : "/",
        component : Home
    }
];

const router = new VueRouter({
    linkActiveClass: "Active",
    mode: "history",
    routes: Url
});

export default router;
