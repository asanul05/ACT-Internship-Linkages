function searchPartners() {
    const searchInput = document.getElementById('search-input').value;
    const category = document.querySelector('.our-partners-category-cont button.active').dataset.category;

    const xhr = new XMLHttpRequest();
    xhr.open('GET', `../page-views/search-partners.php?search=${encodeURIComponent(searchInput)}&category=${encodeURIComponent(category)}`, true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            const parts = xhr.responseText.split('<!--PAGINATION_DELIMITER-->');
            document.getElementById('partners-grid').innerHTML = parts[0];
            document.querySelector('.pagination').innerHTML = parts[1];
        }
    };
    xhr.send();
}

function loadPage(page) {
    const searchInput = document.getElementById('search-input').value;
    const category = document.querySelector('.our-partners-category-cont button.active').dataset.category;

    const xhr = new XMLHttpRequest();
    xhr.open('GET', `../page-views/search-partners.php?page=${page}&search=${encodeURIComponent(searchInput)}&category=${encodeURIComponent(category)}`, true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            const parts = xhr.responseText.split('<!--PAGINATION_DELIMITER-->');
            document.getElementById('partners-grid').innerHTML = parts[0];
            document.querySelector('.pagination').innerHTML = parts[1];
        }
    };
    xhr.send();
}

function filterPartners(category) {
    const searchInput = document.getElementById('search-input').value;
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `../page-views/search-partners.php?category=${encodeURIComponent(category)}&search=${encodeURIComponent(searchInput)}`, true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            const parts = xhr.responseText.split('<!--PAGINATION_DELIMITER-->');
            document.getElementById('partners-grid').innerHTML = parts[0];
            document.querySelector('.pagination').innerHTML = parts[1];

            // Update active button
            const buttons = document.querySelectorAll('.our-partners-category-cont button');
            buttons.forEach(button => button.classList.remove('active'));
            document.querySelector(`[data-category="${category}"]`).classList.add('active');
        }
    };

    xhr.onerror = function () {
        console.error('An error occurred during the AJAX request.');
    };

    xhr.send();
}
