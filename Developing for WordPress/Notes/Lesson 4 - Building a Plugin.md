# Building a Plugin

## Purposes of a Plugin

* Creating Custom Post Types
* Creating Custom Taxonomies
* Creating Shortcodes
* _Anything_ that has to do with functionality or data, rather than styling or presentation

## References

* http://code.tutsplus.com/articles/functionality-plugins-vs-themes--wp-26314
* https://tommcfarlin.com/wordpress-theme-or-plugin/
	* If the feature has to do with a change to the core theme's design, then it should be a child theme.
	* If the feature has to do with introducing or changing functionality, then it should be a plugin.
	* Themes don’t manage data – they simply present it.
* http://rachievee.com/the-wordpress-hooks-firing-sequence/

## Theme or Plugin?

* Functionality

## WordPress Hooks: Actions and Filters

* _Action_ is code that executes at a particular point in time as a WordPress page is being rendered
* _Filter_ is code that changes information that is outputted onto a WordPress page

## Building the Plugin

* Creating a shortcode
* Creating a custom post type (Code)
* WP_Query
* Creating a custom taxonomy
* Using ACF
* Creating a widget
