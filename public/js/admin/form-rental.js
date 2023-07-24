const btnDeskripsi = document.querySelector('.btnDeskripsi');
const gambarJas = document.querySelector('.gambarJas');
const deskripsi = document.querySelector('.deskripsi');
const tutup = document.querySelector('.tutup');

btnDeskripsi.addEventListener('click', () => {
    gambarJas.style.display = 'none';
    gambarJas.style.transform = 'translateX(-100%)';
    deskripsi.style.display = 'block';
    setTimeout(() => {
        deskripsi.style.transform = 'translateX(0)';
    }, 100);
});
tutup.addEventListener('click', () => {
    deskripsi.style.display = 'none';
    deskripsi.style.transform = 'translateX(100%)';
    gambarJas.style.display = 'block';
    setTimeout(() => {
        gambarJas.style.transform = 'translateX(0)';
    }, 100);
});

// pencarian email
const email = document.querySelector('#email');
const containerPencarianEmail = document.querySelector('.containerPencarianEmail');
const searchResult = document.querySelector('.searchResult');
const closeContainerPencarianEmail = document.querySelector('.closeContainerPencarianEmail');
const hasilEmails = document.querySelectorAll('.hasilEmail');

// jika ada inputan maka container pencarian email tampil
function inputEmail() {
    if(email.value.length > 0) {
        containerPencarianEmail.style.display = 'block';
    } else {
        containerPencarianEmail.style.display = 'none';
    }
}

// email autocomplite
email.addEventListener('keyup', (e) => {
    const getEmail = e.target.value.trim();

    if (getEmail.length > 0) {

        fetch(`/sdjfqisdfhef/${getEmail}`)
            .then(response => response.json())
            .then(data => {
                searchResult.innerHTML = '';

                if (data.length === 0) {
                    console.log('tidak ada data');
                } else {
                    data.forEach(user => {
                        // jika data ditemukan
                        const p = document.createElement('p');
                        p.classList.add('hasilEmail');
                        p.textContent = user.email;

                        searchResult.appendChild(p);

                        p.addEventListener('click', () => {
                            // Get the text content of the clicked hasilEmail
                            const newEmail = p.textContent.trim();

                            // Update the email input value with the new email
                            document.getElementById('email').value = newEmail;

                            // tutup container perncarian email
                            containerPencarianEmail.style.display = 'none';
                        });
                    });
                }
            })
            .catch(error => console.log(error));
    } else {
        searchResult.innerHTML = '';
    }
});

// jika tombol close di tekan maka container pencarian email hilang
closeContainerPencarianEmail.addEventListener('click', () => {
    containerPencarianEmail.style.display = 'none';
});

// validasi total biaya rental dan biaya jaminan
const inputNumberRentalElements = document.querySelectorAll(".inputNumberRental");

// Tambahkan event listener untuk setiap elemen
inputNumberRentalElements.forEach(inputElement => {
    inputElement.addEventListener('input', function() {
        const value = this.value;
        
        // Pengecekan jika karakter pertama adalah '0' atau '.'
        if (value.startsWith('0') || value.startsWith('.')) {
        // Jika karakter pertama adalah '0' atau '.', set nilai input ke string kosong
        this.value = '';
        } else if (isNaN(value)) {
        // Pengecekan jika nilai input bukan angka (misalnya, jika ada karakter selain angka)
        // Jika ada karakter selain angka, hapus karakter tersebut dari nilai input
        this.value = value.replace(/[^0-9.]/g, '');
        }
    });
});