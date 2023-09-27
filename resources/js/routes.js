import { createRouter, createWebHistory } from "vue-router";

import Home from "./components/Home.vue";
import MahmoudAdel from "./components/MahmoudAdel.vue";
import BookableItem from "./components/BookableItem.vue";

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
    {
        path: "/bookable/:id",
        name: "bookable",
        component: BookableItem,
    },
];

const router = createRouter({ history: createWebHistory(), routes });

export default router;
