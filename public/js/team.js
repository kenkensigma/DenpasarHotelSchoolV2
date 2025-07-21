document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("modal");
    const openModalBtn = document.getElementById("openModalBtn");
    const closeModal = document.querySelector(".close");
    const form = document.getElementById("teamForm");

    openModalBtn.addEventListener("click", function(event) {
        event.preventDefault();
        console.log("Modal dibuka");
        modal.style.display = "block";
    });

    closeModal.addEventListener("click", function() {
        console.log("Modal ditutup");
        modal.style.display = "none";
    });

    form.addEventListener("submit", function(event) {
        event.preventDefault();
        console.log("Tombol submit diklik!");

        let formData = new FormData(form);

        fetch(form.action, {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Data berhasil dikirim!");
                modal.style.display = "none";
                form.reset();
            } else {
                alert("Terjadi kesalahan!");
            }
        })
        .catch(error => console.error("Error:", error));
    });
});
