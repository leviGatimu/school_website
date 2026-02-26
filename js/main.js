// Preloader
window.addEventListener('load', () => {
    const loader = document.getElementById('preloader');
    setTimeout(() => {
        loader.style.opacity = '0';
        setTimeout(() => loader.style.display = 'none', 500);
    }, 1000);
});

// Modal Logic
function openModal(type, id) {
    const modal = document.getElementById('infoModal');
    const contentArea = document.getElementById('modal-content-area');
    modal.style.display = 'flex';

    // In a real app, use fetch() to get data from a PHP API
    contentArea.innerHTML = `<h2>Loading Profile...</h2><p>Fetching details for ${type} ID: ${id}</p>`;
}

function closeModal() {
    document.getElementById('infoModal').style.display = 'none';
}

// Close modal on outside click
window.onclick = function(event) {
    const modal = document.getElementById('infoModal');
    if (event.target == modal) {
        closeModal();
    }
}