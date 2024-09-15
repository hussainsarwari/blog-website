// validate input for pdf 
const fileInput = document.getElementById('pdf');
const errorMessage = document.getElementById('errorMessage');
const close_editor_btn = document.querySelector('.close-editor-btn');
const successMessage = document.getElementById('successMessage');

// Listen for the file selection (change event)
fileInput.addEventListener('change', function() {
  const file = fileInput.files[0]; // Get the selected file

  if (file) {
    // Check if the file is a PDF
    if (file.type === 'application/pdf') {
      errorMessage.classList.add('hidden');  // Hide error message
      successMessage.classList.remove('hidden'); // Show success message
    } else {
      errorMessage.classList.remove('hidden');  // Show error message
      successMessage.classList.add('hidden');  // Hide success message
      fileInput.value = ''; // Clear the input so the user can try again
    }
  }
});
