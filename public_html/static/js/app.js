Vue.component('company', {
  props: ['id', 'title'],
  template: `
		<tr>
			<td>{{id}}</td>
			<td>{{title}}</td>
		</tr>
  `,
})



var vm = new Vue({
	el: '#app',
	data: {
		content: []
	},
	methods: {
		call_comp: function(){
            var vm = this;
            fetch('http://lordroea.beget.tech/php/functions.php')
              .then(function (response) {
                return response.json();
              })
              .then(function (data) {
                  vm.content = data;
              });

		},

		},
});

