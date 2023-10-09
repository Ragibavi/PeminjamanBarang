document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const resetButton = document.getElementById('resetButton');
    const table = document.querySelector('.table');

    searchInput.addEventListener('input', function () {
        filterTable();
    });

    resetButton.addEventListener('click', function () {
        searchInput.value = '';
        filterTable();
    });

    function filterTable() {
        const searchText = searchInput.value.toLowerCase();
        const rows = table.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const namaPeminjam = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
            const jenisBarang = row.querySelector('td:nth-child(3)').textContent.toLowerCase();

            if (namaPeminjam.includes(searchText) || jenisBarang.includes(searchText)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }
});