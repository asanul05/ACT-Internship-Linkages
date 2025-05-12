function searchPartners() {
    const searchInput = document.getElementById('search-input').value;

    const xhr = new XMLHttpRequest();
    // xhr.open('GET', `search-partners.php?search=${encodeURIComponent(searchInput)}`, true);
    xhr.open('GET', `../page-views/search-partners.php?search=${encodeURIComponent(searchInput)}`, true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('partners-grid').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

function loadPage(page) {
    const type = document.getElementById('filter-type').value;
    const region = document.getElementById('filter-region').value;

    // Send AJAX request for pagination
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `../page-views/search-partners.php?page=${page}`, true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('partners-grid').innerHTML = xhr.responseText;

            // Update active page button
            const buttons = document.querySelectorAll('.pagination .page-button');
            buttons.forEach(button => button.classList.remove('active'));
            document.querySelector(`.pagination .page-button:nth-child(${page + 1})`).classList.add('active');
        }
    };

    xhr.onerror = function () {
        console.error('An error occurred during the AJAX request.');
    };

    xhr.send();
}

function filterPartners(category) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `../page-views/search-partners.php?category=${encodeURIComponent(category)}`, true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('partners-grid').innerHTML = xhr.responseText;

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

function filterPartnersByType() {
    const type = document.getElementById('filter-type').value;
    const region = document.getElementById('filter-region').value;

    const xhr = new XMLHttpRequest();
    xhr.open('GET', `../page-views/search-partners.php?type=${type}&region=${region}`, true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('partners-grid').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

function filterPartnersByRegion() {
    const type = document.getElementById('filter-type').value;
    const region = document.getElementById('filter-region').value;

    const xhr = new XMLHttpRequest();
    xhr.open('GET', `../page-views/search-partners.php?type=${type}&region=${region}`, true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('partners-grid').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}



