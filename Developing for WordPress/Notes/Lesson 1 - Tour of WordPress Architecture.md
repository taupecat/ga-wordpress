# Tour of the WordPress Architecture

## WordPress Stack

* Web server
* PHP
* MySQL

## Terminology

* Core
* The Loop
* Themes
* Plugins
* Post Types
	* Default (Posts, Pages)
		* The main difference between posts and pages is _hierarchy_.
	* "Special" Post Types (Attachments, Revisions, Navigation Menu Items)
	* Custom Post Types
* Taxonomies
	* Categories
	* Tags

	Again, difference between categories and tags comes down to _hierarchy_.

	[if categories are the table of contents for your blog, tags represent the index](https://managewp.com/wordpress-categories-tags-seo)

	* Custom Taxonomies
* Hooks
	* Actions
	* Filters
* APIs

## Template Hierarchy

* index.php
* style.css
* functions.php
* Archive templates
* Post templates
* Static pages
* Static page alternate templates
* Template parts
