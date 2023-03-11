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

    loginButton.addEventListener('click', signin);




});

function signin() {
  let username = document.getElementById('login-user-name').value;
  let password = document.getElementById('login-password').value;
  let data = new FormData();
  data.append('username', username);
  data.append('password', password);
  
  axios.post('http://localhost/fullstack-ecommerce-project/login.php', data)
  .then(function (res) {
    console.log(res.data)
    if (res.data.response === "logged in") {
      // Save user ID in sessionStorage
      window.sessionStorage.setItem('user_id', res.data.id);
      
      window.location.href = 'main.html';
    } else if (res.data.response === "user not found") {
      
      alert("User not found.");
    } else if (res.data.response === "Incorrect password") {
     
      alert("Incorrect password.");
    }
  }).catch(function (err) {
    console.log(err);
  });
}





  
  