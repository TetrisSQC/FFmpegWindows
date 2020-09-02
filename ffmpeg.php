<?php 
 $version = $_GET["version"];
 $build = $_GET["build"];
 if (!isset($version))
 {
	$version = "4.1"; 	 
 }
 
 if (!isset($build)) 
 {
   $build = "win32"; 
 }
 
 header("Location: https://github.com/TetrisSQC/FFmpegWindows/raw/master/builds/ffmpeg-".$version."-".$build."-static.zip"); 
?>