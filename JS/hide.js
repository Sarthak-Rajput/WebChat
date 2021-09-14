const password = document.querySelector(".row input[type ='password']");
const btn = document.querySelector(".row .row1 i");

btn.onclick=()=>{
  if(password.type == "password"){
      password.type ="text";
      btn.classList.add("remove");
  }
  else{
    password.type = "password";
    btn.classList.remove("remove");
  }
}