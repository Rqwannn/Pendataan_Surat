import VueRouter from "vue-router";
import Vue from "vue";
Vue.use(VueRouter);

// Import File

import Home from "../page/Home.vue";

const Url = [
    {
        name : "Home",
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