const rno = document.getElementById('rno');
const name = document.getElementById('name');
const degree = document.getElementById('degree');
const marks = document.getElementById('marks');
const messageForm = document.querySelector('.form-message');
const submit = document.querySelector('form button');

const inputs = document.body.querySelectorAll('form input');
inputs.forEach(input => {
    input.addEventListener('blur', (e) => {
        if (input.value.trim() == '') {
            input.classList.add('warning');
            messageForm.textContent = `Please fill ${input.getAttribute('id')} field`;
            messageForm.style.color = red;
            messageForm.classList.add('error');
        }
        else {
            input.classList.remove('warning');
            messageForm.classList.remove('error');
            messageForm.textContent = '';
        }
    });
});