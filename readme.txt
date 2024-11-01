=== Translation Preserver ===
Contributors: uglyrobot
Tags: i18n, translation, translate, language
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=W66QWST9B9KRN
Requires at least: 3.1
Tested up to: 3.9
Stable tag: trunk

A simple plugin that helps preserve your custom plugin translations through auto-updates by allowing you to put them in your WP languages folder.

== Description ==
Tired of your custom plugin and theme translation files getting wiped out every time you use the WordPress auto-updater? Install and activate this plugin and 
WordPress will look for missing translation files in the WP_LANG_DIR where you keep your WordPress translation files.

= UPDATE =
In WordPress 3.8 and greater this plugin's functionality is included in core. You can put translation files in:
* Plugins: /wp-content/languages/plugins/textdomain-locale.mo
* Themes: /wp-content/languages/themes/textdomain-locale.mo

A free plugin by Aaron Edwards of <a href="http://uglyrobot.com/">UglyRobot Web Development</a>.

== Installation ==

1.  Install the plugin
1.  Activate or network activate on multisite
1.  Put your custom plugin and theme translation files (.po and .mo) in the WP_LANG_DIR (usually wp-content/languages/)
1.  That's it!

Note WP will look first in the normal location the plugin or theme defines, and only if it's not there look in WP_LANG_DIR

== Changelog ==

= 1.0 =
* Initial Release