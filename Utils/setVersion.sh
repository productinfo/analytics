#!/bin/bash

cat > Source/$PLUGIN_NAME/Info.php << EOF
<?php

namespace Craft;

define('${PLUGIN_CONSTANT_PREFIX}_VERSION', '$PLUGIN_VERSION.$BUILD_NUMBER');

EOF
