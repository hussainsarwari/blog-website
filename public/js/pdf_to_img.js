
import * as pdfjsLib from "pdfjs-dist/build/pdf";

pdfjsLib.GlobalWorkerOptions.workerSrc = new URL(
    "pdfjs-dist/build/pdf.worker.min.mjs",
    import.meta.url
).href;
const fileInput = document.querySelector(".pdf_to_img");
let flag=false;
const errorMessage = document.getElementById("errorMessage");
const successMessage = document.getElementById("successMessage");
const pdf_to_img=document.querySelector("#convert_to_img");

const editor_box = document.querySelector(".editor_box");
let file;
const close_editor_btn = document.querySelector(".close-editor-btn");
let canvas = document.getElementById("pdf-canvas");


fileInput.addEventListener("change", function () {
  file = fileInput.files[0]; // Get the selected file

  if (file) {
      // Check if the file is a PDF
      if (file.type === "application/pdf") {
          flag = true;
          errorMessage.classList.add("hidden"); // Hide error message
          successMessage.classList.remove("hidden"); // Show success message
          editor_box.classList.add("grid");
          editor_box.classList.remove("hidden");
          renderpdf(1, 1.5);
      } else {
          errorMessage.classList.remove("hidden"); // Show error message
          successMessage.classList.add("hidden"); // Hide success message
          fileInput.value = ""; // Clear the input so the user can try again
          file = "";
      }
  }
});
// close editor box
close_editor_btn.addEventListener("click", () => {
  editor_box.classList.add("hidden");
  editor_box.classList.remove("grid");
});


async function renderpdf(pageNum, scale) {
  const arrayBuffer = await file.arrayBuffer();
  const pdf = await pdfjsLib.getDocument(arrayBuffer).promise;


  const page = await pdf.getPage(pageNum);
  let viewport = page.getViewport({ scale: scale });
  const context = canvas.getContext('2d');


  canvas.height = viewport.height;
  canvas.width = viewport.width;
  // pdfBox.appendChild(canvas);

  const renderContext = {
      canvasContext: context,
      viewport: viewport,
  };
  await page.render(renderContext).promise;

}



pdf_to_img.addEventListener("change",(e)=>{
  const value=e.target.value;
    const page_number=document.querySelector("#pdf_to_image_page_number");
value=='specific_page' ? page_number.classList.remove('hidden') :  page_number.classList.add('hidden') 

})

