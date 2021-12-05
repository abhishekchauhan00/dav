// menubar script

function myfunction() {
    document.getElementById('menuitems').style.display = 'block';
    document.getElementById('menubar').style.display = 'none';
    document.getElementById('menubar1').style.display = 'block';
}

function myfunctions() {
    document.getElementById('menuitems').style.display = 'none';
    document.getElementById('menubar').style.display = 'block';
    document.getElementById('menubar1').style.display = 'none';
}


// activity carousel
$('#activity .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,


    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})

// front header image carousel
const cats = [
"images/b1.jpeg",
"images/b-2.jpeg",
"images/b-3.jpeg",
"images/b-6.jpeg"

]

const node = document.getElementById("main");

const cycleImages = (images, container, step) => {
images.forEach((image, index) => (
setTimeout(() => {
    container.style.background = `url(${image}) no-repeat center center/cover`  
}, step * (index + 0))

))
container.style.transition ='background 2s ease ';
setTimeout(() => cycleImages(images, container, step), step * images.length)
}

cycleImages(cats, node, 5000)


// sticky menybar
$(document).ready(function() {

$(window).scroll(function () { 

console.log($(window).scrollTop());

if ($(window).scrollTop() > 10) {
  $('#navmain').addClass('navbar-fixed');
  document.getElementById('menubar').style.top = '1.2rem';
  document.getElementById('menubar1').style.top = '1.2rem';
  document.getElementById('menuitems').style.top = '4rem';
}
else{
$('#navmain').removeClass('navbar-fixed');
document.getElementById('menubar').style.top = '3.1rem';
document.getElementById('menubar1').style.top = '3.1rem';
document.getElementById('menuitems').style.top = '6rem';
}

});
});

// <!-- gallery javascript -->

$('#gallery .owl-carousel').owlCarousel({
    loop: true,
    margin: 5,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,

    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
})

// <!-- galleryfunction javascript -->

function Images() {
    document.getElementById('images').style.display = "block";
    document.getElementById('imagebutton').style.backgroundColor = "var(--primary)";
    document.getElementById('videobutton').style.backgroundColor = "#C8C8C8";
    document.getElementById('videos').style.display = "none";
}
function Videos() {
    document.getElementById('videos').style.display = "block";
    document.getElementById('imagebutton').style.backgroundColor = "#C8C8C8";
    document.getElementById('videobutton').style.backgroundColor = "var(--primary)";
    document.getElementById('images').style.display = "none";
}
