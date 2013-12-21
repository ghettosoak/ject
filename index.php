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
    <link rel="stylesheet" type="text/css" href="_base/css/master.css" />
</head>

<body>
	<div id="orbital">
		<a href="http://sub.ject.ch/" id="sub" target="_blank"><div><div></div><p>sub.ject</p></div></a>
		<a href="http://e.ject.ch/" id="e" target="_blank"><div><div></div><p>e.ject</p></div></a>
		<a href="http://in.ject.ch/" id="in" target="_blank"><div><div></div><p>in.ject</p></div></a>
		<a href="http://pro.ject.ch/" id="pro" target="_blank"><div><div></div><p>pro.ject</p></div></a>
		<a href="http://ob.ject.ch/" id="ob" target="_blank"><div><div></div><p>ob.ject</p></div></a>
		<a href="http://tra.ject.ch/" id="tra" target="_blank"><div><div></div><p>tra.ject</p></div></a>
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
</body>
</html>