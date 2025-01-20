function updateTimeAndDate() {
    const timeElement = document.getElementById('time');
    const dateElement = document.getElementById('date');

    // Mendapatkan waktu saat ini
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');

    // Mendapatkan tanggal saat ini
    const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    const months = [
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];
    const day = days[now.getDay()];
    const date = now.getDate();
    const month = months[now.getMonth()];
    const year = now.getFullYear();

    // Memperbarui elemen HTML
    timeElement.innerHTML = `${hours}:${minutes}`;
    dateElement.innerHTML = `${day}, ${date} ${month} ${year}`;
}

// Memperbarui setiap detik
setInterval(updateTimeAndDate, 1000);

// Inisialisasi
updateTimeAndDate();
