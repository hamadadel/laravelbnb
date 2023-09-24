import "./bootstrap";
import App from "./components/App.vue";
import router from "./routes";

import { createApp } from "vue";

createApp(App).use(router).mount("#app");
