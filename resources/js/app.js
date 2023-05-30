import { createApp } from "vue/dist/vue.esm-bundler.js";
import VideoBackground from "vue-responsive-video-background-player";
import "../css/app.css";

const app = createApp({});

import AppHome from "./components/AppHome.vue";
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";

import Evenement from "./components/EvenementPage.vue";

app.component("component-header", Header);
app.component("home", AppHome);
app.component("video-background", VideoBackground);
app.component("component-footer", Footer);

app.component("evenement", Evenement);

app.mount("#app");
