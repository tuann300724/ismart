document.addEventListener('DOMContentLoaded', function () {
    var menuItems = document.querySelectorAll('#sidebar-menu .nav-item');

    menuItems.forEach(function (menuItem) {
        menuItem.addEventListener('click', function () {
            // Toggle the active class to expand/collapse the submenu
            this.classList.toggle('active');
        });
    });
});