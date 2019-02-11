$(function(){
	//vai todo nosso codigo de JS.

	var i = document.querySelector('i');
	function trocarClasse(elemento, antiga, nova){
		elemento.classList.remove(antiga);
		elemento.classList.add(nova);
	}

		

	$('nav.mobile').click(function(){

		//oque vai acontecer qnd clicarmos na nav mobil.

		var listaMenu = $('nav.mobile ul');

		//Abrir menu atraves do fadein
		/*
		if(listaMenu.is(':hidden') == true){
			listaMenu.fadeIn();
		}else{

			listaMenu.fadeOut();
		}*/
		
		
		//<i class="fa fa-times" aria-hidden="true"></i>
		//fa fa-bars


		if(listaMenu.is(':hidden') == false){
			
			listaMenu.fadeOut();
			i.classList.remove('fa-bars');
			i.classList.add('fa-times');
			
		}else{

			listaMenu.fadeIn();
			i.classList.remove('fa-times');
			i.classList.add('fa-bars');
		}
		
	})
})