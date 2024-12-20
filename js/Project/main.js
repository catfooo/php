const ul = document.querySelector('.items');

// ul.remove();
// ul.lastElementChild.remove();
ul.firstElementChild.textContent = 'hello';
ul.children[1].innerText = 'katty';
ul.lastElementChild.innerHTML = '<h1>hej</h1>';

const btn = document.querySelector('.btn');
btn.getElementsByClassName.background = 'red';