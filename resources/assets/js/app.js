
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});



/** script controlling the landing page**/

const left = document.querySelector('.left');
const right = document.querySelector('.right');
const container = document.querySelector('.container');


left.addEventListener('mouseenter', () => {
	container.classList.add('hover-left');
});

left.addEventListener('mouseleave', () => {
	container.classList.remove('hover-left');
});

right.addEventListener('mouseenter', () => {
	container.classList.add('hover-right');
});

right.addEventListener('mouseleave', () => {
	container.classList.remove('hover-right');
});

