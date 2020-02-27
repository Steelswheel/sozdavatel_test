const form = document.querySelector(".form");
const phone = form.querySelector(".form__phone-input");
const email = form.querySelector(".form__email-input");
const message = form.querySelector(".form__message-input");
const button = form.querySelector(".button-undo");

const phoneCache = ["", ];
const emailCache = ["", ];
const messageCache = ["", ];

phone.oninput = (event) => {
	phoneCache.push(event.target.value);
	console.log(phoneCache);
}

email.oninput = (event) => {
	emailCache.push(event.target.value);
	console.log(emailCache);
}

message.oninput = (event) => {
	messageCache.push(event.target.value);
	console.log(messageCache);
}

let undo = (arr, elem) => {
	if (arr.length === 1) {
		return;
	} else {
		arr.length = arr.length -1;
		elem.value = arr[arr.length -1];
		console.log(elem.value);
	}
};

button.addEventListener('click', function() {
	event.preventDefault();
	undo(phoneCache, phone);
	undo(emailCache, email);
	undo(messageCache, message);
});
