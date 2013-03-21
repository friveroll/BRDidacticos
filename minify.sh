#!/bin/sh
cat \
	vendor/css/bootstrap.css \
	vendor/css/bootstrap-responsive.css \
	vendor/css/font-awesome.css \
	vendor/css/custom.css \
	> css/master.min.css
java -jar yuicompressor-2.4.7.jar -o css/master.min.css css/master.min.css

cat \
	vendor/css/bootstrap.css \
	vendor/css/bootstrap-responsive.css \
	vendor/css/font-awesome.css \
	vendor/css/custom.css \
	vendor/css/producto.css \
	> css/producto.min.css
java -jar yuicompressor-2.4.7.jar -o css/producto.min.css css/producto.min.css

cat \
	vendor/css/bootstrap.css \
	vendor/css/bootstrap-responsive.css \
	vendor/css/font-awesome.css \
	vendor/css/custom.css \
	vendor/css/bbGrid.css \
	> css/sensores.min.css
java -jar yuicompressor-2.4.7.jar -o css/sensores.min.css css/sensores.min.css

cat \
	vendor/js/jquery-1.9.1.js \
	vendor/js/bootstrap.js \
	vendor/js/page.js \
	> js/master.min.js
java -jar yuicompressor-2.4.7.jar -o js/master.min.js js/master.min.js

cat \
	vendor/js/jquery-1.9.1.js \
	vendor/js/bootstrap.js \
	vendor/js/producto.js \
	> js/producto.min.js
java -jar yuicompressor-2.4.7.jar -o js/producto.min.js js/producto.min.js

cat \
	vendor/js/jquery-1.9.1.js \
	vendor/js/bootstrap.js \
	vendor/js/underscore.js \
	vendor/js/backbone.js \
	vendor/js/bbGrid/bbGrid.js \
	vendor/js/sensores.js \
	> js/sensores.min.js
java -jar yuicompressor-2.4.7.jar -o js/sensores.min.js js/sensores.min.js

java -jar yuicompressor-2.4.7.jar -o vendor/json/sensores.json js/sensores.min.json
