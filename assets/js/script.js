const btnInfoSekolah = document.getElementById('btn-info-sekolah');
const dropdownInfo = document.getElementById('dropdown-info');

btnInfoSekolah.addEventListener('click', function(e) {
    e.stopPropagation();
    dropdownInfo.classList.toggle('show');
    btnInfoSekolah.classList.toggle('active');
});

document.addEventListener('click', function(e) {
    if (!dropdownInfo.contains(e.target) && e.target !== btnInfoSekolah) {
        dropdownInfo.classList.remove('show');
        btnInfoSekolah.classList.remove('active');
    }
});