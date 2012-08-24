<!DOCTYPE HTML><html><head>
	<title>{...} CodeDesign - deploying easily stylesheet, javascript and markdown files in php environment.</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<?php require_once(dirname(__FILE__). '/php/run.php'); CodeDesign::Run('{
		"config": {
			"cache": true,
			"concat": true,
			"minify": true,
			"path": {
				"files": {
					"css": "style/common.css",
					"js": "script/common.js"
				},
				"folders": {
					"cache": "cache/",
					"content": "content/default/"
				}
			}
		},
		"stylesheet": [
			"style/custom.less",
			"style/libs/bootstrap/bootstrap.min.css"
		],
		"javascript": [
			"script/libs/modernizr.min.js",
			"script/libs/jquery.min.js",
			"script/libs/bootstrap.min.js",
			"script/custom.js"
		]
	}'); ?>
	
</head><body id="top">
	
	<!-- Page -->
	<section id="page" class="container">
		<header class="clearfix">
			<?php echo CodeDesign::Content('header'); ?>
			
			<div class="btn-group">
				<a class="btn btn-success btn-large dropdown-toggle" data-toggle="dropdown" href="#">
					Github
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="https://github.com/idanm/CodeDesign/zipball/master">הורדת קובץ Zip</a></li>
					<li><a href="https://github.com/idanm/CodeDesign/">עמוד Github</a></li>
				</ul>
			</div>
		</header>
		
		<article class="well">
			<?php echo CodeDesign::Content('content'); ?>
			
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bit.ly/PvVSB7" data-counturl="http://bit.ly/PvVSB7" data-lang="en" data-count="vertical">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</article>
			
		<footer>
			<?php echo CodeDesign::Content('footer'); ?>
		</footer>
	</section>
	
</body></html>