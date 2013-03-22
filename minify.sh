#!/bin/sh
echo "Building master.min.css"
cat \
	vendor/css/bootstrap.css \
	vendor/css/bootstrap-responsive.css \
	vendor/css/font-awesome.css \
	css/custom.css \
	css/google_fonts.css \
	> css/master.min.css
java -jar yuicompressor-2.4.7.jar -o css/master.min.css css/master.min.css

echo "Building producto.min.css"
cat \
	vendor/css/bootstrap.css \
	vendor/css/bootstrap-responsive.css \
	vendor/css/font-awesome.css \
	css/custom.css \
	css/producto.css \
	css/google_fonts.css \
	> css/producto.min.css
java -jar yuicompressor-2.4.7.jar -o css/producto.min.css css/producto.min.css

echo "Building sensores.min.css"
cat \
	vendor/css/bootstrap.css \
	vendor/css/bootstrap-responsive.css \
	vendor/css/font-awesome.css \
	css/custom.css \
	vendor/css/bbGrid.css \
	css/google_fonts.css \
	> css/sensores.min.css
java -jar yuicompressor-2.4.7.jar -o css/sensores.min.css css/sensores.min.css

echo "Building contacto.min.css"
cat \
	vendor/css/bootstrap.css \
	vendor/css/bootstrap-responsive.css \
	vendor/css/font-awesome.css \
	css/custom.css \
	vendor/css/bootstrap-wysihtml5.css \
	css/contacto.css \
	css/google_fonts.css \
	> css/contacto.min.css
java -jar yuicompressor-2.4.7.jar -o css/contacto.min.css css/contacto.min.css

echo "Building master.min.js"
cat \
	vendor/js/jquery-1.9.1.js \
	vendor/js/bootstrap.js \
	js/page.js \
	> js/master.min.js
java -jar yuicompressor-2.4.7.jar -o js/master.min.js js/master.min.js

echo "Building producto.min.js"
cat \
	vendor/js/jquery-1.9.1.js \
	vendor/js/bootstrap.js \
	vendor/js/purl.js \
	js/producto.js \
	> js/producto.min.js
java -jar yuicompressor-2.4.7.jar -o js/producto.min.js js/producto.min.js

echo "Building sensores.min.js"
cat \
	vendor/js/jquery-1.9.1.js \
	vendor/js/bootstrap.js \
	vendor/js/underscore.js \
	vendor/js/backbone.js \
	vendor/js/bbGrid.js \
	js/sensores.js \
	> js/sensores.min.js
java -jar yuicompressor-2.4.7.jar -o js/sensores.min.js js/sensores.min.js

echo "Building sensores.min.json"
#from https://npmjs.org/package/json-minify
json-minify js/sensores.json > js/sensores.min.json

echo "Building acerca.min.js"
cat \
	vendor/js/jquery-1.9.1.js \
	vendor/js/bootstrap.js \
	js/page.js \
	vendor/js/swfobject.js \
	vendor/js/popcorn-complete.js \
	vendor/js/popcorn.slideshare.js \
	js/acerca.js \
	> js/acerca.min.js
java -jar yuicompressor-2.4.7.jar -o js/acerca.min.js js/acerca.min.js

echo "Building contacto.min.js"
cat \
	vendor/js/jquery-1.9.1.js \
	vendor/js/bootstrap.js \
	js/page.js \
	vendor/lib/js/wysihtml5-0.3.0.js \
	vendor/js/bootstrap-wysihtml5.js \
	js/contacto.js \
	> js/contacto.min.js
java -jar yuicompressor-2.4.7.jar -o js/contacto.min.js js/contacto.min.js