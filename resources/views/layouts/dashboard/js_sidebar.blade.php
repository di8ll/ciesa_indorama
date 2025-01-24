<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Simpan status collapse di localStorage
        var collapsedElements = JSON.parse(localStorage.getItem('collapsedElements')) || {};

        // Cek setiap elemen dengan class "collapse" dan sesuaikan statusnya
        document.querySelectorAll('.collapse').forEach(function (collapseElement) {
            var elementId = collapseElement.id;

            if (collapsedElements[elementId]) {
                collapseElement.classList.remove('show');
            } else {
                collapseElement.classList.add('show');
            }
        });

        // Tambahkan event listener untuk menyimpan status collapse saat diubah
        document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(function (toggleElement) {
            toggleElement.addEventListener('click', function () {
                var targetElementId = toggleElement.getAttribute('aria-controls');
                var targetElement = document.getElementById(targetElementId);

                if (targetElement.classList.contains('show')) {
                    collapsedElements[targetElementId] = true;
                } else {
                    delete collapsedElements[targetElementId];
                }

                // Simpan status collapse di localStorage
                localStorage.setItem('collapsedElements', JSON.stringify(collapsedElements));
            });
        });
    });
</script>
