
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import 'jquery-ui/ui/effect.js';
import 'jquery-ui/ui/effects/effect-bounce.js';
import 'algoliasearch/dist/algoliasearchLite.min.js';
import 'algoliasearch-helper/dist/algoliasearch.helper.min.js';



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

var algoliasearch = require('algoliasearch');
var algoliasearchHelper = require('algoliasearch-helper');

var applicationID = '4R22U558YW';
var apiKey ='f270fb60fc4fe4446d2127cd3bb5baa8';
var indexName = 'posts';

var client = algoliasearch(applicationID, apiKey);
var helper = algoliasearchHelper(client, indexName);


helper.on('result', function(content) {
  renderHits(content);
});

function renderHits(content) {

  $('#container').html(JSON.stringify(content.hits, null, 2));

  $('#search-results').html(function() {
    return $.map(content.hits, function(hit) {


      var route = "//http://localhost:3000/post/";

// {{ route(' + route + ', ' + hit.id + ') }}
      return '<div class=" col-xs-12"><a href="//localhost:3000/post/'+ hit.id +'"><h4>' + hit._highlightResult.title.value + '</h4></a></div>';

    });
  });
}

$('#search-box').on('keyup', function() {
  helper.setQuery($(this).val())
        .search();
});


$(document).ready(function() {


  $('#signUpForm').submit(function (e) {
      e.preventDefault();

      $.ajax({
          url: 'http://eepurl.com/c2Ot7z',
          type: 'POST',
          data: $('#signUpForm').serialize(),
          dataType: 'jsonp',
          contentType: "application/json; charset=utf-8",
          success: function (data) {
             if (data['result'] != "success") {
                  //ERROR
                  console.log('Errorrr' + data['msg']);
             } else {
               console.log('Successfully subscribed');
                  //SUCCESS - Do what you like here
             }
          }
      });
  });

    // function showMailingPopUp() {
    //   require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us15.list-manage.com","uuid":"34cd52ce8f2d6ce1e73558922","lid":"db2006c569"}) })
    //   document.cookie = "MCEvilPopupClosed=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
    // };
    //
    // document.getElementById("open-popup").onclick = function() {showMailingPopUp()};

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
