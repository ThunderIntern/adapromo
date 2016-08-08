var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	// mix.styles(['../bootstrap/css/bootstrap.min.css',
	//         '../bootstrap/css/datepicker.css',
	//         '../bootstrap/css/myStyle.css'
	//         ], 'public/css/app.css')
	//     .version([
	//         'public/css/app.css',
	//         'public/js/app.js',
	//     ]);
		
	// mix.scripts([
	//         '../bootstrap/js/jquery.js',
	//         '../bootstrap/js/bootstrap.min.js',
	//         '../bootstrap/js/datepicker.js'
	//         ], 'public/js/app.js')
	//     .version([
	//         'public/css/app.css',
	//         'public/js/app.js',
	//     ]);

	// dashboard
	mix
		.sass('appcms.scss')
		.scripts(['bootstrap.min.js', 
					'selectize.min.js', 
					'inputmask.js', 
					'inputmask.date.extensions.js', 
					'jquery.inputmask.js', 
					'inputmask.binding.js'], 'public/js/appcms.js')
	// web
		.sass('appweb.scss')
		.scripts(['bootstrap.min.js', 
					'selectize.min.js', 
					'inputmask.js', 
					'inputmask.date.extensions.js', 
					'jquery.inputmask.js', 
					'inputmask.binding.js',
					'adapromo_ui.js',
					'adapromo.js'], 'public/js/appweb.js')
		.scripts(['tether.min.js'], 'public/js/tether.js')
		.version(['public/js/appweb.js', 'public/css/appweb.css', 'public/js/appcms.js', 'public/css/appcms.css'])
		.copy('resources/assets/fonts/', 'public/fonts/')
		.copy('resources/assets/images/', 'public/images/')
		;
});