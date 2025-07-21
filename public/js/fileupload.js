const fileInput = document.getElementById("file");
const previewContainer = document.getElementById("preview-container");
const previewImage = document.getElementById("preview-image");
const fileNameDisplay = document.getElementById("file-name");
const dropArea = document.getElementById("drop-area");

// Handle file selection
fileInput.addEventListener("change", function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewImage.src = e.target.result;
            previewImage.style.display = "block";
            fileNameDisplay.textContent = file.name;
        };
        reader.readAsDataURL(file);
    }
});
