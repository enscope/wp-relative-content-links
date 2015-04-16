=== Plugin Name ===
Contributors: mhudak
Tags: content, links, relative
Requires at least: 3.0.1
Tested up to: 4.1.1
License: Apache License 2.0
License URI: https://www.apache.org/licenses/LICENSE-2.0

Simple Wordpress plugin allowing relative links in content displayed by the_content().

== Description ==

To create relative link, use %ROOT% in link URL. It will be replaced in run-time with:
1) if running in multisite environment, replacement will be result of `network_site_url()`
2) if running in non-multisite environment, replacement will be result of `home_url()`

NOTE: As this is running preg-replace each time the_content is called, there can (and will) be performance penalty!

== Installation ==

Simply install and activate.

== Frequently Asked Questions ==

None.

== Changelog ==

= 1.0 =
* Initial release

== Upgrade Notice ==

None.
