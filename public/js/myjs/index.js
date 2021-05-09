var slideIndex = 1;
var view_more = document.getElementById("xemthem");
let view = document.getElementById("product-category");
const id_staff = document.querySelectorAll('.staff-id');

var slideIndex = 0;
showSlidesTimeout();

function showSlidesTimeout() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlidesTimeout, 2000); // Change image every 2 seconds
}

showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

function GET_PRODUCE(id) {
    console.log(id);
    $.ajax({
        url: 'controllers/GetPost.php',
        type: 'GET',
        data: {
            "take": id
        },
        success: function (response) {
            view.innerHTML = response;
        }
    });
}

function getMailCustomer() {
    let email = document.getElementById('email').value;
    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    let content = document.getElementById('content').value;
    const dataGet = {
        "email": email,
        "name": name,
        "phone": phone,
        "content": content,
    };

    $.ajax({
        url: '../../models/SendMailCustomer.php',
        dataType: 'json', // what to expect back from the PHP script, if anything
        data: dataGet,
        type: 'post',
        success: function (result) {
            if (JSON.stringify(result).result) {
                $('#myModal .modal-body').html("Gửi thành công");
                $('#myModalLabel').html("Thành công");
                $('#myModal').modal('show');
            } else {
                $('#myModal .modal-body').html("Gửi thất bại");
                $('#myModalLabel').html("Thất bại");
                $('#myModal').modal('show');
            }
        },
        error: function (err) {
            console.err(err);
        }
    });
}

id_staff.forEach(element => {
    element.addEventListener('click', function () {
        id_staff.forEach(id => {
            if (element != id) {
                id.style.width = "50px";
                id.style.height = "50px";
            } else {
                id.style.width = "100px";
                id.style.height = "100px";
            }
        });

        $.ajax({
            url: '../../models/GetStaff.php',
            type: 'post',
            dataType: 'json',
            data: {
                "staff-id": element.getAttribute('staff-id')
            },
            success: function (response) {
                // alert(13);
                // alert(response.name);
                $('.nhan-su__name').html(response.name);
            },
            error: function (err) {
                console.error(err);
            }
        });
    });
});

$(document).ready(function () {
    $('.carousel').carousel({
        pause: true,
        interval: false
    });
});

$(document).ready(function () {
    $(".col-md-3").mouseenter(function () {
        $(this).find(".col-img-responsive02").show(200);
    });


    $(".col-md-3").mouseleave(function () {
        $(this).find(".col-img-responsive02").hide();
    });
});
// Logo

$(document).ready(function () {
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
        }]
    });
});

// dich vu
$('#myCarousel').carousel({
    interval: 5000
})