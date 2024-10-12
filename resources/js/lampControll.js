document.querySelectorAll('.control-lamp').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const kamarId = this.getAttribute('data-id');

        fetch(`/lamp/${kamarId}/on`, { method: 'POST' }) // Ganti URL dengan endpoint yang sesuai
            .then(response => {
                if (response.ok) {
                    alert('Lampu dinyalakan!');
                } else {
                    alert('Gagal menyalakan lampu.');
                }
            })
            .catch(error => console.error('Error:', error));
    });
});
