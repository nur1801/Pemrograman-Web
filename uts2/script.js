document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Menghentikan aksi bawaan dari form

        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        // Lakukan validasi username dan password di sini
        // Misalnya, dengan menyimpan username dan password yang valid dalam variabel

        const validUsername = "Nurhidayah";
        const validPassword = "123";

        if (username !== validUsername || password !== validPassword) {
            // Tampilkan alert jika username atau password salah
            alert("Username or Password is invalid!");
        } else {
            // Jika username dan password benar, submit form
            form.submit();
        }
    });
});
