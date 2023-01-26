#!/bin/bash

cwd="/home/w33dc00kie/Desktop/HTU/webdev/Final/no_bootstrap/static/img/webp-imgs"
echo "$cwd"
png="png"
webp="webp"

for file in $cwd/*; do
	if [[ $file == *"$png" ]]; then
		#echo "$file"
		# create new name
		new_file=${file/"$png"/$webp}
		echo $new_file
		cwebp -q 60 "$file" -o "$new_file"
	fi

done
