<?php

// Base functions
require_once(locate_template('/lib/activate.php'));          // Theme activation
require_once(locate_template('/lib/config.php'));            // Configuration
require_once(locate_template('/lib/init.php'));              // Initialization
require_once(locate_template('/lib/scripts.php'));           // Stylesheets and JavaScripts

// Custom functions
require_once(locate_template('/lib/custom/shortcodes.php')); // Shortcodes
require_once(locate_template('/lib/custom/helpers.php'));    // Helpers
require_once(locate_template('/lib/custom/actions.php'));    // Actions
require_once(locate_template('/lib/custom/filters.php'));    // Filters