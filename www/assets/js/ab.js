
/**
 * generate ab formulas
 */
App.AB = {
	options: {
		tagline: [
			{
				name: 'tagline-for-free',
				tagline: 'Order the best delivery food %s. <br /> After you order, everything is saved for future 1 click ordering. <br /><strong>Choose a restaurant:</strong>'
			},
			{
				name: 'tagline-no-free',
				tagline: 'Order the top food %s. <br /> After you order, everything is saved for future 1 click ordering. <br /><strong>Choose a restaurant:</strong>'
			}
		],
		slogan: [
			{
				name: 'slogan-push-food',
				slogan: 'Push a button. Get delivery.'
			}
		],
		nothingInTheCartMobile: [
			{
				name: 'empty-cart-mobile-food',
				line: 'Choose food below!',
				disabled: true
			}
		],
		nothingInTheCartDesktop: [
			{
				name: 'empty-cart-desktop-begin',
				line: 'Begin by clicking on anything from our curated menu on the left!'
			},
			{
				name: 'empty-cart-desktop-food',
				line: 'Choose Food!',
				disabled: true
			}
		],
		restaurantPage: [
			{
				name: 'restaurant-page-noimage'
			},
			{
				name: 'restaurant-page-image',
				disabled: true
			}
		],
		dollarSign: [
			{
				name : 'hide'
			},
			{
				name : 'hide'
			}
		]
	},
	init: function() {
		// we dont have ab variables. generate them
		if (App.config.site.ab) {
			for (var x in App.config.site.ab) {
				App.AB.options[x] = App.config.site.ab[x];
			}
		}
		App.AB.create(true);
		App.AB.load();
	},
	create: function(clear) {
		if (clear) {
			App.config.ab = {};
		}

		// Creates the ab object case it don't exist
		if( App.config && !App.config.ab ){
			App.config.ab = {};
		}

		// loop through each option type
		for (var key in App.AB.options) {
			if (App.config.ab[key]) {
				return;
			}
			var optionType = App.AB.options[key];
			var opts = [];

			// loop through all of the options for the specific ab option type
			for (var x in optionType) {
				// remove disabled ones
				if (!optionType[x].disabled || optionType[x].disabled == false) {
					opts[opts.length] = optionType[x];
				}
			}
			var opt = opts[Math.floor(Math.random()*opts.length)];
			if (opt && opt.name) {
				App.config.ab[key] = opt.name;
			}
		}
		App.AB.save();
	},
	load: function() {
		App.slogan = App.AB.pluck('slogan', App.config.ab.slogan);
		App.tagline = App.AB.pluck('tagline', App.config.ab.tagline);
		if (!App.slogan || !App.tagline) {
			App.AB.create(true);
			App.AB.load(true);
		}
	},
	pluck: function(option, name) {
		for (var x in App.AB.options[option]) {
			if (App.AB.options[option][x].name == name) {
				return App.AB.options[option][x];
			}
		}
		for (var x in App.AB.options[option]) {
			return App.AB.options[option][x];
		}
	},
	get: function(option) {
		return App.AB.pluck(option, App.config.ab[option]).line;
	},
	save: function() {
		$.ajax({
			url: App.service + 'config',
			data: {ab: App.config.ab},
			dataType: 'json',
			type: 'POST',
			complete: function(json) {}
		});
	}
};
