// Mengambil semua elemen dengan class sewa-item
const sewaItems = document.querySelectorAll('.sewa-item');

// Mengupdate countdown untuk setiap elemen sewa-item
sewaItems.forEach((sewaItem) => {
const mulaiSewaElement = sewaItem.querySelector('.mulaiSewa');
const akhirSewaElement = sewaItem.querySelector('.akhirSewa');
const countdownElement = sewaItem.querySelector('.countdown');

const startDate = parseDateFromString(mulaiSewaElement.textContent);
const endDate = parseDateFromString(akhirSewaElement.textContent);

setInterval(updateCountdown, 1000);

function parseDateFromString(dateString) {
    const [tanggal, bulan, tahun, waktu] = dateString.split(' ');
    const [jam, menit] = waktu.split('.');
    const monthIndex = new Date(`${bulan} 1, 2000`).getMonth() + 1;
    return new Date(`${tahun}-${monthIndex}-${tanggal} ${jam}:${menit}:00`);
}

function updateCountdown() {
    const currentDate = new Date();
    const timeDiffStart = startDate - currentDate;
    const timeDiffEnd = endDate - currentDate;

    if (timeDiffEnd < 0) {
    countdownElement.textContent = 'Telah melewati tenggat penyewaan';
    return;
    }

    const days = Math.floor(timeDiffEnd / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeDiffEnd % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeDiffEnd % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDiffEnd % (1000 * 60)) / 1000);

    countdownElement.textContent = `${days} Hari ${hours} Jam ${minutes} Menit ${seconds} Detik`;
}
});