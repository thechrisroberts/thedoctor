// Wee 2.0.0 (weepower.com)
// Licensed under Apache 2 (http://www.apache.org/licenses/LICENSE-2.0)
// DO NOT MODIFY THIS FILE

Wee.fn.make('assets', {
	// Get currently bound resource root or set root with specified value
	// Returns string
	root: function(val) {
		return val !== undefined ?
			this.$set('root', val) :
			this.$get('root', '');
	},
	// Load specified assets with specified set of options
	load: function(conf) {
		var files = Wee.$toArray(conf.files),
			root = conf.root !== undefined ? conf.root : this.root(),
			now = new Date().getTime(),
			len = files.length,
			i = 0;

		// Create group name if not specified
		if (! conf.group) {
			conf.group = 'load-' + now;
		}

		// Set file array length to check against
		this.$set(conf.group, len);
		this.$set(conf.group + '-fail', 0);
		this.$set(conf.group + '-conf', conf);

		// Request each specified file
		for (; i < len; i++) {
			var file = root + files[i];

			if (conf.cache === false) {
				file += (file.indexOf('?') == -1 ? '?' : '&') + now;
			}

			this.$private('request', file, conf);
		}
	},
	// When specified references are ready execute callback
	ready: function(group, opt, poll) {
		if (this.$get(group) === 0) {
			var conf = Wee.$extend(this.$get(group + '-conf'), opt),
				opt = {
					args: conf.args,
					scope: conf.scope
				};

			if (this.$get(group + '-fail') > 0 && conf.failure) {
				Wee.$exec(conf.failure, opt);
			} else if (conf.success) {
				Wee.$exec(conf.success, opt);
			}
		} else if (poll) {
			setTimeout(function() {
				Wee.loader.ready(group, {}, true);
			}, 20);
		}
	}
}, {
	// Request specific file
	request: function(path, conf) {
		var scope = this,
			head = Wee._doc.getElementsByTagName('head')[0],
			ext = path.split('.').pop().split(/\#|\?/)[0],
			group = conf.group;

		// Load file based on extension
		if (ext == 'js') {
			var el = Wee._doc.createElement('script');

			el.src = path;
			el.async = conf.async === false ? false : true;

			el.onload = el.onreadystatechange = function() {
				var rs = this.readyState;

				if (rs && rs != 'complete' && rs != 'loaded') {
					return;
				}

				scope.done(group);
			};

			el.onerror = function() {
				scope.fail(group);
			}

			head.appendChild(el);
		} else if (ext == 'css') {
			var el = Wee._doc.createElement('link');

			el.rel = 'stylesheet';
			el.href = path;

			scope.done(group);

			head.appendChild(el);
		} else if ((/(gif|jpg|jpeg|png|svg)$/i).test(ext)) {
			var img = new Image();

			img.onload = function() {
				scope.done(group);
			}

			img.onerror = function() {
				scope.fail(group);
			}

			img.src = path;
		}
	},
	// Decrement remaining count of assets to be loaded
	done: function(group) {
		this.$set(group, this.$get(group) - 1);
		this.$public.ready(group, {}, false);
	},
	// Track failed resources
	fail: function(group) {
		var key = group + '-fail';

		this.$set(key, this.$get(key) + 1);
		this.done(group);
	}
});