
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import 'jquery-ui/ui/effect.js';
import 'jquery-ui/ui/effects/effect-bounce.js';

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});


$(document).ready(function() {

    // $('.nav-header').hover(function() {
    //   $( this ).fadeOut( 100 ),
    //   $( this ).fadeIn( 500 )
    //   console.log('hovered');
    // });
    $( '.nav-header' ).mouseenter( function() {
      $('.nav-bounce').delay(50).effect('bounce', {times:3}, 1100);
      $('.nav-bounce-1').delay(100).effect('bounce', {times:3}, 1100);
      $('.nav-bounce-2').delay(150).effect('bounce', {times:3}, 1100);
      $('.nav-bounce-3').delay(200).effect('bounce', {times:3}, 1100);
    } ).mouseleave( function() {
      console.log('mouse leave');
    } );


    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
