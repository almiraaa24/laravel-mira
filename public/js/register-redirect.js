// This script should be included after the registration form on your registration page.
// It intercepts the form submission, prevents default action, and redirects to the dashboard after (simulated) successful registration.

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('.my-login-validation');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Optionally: validate the form manually here if needed

        // Simulate successful registration (for real-world, you'd send an AJAX request here)
        // If using AJAX, check if registration is successful, then redirect

        // You can customize the dashboard URL as needed
        window.location.href = "dashboard.blade.php";
    });
});