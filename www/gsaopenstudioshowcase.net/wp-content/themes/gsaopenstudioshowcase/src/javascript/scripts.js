window.addEventListener('DOMContentLoaded', e=>{

	

	if (document.querySelector('body').classList.contains('home')) {

		// const main = document.querySelector('#students');
		// for (var i = main.children.length; i >= 0; i--) {
		// 	main.appendChild(main.children[Math.random() * i | 0]);
		// }
		// document.querySelector('.close a').addEventListener('click', e=>{
		// 	e.preventDefault();
		// 	document.querySelector('main').classList.remove('intro-open');
		// });
		// document.querySelector('.introduction a').addEventListener('click', e=>{
		// 	e.preventDefault();
		// 	if(document.querySelector('main').classList.contains('intro-open')){
		// 		document.querySelector('main').classList.remove('intro-open');		
		// 	} else {
		// 		document.querySelector('main').classList.add('intro-open');
		// 	}
			
		// });
	}
	if(document.body.classList.contains('home')){
		createSlideshows();
	}
});


function createSlideshows() {
	document.querySelectorAll('.works').forEach(studentWorks => {
		studentWorks.dataset.idx = 0;
		studentWorks.dataset.numworks = studentWorks.querySelectorAll('.works .work').length;
	});

	document.querySelectorAll('.works').forEach((studentWorks, i) => {
		setTimeout(e=>{
			setInterval(e=>{
				let idx = parseInt(studentWorks.dataset.idx) + 1;
				if (idx >= parseInt(studentWorks.dataset.numworks)) {
					idx = 0;
				}
				studentWorks.dataset.idx = idx;
			}, 4000);
		}, Math.random() * 600 + 300);
	});
	// setInterval(() => {
	// 	document.querySelectorAll('.works').forEach(studentWorks => {
	// 		let idx = parseInt(studentWorks.dataset.idx) + 1;
	// 		if (idx >= parseInt(studentWorks.dataset.numworks)) {
	// 			idx = 0;
	// 		}
	// 		studentWorks.dataset.idx = idx;
			
	// 	});
	// }, 3000);
}
