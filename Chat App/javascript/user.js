const serachBar = document.querySelector(".users .search input"),
userList = document.querySelector(".users .users-list"),
serachBtn = document.querySelector(".users .serach button");

// serachBtn.onclick = ()=<
// {
//     serachBar.classList.toggle("active");
// }
serachBar.onkeyup = ()=>{
    let searchTerm =serachBar.value;
    if(searchTerm != ""){
        serachBar.classList.add("active");
    }else{
        serachBar.classList.remove("active");
    }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status ===200){
                let data = xhr.response;
                userList.innerHTML = data;
                
                
            }
        }

    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);

}



setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/users.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status ===200){
                let data = xhr.response;
                if(!serachBar.classList.contains("active")){
                    userList.innerHTML = data;
                }
                
                
            }
        }

    }
    xhr.send();

}, 500);