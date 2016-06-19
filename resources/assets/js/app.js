import Vue from 'vue'
import VueResource from 'vue-resource'


var topFiveMovieIdArray = ['the_conjuring_2', 'warcraft', 'now_you_see_me', 'foo', 'bar'];
var i = 0;

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

			if(i>0) {
				i--;
				console.log(this.$http.headers);
				console.log('slide left: '+i+'');
				this.$http.get('https://www.rottentomatoes.com/m/'+topFiveMovieIdArray[i]+'', function(success){
					console.log(success);
				}, function (error){
					console.log(error);
				});
			}
		},
		slideRight: function (){
			if(i<5) {
				i++;
				console.log(this.$http.headers);
				console.log('slide right: '+i+'');
				this.$http.get('https://www.rottentomatoes.com/m/'+topFiveMovieIdArray[i]+'', function(success){
					console.log(success);
				}, function (error){
					console.log(error);
				});
			}
			// this.data.movies = this.$http.get('https://www.rottentomatoes.com/m/'+topFiveMovieIdArray[i]+'');
		}
	}
})