#!/bin/bash

# Current date
now=$(date +"%Y%m%d")

# Current directory
dir=$(cd -P -- "$(dirname -- "$0")" && pwd -P)

# Go to current directory, then go to 'src'
cd $dir"/src"

# Find all files by the extension of 'php', prepend date before filename
find . -maxdepth 1 -type f -name "*.php" -print | while read FILE  
	do cp "${FILE}" "$dir/dist/`dirname ${FILE}`/`basename ${FILE} .php`.$now.php"	
done
