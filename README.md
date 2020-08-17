# GoFish Work Sample
###### A Wordpress theme created as a work sample for GoFish Digital.

This theme was developed based on the sample PSD provided. Development of this theme began with the [Underscores starter template](https://underscores.me/), which provided a solid base on which to build.

## Plugins & Dependencies
This theme depends on a handful of additional tools and pieces of software to function. Those are:
* [Bootstrap Frontend Toolkit](https://getbootstrap.com) - The majority of the CSS and responsive behaviors.
* [WP Bootstrap Navwalker](https://github.com/wp-bootstrap/wp-bootstrap-navwalker) - An extension of the Wordpress walker class that is needed to correctly apply the appropriate nav CSS classes to the navmenu.
* [Advanced Custom Fields](https://www.advancedcustomfields.com/) - Creates the fields needed in the wp-admin area to enter custom content.

In addition to the essential plugins listed above, I've also included the following:
* Smush - Automatic image compression.
* Contact Form 7 - Contact form management plugin. See contact form section below for details.
* WP Super Cache - Page caching and other performance improvements.
* Yoast SEO - SEO management plugin.

## Menu Locations
The theme provides six Wordpress editable menu locations:
* Primary - The main menu at the top of the page.
* Secondary - The right side of the menu at the top of the page. Items in this section are appended to the primary menu when collapsed via javascript.
* Footer 1 - The leftmost column of links in the footer section.
* Footer 2 - The center column of links in the footer section.
* Footer 3 - The rightmost column of links in the footer section.
* Social and Privacy - The row of links and icons at the bottom of the footer section. The icons are added by creating a custom link, then adding an <img> tag as the link text.

## Custom Post Types
Custom post types were created for the services and awards sections. A custom field was attached to each of these post types to hold the icon that is displayed along with the post title and content.

## Page Content Sections
The homepage content that is not part of the header or footer is contained in the one-page template page-home.php. The primary wordpress block editor content is ignored in favor of the ACF fields attached to the homepage. The ACF fields are divided into groups with the ACF 'group' field type, with sub-fields mapped to corresponding page elements. The fields are queried on the page template with the ``` get_fields() ``` function, which returns an array that is then broken down into smaller arrays by block for easier referencing in the template.

### Jumbotron
This is the main hero image section. ACF fields for this section are:
* Jumbotron Background - ACF Image Field - The image to be displayed in the background.
* Jumbotron Content - ACF WYSIWYG Editor - The content to be displayed in the white box.

### Clients Block
The section below the Jumbotron that contains the client logos. ACF fields for this section are:
* Left Text - ACF Text Field - The text that is displayed to the left of the logos.
* Logos - ACF WYSIWYG Editor - Client logos are added in this section, with alignment set to 'none' and the 'm-2' css class added.
* Right Text - ACF Text Field - The text that is displayed to the right of the logos.

### Services Block
The section below the clients area that displays the services offered. The ACF fields for this section are:
* Services Header - ACF Text Field - The text that is rendered as the section header.
* Services Content - ACF WYSIWYG Editor - The content that is rendered between the header and the service items below.
* Services - ACF Post Object Field - This field provides a dropdown menu to select services to be displayed on the homepage. Multiple selections are possible. Order can be changed by dragging and dropping.

### Awards Block
The section below the services where awards are displayed. Structure closely resembles the above services block. The ACF fields for this section are:
* Awards Header - ACF Text Field - The text that is rendered as the section header.
* Awards Content - ACF WYSIWYG Editor - The content that is rendered between the header and the awards display.
* Awards - ACF Post Object Field - This field provides a dropdown menu to select the awards to be displayed on the homepage. Multiple selections are possible. Order can be changed by dragging and dropping.

### About Us Block
This is the section below the awards where a small text area is rendered alongside a grid of images. The ACF fields for this section are:
* About Us Content - ACF WYSIWYG Field - The content that is rendered in the upper-left text field.
* Left Image - ACF Image Field - This is the image to be displayed below the content field.
* Center Image - ACF Image Field - This is the image in the center column of the grid. It utilizes the full height of the <div>, so a vertically-oriented image works best.
* Upper Right Image - ACF Image Field - This is the image in the upper right corner of the grid. Set to use 50% of the height, so a square aspect ratio works well here.
* Lower Right Image - ACF Image Field - This is the image in the lower right corner of the grid. Set to use the remaining 50% of the height, so another square aspect ratio works here.

### Contact Us Block
This the area to the left of the contact form. The ACF Fields for this section are:
* Contact Us Content - ACF WYSIWYG Field - All content to the left of the contact form is contained on this single field.

## Additional Page Content
### Contact Form
I've learned that GoFish typically uses gravity forms, but lacking a license for their software I decided to use another form plugin called Contact Form 7. The form is injected into the template using the ``` do_shortcode() ``` function. The default form styling is overridden by the custom styles located in custom.css.

