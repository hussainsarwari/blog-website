const fileInput = document.getElementById("compressor");
const errorMessage = document.getElementById("errorMessage");
const successMessage = document.getElementById("successMessage");
let file;
const compressor=document.querySelector(".pdf-compressor");
fileInput.addEventListener("change", function () {
    file = fileInput.files[0]; 

    if (file) {
        // Check if the file is a PDF
        if (file.type === "application/pdf") {
           
            errorMessage.classList.add("hidden"); // Hide error message
            successMessage.classList.remove("hidden"); // Show success message
        
            compressor.classList.remove("hidden");
         
        } else {
            errorMessage.classList.remove("hidden"); // Show error message
            successMessage.classList.add("hidden"); // Hide success message
            fileInput.value = ""; // Clear the input so the user can try again
            file = "";
        }
    }
});