const button = document.querySelector('.button');
const grid = document.querySelector('.grid');

function ajax() {

  url = 'http://ajaxtest/ajax/ajax.json';

  let xhr = new XMLHttpRequest();

  xhr.open('GET', url, true);

  xhr.responseType = 'json';

  xhr.send();

  xhr.onload = function() {
    let responseObj = xhr.response;
    createTemplate(responseObj);
  };

}

function createTemplate(obj) {
  obj.forEach(function(item) {
    let name = item.name;
    let description = item.description;
    let text = `<div class="col"><div class="module"><h1>${item.name}</h1><p>${item.description}</p></div></div></div>`;
    grid.insertAdjacentHTML("beforeend", text);
  })
}

button.onclick = ajax;
