window.addEventListener('DOMContentLoaded', e=>{
	

	if (document.querySelector('body').classList.contains('home')) {

		const main = document.querySelector('#students');
		for (var i = main.children.length; i >= 0; i--) {
			main.appendChild(main.children[Math.random() * i | 0]);
		}
		document.querySelector('.close a').addEventListener('click', e=>{
			e.preventDefault();
			document.querySelector('main').classList.remove('intro-open');
		});
		document.querySelector('.introduction a').addEventListener('click', e=>{
			e.preventDefault();
			if(document.querySelector('main').classList.contains('intro-open')){
				document.querySelector('main').classList.remove('intro-open');		
			} else {
				document.querySelector('main').classList.add('intro-open');
			}
			
		});
	}
});
