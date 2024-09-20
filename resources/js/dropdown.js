const dropdown = document.getElementById("dropdown");
const arrow = document.getElementById("arrow");
const dropdownContent = document.getElementById("dropdown-content");
const navItem = document.getElementById("navItem");

dropdown.addEventListener("mouseover", (e) => {
    e.stopPropagation();
    arrow.classList.remove("d-none");
});

dropdown.addEventListener("click", (e) => {
    e.stopPropagation();
    dropdownContent.classList.remove("d-none");
    navItem.classList.remove("text-black");
    navItem.classList.add("dropdown_active");
    dropdown.classList.add("dropdown_active");
    dropdown.classList.add("dropdown_title");
});

dropdown.addEventListener("mouseleave", () => {
    arrow.classList.add("d-none");
    dropdownContent.classList.add("d-none");
    navItem.classList.remove("dropdown_active");
    dropdown.classList.remove("dropdown_active");
    navItem.classList.add("text-black");
    dropdown.classList.remove("dropdown_title");
});
