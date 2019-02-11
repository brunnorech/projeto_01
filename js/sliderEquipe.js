$(function(){

	initSlider();
	autoPlay();
	var amt;
	var curIndex = 0;
	function initSlider(){
		 amt = $('.sobre-autor').length;
		var sizeContainer = 100 * amt;
		var sizeBoxSingle = 100 / amt;
		$('.sobre-autor').css('width',sizeBoxSingle+'%');
		$('.scroll-wrapper').css('width',sizeContainer+'%');

		for(i = 0; i < amt; i++){
			if(i == 0){
			$('.slider-bullets').append('<span style="background-color:rgb(170,170,170);"></span>');
			}else{
				$('.slider-bullets').append('<span></span>');
			}

		}
	}

	function autoPlay(){
	
		setInterval(function(){
			curIndex++;
			if(curIndex == amt)
				curIndex = 0;

			goToSlider(curIndex);
			$('.slider-bullets span').css('background-color','rgb(200,200,200)');
			$('.slider-bullets span').eq(curIndex).css('background-color','rgb(170,170,170)');
			
		},3000);

	
	}

	function goToSlider(curIndex){
			var offSetX = $('.sobre-autor').eq(curIndex).offset().left - $('.scroll-wrapper').offset().left;

			$('.scrollEquipe').animate({'scrollLeft':offSetX+'px'});
		}

	window.resize()	
});