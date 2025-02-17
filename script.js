

const modal = document.getElementById('modalForm');



function openModal() {
    modal.classList.add('active');
}
function closeModal() {
    modal.classList.remove('active');
}


window.onclick = function (event) {
    if (event.target === modal) {
        closeModal();
    }
};




//edit modal
document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("editModal");
    const closeModal = document.getElementById("closeModal");

    // Tombol Edit
    const editButtons = document.querySelectorAll(".editButton");
    editButtons.forEach((button) => {
        button.addEventListener("click", function () {
            // Ambil data dari atribut data-*
            document.getElementById("editNama").value = this.getAttribute("data-nama");
            document.getElementById("editNim").value = this.getAttribute("data-nim");
            document.getElementById("editEmail").value = this.getAttribute("data-email");
            document.getElementById("editNomor").value = this.getAttribute("data-nomor");
            document.getElementById("editJurusan").value = this.getAttribute("data-jurusan");
            document.getElementById("editId").value = this.getAttribute("data-id");

        });
    });

    // Klik di luar modal untuk menutupnya
    overlay.addEventListener("click", function () {
        modal.style.display = "none";
        overlay.style.display = "none";
    });
});