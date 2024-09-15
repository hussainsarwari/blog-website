// validate input for pdf 
const fileInput = document.getElementById('pdf');
const errorMessage = document.getElementById('errorMessage');
const close_editor_btn = document.querySelector('.close-editor-btn');
const open_editor_box_btn = document.querySelector('.open_editor_box_btn');
const editor_box = document.querySelector('.editor_box');
const successMessage = document.getElementById('successMessage');
let flag=false;//this flag checks that user uploaded pdf or not
// Listen for the file selection (change event)
fileInput.addEventListener('change', function() {
  const file = fileInput.files[0]; // Get the selected file

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
    }
  }
});
close_editor_btn.addEventListener("click",()=>{
   
editor_box.classList.add("hidden");
editor_box.classList.remove("grid");
})
open_editor_box_btn.addEventListener("click",()=>{
    if (flag) {
        
        
        editor_box.classList.add("grid");
        editor_box.classList.remove("hidden");
    }else{
        errorMessage.classList.remove('hidden');  

    }
})