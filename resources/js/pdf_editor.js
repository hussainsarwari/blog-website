import * as pdfjsLib from "pdfjs-dist/build/pdf";

pdfjsLib.GlobalWorkerOptions.workerSrc = new URL(
    "pdfjs-dist/build/pdf.worker.min.mjs",
    import.meta.url
).href;

const fileInput = document.getElementById("pdf");
const errorMessage = document.getElementById("errorMessage");
const close_editor_btn = document.querySelector(".close-editor-btn");
const editor_box = document.querySelector(".editor_box");
const successMessage = document.getElementById("successMessage");
const nextPageBtn = document.querySelector(".next_page");
const previosPageBtn = document.querySelector(".previos_page");
let maxpageNumber;
let pageNum = 1;
let file;
let scale = 1;
let canvas = document.getElementById("pdf-canvas");
let context = canvas.getContext("2d");
let viewport;
let flag = false;


//this flag checks that user uploaded pdf or not
// Listen for the file selection (change event)
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
            renderpdf(pageNum, scale);
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


nextPageBtn.addEventListener("click", () => {
    if (pageNum < maxpageNumber) {
        pageNum = ++pageNum;
        renderpdf(pageNum, scale);
    }
});

previosPageBtn.addEventListener("click", () => {
    if (pageNum > 1) {
        pageNum = --pageNum;
        renderpdf(pageNum, scale);
    }
});

const zoom_in = document.querySelector(".zoom-in-btn");
const zoom_out = document.querySelector(".zoom-out-btn");

zoom_in.addEventListener("click", () => {
    scale += 0.2;
    renderpdf(pageNum, scale);
});
zoom_out.addEventListener("click", () => {
    if (scale > 0) {
        scale -= 0.2;
        renderpdf(pageNum, scale);
    }
});

async function renderpdf(pageNum, scale) {
    const arrayBuffer = await file.arrayBuffer();
    const pdf = await pdfjsLib.getDocument(arrayBuffer).promise;

    // Render each page

    const page = await pdf.getPage(pageNum);
    viewport = page.getViewport({ scale: scale });
    // const canvas = document.createElement('canvas');
    // const context = canvas.getContext('2d');
    maxpageNumber = pdf.numPages;

    canvas.height = viewport.height;
    canvas.width = viewport.width;
    // pdfBox.appendChild(canvas);

    const renderContext = {
        canvasContext: context,
        viewport: viewport,
    };
    await page.render(renderContext).promise;

    let title = document.querySelector(".pdftitle");
}

// select a part of page
let selectionCanvas = document.getElementById("selection-canvas");
let selectionContext = selectionCanvas.getContext("2d");

let isDragging = false;
let startX = 0;
let startY = 0;

selectionCanvas.addEventListener("mousedown", (e) => {
    isDragging = true;
    selectionCanvas.width = viewport.width;
    selectionCanvas.height = viewport.height;
    const rect = selectionCanvas.getBoundingClientRect();
    startX = e.clientX - rect.left;
    startY = e.clientY - rect.top;
});

selectionCanvas.addEventListener("mousemove", (e) => {
    if (isDragging) {
        const rect = selectionCanvas.getBoundingClientRect();
        const currentX = e.clientX - rect.left;
        const currentY = e.clientY - rect.top;

        selectionContext.clearRect(
            0,
            0,
            selectionCanvas.width,
            selectionCanvas.height
        );

        selectionContext.fillStyle = "rgba(0, 0, 0, 0.3)";
        selectionContext.fillRect(
            startX,
            startY,
            currentX - startX,
            currentY - startY
        );

        selectionContext.strokeStyle = "black";
        selectionContext.lineWidth = 0.2;
        selectionContext.strokeRect(
            startX,
            startY,
            currentX - startX,
            currentY - startY
        );
    }
});

selectionCanvas.addEventListener("mouseup", (e) => {
    isDragging = false;

    const rect = selectionCanvas.getBoundingClientRect();
    const endX = e.clientX - rect.left;
    const endY = e.clientY - rect.top;

    const selectedArea = {
        x: startX,
        y: startY,
        width: endX - startX,
        height: endY - startY,
    };
});

const menu_triger = document.querySelector(".menu-trigger2");
menu_triger.addEventListener("click", () => {
    const editor_section = document.querySelector(".editor_section");
    editor_section.classList.remove("hidden");
    editor_section.classList.add("editor_triger_menu");
    menu_triger.classList.add("hidden");
});
const editor_tools_close_btn = document.querySelector(
    ".editor-tools-close-btn"
);
editor_tools_close_btn.addEventListener("click", () => {
    const editor_section = document.querySelector(".editor_section");
    editor_section.classList.add("hidden");
    editor_section.classList.remove("editor_triger_menu");
    menu_triger.classList.remove("hidden");
});
