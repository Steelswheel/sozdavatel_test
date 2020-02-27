const form = document.querySelector('.form');
const textErrorMessage = form.querySelector('.form__text-error-message');
const phoneErrorMessage = form.querySelector('.form__phone-error-message');
const mailErrorMessage = form.querySelector('.form__mail-error-message');
const mail = form.querySelector('.form__email-input');
const phone = form.querySelector('.form__phone-input');
const text = form.querySelector('.form__message-input');

function ValidMail(mail, errorMessage) {
    const pattern = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
    let safe = mail.value.trim().toString();
    let valid = pattern.test(mail.value);
    let output;
    if (!valid) {
      output = "Email введен неправильно!<br>";
    }
    errorMessage.innerHTML = output;
    errorMessage.style.color = "red";
    setTimeout(()=> errorMessage.innerHTML = "", 2000);
    return valid;
}

function ValidPhone(phone, errorMessage) {
    const pattern = /^[\d]{1}[\d]{2,3}[\d]{2,3}[\d]{2,3}[\d]{2,3}$/;
    let safe = phone.value.trim().toString();
    let valid = pattern.test(safe);
    let output;
    if (!valid) {
      output = "Номер введен неправильно!<br>";
    }
    errorMessage.innerHTML = output;
    errorMessage.style.color = "red";
    setTimeout(()=> errorMessage.innerHTML = "", 2000);
    return valid;
}

function ValidText(text, errorMessage) {
    let safe = text.value.trim().toString();
    let output;
    let valid;
    if (!safe) {
      output = "Введите текст!<br>";
    } else {
      valid = true;
    }
    errorMessage.innerHTML = output;
    errorMessage.style.color = "red";
    setTimeout(()=> errorMessage.innerHTML = "", 2000);
    return valid;
}

form.addEventListener('submit', (event) => {
  event.preventDefault();

  let validPhone = ValidPhone(phone, phoneErrorMessage);
  let validText = ValidText(text, textErrorMessage);
  let validMail = ValidMail(mail, mailErrorMessage);

  if (validPhone && validText && validMail) {
    alert('Форма отправлена!');
    form.submit();
  }
});
