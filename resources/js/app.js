/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('movie-detail',{
	props:['movie'],
	template:`

<div class="card" style="width: 18rem;">
  <img v-bind:src="movie.Poster"  class="card-img-top"  alt="Card image cap">
  <div class="card-body">
    <h2 class="card-title">{{movie.Title}}</h2>
    
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><h3>Type: {{movie.Type}}</h3></li>
    <li class="list-group-item"><h3>Year: {{movie.Year}}</h3></li>
   
  </ul>
  

`
});
const app = new Vue({
    el: '#mymovieapp',
    data:{
        searchKey:'',
        movieList:[]
    },
    methods:{
    	searchMovies()
    	{   
            
    		var url='http://www.omdbapi.com/?s='+this.searchKey+'&apikey=19662a8d';
    		fetch(url)
    		.then(response=>response.json())
    		.then(data=>{
    			this.movieList=data;
    		})
    	}

    }
});
