#!/bin/sh

echo "Renaming files..."
mv ./larasys/application/config/auth.default.php /larasys/application/config/auth.php
mv ./larasys/application/config/database.default.php /larasys/application/config/database.php
mv ./larasys/application/config/session.default.php /larasys/application/config/session.php
mv ./larasys/bundles/messages/config/config.default.php /larasys/bundles/messages/config/config.php

## Checkout the changes to git
git checkout ./larasys/application/config/auth.default.php
git checkout ./larasys/application/config/database.default.php
git checkout ./larasys/application/config/session.default.php
git checkout ./larasys/bundles/messages/config/config.default.php
