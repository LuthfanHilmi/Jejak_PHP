function showNotification(message, type) {
    const notif = document.getElementById('notification');
    
    // Set warna dan ikon berdasarkan jenis pesan
    if (type === 'success') {
        notif.className = 'fixed top-5 right-5 px-6 py-4 rounded shadow-lg text-white text-sm bg-green-500';
    } else if (type === 'error') {
        notif.className = 'fixed top-5 right-5 px-6 py-4 rounded shadow-lg text-white text-sm bg-red-500';
    }
    notif.textContent = message;
    notif.style.display = 'block';
    notif.style.opacity = 1;
    // Hilangkan setelah 5 detik
    setTimeout(() => {
        notif.style.opacity = 0;
        setTimeout(() => {
            notif.style.display = 'none';
        }, 500); // waktu animasi hilang
    }, 5000);
}