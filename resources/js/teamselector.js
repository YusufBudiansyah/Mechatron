document.addEventListener("DOMContentLoaded", function () {
    // Ambil semua tombol filter
    const filterButtons = document.querySelectorAll("[data-bs-filter]");
    const teamMembers = document.querySelectorAll(".col-md-4, .col-lg-3");

    // Tambahkan event listener ke setiap tombol filter
    filterButtons.forEach((button) => {
        button.addEventListener("click", function () {
            // Hapus kelas aktif dari semua tombol
            filterButtons.forEach((btn) => btn.classList.remove("active"));
            // Tambahkan kelas aktif ke tombol yang diklik
            this.classList.add("active");

            // Ambil nilai filter
            const filterValue = this.getAttribute("data-bs-filter");

            // Filter elemen tim
            teamMembers.forEach((member) => {
                if (
                    filterValue === "*" ||
                    member.classList.contains(filterValue.substring(1))
                ) {
                    member.style.display = "block"; // Tampilkan elemen
                } else {
                    member.style.display = "none"; // Sembunyikan elemen
                }
            });
        });
    });
});
