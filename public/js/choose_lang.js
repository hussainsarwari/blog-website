const lang=document.querySelector("#lang");
lang.addEventListener('change',()=>{
 sessionStorage.setItem('lang',lang.value)
})