let submit = document.querySelector('.submit-number');
let number1 = document.querySelector('.number1');
let number2 = document.querySelector('.number2');
let number3 = document.querySelector('.number3');
submit.addEventListener('click', function (e) {
    number1.innerHTML = "1.1 :" +document.getElementById('number1').value; 
    number2.innerHTML = "1.2 :" +document.getElementById('number2').value; 
    number3.innerHTML = "1.3 :" +document.getElementById('number3').value; 
})