// open box
const fileInput = document.getElementById("image-to-pdf");
const errorMessage = document.getElementById("errorMessage");
const successMessage = document.getElementById("successMessage");
const convert_box=document.querySelector(".convert_box");
let previosfile;
let f;
let flag=false;//check the file input is a first input or not
let selectedImages = [];
fileInput.addEventListener("input",(e)=>{
   
    f =  e.target.files; // Get the selected file
    const container = document.getElementById('imageContainer');

   flag == false ? container.innerHTML='' : '';
    selectedImages = []; 
    toggleDeleteButton(); // Disable delete button initially
    Array.from(f).forEach(file => {
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            errorMessage.classList.add("hidden"); // Hide error message
            successMessage.classList.remove("hidden"); // Show success message
            convert_box.classList.remove("hidden")
            convert_box.classList.add("grid");
            
            reader.onload = function(e) {
            // debugger
           
         
            const imgWrapper = document.createElement('div');
            imgWrapper.classList.add('image-wrapper');
            // Create the img element
            const imgElement = document.createElement('img');
            imgElement.src = e.target.result;

            // Create the select icon (hidden by default)
            const selectIcon = document.createElement('i');
            selectIcon.classList.add('fa-solid', 'fa-square-check', 'fa-duotone', 'fa-bounce', 'select-icon');
       // Add click event to toggle "selected" class
            imgElement.addEventListener('click', function() {
                imgElement.classList.toggle('selected');

                if (imgElement.classList.contains('selected')) {
                    selectedImages.push(imgElement);  // Add to selected
                } else {
                    selectedImages = selectedImages.filter(img => img !== imgElement);  // Remove from selected
                }
                toggleDeleteButton();  // Enable/Disable delete button based on selection
            });
                
               // Append the img and select icon to the wrapper
            imgWrapper.appendChild(imgElement);
            imgWrapper.appendChild(selectIcon);

            // Append the wrapper to the image container
            container.appendChild(imgWrapper);
        };
        reader.readAsDataURL(file); 
    }
    

    })
    flag=false;
})

// close box
const convertbox=document.querySelector(".convert_box");
const closeBtn=document.querySelector(".close_box_btn");
closeBtn.addEventListener("click",()=>{
    convertbox.classList.add("hidden")
    convert_box.classList.remove("grid")
    fileInput.value = ""; // Clear the input so the user can try again
    f = "";
    selectedImages=[];
})
// delete_box_btn
const delete_box_btn =document.querySelector(".delete_box_btn");


   // Delete Button Logic
   delete_box_btn.addEventListener('click', function() {
    selectedImages.forEach(img => {
        img.parentElement.remove(); // Remove the img wrapper from the container
    });
    selectedImages = []; // Clear the selected images array
    toggleDeleteButton(); // Disable delete button after deletion
});

// Function to toggle the Delete button
function toggleDeleteButton() {
    deleteBtn.disabled = selectedImages.length === 0; // Enable only if at least one image is selected
}

// add new image btn
document.querySelector(".add_new_img_btn").addEventListener("click",()=>{
    flag= true;
    fileInput.click();
})
