const rno = document.getElementById('rno');
const sname = document.getElementById('name');
const degree = document.getElementById('degree');
const marks = document.getElementById('marks');
const messageForm = document.querySelector('.form-message');
const submit = document.querySelector('form button');

const inputs = document.body.querySelectorAll('form input');
inputs.forEach(input => {
    input.addEventListener('blur', validateField);
    input.addEventListener('input', validateField);
});

function validateField(e) {
    const input = e.target;
    if (input.value.trim() === '') {
        input.classList.add('warning');
        messageForm.textContent = `Please fill ${input.getAttribute('id')} field`;
        messageForm.classList.add('error');
    } else {
        input.classList.remove('warning');
        messageForm.classList.remove('error');
        messageForm.textContent = '';
    }
}

// ? REGEX & VALIDATIONS

const rno_regex = /^\d+$/;
const name_regex = /^[A-Za-z\s]{2,}$/;
const degree_regex = /^[A-Za-z\s]{2,}$/;
const marks_regex = /^\d+$/;

function validateInputs(target, regex) {
    if (!regex.test(target.value)) {
        target.classList.add('warning');
        messageForm.classList.add('error');
        messageForm.textContent = 'Invalid Input';
    } else {
        target.classList.remove('warning');
        messageForm.classList.remove('error');
        messageForm.textContent = '';
    }
}

rno.addEventListener('input', () => validateInputs(rno, rno_regex));
sname.addEventListener('input', () => validateInputs(sname, name_regex));
degree.addEventListener('input', () => validateInputs(degree, degree_regex));
marks.addEventListener('input', () => validateInputs(marks, marks_regex));
