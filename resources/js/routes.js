import { createRouter, createWebHistory } from "vue-router";

import Home from "./components/Home.vue";
import MahmoudAdel from "./components/MahmoudAdel.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
    },
    {
        path: "/guide",
        name: "guide",
        component: MahmoudAdel,
    },
];

const router = createRouter({ history: createWebHistory(), routes });

export default router;
