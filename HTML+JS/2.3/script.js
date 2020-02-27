const li = document.body.querySelectorAll('li');
const a = document.body.querySelectorAll('a');

let setPlusIcon = (li, a) => {
	li.forEach((item) => {
		if (item.children.length > 1) {
			let span = document.createElement('span');
			span.innerHTML = "[+]";
			item.insertAdjacentElement('afterbegin', span);
		}
	});
	
	a.forEach((item) => {
		item.onclick = aClick;
	})
};

let aClick = (event) => {
	let target = event.target;
	let parent = target.closest("li");
	for (let elem of parent.children) {

		if (elem.matches("ul")) {
			target.closest('a').href = "#";
			event.target.style.color = "red";
			event.target.style.textDecoration = "none";
			elem.parentElement.querySelector('span').innerHTML = "[-]";
			elem.parentElement.querySelector('span').style.color = "red";
		} else {
			target.closest('a').href = "a.html";
		}

	}
};

setPlusIcon(li, a);