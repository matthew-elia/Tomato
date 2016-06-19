import Vue from 'vue'
import VueResource from 'vue-resource'


var topFiveMovieIdArray = ['the_conjuring_2', 'warcraft', 'now_you_see_me', 'foo', 'bar'];
var i = 0;

Vue.use(VueResource);
Vue.http.headers['Access-Control-Allow-Origin'] = '*';

new Vue({
  el: '#app',
  data: {
  	message: 'hello vue world, here we come, on dem twinky trays, wit the hood screamin, we on our way'
  },
	methods: {
		slideLeft: function (){
			if(i>0) {
				i--;
				console.log('slide left: '+i+'');
			}
		},
		slideRight: function (){
			if(i<5) {
				i++;
				console.log('slide right: '+i+'');
			}
		}
	}
})