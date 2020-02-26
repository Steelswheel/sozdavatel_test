var tile = document.querySelector(".tile");
var list = document.querySelector(".list");
var catalog = document.querySelectorAll(".col");

list.onclick = function () {
	for (var i = 0; i < catalog.length; i++) {
		catalog[i].style.width = "100%";
	}
	list.style.border = "1px solid black";
	tile.style.border = "none";
}; 

tile.onclick = function () {
	if (document.documentElement.clientWidth <= 1024) {
		for (var i = 0; i < catalog.length; i++) {
			catalog[i].style.width = "50%";
		}
	} 

	if (document.documentElement.clientWidth <= 768) {
		for (i = 0; i < catalog.length; i++) {
			catalog[i].style.width = "100%";
		}
	}

	if (document.documentElement.clientWidth >= 1024) {
		for (i = 0; i < catalog.length; i++) {
			catalog[i].style.width = "33.33%";
		}
	}
	tile.style.border = "1px solid black";
	list.style.border = "none";
};