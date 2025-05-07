function toggleDropdown() {
const dropdown = document.getElementById('dropdownMenu');
dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}

document.addEventListener('click', function(e) {
const acc = document.querySelector('.account');
const dropdown = document.getElementById('dropdownMenu');
if (!acc.contains(e.target)) {
    dropdown.style.display = 'none';
}
});