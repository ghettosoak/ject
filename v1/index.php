<!doctype html>
<!--[if lt IE 7]>  <html class="ie ie8 ie7 ie6" lang="en"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE]>       <html class="ie" lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>&clubs;</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/master.css" />

    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    
</head>

<body>
	<div id="orbital">
		
		<a href="http://ob.ject.ch/" id="ob" target="_blank">
			<div>
				<div>
				</div>
				<p>ob.ject</p>
			</div>
		</a>
		<a href="http://in.ject.ch/" id="in" target="_blank">
			<div>
				<div>
				</div>
				<p>in.ject</p>
			</div>
		</a>
		<a href="http://tra.ject.ch/" id="tra" target="_blank">
			<div>
				<div>
				</div>
				<p>tra.ject</p>
			</div>
		</a>
		<a href="http://e.ject.ch/" id="e" target="_blank">
			<div>
				<div>
				</div>
				<p>e.ject</p>
			</div>
		</a>
		<a href="http://pro.ject.ch/" id="pro" target="_blank">
			<div>
				<div>
				</div>
				<p>pro.ject</p>
			</div>
		</a>
		<a href="http://sub.ject.ch/" id="sub" target="_blank">
			<div>
				<div>
				</div>
				<p>sub.ject</p>
			</div>
		</a>
		<p class="colophon">mf</p>
	</div>
	<script>
	function yepimready() {
	    var d = document.getElementById("orbital");
	    d.className = d.className + "rough";

	    setTimeout(function(){
	    	d.className = d.className + " ready";
	    },1000);

	    setTimeout(function(){
	    	d.className = d.className + " rumble";
	    },2000);
	}
	window.onload = yepimready;
	</script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-31902149-2', 'ject.ch');
	  ga('send', 'pageview', {
	   'page': location.pathname + location.search  + location.hash
	  });
	  
	</script>
</body>
</html>