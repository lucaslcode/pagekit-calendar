<script>

	module.exports = {

		el: '#settings',

		data: function () {
			return window.$data;
		},

		methods: {

			save: function () {
				this.$http.post('admin/system/settings/config', {name: 'calendar', config: this.config}).then(function () {
						this.$notify('Settings saved.');
					}, function (data) {
						this.$notify(data, 'danger');
					}
				);
			}

		}

	};

	Vue.ready(module.exports);

</script>
