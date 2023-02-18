<div class="agileits_w3layouts_copyright text-center">
<p style="background-color: #000; color: #fff; padding: 2%; text-align: right;
">© 2023 OEP. All rights reserved | Design by Sharon Hlaka - 54511372</p>
</div>

<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
<!-- Custom Theme JavaScript -->
<script>
// Closes the sidebar menu
$("#menu-close").click(function(e) {
e.preventDefault();
$("#sidebar-wrapper").toggleClass("active");
});

// Opens the sidebar menu
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#sidebar-wrapper").toggleClass("active");
});

// Scrolls to the selected menu item on the page
$(function() {
$('a[href*=#]:not([href=#])').click(function() {
if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

var target = $(this.hash);
target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
if (target.length) {
$('html,body').animate({
scrollTop: target.offset().top
}, 1000);
return false;
}
}
});
});
</script>

</body>

</html>