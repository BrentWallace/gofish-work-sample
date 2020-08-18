# GoFish Work Sample
###### A Wordpress theme created as a work sample for GoFish Digital.

This theme was developed based on the sample PSD provided. Development of this theme began with the [Underscores starter template](https://underscores.me/), a minimal theme designed to serve as a jumping off point when developing new themes.

## Plugins & Dependencies
This theme depends on a handful of additional tools and pieces of software to function. Those are:
* [Bootstrap Frontend Toolkit](https://getbootstrap.com) - The majority of the CSS and responsive behaviors.
* [WP Bootstrap Navwalker](https://github.com/wp-bootstrap/wp-bootstrap-navwalker) - An extension of the Wordpress walker class that is needed to correctly apply the appropriate nav CSS classes to the navmenu.
* [Advanced Custom Fields](https://www.advancedcustomfields.com/) - Creates the fields needed in the wp-admin area to enter custom content.
* [Contact form 7](https://contactform7.com/) - Contact Form 7 was used to generate the contact form near the bottom of the page.

In addition to the essential plugins listed above, I've also installed a handful of additional plugins. Those plugins are:
* Smush - Automatic image compression.
* WP Super Cache - Page caching and other performance improvements.
* Yoast SEO - SEO management plugin.

## Menu Locations
The theme provides six Wordpress editable menu locations:
* Primary - The main menu at the top of the page.
* Secondary - The right side of the menu at the top of the page. Items in this section are appended to the primary menu when collapsed via javascript.
* Footer 1 - The leftmost column of links in the footer section.
* Footer 2 - The center column of links in the footer section.
* Footer 3 - The rightmost column of links in the footer section.
* Social and Privacy - The row of links and icons at the bottom of the footer section. The icons are added by creating a custom link, then adding an img tag as the link text.

## Custom Post Types
Custom post types were created for the services and awards sections. An ACF custom field was attached to each of these post types to hold the icon that is displayed along with the post title and content.

## Page Content Sections
The homepage content that is not part of the header or footer is contained in the one-page template page-home.php. The primary wordpress block editor content is ignored in favor of the ACF fields attached to the homepage. The ACF fields are divided into groups with the ACF 'group' field type, with sub-fields mapped to corresponding page elements. The fields are queried on the page template with the ``` get_fields() ``` function, which returns an array that is then broken down into smaller arrays by block for easier referencing in the template.

### Jumbotron
This is the main hero image section. ACF fields for this section are:
* Jumbotron Background - ACF Image Field - The image to be displayed in the background.
* Jumbotron Content - ACF WYSIWYG Editor - The content to be displayed in the white box.

### Clients Block
The section below the Jumbotron that contains the client logos. ACF fields for this section are:
* Left Text - ACF Text Field - The text that is displayed to the left of the logos.
* Logos - ACF WYSIWYG Editor - Client logos are added in this section, with alignment set to 'none' and the 'my-3 mx-2' css classes added.
* Right Text - ACF Text Field - The text that is displayed to the right of the logos.

### Services Block
The section below the clients area that displays the services offered. ACF fields for this section are:
* Services Header - ACF Text Field - The text that is rendered as the section header.
* Services Content - ACF WYSIWYG Editor - The content that is rendered between the header and the service items below.
* Services - ACF Post Object Field - This field provides a dropdown menu to select services to be displayed on the homepage. Multiple selections are possible. Order can be changed by dragging and dropping.

### Awards Block
The section below the services where awards are displayed. Structure closely resembles the above services block. ACF fields for this section are:
* Awards Header - ACF Text Field - The text that is rendered as the section header.
* Awards Content - ACF WYSIWYG Editor - The content that is rendered between the header and the awards display.
* Awards - ACF Post Object Field - This field provides a dropdown menu to select the awards to be displayed on the homepage. Multiple selections are possible. Order can be changed by dragging and dropping.

### About Us Block
This is the section below the awards where a small text area is rendered alongside a grid of images. ACF fields for this section are:
* About Us Content - ACF WYSIWYG Field - The content that is rendered in the upper-left text field.
* Left Image - ACF Image Field - This is the image to be displayed below the content field.
* Center Image - ACF Image Field - This is the image in the center column of the grid. It utilizes the full height of the div, so a vertically-oriented image works best.
* Upper Right Image - ACF Image Field - This is the image in the upper right corner of the grid. Set to use 50% of the height, so a square aspect ratio works well here.
* Lower Right Image - ACF Image Field - This is the image in the lower right corner of the grid. Set to use the remaining 50% of the height, so another square aspect ratio works here.

### Contact Us Block
This the area to the left of the contact form. The ACF Fields for this section are:
* Contact Us Content - ACF WYSIWYG Field - All content to the left of the contact form is contained on this single field.

## Additional Page Content
### Contact Form
I've learned that GoFish typically uses gravity forms, but lacking a license for their software I decided to use another form plugin called Contact Form 7. The form is injected into the template using the ``` do_shortcode() ``` function. The default form styling is overridden by the custom styles located in custom.css.

## Responsive Functions
The vast majority of page responsiveness is handled with Bootstrap CSS classes, but a few responsive functions are handled in the js/custom.js file.

### Get Window Width
A function was needed to check the width of the viewing window. the ```getWindowWidth()``` function does just that and stores it to ```var windowWidth```.

### Primary and Secondary Menu
The primary and secondary menus are injected into the template with ```wp_nav_menu()```, which works well enough on large screens, but I needed a way to combine them when the menu collapses for small screens. The ```shiftMenu()``` function checks the current value of ```windowWidth``` then shifts the items contained in the secondary menu into the primary when below its breakpoint, and the reverse when above. An additional boolean ```menuCollapsed``` Keeps track of the menu state to prevent unnecessary DOM manipulation if the menu items are already in the right place.

### Services Section Borders
The services section has borders inserted between each of the services when rendered in a grid on larger screens. Once the grid is converted to a single column the borders become unnecessary. The ```applyServiceClasses()``` function applies and removes the necessary classes based on ```windowWidth```. The function collects all service elements with the "service" class into a node list, then performs a ```forEach()``` loop over the array, with a switch statement keyed on the node list index applying or removing the appropriate classes. An additional ```serviceClassesApplied``` boolean prevents unnecessary DOM manipulation if the appropriate classes have already been applied or removed.

### Resize Function
This function collects the previous responsive functions into a single function that gets called once on ```window.onload``` and again at every ```window.onresize``` to respond as required to window width.
