const signup = document.querySelector(".signup form");
const nxtbtn = signup.querySelector(".btn input");
const pageError = signup.querySelector(".page");



signup.onsubmit=(e)=>{
  e.preventDefault();
}

nxtbtn.onclick = ()=>{
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","http://localhost:8080/chat/php/sign1.php",true);
    xmlhttp.onload=()=>{
       if(xmlhttp.readyState === XMLHttpRequest.DONE){
         if(xmlhttp.status === 200){
           let data = xmlhttp.response;
           if(data == "success"){
                location.href = "account.php";
           }else{
              pageError.textContent = data;
              pageError.style.display = "block";
              
           }
         }
       }
    }

    let formData= new FormData(signup); //collect data from signup page
    xmlhttp.send(formData);   //sends data to php

    
}

