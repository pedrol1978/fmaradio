<!DOCTYPE html>
<html>
	<head>
		<title>FMA Radio</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.16.custom.css" />
		<link rel="stylesheet" type="text/css" href="css/jplayer.blue.monday.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<script src="js/head.load.min.js"></script>
		<!-- Load head.load.js in head, load others using this in body -->
		
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-26895827-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
		
	</head>
	<body>
		<div class="topbar">
			<div class="topbar-inner">
				<div class="container-fluid">
					<a class="brand" href="#">FMA Radio</a>
					<a id="echo-nest" href="http://the.echonest.com"><img src="images/EN_P_on_Black_Horizontal.gif" alt="Powered by the Echo Nest" /></a>
					
				</div><!-- /.container-fluid -->
			</div><!-- /.topbar-inner -->
		</div><!-- /.topbar -->
		<div class="container-fluid">
			<div class="sidebar">		
			
			<div id="wfmu-logo">
				<img src="images/FMAlogo_web_white.jpeg" alt="FMA" />
			</div>
				<div class="well">
					<input type="text" name="artist" id="artist" placeholder="Artist Name" />
					<div id="accordion">
						<h3><a href="#">Styles</a></h3>
						<div id="style-list">
							<div class="row">
								<a href="#" id="clear-styles" class="clear">clear</a>
							</div>
						</div>
						<h3><a href="#">Moods</a></h3>
						<div id="mood-list">
							<div class="row">
								<a href="#" id="clear-moods" class="clear">clear</a>
							</div>
						</div>
						<h3><a href="#">Licenses</a></h3>
						<div id="license-list">
							<div class="row">
								<a href="#" id="clear-licenses" class="clear">clear</a>
								<a href="#" id="all-licenses" class="clear">all</a>
							</div>
							<div class="row">
								<label>FMA Limited</label>
								<input type="checkbox" checked="checked"/>
							</div>
							<div class="row">
								<label>CC BY</label>
								<input type="checkbox" checked="checked"/>
							</div>
							<div class="row">
								<label>CC BY-SA</label>
								<input type="checkbox" checked="checked"/>
							</div>
							<div class="row">
								<label>CC BY-ND</label>
								<input type="checkbox" checked="checked"/>
							</div>
							<div class="row">
								<label>CC BY-NC</label>
								<input type="checkbox" checked="checked"/>
							</div>
							<div class="row">
								<label>CC BY-NC-SA</label>
								<input type="checkbox" checked="checked"/>
							</div>
							<div class="row">
								<label>CC BY-NC-SA (US)</label>
								<input type="checkbox" checked="checked"/>
							</div>
							<div class="row">
								<label>CC BY-NC-ND</label>
								<input type="checkbox" checked="checked"/>
							</div>
						</div>
					</div>
					<div id="submit">
						Submit
					</div>
					<div id="license-info">
						<a href="http://creativecommons.org/licenses/">About CC Licenses</a>
					</div>
				</div><!-- ./well -->
			</div><!-- /.sidebar -->
			<div class="content">
				<div class="hero-unit">
					<div id="jquery_jplayer_1"></div>
					<div id="jp_container_1" class="jp-audio">
						<div class="jp-type-single">
							<div class="jp-gui jp-interface">
								<ul class="jp-controls">
									<li>
										<a href="javascript:;" class="jp-play" tabindex="1">play</a>
									</li>
									<li>
										<a href="javascript:;" class="jp-pause" tabindex="1" style="display: none; ">pause</a>
									</li>
									<li>
										<a href="javascript:;" class="jp-stop" tabindex="1">stop</a>
									</li>
									<li>
										<a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a>
									</li>
									<li>
										<a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute" style="display: none; ">unmute</a>
									</li>
									<li>
										<a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a>
									</li>
								</ul>
								<div class="jp-progress">
									<div class="jp-seek-bar" style="width: 100%; ">
										<div class="jp-play-bar" style="width: 0%; "></div>
									</div>
								</div>
								<div class="jp-volume-bar">
									<div class="jp-volume-bar-value" style="width: 80%; "></div>
								</div>
								<div class="jp-time-holder">
									<div class="jp-current-time">
										00:00
									</div>
									<div class="jp-duration"></div>
									<ul class="jp-toggles">
										<li>
											<a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a>
										</li>
										<li>
											<a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off" style="display: none; ">repeat off</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="jp-title">
								<ul>
									<li class="title"></li>
								</ul>
							</div>
							<div class="jp-no-solution" style="display: none; ">
								<span>Update Required</span>
								To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
							</div>
						</div>
					</div>
					<div id="search-status"></div>
					<ul id="playlist"></ul>
										
				</div><!-- ./hero-unit -->
			</div><!-- /.content -->			
			
		</div><!-- /.container-fluid -->
		<audio id="player"></audio>
		<script>

window.SM2_DEFER = true; // Lazy load SoundManager2

head.js("js/jquery-1.7.min.js", "js/jquery-ui-1.8.16.custom.min.js",
"js/soundmanager2.js", "js/jquery.jplayer.min.js", "js/fma.js", function() {

$(document).ready(function() {
jQuery.ajaxSettings.traditional = true;
fma.load();
});
});
		</script>
	</body>
</html>