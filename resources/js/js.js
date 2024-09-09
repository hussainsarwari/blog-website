// this javascript created by mohammad hussain 'sarwari' for customize project
let navbarToggler=document.querySelector(".navbar-toggler");
navbarToggler.addEventListener("click",(e)=>{
  document.querySelector(".menu").classList.toggle('show');
//   document.querySelector(".menu").classList.toggle('collapse');
 
})
let closeBtn=document.querySelector(".close-btn");
let sideBar=document.querySelector(".sideBar");
let sideBarItems=document.querySelectorAll(".sideBarItems");
let flag=false;//clicked =true 
let P_sideBarItems=document.querySelectorAll(".p-sideBarItems");
let sidebarwidth=document.querySelectorAll('.sideBarWidth');
closeBtn.addEventListener("click",()=>{
  if(flag==false){//open side bar 

    sideBar.classList.add("open-sideBar");
    P_sideBarItems.forEach(e => {
      e.textContent="";
    });
    closeBtn.textContent='Open'
    closeBtn.classList.add('changetext');
    sidebarwidth.forEach(e =>{
      e.classList.add("changewidht")
    })
    flag=true
  }
  else{// close side bar
    closeBtn.textContent='Close'
    closeBtn.classList.remove('changetext');
    sideBar.classList.remove("open-sideBar");
    sidebarwidth.forEach(e =>{
      e.classList.remove("changewidht")
    })
    P_sideBarItems[0].textContent='Profile';
    P_sideBarItems[1].textContent='Progress';
    P_sideBarItems[2].textContent='Setting';
    P_sideBarItems[3].textContent='Log Out';
    flag=false
  }

})


