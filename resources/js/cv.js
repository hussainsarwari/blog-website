
let  add_edu=document.querySelector('.add_edu');
let education_section=document.querySelector('.education');
let counter=0;
let div;
let remove_btn=document.querySelector(".remove_edu");
add_edu.addEventListener('click',()=>{
   remove_btn.classList.remove("hidden")
    
     div=document.createElement("div");
    div.setAttribute('class',counter+' flex flex-col divs');

    let remove=document.createElement("input");
    remove.setAttribute('type','checkbox');
    remove.setAttribute('class',counter+" checkboxs w-3")
    
    let p=document.createElement("p");
    p.textContent="remove :   ";
    p.setAttribute('class'," text-red-400  p-2  my-2  hidden remove_flag")

    let e=document.createElement("input");
    e.setAttribute('type','text')
    e.setAttribute('name','education_new')
    e.setAttribute('placeholder','educational background')
    e.setAttribute('class','my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black')
   

    let e2=document.createElement("input");
    e2.setAttribute('type','date')
    e2.setAttribute('name','education_new')
    e2.setAttribute('class','my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black')
   


    let e3=document.createElement("input");
    e3.setAttribute('type','date')
    e3.setAttribute('name','education_new')
    e3.setAttribute('class','my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black')
  
    let e4=document.createElement("input");
    e4.setAttribute('type','checkbox')
    e4.setAttribute('id','education_'+counter+'');
    e4.setAttribute('class',counter+' w-3');
    e4.setAttribute('name','education_new')
  
    let te=document.createElement("label");
    te.setAttribute('for','education_'+counter+'');
    te.setAttribute('class','text-black');
    te.textContent="Or it is going on:  ";
    te.appendChild(e4);
    
    div.appendChild(p);
    div.appendChild(e);
    div.appendChild(e2);
    div.appendChild(e3);
    div.appendChild(te);
    p.appendChild(remove);
    education_section.appendChild(div);
    counter++;

    if (counter==3) {
        add_edu.classList.add('hidden')
    }
});
remove_btn.addEventListener("click",()=>{
    let re=document.querySelectorAll(".remove_flag");
    if (remove_btn.textContent=="Remove") {
        re.forEach(e=>{
          e.classList.remove('hidden');
        })
        remove_btn.textContent="Delete"
    }else{
        let remove_items=document.querySelectorAll(".divs");
        let checkboxs=document.querySelectorAll(".checkboxs");
        re.forEach(e=>{
            e.classList.add('hidden');
          })
        remove_btn.textContent="Remove"
        checkboxs.forEach(e=>{
            if (e.checked) {
                remove_items.forEach(e2=>{
                    if (e2.classList[0]==e.classList[0]) {
                        e2.remove()
                        add_edu.classList.remove('hidden')
                    }
                })
            }
        })
        remove_items=document.querySelectorAll(".divs");
        if (remove_items.length==0) {
            remove_btn.classList.add('hidden')
        }
    }


    
})

let certificate=document.querySelector(".btn_add_certificate");
let remove_certificate=document.querySelector(".btn_remove_certificate");
let certificate_section=document.querySelector(".certificate");
let certificate_counter=0;
let div2;
certificate.addEventListener('click',()=>{
    
    remove_certificate.classList.remove("hidden")
     
      div2=document.createElement("div");
     div2.setAttribute('class',certificate_counter+' flex flex-col divs');
 
     let remove=document.createElement("input");
     remove.setAttribute('type','checkbox');
     remove.setAttribute('class',certificate_counter+" checkboxs2 w-3")
     
     let p=document.createElement("p");
     p.textContent="remove :   ";
     p.setAttribute('class'," text-red-400  p-2  my-2  hidden remove_flag2")
 
     let e=document.createElement("input");
     e.setAttribute('type','text')
     e.setAttribute('name','certificate')
     e.setAttribute('placeholder','Certificate Title')
     e.setAttribute('class','my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black')
    
 
     let e2=document.createElement("input");
     e2.setAttribute('type','text')
     e2.setAttribute('name','certificate_information');
     e2.setAttribute('placeholder','More Information')
     e2.setAttribute('class','my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black')
    
     
     div2.appendChild(p);
     div2.appendChild(e);
     div2.appendChild(e2);
     p.appendChild(remove);
     certificate_section.appendChild(div2);
     certificate_counter++;
 
     if (certificate_counter==3) {
         certificate.classList.add('hidden')
     }
 });

 remove_certificate.addEventListener("click",()=>{
     let re=document.querySelectorAll(".remove_flag2");
     if (remove_btn.textContent=="Remove") {
         re.forEach(e=>{
           e.classList.remove('hidden');
         })
         remove_btn.textContent="Delete"
     }else{
         let remove_items=document.querySelectorAll(".divs2");
         let checkboxs=document.querySelectorAll(".checkboxs2");
         re.forEach(e=>{
             e.classList.add('hidden');
           })
         remove_btn.textContent="Remove"
         checkboxs.forEach(e=>{
             if (e.checked) {
                 remove_items.forEach(e2=>{
                     if (e2.classList[0]==e.classList[0]) {
                         e2.remove()
                         add_edu.classList.remove('hidden')
                     }
                 })
             }
         })
         remove_items=document.querySelectorAll(".divs2");
         if (remove_items.length==0) {
             remove_btn.classList.add('hidden')
         }
     }
 
 
     
 })
 




  


