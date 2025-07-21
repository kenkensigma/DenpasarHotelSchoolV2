document.getElementById("file").addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (!file) return;

    const img = new Image();
    img.src = URL.createObjectURL(file);
    img.onload = function () {
        const aspectRatio = img.width / img.height;
        const expectedRatio = 3 / 4;//bisa diubah ke retio berapa aja

        //pakai 0.001 karena ga semua file pasti presisi 
        if (Math.abs(aspectRatio - expectedRatio) > 0.01) {
            document.getElementById("error-message").style.display = "block";
            event.target.value = "";
        } else {
            document.getElementById("error-message").style.display = "none";
            showPreview(img.src);
        }
    };
});

function showPreview(src) {
    const previewContainer = document.getElementById("preview-container");
    previewContainer.innerHTML = `<img src="${src}" alt="Uploaded Image">`;
    previewContainer.querySelector("img").style.display = "block";
}
