/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
// import { ZiggyVue } from 'ziggy';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */



const app = createApp({});
// .use(ZiggyVue, Ziggy);

import Verte from 'verte';
import 'verte/dist/verte.css';
// register component globally
app.component('verte', Verte);

// import jQuery from "jquery";
// const $ = jQuery;
// window.$ = $;
// window.jQuery = jQuery;
// window.jQuery = window.$ = jQuery

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

import Editor from './Editor.vue';
app.component('block', Editor);

import Welcome from './pages/Welcome.vue';
app.component('welcome', Welcome);

import About from './pages/About.vue';
app.component('about', About);


import Blogpage from './pages/BlogPage.vue';
app.component('blog-page', Blogpage);


import Contact from './pages/Contact.vue';
app.component('contact', Contact);


import Gallery from './pages/Gallery.vue';
app.component('gallery', Gallery);


import Programs from './pages/Programs.vue';
app.component('programs', Programs);


import Singleblog from './pages/SingleBlog.vue';
app.component('single-blog', Singleblog);


import Singlecourse from './pages/SingleCourse.vue';
app.component('single-course', Singlecourse);


import Teacherprofile from './pages/TeacherProfile.vue';
app.component('teacher-profile', Teacherprofile);

import Teacher from './pages/Teacher.vue';
app.component('teacher', Teacher);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');

// import VueAxios from 'vue-axios';
// Vue.use(VueAxios, axios);
// import route from 'ziggy';
// import { Ziggy } from './ziggy';
// window.route = route;
// window.Ziggy = Ziggy;


