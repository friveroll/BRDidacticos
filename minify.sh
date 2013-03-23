#!/bin/sh
echo "Building master.min.css"
cat \
	assets/vendor/css/bootstrap.css \
	assets/vendor/css/bootstrap-responsive.css \
	assets/vendor/css/font-awesome.css \
	assets/css/custom.css \
	assets/css/google_fonts.css \
	> assets/css/master.min.css
java -jar yuicompressor-2.4.7.jar -o assets/css/master.min.css assets/css/master.min.css

echo "Building producto.min.css"
cat \
	assets/vendor/css/bootstrap.css \
	assets/vendor/css/bootstrap-responsive.css \
	assets/vendor/css/font-awesome.css \
	assets/css/custom.css \
	assets/css/producto.css \
	assets/css/google_fonts.css \
	> assets/css/producto.min.css
java -jar yuicompressor-2.4.7.jar -o assets/css/producto.min.css assets/css/producto.min.css

echo "Building sensores.min.css"
cat \
	assets/vendor/css/bootstrap.css \
	assets/vendor/css/bootstrap-responsive.css \
	assets/vendor/css/font-awesome.css \
	assets/css/custom.css \
	assets/vendor/css/bbGrid.css \
	assets/css/google_fonts.css \
	> assets/css/sensores.min.css
java -jar yuicompressor-2.4.7.jar -o assets/css/sensores.min.css assets/css/sensores.min.css

echo "Building contacto.min.css"
cat \
	assets/vendor/css/bootstrap.css \
	assets/vendor/css/bootstrap-responsive.css \
	assets/vendor/css/font-awesome.css \
	assets/css/custom.css \
	assets/vendor/css/bootstrap-wysihtml5.css \
	assets/css/contacto.css \
	assets/css/google_fonts.css \
	> assets/css/contacto.min.css
java -jar yuicompressor-2.4.7.jar -o assets/css/contacto.min.css assets/css/contacto.min.css

echo "Building master.min.js"
cat \
	assets/vendor/js/jquery-1.9.1.js \
	assets/vendor/js/bootstrap.js \
	assets/js/page.js \
	> assets/js/master.min.js
java -jar yuicompressor-2.4.7.jar -o assets/js/master.min.js assets/js/master.min.js

echo "Building producto.min.js"
cat \
	assets/vendor/js/jquery-1.9.1.js \
	assets/vendor/js/bootstrap.js \
	assets/vendor/js/purl.js \
	assets/js/producto.js \
	> assets/js/producto.min.js
java -jar yuicompressor-2.4.7.jar -o assets/js/producto.min.js assets/js/producto.min.js

echo "Building sensores.min.js"
cat \
	assets/vendor/js/jquery-1.9.1.js \
	assets/vendor/js/bootstrap.js \
	assets/vendor/js/underscore.js \
	assets/vendor/js/backbone.js \
	assets/vendor/js/bbGrid.js \
	assets/js/sensores.js \
	> assets/js/sensores.min.js
java -jar yuicompressor-2.4.7.jar -o assets/js/sensores.min.js assets/js/sensores.min.js

echo "Building sensores.min.json"
#from https://npmjs.org/package/json-minify
json-minify assets/js/sensores.json > assets/js/sensores.min.json

echo "Building acerca.min.js"
cat \
	assets/vendor/js/jquery-1.9.1.js \
	assets/vendor/js/bootstrap.js \
	assets/js/page.js \
	assets/vendor/js/swfobject.js \
	assets/vendor/js/popcorn-complete.js \
	assets/vendor/js/popcorn.slideshare.js \
	assets/js/acerca.js \
	> assets/js/acerca.min.js
java -jar yuicompressor-2.4.7.jar -o assets/js/acerca.min.js assets/js/acerca.min.js

echo "Building contacto.min.js"
cat \
	assets/vendor/js/jquery-1.9.1.js \
	assets/vendor/js/bootstrap.js \
	assets/js/page.js \
	assets/vendor/lib/js/wysihtml5-0.3.0.js \
	assets/vendor/js/bootstrap-wysihtml5.js \
	assets/js/contacto.js \
	> assets/js/contacto.min.js
java -jar yuicompressor-2.4.7.jar -o assets/js/contacto.min.js assets/js/contacto.min.js