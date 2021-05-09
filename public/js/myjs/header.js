const items = document.querySelectorAll('.nav-text-style');
const background = "#007cba";
const color = "white";

function handleIndicator(el) {
    items.forEach(function (item) {
        item.classList.remove('is-active');
        item.removeAttribute('style');
    });
    el.classList.add('is-active');
    el.style.background = background;
    el.style.color = color;
}


items.forEach(function (item) {
    item.addEventListener('click', function (e) {
        handleIndicator(e.target);
    });
    item.classList.contains('is-active') && handleIndicator(item);
});

document.querySelectorAll('.nav-text-style-1').forEach((item) => {
    item.addEventListener('click', (e) => {
        handleIndicator(e.target.closest('.dropdown').previousElementSibling);
    })
});