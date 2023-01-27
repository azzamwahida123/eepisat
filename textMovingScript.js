let textGen = document.querySelector('.textMove');
let textSlogan = document.querySelector('.textSlogan');

window.onscroll = () => {
	let text1 = window.scrollY - 1340;
	let text2 = window.scrollY - 640;
	textGen.style.left = `${text1}px`
	textSlogan.style.left = `${text2}px`
}