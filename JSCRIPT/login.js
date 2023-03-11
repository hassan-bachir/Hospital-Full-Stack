//resposive navigation toggle button

const toggle =document.querySelector('.toggle')
const toggleic =document.querySelector('.toggle i')
const dropdown =document.querySelector('.dropdown')
toggle.onclick = function () {
    dropdown.classList.toggle('open');
    const isopen =dropdown.classList.contains('open');}
    

    //LOGIN MENU

const userNameInput = document.querySelector('#login-user-name');
const passwordInput = document.querySelector('#login-password');
const loginButton = document.querySelector('#login-button');



loginButton.addEventListener('click',(event)=>{
    event.preventDefault();
    if(userNameInput.value.trim()===''){
        alert("please enter  correct name.");
        return;
    }
    if(passwordInput.value.trim()===''){
        alert("please enter password.");
        return;
    }
    const arr =passwordInput.value.split('')
    if (arr.length <8 ) {
      alert('password must be at least 8 characters.');
      return;
    }

    




});
