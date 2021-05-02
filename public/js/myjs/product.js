const btn_xem_them = document.getElementById("dropdownMenuButton");

btn_xem_them.addEventListener('click', function () {
    if (!view_more.classList.contains("show")) {
        view_more.classList.add('show');
    } else {
        view_more.classList.remove('show');
    }
});