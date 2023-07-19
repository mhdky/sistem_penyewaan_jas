// keterangan fungsi button penyewaan
const btnDetailPenyewaann = document.querySelectorAll('.btnDetailPenyewaan');
const detailPenyewaann = document.querySelectorAll('.detailPenyewaan');

btnDetailPenyewaann.forEach((btnDetailPenyewaan, index) => {
    btnDetailPenyewaan.addEventListener('mouseenter', () => {
        detailPenyewaann[index].style.display = 'block';
        setTimeout(() => {
            detailPenyewaann[index].style.opacity = '1';
            detailPenyewaann[index].style.transform = 'translateY(0)'
        }, 100);
    });

    btnDetailPenyewaan.addEventListener('mouseleave', () => {
        detailPenyewaann[index].style.transform = 'translateY(4px)'
        setTimeout(() => {
            detailPenyewaann[index].style.display = 'none';
            detailPenyewaann[index].style.opacity = '0';
        }, 100);
    });
});


// delete penyewaan
const btnDeletePenyewaann = document.querySelectorAll('.btnDeletePenyewaan');
const containerDeletePenyewaan = document.querySelectorAll('.containerDeletePenyewaan');
const deletePenyewaan = document.querySelectorAll('.deletePenyewaan');
const noDeltePenyewaann = document.querySelectorAll('.noDeltePenyewaan');
btnDeletePenyewaann.forEach((btnDeletePenyewaan, index) => {
    btnDeletePenyewaan.addEventListener('click', () => {
        containerDeletePenyewaan[index].style.display = 'flex';
        setTimeout(() => {
            deletePenyewaan[index].style.opacity = '1';
            deletePenyewaan[index].style.transform = 'translateY(0)';
        }, 300);
    });
});

noDeltePenyewaann.forEach((noDeltePenyewaan, index) => {
    noDeltePenyewaan.addEventListener('click', () => {
        deletePenyewaan[index].style.transform = 'translateY(28px)';
        deletePenyewaan[index].style.opacity = '0';

        setTimeout(() => {
            containerDeletePenyewaan[index].style.display = 'none';
        }, 300);
    });
});


// finish penyewaan
const btnFinishPenyewaann = document.querySelectorAll('.btnFinishPenyewaan');
const containerFinishPenyewaan = document.querySelectorAll('.containerFinishPenyewaan');
const finishPenyewaan = document.querySelectorAll('.finishPenyewaan');
const noFinishPenyewaann = document.querySelectorAll('.noFinishPenyewaan');

btnFinishPenyewaann.forEach((btnFinishPenyewaan, i) => {
    btnFinishPenyewaan.addEventListener('click', () => {
        containerFinishPenyewaan[i].style.display = 'flex';
        setTimeout(() => {
            finishPenyewaan[i].style.transform = 'translateY(0)';
            finishPenyewaan[i].style.opacity = '1';
        }, 300);
    });
});

noFinishPenyewaann.forEach((noFinishPenyewaan, i) => {
    noFinishPenyewaan.addEventListener('click', () => {
        finishPenyewaan[i].style.transform = 'translateY(28px)';
        finishPenyewaan[i].style.opacity = '0';
        setTimeout(() => {
            containerFinishPenyewaan[i].style.display = 'none';
        }, 300);
    });
});


// cek ketersedian jas & cek jads yang disewa
const btnCekKetersedianJass = document.querySelectorAll('.btnCekKetersedianJas');
const containerCekKetersedianJas = document.querySelectorAll('.containerCekKetersedianJas');
const closeCekKetersedianJass = document.querySelectorAll('.closeCekKetersedianJas');
const inputCekKetersedianJas = document.querySelectorAll('.inputCekKetersedianJas');

btnCekKetersedianJass.forEach((btnCekKetersedianJas, kj) => {
    btnCekKetersedianJas.addEventListener('click', () => {
        containerCekKetersedianJas[kj].style.display = 'block';
        setTimeout(() => {
            inputCekKetersedianJas[kj].focus();
        }, 100);
    });    
});

closeCekKetersedianJass.forEach((closeCekKetersedianJas, kj) => {
    closeCekKetersedianJas.addEventListener('click', () => {
        containerCekKetersedianJas[kj].style.display = 'none';
    });
});

// live search ketersedian jas
const searchInput = document.querySelector('.searchInput');
const loading = document.querySelector('.loading');
const searchResult = document.querySelector('.searchResult');

searchInput.addEventListener('keyup', (e) => {
    const searchTextKetersedianJas = e.target.value.trim();

    if (searchTextKetersedianJas.length > 0) {
        // Tampilkan loading
        loading.style.display = 'flex';

        fetch(`/sdjfqiaaweu8ui/${searchTextKetersedianJas}`)
            .then(response => response.json())
            .then(data => {
                // Sembunyikan loading
                loading.style.display = 'none';

                searchResult.innerHTML = '';

                if (data.length === 0) {
                    // Jika data tidak ditemukan, tampilkan pesan
                    const notFound = document.createElement('div');
                    notFound.classList.add('noDataKetersedianJas');
                    notFound.textContent = 'Tidak ada jas yang ditemukan';
                    searchResult.appendChild(notFound);
                } else {
                    data.forEach(suit => {
                        // jika data ditemukan
                        const link = document.createElement('a');
                        link.href = `/this/suit/${suit.name}/${suit.code}`;
                        link.classList.add('linkMainSearch');

                        const img = document.createElement('img');
                        img.src = `/${suit.main_picture}`;
                        img.alt = 'jas';
                        img.classList.add('imgMainSearch');
                        link.appendChild(img);

                        const divNameNKetersedian = document.createElement('div');
                        divNameNKetersedian.classList.add('styleNameNKetersedian');

                        const pKetersedian = document.createElement('p');
                        pKetersedian.classList.add('stylePKetersedian');
                        pKetersedian.textContent = 'Tersedia';

                        divNameNKetersedian.appendChild(pKetersedian);

                        const pKode = document.createElement('p');
                        pKode.classList.add('stylePKode');
                        pKode.textContent = `${suit.name} - ${suit.code}`;

                        divNameNKetersedian.appendChild(pKode)

                        link.appendChild(divNameNKetersedian);

                        searchResult.appendChild(link);
                    });
                }
            })
            .catch(error => console.log(error));
    } else {
        loading.style.display = 'none';
        searchResult.innerHTML = '';
    }
});