
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
    e2.setAttribute('name','education_start')
    e2.setAttribute('class','my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black')



    let e3=document.createElement("input");
    e3.setAttribute('type','date')
    e3.setAttribute('name','education_end')
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



// certificate section
let certificate=document.querySelector(".btn_add_certificate");
let remove_certificate=document.querySelector(".btn_remove_certificate");
let certificate_section=document.querySelector(".certificate");
let certificate_counter=0;
let div2;
certificate.addEventListener('click',()=>{
    
    remove_certificate.classList.remove("hidden")
     
      div2=document.createElement("div");
     div2.setAttribute('class',certificate_counter+' flex flex-col divs2');
 
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
 
// work experince
let experince_btn_add=document.querySelector(".btn_add_exeprince")
let experince_btn_remove=document.querySelector(".btn_remove_exeprince")
let expeprince=document.querySelector(".exeprince");
let exeprince_counter=0;
let   div_exp;
experince_btn_add.addEventListener('click',()=>{
    
    experince_btn_remove.classList.remove("hidden")
     
     div_exp=document.createElement("div");
     div_exp.setAttribute('class',certificate_counter+' flex flex-col div_exp');
 
     let remove=document.createElement("input");
     remove.setAttribute('type','checkbox');
     remove.setAttribute('class',exeprince_counter+" checkboxs3 w-3")
     
     let p=document.createElement("p");
     p.textContent="remove :   ";
     p.setAttribute('class'," text-red-400  p-2  my-2  hidden remove_flag3")
 
     let e=document.createElement("input");
     e.setAttribute('type','text')
     e.setAttribute('name','exeprince')
     e.setAttribute('placeholder','work Exeprince Title')
     e.setAttribute('class','my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black')
    
 
     let e2=document.createElement("input");
     e2.setAttribute('type','text')
     e2.setAttribute('name','exeprince_information');
     e2.setAttribute('placeholder','Description')
     e2.setAttribute('class','my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black')
    

     let e3=document.createElement("input");
    e3.setAttribute('type','date')
    e3.setAttribute('name','exeprince_start')
    e3.setAttribute('class','my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black')
   


    let e4=document.createElement("input");
    e4.setAttribute('type','date')
    e4.setAttribute('name','exeprince_end')
    e4.setAttribute('class','my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black')
  

    let e5=document.createElement("input");
    e5.setAttribute('type','checkbox')
    e5.setAttribute('id','exeprince_'+counter+'');
    e5.setAttribute('class',counter+' w-3');
    e5.setAttribute('name','exeprince_counter')
  
    let te=document.createElement("label");
    te.setAttribute('for','exeprince_'+counter+'');
    te.setAttribute('class','text-black');
    te.textContent="Or it is going on:  ";
    te.appendChild(e5);


     
     div_exp.appendChild(p);
     div_exp.appendChild(e);
     div_exp.appendChild(e2);
     div_exp.appendChild(e3);
     div_exp.appendChild(e4);
     div_exp.appendChild(te);
     p.appendChild(remove);
     expeprince.appendChild(div_exp);
     exeprince_counter++;
 
     if (exeprince_counter==3) {
         experince_btn_add.classList.add('hidden')
     }
 });

 experince_btn_remove.addEventListener("click",()=>{
    
     let re=document.querySelectorAll(".remove_flag3");
     if (experince_btn_remove.textContent=="Remove") {
         re.forEach(e=>{
           e.classList.remove('hidden');
         })
         experince_btn_remove.textContent="Delete"
     }else{
         let remove_items=document.querySelectorAll(".div_exp");
         let checkboxs=document.querySelectorAll(".checkboxs3");
         re.forEach(e=>{
             e.classList.add('hidden');
           })
         experince_btn_remove.textContent="Remove"
         checkboxs.forEach(e=>{
             if (e.checked) {
                 remove_items.forEach(e2=>{
                     if (e2.classList[0]==e.classList[0]) {
                         e2.remove()
                         experince_btn_add.classList.remove('hidden')
                     }
                 })
             }
         })
         remove_items=document.querySelectorAll(".div_exp");
         if (remove_items.length==0) {
             experince_btn_remove.classList.add('hidden')
         }
     }
 
 
     
 })

//  language



  


