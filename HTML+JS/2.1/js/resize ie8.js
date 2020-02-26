var catalog = document.querySelectorAll(".col");

window.onresize = function() {
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
}