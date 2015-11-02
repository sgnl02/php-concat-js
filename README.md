#Concat files with PHP and cache busting

Proof of concept to concatenate files with PHP and add cache busting.

This is useful, because you can minify the files beforehand and the build-script is 
written in plain PHP (except for the additional bash-script).

PHP will preserve the order of the files (see console) to avoid race conditions.

These are the parts to make it work:

* .htaccess file to remove the date string ("file.js.20150806.php")
* Bash-script to rewrite the files from the /src/ to the /dist/ with the new date string
* PHP-file wich will request our file with an added date string

*Note (to self)*: Date should be replaced with something more sensible, 
like an MD5-hash (disk performance?) or something.
