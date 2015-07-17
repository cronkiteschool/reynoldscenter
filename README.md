Reynolds Center Site WordPress theme
======

Child Theme of Fraction Premium Theme for the Donald W. Reynolds National Center for Business Journalism site.

## Requirements
1. [Fraction Premium Theme By Orange Themes](http://themeforest.net/item/fraction-multipurpose-news-magazine-theme/8655281) - the theme must be installed into the folder name: **fraction-theme**

## Resources
1. Fraction Premium Theme By Orange Themes
    * Link: http://themeforest.net/item/fraction-multipurpose-news-magazine-theme/8655281
    * License: GNU General Public License
1. Above The Fold Optimization
    * Link: https://wordpress.org/plugins/above-the-fold-optimization/
1. Autoptimize
    * Link: https://wordpress.org/plugins/autoptimize/
    * License: GPLv2 or later
1. EWWW Image Optimizer
    * Link: http://wordpress.org/extend/plugins/ewww-image-optimizer/
    * License: GPLv3
1. GoSquared
    * Link: https://wordpress.org/plugins/gosquared-livestats/
    * License: GPL3
1. iTunes Lookup Widget
    * Link: https://github.com/itok/itunes-lookup-widget
    * License: GPLv2 or later
1. NK Google Analytics
    * Link: https://wordpress.org/plugins/nk-google-analytics/
1. Popups - WordPress Popup
    * Link: https://wordpress.org/plugins/popups/
    * License: GPLv2 or later
1. Premium DOIFD
    * Link: https://wordpress.org/plugins/double-opt-in-for-download/
1. Regenerate Thumbnails
    * Link: https://wordpress.org/plugins/regenerate-thumbnails/
    * License: GPLv3 or later
1. Related
    * Link: https://wordpress.org/plugins/related/
    * License: GPLv2 or later
1. Simple 301 Redirects
    * Link: https://wordpress.org/plugins/simple-301-redirects/
    * License: GPLv2 or later
1. Simple Share Buttons Adder
    * Link: https://wordpress.org/plugins/simple-share-buttons-adder/
    * License: GPLv2
1. The Events Calendar
    * Link: https://wordpress.org/plugins/the-events-calendar/
    * License: GPLv2 or later
1. W3 Total Cache
    * Link: https://wordpress.org/plugins/w3-total-cache/
     * License: GPLv2 or later
1. WordPress SEO by Yoast
    * Link: https://wordpress.org/plugins/wordpress-seo/
    * License: GPL3
1. WPBakery Visual Composer
    * Link: http://vc.wpbakery.com

## Site configuration

### HTTP compression
Compress the following:
```
  text/html text/plain text/xml text/css application/xml application/xhtml+xml application/rss+xml application/javascript application/x-javascript application/x-httpd-php application/x-httpd-fastphp
```

### Fraction Orange Theme Settings

#### General

##### General
* Header Logo Image: https://businessjournalism.org/wp-content/uploads/2015/01/Reynolds-Logo-e1433896827232.png
* Favicon: https://businessjournalism.org/wp-content/uploads/2015/01/favicon.ico
* Show Search in Menu: Enable

##### Blog
* Blog Page Title in Singel News: Disable
* Unit Settings:
	* Show thumbnails in blog post list: Enable
	* Show "no image" thumbnail, when no thumbnail is available: Disable
* Show thumbnail in open post/page: Hide
* Show Post Author In Single Post: Show
* Show Post Date In Single Post: Show
* Show Post Categories In Single Post: Hide
* Show "About Author" In Single Post: Hide
* Show "Similar News" In Single Post: Hide
* Show Share Buttons: Hide
* Show Post Comment Count: Custom

##### Gallery/Portfolio
* Gallery Settings
	* Items per gallery page: 6
* Portfolio Settings
	* Items per gallery page: 6
* Show "Similar Posts" In Single Galley: Hide
* Show "Similar Posts" In Single Portfolio: Hide

##### Contact/Footer
* Twitter Account: Blank
* Contact Information: Blank
* Footer CopyRight text: `© 2015 Copyright <b>Donald W. Reynolds National Center for Business Journalism</b>. All Rights reserved.`

##### Banners
* Blog Page Banner: Disable
* Default Single Post Banner: Disable
* Select Pop Up Banner Type: Off
* Banner Settings: Defaults

#### Style Settings

##### Font Style
* Main font family: Open Sans
* Titles font family: Montserrat
* Article titles font family: PT Sans Narrow
* Main font size: 14
* Font Character Sets: Disable all

##### Page Colors/Style
* Default Category/News page Color: 006738
* Main color scheme: 006738
* Body Backgrounds (only boxed view): Pattern
	* Patterns: Texture 6

##### Layout
* Enable Responsive: Enable
* Fixed Menu: Disable
* Page Layout: Boxed
* Blog Post Images/Video/Audio Size: Small Images

####Sidebar Settings
* Main Sidebar Position: Right
* Second Sidebar Position: Custom
* Show The Sticky Sidebar Under Main Sidebar: Disable
* Add Sidebar: None
* Sidebar Sequence:
	1. home
	2. inner
	3. jobs

### W3 Total Cache Settings

#### General Settings
* Page Cache: Enabled
* Page Cache Method: Disk Enhance
* Minify: Disable (Using Autoptimize plugin)
* Database Cache: Enabled
* Database Cache Method: Memcached
* Object Cache: Enable
* Object Cache Method: Memcached
* Browser Cache: Enable

#### Page Cache Settings
* Cache posts page: Enable
* Don't cache front page: Disable
* Cache feeds: site, categories, tags, comments: Enable
* Cache SSL (https) requests: Disable
* Cache URIs with query string variables: Disable
* Cache 404 (not found) pages: Disable
* Cache requests only for businessjournalism.org site address: Disable
* Don't cache pages for logged in users: Enable
* Automatically prime the page cache: Disable

#### Database Cache Settings
leave at defaults

#### Object Cache Settings
leave at defaults

#### Browser Cache Settings

##### General
* Set Last-Modified header: Enabled
* Set expires header: Disabled
* Set cache control header: Enabled
* Set entity tag (eTag): Enabled
* Set W3 Total Cache header: Disabled
* Enable HTTP (gzip) compression: Enabled

##### CSS & JS
* Set Last-Modified header: Enabled
* Set expires header: Enabled
* Expires header lifetime: 604800
* Set cache control header: Enabled
* Cache Control policy: cache with max-age
* Set entity tag (eTag): Enabled
* Set W3 Total Cache header: Disabled
* Enable HTTP (gzip) compression: Enabled

##### HTML & XML
* Set Last-Modified header: Enabled
* Set expires header: Disabled
* Expires header lifetime: 3600
* Set cache control header: Enabled
* Cache Control policy: cache with max-age and validation
* Set entity tag (eTag): Enabled
* Set W3 Total Cache header: Disabled
* Enable HTTP (gzip) compression: Disabled

##### Media & Other Files
* Set Last-Modified header: Enabled
* Set expires header: Enabled
* Expires header lifetime: 604800
* Set cache control header: Enabled
* Cache Control policy: cache with max-age
* Set entity tag (eTag): Enabled
* Set W3 Total Cache header: Disabled
* Enable HTTP (gzip) compression: Enabled
