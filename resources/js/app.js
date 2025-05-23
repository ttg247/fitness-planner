
import './bootstrap';
import { createPinia } from 'pinia'
import { createApp } from 'vue';
import router from './router';
import App from './App.vue'; // root SPA component
import { initializeThemeUI } from './Utils/themeUI.js';
import $ from 'jquery';


const app = createApp(App);
app.use(createPinia());
app.use(router);
app.mount('#app');

