<script>
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
</script>