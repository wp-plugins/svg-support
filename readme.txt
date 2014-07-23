=== SVG Support ===
Contributors: Benbodhi
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=F7W2NUFAVQGW2
Tags: svg, vector, css, style, mime, mime type, embed, img, inline
Requires at least: 3.4
Tested up to: 3.9.1
Stable tag: 2.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allow SVG file uploads using the WordPress Media Library uploader plus direct styling of SVG elements using CSS.

== Description ==

When using SVG images on your WordPress site, it can be hard to style elements within the SVG using CSS. **Now you can, easily!**

Scalable Vector Graphics (SVG) are becoming common place in modern web design, allowing you to embed images with small file sizes that are scalable to any visual size without loss of quality.

This plugin not only provides SVG Support like the name says, it also allows you to easily embed your full SVG file's code using a simple IMG tag.<br />
By adding the class `"style-svg"` to your IMG elements, this plugin dynamically replaces any IMG elements containing the `"style-svg"` class with your complete SVG.

The main purpose of this is to allow styling of SVG elements. Usually your styling options are restricted when using `embed`, `object` or `img` tags alone.

= Features =

* SVG Support for your media library
* Style SVG elements directly using CSS
* Super easy settings page with instructions
* Restrict SVG upload ability to Administrators only
* Set custom css target class
* **Extremely Simple To Use**

= Usage =

Firstly, install SVG Support (this plugin) and activate it.

Once activated, you can simply upload SVG images to your media library like any other file.

As an administrator, you can go to the admin settings page 'Settings' > 'SVG Support' and restrict SVG file uploads to administrators only and even define a custom class to target if you wish.

Now, embed your SVG images just like you would a standard image with the addition of adding the class `"style-svg"` (or the custom class you defined) to your IMG tags that you want this plugin to swap out with your actual SVG code.<br />
For example:

`<img class="style-svg" alt="alt-text" src="image-source.svg" />`
or
`<img class="your-custom-class" alt="alt-text" src="image-source.svg" />`

The whole IMG tag element will now be dynamically replaced by the actual code of your SVG, making the inner content targetable.<br />
This allows you to target elements within your SVG using CSS.

*If you are having any issues, please use the support tab and I will try my best to get back to you quickly*

= Security =

As with allowing uploads of any files, there is potential risks involved. Only allow users to upload SVG files if you trust them. You have the option to restrict SVG usage to Administrators only from the settings page. By default, anyone with Media Library access or upload_files capability will be able to upload SVG files (that is Administrators, Authors and Editors).

= Translations =

* English - default, always included
* *Your translation? - [Just send it in](http://gowebben.com/contact/)*

*Note:* This plugin is localized/translateable by default. This is very important for all users worldwide. So please contribute your language to the plugin to make it even more useful.<br />
For translating I recommend the awesome ["Codestyling Localization" plugin](http://wordpress.org/extend/plugins/codestyling-localization/) and for validating the ["Poedit Editor"](http://www.poedit.net/).

= Feedback =

* I am open to your suggestions and feedback - Thanks for checking out this plugin!
* Drop me a line [@benbodhi](http://twitter.com/benbodhi) or [@GoWebben](http://twitter.com/gowebben) on Twitter
* Follow me on [my Facebook page](http://www.facebook.com/gowebben)
* Or circle [+GoWebben](http://googleplus.url) on Google Plus ;-)

*Note:* This is the second plugin I have submitted to the WordPress repository, I hope you like it. Please take a moment to rate it and click 'works' under compatibility with your version of WordPress.<br />
As always, feel free to send me any suggestions.

== Installation ==

To install this plugin:

= via wp-admin =
1. Upload the compressed version `svg-support.zip` through 'Plugins' > 'Add New' > 'Upload'
2. Click 'Activate Plugin'

or

1. Visit 'Plugins' > 'Add New'
2. Type "SVG Support" into the search field
3. Click 'Install Plugin' and confirm in the pop up
4. Hover over SVG Support and click 'Activate Plugin'


= via FTP =
1. Download plugin file and extract it
2. Upload folder `svg-support` to your `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Got a question? =

I will put the answers to any questions asked here.

== Screenshots ==

1. Activated plugin
2. Admin settings page

== Changelog ==

= 2.1.1 =

* Fixed JS file conditional - worked in local testing but not live

= 2.1 =

* Updates to language files for localization.

= 2.0 =

* Add admin settings page with instructions plus options for restricting to admin use only and setting a custom CSS target class.
* Whole plugin completely re-written and re-structured.
* Added option to restrict SVG uploads to administrators only.
* Added field for custom CSS target class.
* Added stylesheet to admin settings page.

= 1.0 =

* Initial Release.

== Upgrade Notice ==

= 2.1.1 =

* Update to conditional in JS file

= 2.1 =

* Updated language files for localization that were missed in version 2.0.

= 2.0 =

* SVG Support has been completely re-written and re-structured. It now includes an admin settings page with instructions, plus options for restricting to admin use only and setting a custom CSS target class.

= 1.0 =

* Initial Release.

== Translations ==

* English - default, always included
* *Your translation? - [Just send it in](mailto:wp@benbodhi.com)*

*Note:* This plugin is localized/translateable by default. This is very important for all users worldwide. So please contribute your language to the plugin to make it even more useful. For translating I recommend the awesome ["Codestyling Localization" plugin](http://wordpress.org/extend/plugins/codestyling-localization/) and for validating the ["Poedit Editor"](http://www.poedit.net/).

== Additional Info ==
**Idea Behind / Philosophy:** I needed an easy way to include SVG support in sites instead of having to copy and paste the code for each one. I found a [really cool snippet](http://stackoverflow.com/questions/11978995/how-to-change-color-of-svg-image-using-css-jquery-svg-image-replacement) of jQuery written by Drew Baker a while ago and have used it (modified for WordPress) a few times until I was inspired to build it all into a plugin for ease of use and to share with others. Now styling SVG elements is super easy :)

== Future Features ==
* Help / Instructions Page **ADDED in 2.0**
* Ability to choose user roles allowed to upload SVG format (eg. restrict to administrator) **ADDED in 2.0**
* Option to choose specific user ID's and restrict usage for everyone else (helpful if you have multiple administrators)

Again, feel free to [shoot me suggestions](mailto:wp@benbodhi.com)

== Credits ==
[Benbodhi Mantra](http://benbodhi.com/) [@benbodhi](http://twitter.com/benbodhi) from [GoWebben](http://gowebben.com/) [@GoWebben](http://twitter.com/gowebben)