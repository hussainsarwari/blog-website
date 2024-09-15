import * as pdfjsLib from 'pdfjs-dist/build/pdf';

pdfjsLib.GlobalWorkerOptions.workerSrc = new URL('pdfjs-dist/build/pdf.worker.min.mjs', import.meta.url).href;

const fileInput = document.getElementById('pdf');
const errorMessage = document.getElementById('errorMessage');
const close_editor_btn = document.querySelector('.close-editor-btn');
const open_editor_box_btn = document.querySelector('.open_editor_box_btn');
const editor_box = document.querySelector('.editor_box');
const successMessage = document.getElementById('successMessage');
const nextPageBtn=document.querySelector(".next_page");
const previosPageBtn=document.querySelector(".previos_page");
let maxpageNumber;
let pageNum=1;
let file ;
let flag=false;//this flag checks that user uploaded pdf or not
// Listen for the file selection (change event)
fileInput.addEventListener('change', function() {
   file = fileInput.files[0]; // Get the selected file

  if (file) {
    // Check if the file is a PDF
    if (file.type === 'application/pdf') {
        flag=true;
      errorMessage.classList.add('hidden');  // Hide error message
      successMessage.classList.remove('hidden'); // Show success message
    } else {
      errorMessage.classList.remove('hidden');  // Show error message
      successMessage.classList.add('hidden');  // Hide success message
      fileInput.value = ''; // Clear the input so the user can try again
        file='';
    }
  }
});
// close editor box
close_editor_btn.addEventListener("click",()=>{
   
editor_box.classList.add("hidden");
editor_box.classList.remove("grid");
})
// open editor box
open_editor_box_btn.addEventListener("click",async ()=>{
    if (flag) {
        
        
        editor_box.classList.add("grid");
        editor_box.classList.remove("hidden");


renderpdf(pageNum);

        







    }else{
        errorMessage.classList.remove('hidden');  

    }
})




nextPageBtn.addEventListener("click",()=>{
  if (pageNum<maxpageNumber) {
    
    pageNum=++pageNum
    renderpdf(pageNum);
  }
})

previosPageBtn.addEventListener("click",()=>{
  if (pageNum>1) {
    
    pageNum=--pageNum;
    renderpdf(pageNum);
    
  }
})


const zoom_in=document.querySelector(".zoom-in-btn")
const zoom_out=document.querySelector(".zoom-out-btn")

zoom_in.addEventListener("click",())



async function renderpdf(pageNum)  {
  
  const arrayBuffer = await file.arrayBuffer();
  const pdf = await pdfjsLib.getDocument(arrayBuffer).promise;
  const pdfBox = document.querySelector('.show_pdf');
  // Clear the container
  pdfBox.innerHTML = '';
  
  // Render each page
  
  const page = await pdf.getPage(pageNum);
  const viewport = page.getViewport({ scale: 1.5 });
  const canvas = document.createElement('canvas');
  const context = canvas.getContext('2d');
  maxpageNumber =pdf.numPages;

    
    canvas.height = viewport.height;
    canvas.width = viewport.width;
    pdfBox.appendChild(canvas);

    const renderContext = {
      canvasContext: context,
      viewport: viewport
    };
    await page.render(renderContext).promise;
  

   let title= document.querySelector(".pdftitle");;        

title.innerText=file.name
  
}
