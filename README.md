Reynolds Center WordPress Theme
======

Child Theme of Fraction Premium Theme for the Donald W. Reynolds National Center for Business Journalism site.

## Requirements
1. [Fraction Premium Theme By Orange Themes](http://themeforest.net/item/fraction-multipurpose-news-magazine-theme/8655281)
- the theme must be installed into the folder name: **fraction-theme**

## Resources
1. Fraction Premium Theme By Orange Themes
    * Link: http://themeforest.net/item/fraction-multipurpose-news-magazine-theme/8655281
    * License: GNU General Public License
1. Above The Fold Optimization
    * Link: https://wordpress.org/plugins/above-the-fold-optimization/
1. Autoptimize
    * Link: https://wordpress.org/plugins/autoptimize/
    * License: GPLv2 or later
1. Google Webfont Optimizer
    * Link: https://wordpress.org/plugins/google-webfont-optimizer/
    * License: GPLv2
1. GoSquared
    * Link: https://wordpress.org/plugins/gosquared-livestats/
    * License: GPL3
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
1. The Events Calendar
    * Link: https://wordpress.org/plugins/the-events-calendar/
    * License: GPLv2 or later
1. WP Super Cache
    * Link: https://wordpress.org/plugins/wp-super-cache/
    * License: GPLv2 or later
1. WordPress SEO by Yoast
    * Link: https://wordpress.org/plugins/wordpress-seo/
    * License: GPL3
1. WPBakery Visual Composer
    * Link: http://vc.wpbakery.com
1. Broken Link Checker
	* Link: http://w-shadow.com/blog/2007/08/05/broken-link-checker-for-wordpress/
1. Redirection
	* http://urbangiraffe.com/plugins/redirection/
    * License: GPLv3

## Site configuration

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

### Htaccess File
Copy contents of `htaccess.txt` to site's `.htacess` file.

### WP Super Cache Settings

#### Easy
* Caching: On

#### Advanced

##### Caching
* Cache hits to this website for quick access: Enable

##### Miscellaneous
* Use PHP to serve cache files: Enable
* Compress pages ...: Enable
* 304 Not Modified browser caching: Enable
* Don’t cache pages for known users: Enable
* Don’t cache pages with GET parameters: Disable
* Make known users annonnymous ...: Disable
* Cache rebuild: Enable
* Proudly tell the world your server ...:Disable

##### Advanced
* Enable dynamic caching: Disable
* Mobile device support: Disable
* Remove UTF8/blog charset support ...: Disable
*  Clear all cache files when a post or page is published or updated: Disable
* Extra homepage checks: Enable
* Only refresh current page when comments made: Enable
* kAutomatically resize the images: Enable
* List newest cached pages on this page: Disable
* Coarse file locking: Disable
* Late init: Disable
 
##### Cache Location
leave at defaults

##### Expiry Time & Garbage Collection
* Cache Timeout: 3600
* Timer: 600
* Notification Emails: Disable

##### Accepted Filenames & Rejected URIs
leave at defaults

##### Rejected User Agents
leave at defaults

##### Lock Down
* Disabled

##### Directly Cached Files
leave at defaults

#### CDN
leave at defaults

#### Preload
leave at defaults

#### Plugins
leave at defaults

#### Debug
leave at defaults

### Autoptimize Settings

#### HTML Options
* Optimize HTML Code: Enable
* Keep HTML comments: Enable

#### JavaScript Options
* Optimize JavaScript Code: Enable

#### CSS Options
* Optimize CSS Code: Enable
* Generate data ...: Enable

#### CDN Options
leave at defaults

### Above The Fold Optimization

#### Critical Path CSS Settings
* Inline CSS: see `critical-path.css`
* Optimize CSS-delivery: Enable
  - Enhanced loadCSS: Enable
  - Position: Header
  - Ignore List: Blank
  - Remove List: Blank
* Optimize Google Fonts: Enable
* Localize Javascript: Enable
  - Check all.
* Debug-modus: Enable
