const allbtns = document.querySelectorAll("button");
const allnavs = document.querySelectorAll("nav");
const docmain = document.querySelector("main");
console.log(allbtns);
console.log(allnavs);

function toggleMenu(e) {
	console.log("Button clicked: " + e.title);
	allnavs.forEach(navi => {
		console.log(navi.id);
		if (navi.id == e.title) {
			navi.setAttribute("open", true);
			return;
		}
		navi.removeAttribute("open");
	});
}
/*
docmain.addEventListener("click", unset);
function unset() {
	allnavs.forEach(navi => {
		navi.removeAttribute("open");
	})
}
*/