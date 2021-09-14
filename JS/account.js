const search = document.querySelector(".account .search input");
const btn = document.querySelector(".account .search button");
const list = document.querySelector(".account .users")


btn.onclick = ()=>{
   search.classList.toggle("remove");
   search.focus();
   btn.classList.toggle("remove");
   search.value = "";
   
}


search.onkeyup =()=>{
    let write = search.value;
    if(write != ""){
      search.classList.add("remove");
    }else{
      search.classList.remove("remove");
    }
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","php/result.php",true);
    xmlhttp.onload=()=>{
       if(xmlhttp.readyState === XMLHttpRequest.DONE){
         if(xmlhttp.status === 200){
           let data = xmlhttp.response;
           list.innerHTML = data;
         }
      }

   }
   xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
   xmlhttp.send("search=" + write);
}





setInterval(()=>{
  
  let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","php/account.php",true);
    xmlhttp.onload=()=>{
       if(xmlhttp.readyState === XMLHttpRequest.DONE){
         if(xmlhttp.status === 200){
           let data = xmlhttp.response;
            if(!search.classList.contains("remove")){
                list.innerHTML = data;
            }

         }
      }

   }
   xmlhttp.send();
},400);

