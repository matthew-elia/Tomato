import Vue from 'vue'
import VueResource from 'vue-resource'
import VueTouch from 'vue-touch'

var i = 1;

Vue.use(VueResource);
Vue.use(VueTouch);
Vue.http.headers.common['Access-Control-Allow-Origin'] = '*';

var vm = new Vue({
  el: '#app',
  data: {
  	movies: null,
  	iterator: i
  },
	methods: {
		slideLeft: function (){
			if(i>1) {
				document.getElementById('page-id-'+i+'').innerHTML = '&#9675';
				document.getElementById('page-id-'+(i-1)+'').innerHTML = '&#9679';
				document.getElementById('data-id-'+(i-1)+'').style.display = 'block';
				document.getElementById('data-id-'+i+'').style.display = 'none';
				i--;
				console.log('slide left: '+i+'');
			}else if(i===1){
				i = 5;
				document.getElementById('page-id-'+i+'').innerHTML = '&#9679';
				document.getElementById('page-id-1').innerHTML = '&#9675';
				document.getElementById('data-id-'+i+'').style.display = 'block';
				document.getElementById('data-id-1').style.display = 'none';
			}
		},
		slideRight: function (){
			if(i<5) {
				document.getElementById('page-id-'+i+'').innerHTML = '&#9675';
				document.getElementById('page-id-'+(i+1)+'').innerHTML = '&#9679';
				document.getElementById('data-id-'+(i+1)+'').style.display = 'block';
				document.getElementById('data-id-'+i+'').style.display = 'none';
				i++;
				console.log('slide right: '+i+'');
			}else if (i===5){
				i = 1;
				document.getElementById('page-id-'+i+'').innerHTML = '&#9679';
				document.getElementById('page-id-5').innerHTML = '&#9675';
				document.getElementById('data-id-'+i+'').style.display = 'block';
				document.getElementById('data-id-5').style.display = 'none';
			}
		}
	}
})

document.body.addEventListener('keydown', function(e) {
    if(e.keyCode === 39) {
    	if(i<5){
    		vm.slideRight();
    	}

    }
    if(e.keyCode === 37) {
    	if(i>1){
    		vm.slideLeft();
    	}

    }
});