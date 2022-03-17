const input = document.getElementById('textarea-commentaire');
const counter = document.getElementById('counter-commentaire');
const maxLength = input.getAttribute('maxlength');

input.addEventListener('input', event => {
    const valueLength = event.target.value.length;
    const leftCharLength = maxLength - valueLength;
  
    if (leftCharLength < 0) return;
    counter.innerText = leftCharLength;
  });