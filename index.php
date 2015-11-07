<?php
/*
 * @file index.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 01-11-2015
 *
 * Created: Sun 01-11-2015, 17:10:15 (:-0600)
 * Last modified: Sat 07-11-2015, 09:41:02 (-0600)
 */
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Concat files with PHP and cache busting</title>
	
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>
	body { background-color: #ffffff; }
	h1, p, li { font-family: Arial; color: #333333; }
	p { text-align: justify; }
	a { color: #0000ff; }
	</style>
</head>

<body>

<main>
<h1>Concat files with PHP and cache busting</h1>

<p>
Proof of concept to concatenate files with PHP and add cache busting.
</p>

<p>
This is useful, 
because you can minify the files beforehand 
and the <i>build-script</i> is written in plain PHP 
(except for the additional <i>bash-script</i>).
</p>

<p>
PHP will preserve the order of the files 
(see <i>console</i>) 
to avoid race
conditions.
</p>

<p>
These are the parts to make it work:
</p>

<ol>
<li>.htaccess file to remove the date string 
(<i>"file.js.20150806.php"</i>)</li>
<li>Bash-script to rewrite the files from the 
<i>/src/</i> to the <i>/dist/</i> with the new date string</li>
<li>PHP-file wich will request our file with an added date string</li>
</ol>

<p><em><strong>Note (to self):</strong> Date should be replaced with something 
more sensible, like an 
<a href="http://php.net/manual/en/function.hash-file.php">MD5-hash (disk performance?)</a> or something.</em></p>
</main>

<?php
function loadJS($file) {
	echo "loader/" . $file . ".js." . date ("YmdHis", filemtime($file)) . ".php";
}
?>

<script language="javascript" type="text/javascript" src="<?php loadJS('file1'); ?>"></script>

</body>
</html>
