const searchInput = document.querySelector('.searchInput');
const loading = document.querySelector('.loading');
const searchResult = document.querySelector('.searchResult');

searchInput.addEventListener('keyup', (e) => {
    const searchText = e.target.value.trim();

    if (searchText.length > 0) {
        // Tampilkan loading
        loading.style.display = 'flex';

        fetch(`/sdjfqiaaweq112/${searchText}`)
            .then(response => response.json())
            .then(data => {
                // Sembunyikan loading
                loading.style.display = 'none';

                searchResult.innerHTML = '';

                if (data.length === 0) {
                    // Jika data tidak ditemukan, tampilkan pesan
                    const notFound = document.createElement('div');
                    notFound.classList.add('noData');
                    notFound.textContent = 'Jas tidak ditemukan';
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

                        const p = document.createElement('p');
                        p.classList.add('pMainSearch');
                        p.textContent = `${suit.name} - ${suit.code}`
                        link.appendChild(p);

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