const imgPreview = document.getElementById("img-preview");
window.addEventListener("load", () => {
    if (window.location.href.includes("edit")) {
        imgPreview.style.display = "block";
    }
});

const imgUpload = document.getElementById("img-upload");
imgUpload.addEventListener("change", (event) => {
    if (event.target.files.length > 0) {
        const src = URL.createObjectURL(event.target.files[0]);
        imgPreview.setAttribute("src", src);
        imgPreview.style.display = "block";
    }
});