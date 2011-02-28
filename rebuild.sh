#!/bin/sh
rm -Rf modules/contrib  themes/contrib
drush make --yes --working-copy --no-core --contrib-destination=. walkahnet.make
