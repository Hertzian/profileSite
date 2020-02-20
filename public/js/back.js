const alerts = document.querySelectorAll('.alert');

alerts.forEach(alert => {
    setTimeout(() => {
        alert.remove();
    }, 3000);
});