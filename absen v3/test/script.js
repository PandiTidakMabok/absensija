// Mengambil elemen tombol dan body
const toggleButton = document.getElementById('theme-toggle');
const body = document.body;

// Cek preferensi tema yang disimpan di localStorage
if (localStorage.getItem('theme') === 'light') {
    body.classList.add('light-theme');
    toggleButton.textContent = '🌞';
}

// Fungsi untuk mengubah tema
toggleButton.addEventListener('click', () => {
    body.classList.toggle('light-theme');

    // Perbarui ikon tombol
    if (body.classList.contains('light-theme')) {
        toggleButton.textContent = '🌞';
        localStorage.setItem('theme', 'light'); // Simpan preferensi tema ke localStorage
    } else {
        toggleButton.textContent = '🌙';
        localStorage.setItem('theme', 'dark'); // Simpan preferensi tema ke localStorage
    }
});
