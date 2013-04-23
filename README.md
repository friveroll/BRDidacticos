BRDidacticos
=============

Sitio [brdidacticos.mx](http://brdidacticos.mx)

Built with [Laravel 3](http://laravel.com)

Using
- Laravel [Messages](http://bundles.laravel.com/bundle/Messages) Bundle
- [jQuery 1.9.1](https://github.com/jquery/jquery/tree/1.9.1)
- [jQuery plugin purl.js v2.2.1](https://github.com/allmarkedup/jQuery-URL-Parser)
- [Twitter Bootstrap v2.3.1](https://github.com/twitter/bootstrap/tree/v2.3.1)
- [bootstrap-wysihtml5](https://github.com/jhollingworth/bootstrap-wysihtml5/)
- [Font Awsome More v3.0.2](https://github.com/gregoryloucas/Font-Awesome-More/tree/Font-Awesome-v3.0.2)
- [Underscore.js 1.4.4](https://github.com/documentcloud/underscore/tree/1.4.4)
- [Backbone v1.0.0](https://github.com/documentcloud/backbone/tree/1.0.0)
- [bbGrid.js 0.6.4](https://github.com/direct-fuel-injection/bbGrid)
- [popcorn.js v1.3](https://github.com/mozilla/popcorn-js/tree/v1.3)
- [popcorn plugin slideshare](https://github.com/SocialCoding4Good/popcorn-js-slideshare)
- [SWFObject v2.2](https://code.google.com/p/swfobject/)


You need to rename and add you own settings to this files:

```bash
## Laravel config
/larasys/application/config/auth.default.php
/larasys/application/config/database.default.php
/larasys/application/config/session.default.php
## Messages config
/larasys/bundles/messages/config/config.default.php
```

To compress assets files you can run the script [minify.sh](https://github.com/friveroll/BRDidacticos/blob/master/minify.sh) also you need to install from
npm [json-minify](https://npmjs.org/package/json-minify)

```bash
npm install json-minify
sh minify.sh
```
For image compression use

```bash
python assets/img/img4web.py
```
