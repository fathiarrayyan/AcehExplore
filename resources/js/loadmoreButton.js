document.addEventListener('DOMContentLoaded', function () {
    // Ambil data dari window.appData
    let destinationOffset = window.appData.destinationOffset || 0;
    let blogOffset = window.appData.blogOffset || 0;

    function fetchMoreData(url, offset, type, containerId, buttonId) {
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ offset: offset })
        })
            .then(response => response.json())
            .then(data => {
                if (data.data.length > 0) {
                    const container = document.getElementById(containerId);
                    data.data.forEach(item => {
                        const card = document.createElement('div');
                        card.className = type === 'destination' ? 'col-md-3' : 'col-md-4';
                        card.innerHTML = type === 'destination'
                            ? `
                                <div class="card">
                                    <img src="/storage/${item.image}" class="card-img-top" alt="${item.name}">
                                    <div class="card-body">
                                        <h5 class="card-title">${item.name}</h5>
                                        <p class="card-text">${item.description}</p>
                                    </div>
                                </div>
                            `
                            : `
                                <div class="blog-card shadow-sm">
                                    <img src="/storage/${item.image}" alt="${item.title}" class="img-fluid">
                                    <div class="card-body p-3">
                                        <h5>${item.title}</h5>
                                        <p class="text-muted">${(item.content || '').substring(0, 100)}</p>
                                        <a href="/blog/${item.id}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            `;
                        container.appendChild(card);
                    });
                    if (type === 'destination') {
                        destinationOffset += data.data.length;
                    } else if (type === 'blog') {
                        blogOffset += data.data.length;
                    }
                } else {
                    const button = document.getElementById(buttonId);
                    button.textContent = 'No More Items';
                    button.disabled = true;
                }
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    document.getElementById('loadMoreDestinations').addEventListener('click', function () {
        fetchMoreData(
            window.appData.routes.loadMoreDestinations,
            destinationOffset,
            'destination',
            'destination-container',
            'loadMoreDestinations'
        );
    });

    document.getElementById('loadMoreBlogs').addEventListener('click', function () {
        fetchMoreData(
            window.appData.routes.loadMoreBlogs,
            blogOffset,
            'blog',
            'blog-container',
            'loadMoreBlogs'
        );
    });
});
