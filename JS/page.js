const sign = document.querySelector(".send");
const btn = sign.querySelector("button");
const input = sign.querySelector(".write");
const box = document.querySelector(".box");



sign.onsubmit=(e)=>{
	e.preventDefault();
}

btn.onclick=()=>{
	let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","php/chat.php",true);
    xmlhttp.onload=()=>{
       if(xmlhttp.readyState === XMLHttpRequest.DONE){
         if(xmlhttp.status === 200){
         	input.value = "";
         	scroll();
         }
       }
    }

    let formData= new FormData(sign); //collect data from signup page
    xmlhttp.send(formData);   //sends data to php
}


box.onmouseenter =()=>{
	box.classList.add("remove");
}
box.onmouseleave =()=>{
	box.classList.remove("remove");
}



setInterval(()=>{
  
  let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","php/dynamic_chat.php",true);
    xmlhttp.onload=()=>{
       if(xmlhttp.readyState === XMLHttpRequest.DONE){
         if(xmlhttp.status === 200){
           let data = xmlhttp.response;
            box.innerHTML = data;
            if(!box.classList.contains("remove")){
            	scroll();
            }
         }
      }

   }
    let formData= new FormData(sign); //collect data from signup page
    xmlhttp.send(formData);   //sends data to php
},400);




function scroll() {
	box.scrollTop = box.scrollHeight;
}






