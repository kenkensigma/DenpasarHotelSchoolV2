document.querySelectorAll(".dropdown-container").forEach(dropdown => {
    const button = dropdown.querySelector(".dropdown-button");
    const list = dropdown.querySelector(".dropdown-list");
    const arrow = button.querySelector("svg");
    
    button.addEventListener("click", () => {
        console.log("Dropdown button clicked");
        list.classList.toggle("active");
        arrow.classList.toggle("rotate");
    });

    list.querySelectorAll("div").forEach(item => {
        item.addEventListener("click", () => {
            console.log("Dropdown item clicked:", item.textContent);
            button.querySelector("span").textContent = item.textContent;
            list.classList.remove("active");
            arrow.classList.remove("rotate");
        });
    });

    document.addEventListener("click", (e) => {
        if (!dropdown.contains(e.target)) {
            list.classList.remove("active");
            arrow.classList.remove("rotate");
        }
    });
});