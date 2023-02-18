<div class="agileits_w3layouts_copyright text-center">
<p style="background-color: #000; padding: 2%; text-align: right;
">© 2023 OEP. All rights reserved | Design by Sharon Hlaka - 54511372</p>
</div>
<!--tabs-->
<script src="js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
$(document).ready(function() {
//Horizontal Tab
$('#parentHorizontalTab_agile').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion
width: 'auto', //auto or any width like 600px
fit: true, // 100% fit in a container
tabidentify: 'hor_1', // The tab groups identifier
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#nested-tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
});
</script>
<script type="text/javascript">
window.onload = function () {
document.getElementById("password1").onchange = validatePassword;
document.getElementById("password2").onchange = validatePassword;
}
function validatePassword(){
var pass2=document.getElementById("password2").value;
var pass1=document.getElementById("password1").value;
if(pass1!=pass2)
document.getElementById("password2").setCustomValidity("Passwords Don't Match");
else
document.getElementById("password2").setCustomValidity('');	 
//empty string means no validation error
}

</script>
<!--//tabs-->
</body>
</html>