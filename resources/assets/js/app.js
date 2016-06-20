import Vue from 'vue'
import VueResource from 'vue-resource'

var i = 1;

Vue.use(VueResource);
Vue.http.headers.common['Access-Control-Allow-Origin'] = '*';

new Vue({
  el: '#app',
  data: {
  	movies: null,
  	message: 'hello vue world, here we come, on dem twinky trays, wit the hood screamin, we on our way'
  },
	methods: {
		slideLeft: function (){
			if(i>1) {
				i--;
				console.log('slide left: '+i+'');
				document.getElementById('data-id-'+i+'').style.display = 'block';
				document.getElementById('data-id-'+(i+1)+'').style.display = 'none';
			}
		},
		slideRight: function (){
			if(i<5) {
				i++;
				console.log('slide right: '+i+'');
				document.getElementById('data-id-'+i+'').style.display = 'block';
				document.getElementById('data-id-'+(i-1)+'').style.display = 'none';
			}
			// this.data.movies = this.$http.get('https://www.rottentomatoes.com/m/'+topFiveMovieIdArray[i]+'');
		}
	},
	ready: function () {

				
	}
})