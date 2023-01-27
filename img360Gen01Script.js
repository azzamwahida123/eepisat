// 360 Image
setInterval(img360, 100);
function img360() {
	var range = document.getElementById('range1').value;
	var gen1 = document.getElementById('img1');
	gen1.innerHTML = '<img src="asset/gen1/' + range + '.webp" width="600px" height="276px">';
}
// Akhir 360 Image