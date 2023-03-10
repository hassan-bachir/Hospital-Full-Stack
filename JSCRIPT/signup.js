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
    const dobInput = document.querySelector('#dob');

    const bloodTypeInput = document.querySelector('#blood-type');
    const ehrInput = document.querySelector('#ehr');
    const ssnInput = document.querySelector('#ssn');
    const positionInput = document.querySelector('#position');

    let value = 0; 

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
    const emailRegExp = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegExp.test(emailInput.value)) {
      alert('Please enter a valid email address');
      return;
    }
   const arr =passwordInput.value.split('')
    if (arr.length <8 ) {
      alert('password must be at least 8 characters.');
      return;
    }
    if(!checkbox.checked){
        alert('read terms and conditions and check the box');
        return;

    }
    
// const userData = {
//     firstName: firstNameInput.value,
//     lastName: lastNameInput.value,
//     userName: userNameInput.value,
//     email: emailInput.value,
//     // dateOfBirth: bDateInput.value,
//     password: passwordInput.value,
//   };
//   const data = JSON.stringify(userData);
//   console.log(data);
   

});


    let signup_btn = document.getElementById('submit-button');
    signup_btn.addEventListener('click', signup);


    function signup() {

        let username = firstNameInput.value;
        let email = emailInput.value;
        let password = passwordInput.value;
        let dob = dobInput.value;

        let bloodType =bloodTypeInput.value;
        let ehr = ehrInput.value;
        let ssn = ssnInput.value;
        let position = positionInput.value;
       
        if(value==1){
            let data = new FormData();
            data.append('username',username);
            data.append('email', email);
            data.append('password', password);
            data.append('dob', dob);
            data.append('userType', value);
            data.append('bloodType', bloodType);
            data.append('ehr', ehr);
            

        } else if(value==2){
            let data = new FormData();
            data.append('username',username);
            data.append('email', email);
            data.append('password', password);
            data.append('dob', dob);
            data.append('userType', value);
            data.append('ssn', ssn);
            data.append('position', position);
        } else if(value==3){
            let data = new FormData();
            data.append('username',username);
            data.append('email', email);
            data.append('password', password);
            data.append('dob', dob);
            data.append('userType', value);

        }

        let data = new FormData();
        data.append('username', username);
        data.append('password', password);
        data.append('first_name', first_name);
        data.append('last_name', last_name);
        data.append('email', email);

        
        axios({
            "method": "post",
            "url": "http://localhost/fullstack-ecommerce-project/signup.php",
            "data": data
        }).then((result) => {
            console.log(result)
            if (result.data.status == "success") {
                alert("You have signed up successfully!")
            }
        }).catch((err) => {
            console.error(err)
        });

    }