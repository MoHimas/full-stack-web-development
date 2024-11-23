let currentPage = 1;
const imagesPerPage = 3;

function renderGallery(page) {
    const gallery = document.getElementById('gallery');
    fetch(`load_images.php?page=${page}`)
        .then(response => response.text())
        .then(data => {
            gallery.innerHTML = data;
            document.getElementById('prevBtn').disabled = page === 1;
            document.getElementById('nextBtn').disabled = gallery.children.length < imagesPerPage;
        });
}

function prevPage() {
    if (currentPage > 1) {
        currentPage--;
        renderGallery(currentPage);
    }
}

function nextPage() {
    currentPage++;
    renderGallery(currentPage);
}

window.onload = () => renderGallery(currentPage);
