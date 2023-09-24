import "./bootstrap";

import router from "./routes";

import { createApp } from "vue";
import App from "./components/App.vue";

createApp(App).use(router).mount("#app");
