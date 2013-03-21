#!/bin/sh
cat \
	css/bootstrap.css \
	css/bootstrap-responsive.css \
	css/font-awesome.css \
	css/custom.css \
	> css/master.min.css
java -jar yuicompressor-2.4.7.jar -o css/master.min.css css/master.min.css

cat \
	css/bootstrap.css \
	css/bootstrap-responsive.css \
	css/font-awesome.css \
	css/custom.css \
	css/producto.css \
	> css/producto.min.css
java -jar yuicompressor-2.4.7.jar -o css/producto.min.css css/producto.min.css


cat \
	js/jquery-1.9.1.js \
	js/bootstrap.js \
	js/page.js \
	> js/master.min.js
java -jar yuicompressor-2.4.7.jar -o js/master.min.js js/master.min.js

cat \
	js/jquery-1.9.1.js \
	js/bootstrap.js \
	js/producto.js \
	> js/producto.min.js
java -jar yuicompressor-2.4.7.jar -o js/producto.min.js js/producto.min.js
