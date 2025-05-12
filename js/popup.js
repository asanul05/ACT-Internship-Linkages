// Open Popup with Dynamic Content
function openPopup(title, chartSrc) {
    document.getElementById('popup-title').innerText = title;
    document.getElementById('popup-chart').src = chartSrc;
    document.getElementById('popup').style.display = 'block';
}

// Close Popup
function closePopup() {
    document.getElementById('popup').style.display = 'none';
}

// Add Event Listeners to Statistic Boxes
document.querySelectorAll('.linkages-partnership-statistic-box').forEach(box => {
    box.addEventListener('click', function () {
        const title = this.getAttribute('data-title');
        const chartSrc = this.getAttribute('data-chart');
        openPopup(title, chartSrc);
    });
});

// -----------------------------------
// Open Contact Popup
function openContactPopup() {
    document.getElementById('contact-popup').style.display = 'block';
}

// Close Contact Popup
function closeContactPopup() {
    document.getElementById('contact-popup').style.display = 'none';
}

// Add Event Listener to the Button
document.querySelector('.become-partner-button').addEventListener('click', openContactPopup);





// -------------------------------------
// Function to attach event listeners to partner cards
function attachPartnerCardListeners() {
    document.querySelectorAll('.partner-card').forEach(card => {
        card.addEventListener('click', function () {
            const partnerId = this.getAttribute('data-id'); // Get the partner ID
            openPartnerPopup(partnerId); // Open the popup with the partner's details
        });
    });
}

// Open Partner Popup
function openPartnerPopup(partnerId) {
    // Fetch partner data dynamically
    fetch(`../page-views/get-partner-details.php?id=${partnerId}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById('popup-content').innerHTML = data; // Load the content into the popup
            document.getElementById('partner-popup').style.display = 'block'; // Show the popup
        })
        .catch(error => console.error('Error fetching partner details:', error));
}

// Close Partner Popup
function closePartnerPopup() {
    document.getElementById('partner-popup').style.display = 'none'; // Hide the popup
}

// Filter Partners by Region
function filterPartnersByRegion() {
    const region = document.getElementById('filter-region').value;

    // Send AJAX request to filter partners
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `../page-views/search-partners.php?region=${region}`, true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('partners-grid').innerHTML = xhr.responseText;

            // Reattach event listeners to the newly loaded partner cards
            attachPartnerCardListeners();
        }
    };
    xhr.send();
}

// Attach event listeners on page load
document.addEventListener('DOMContentLoaded', attachPartnerCardListeners);