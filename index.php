<script src="assets/js/jquery-ui-1.12.1/external/jquery/jquery.js"></script><* các thư viện hàm*>
<script type="text/javascript" src="assets/js/jwerty/jwerty.js"></script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Medical Power Tools</title>
</head>
<body>
	<?php echo 'Cộng hòa'; ?>
	<p>Học viện công nghệ vietpro</p>
	<button id='ok'>ok</button>
	<h1 id="qunit-header">jwerty with jQuery</h1>
	<h2 id="qunit-banner"></h2>
	<div id="qunit-testrunner-toolbar"></div>
	<h2 id="qunit-userAgent"></h2>
	<ol id="qunit-tests"></ol>
	<div id="qunit-fixture">test markup</div>

</body>
</html>
<script>
window.listenForKey = function(el, fn) {
    $(el).bind('keydown', fn);
}
$(document).ready(function(){
//Vùng viết mã Jquery
jwerty.key('enter', function () { 

alert('enter nhé');
 });

$('.p').click(function(){
	alert('');
})
$('#ok').click(function(){
	alert('ok');
})

});
</script>