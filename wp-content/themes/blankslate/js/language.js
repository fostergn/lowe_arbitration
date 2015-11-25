jQuery(document).ready(function($) {
	console.log('ready');

	function showFrench(){
		$('.english').hide();
		$('.italian').hide();
		$('.spanish').hide();
  		$('.french').fadeIn();
	}

	function showEnglish(){
		$('.french').hide();
		$('.italian').hide();
		$('.spanish').hide();
  		$('.english').fadeIn();
	}

	function showItalian(){
		$('.french').hide();
		$('.english').hide();
		$('.spanish').hide();
  		$('.italian').fadeIn();
	}

	function showSpanish(){
		$('.french').hide();
		$('.english').hide();
		$('.italian').hide();
  		$('.spanish').fadeIn();
	}

	if (sessionStorage.getItem('language') == 'english') {
		showEnglish();
	}

	if (sessionStorage.getItem('language') == 'french') {
		showFrench();
	}

	if (sessionStorage.getItem('language') == 'spanish') {
		showSpanish();
	}

	if (sessionStorage.getItem('language') == 'italian') {
		showItalian();
	}

  $('.french-flag').on('click', function(){
  		showFrench();
  		sessionStorage.setItem('language', 'french');
  	});

  $('.english-flag').on('click', function(){
  		showEnglish();
  		sessionStorage.setItem('language', 'english');
  	});
  $('.spanish-flag').on('click', function(){
  		showSpanish();
  		sessionStorage.setItem('language', 'spanish');
  	});

  $('.italian-flag').on('click', function(){
  		showItalian();
  		sessionStorage.setItem('language', 'italian');
  	});
})