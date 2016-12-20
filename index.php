<html>
<head>
<title>Render google reCaptcha</title>

<script>
     $.getScript( "http://www.google.com/recaptcha/api/js/recaptcha_ajax.js", function() {
  		grecaptcha.render('recaptcha_append', {
	  		'sitekey' : '<PUBLIC KEY>'
      	});
     });
<script>

</head>
<body>

<h2>Render google reCaptcha ... </h2>
 <div id="recaptcha_append" >
 
   <!-- Here captcha will appear. -->
   
 </div>
 
 </body>
 </html>
