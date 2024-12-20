// events

const btn = document.querySelector('.btn');

btn.addEventListener('click', (e) => {
  e.preventDefault();
  document.querySelector('#my-form').style.background = '#ccc';
});
