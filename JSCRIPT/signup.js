//resposive navigation toggle button

const toggle =document.querySelector('.toggle')
const toggleic =document.querySelector('.toggle i')
const dropdown =document.querySelector('.dropdown')
toggle.onclick = function () {
    dropdown.classList.toggle('open');
    const isopen =dropdown.classList.contains('open');}
    
//HIDDEN FORM CONFIG

    function showForm1() {
        var form = document.getElementById("myForm");
        if (form.style.display === "none") {
           form.style.display = "block";
        } else {
           form.style.display = "none";
        }
     }

     const test = document.querySelector('#test');
     test.addEventListener('click',showForm1);
     
     
    function showForm2() {
        var form = document.getElementById("myForm1");
        if (form.style.display === "none") {
           form.style.display = "block";
        } else {
           form.style.display = "none";
        }
     }

     const test1 = document.querySelector('#test1');
     test1.addEventListener('click',showForm2);
     

     //SIGNUP VALIDATIONS

    const firstNameInput = document.querySelector('#user-name');
    const emailInput = document.querySelector('#email');
    const passwordInput = document.querySelector('#password');
    const lastNameInput = document.querySelector('#dob');

    let value = 0;  // Initialize the variable with a default value of 0

    document.getElementById("test").addEventListener("click", function() {
        value = 1;
        console.log(value)
    });
    
    document.getElementById("test1").addEventListener("click", function() {
        value = 2;  
        console.log(value)
    });
    
    document.getElementById("test2").addEventListener("click", function() {
        value = 3;  
        console.log(value)
    });
    

    // const checkbox = document.querySelector('input[type="checkbox"]');

const submitButton = document.querySelector('#submit-button');

submitButton.addEventListener('click', (event)=> {
    event.preventDefault();
    if(firstNameInput.value.trim() === ''){
        alert("please enter your name.");
        return;
    }
    if(lastNameInput.value.trim()=== ''){
        alert('please enter your last name.');
        return;
    }
    if(userNameInput.value.trim()=== ''){
        alert('please enter a user name.');
        return;
    }
    // const emailRegExp = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    // if (!emailRegExp.test(emailInput.value)) {
    //   alert('Please enter a valid email address');
    //   return;
    // }
   const arr =passwordInput.value.split('')
    if (arr.length <8 ) {
      alert('password must be at least 8 characters.');
      return;
    }
    if(!checkbox.checked){
        alert('read terms and conditions and check the box');
        return;

    }
    
const userData = {
    firstName: firstNameInput.value,
    lastName: lastNameInput.value,
    userName: userNameInput.value,
    email: emailInput.value,
    // dateOfBirth: bDateInput.value,
    password: passwordInput.value,
  };
  const data = JSON.stringify(userData);
  console.log(data);
   

});