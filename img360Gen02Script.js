// 360 Image
setInterval(img360, 100);
function img360() {
	var range = document.getElementById('range2').value;
	var gen2 = document.getElementById('img2');
	gen2.innerHTML = '<img src="asset/gen2/' + range + '.webp" width="600px" height="276px">';
}
// Akhir 360 Image