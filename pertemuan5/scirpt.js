document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('loginForm');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const emailError = document.getElementById('email-error');
    const passwordError = document.getElementById('password-error');
    const togglePassword = document.getElementById('togglePassword');
    const loginBtn = document.getElementById('loginBtn');

    // Toggle password visibility
    togglePassword.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            togglePassword.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            togglePassword.textContent = 'Show';
        }
    });

    // Real-time validation for email
    emailInput.addEventListener('input', function () {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (this.value.length > 0 && !emailRegex.test(this.value)) {
            emailError.style.display = 'block';
        } else {
            emailError.style.display = 'none';
        }
    });

    // Real-time validation for password
    passwordInput.addEventListener('input', function () {
        if (this.value.length > 0 && this.value.length < 8) {
            passwordError.style.display = 'block';
        } else {
            passwordError.style.display = 'none';
        }
    });
});





function showPopup(message, type = 'success') {
    const popup = document.getElementById('popup-message');
    popup.textContent = message;
    // Remove previous type classes
    popup.classList.remove('bg-green-600', 'border-green-700', 'bg-red-600', 'border-red-700');
    // Add base + type-specific classes
    popup.classList.add(
        'pointer-events-auto',
        'opacity-100',
        'top-10'
    );
    if (type === 'success') {
        popup.classList.add('bg-green-600', 'border', 'border-green-700');
    } else if (type === 'error') {
        popup.classList.add('bg-red-600', 'border', 'border-red-700');
    }
    // Timeout to hide popup
    setTimeout(() => {
        popup.classList.remove('opacity-100', 'pointer-events-auto', 'top-10');
        popup.classList.add('opacity-0', 'top-5');
    }, 3000);
}
