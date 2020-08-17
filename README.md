# GoFish Work Sample
###### A Wordpress theme created as a work sample for GoFish Digital.

This theme was developed based on the sample PSD provided. Development of this theme began with the [Underscores starter template](https://underscores.me/), which provided a solid base on which to build.

## Plugins & Dependencies
This theme depends on a handful of additional tools and pieces of software to function. Those are:
* [Bootstrap Frontend Toolkit](https://getbootstrap.com) - The majority of the CSS and responsive behaviors.
* [WP Bootstrap Navwalker](https://github.com/wp-bootstrap/wp-bootstrap-navwalker) - An extension of the Wordpress walker class that is needed to correctly apply the appropriate nav CSS classes to the navmenu.
* [Advanced Custom Fields](https://www.advancedcustomfields.com/) - Creates the fields needed in the wp-admin area to enter custom content.

## Menu Locations
The theme provides six Wordpress editable menu locations:
* Primary - The main menu at the top of the page.
* Secondary - The right side of the menu at the top of the page.
* Footer 1 - The leftmost column of links in the footer section.
* Footer 2 - The center column of links in the footer section.
* Footer 3 - The rightmost column of links in the footer section.
* Social and Privacy - The row of links and icons at the bottom of the footer section.

## Custom Post Types
A custom post type was created for the services and awards sections. A custom field was attached to each of these post types to hold the icon that is displayed along with the post title and content.

## Editing Page Content
The homepage content that is not part of the header or footer is contained in the one page template page-home.php. The primary wordpress block editor content is ignored in favor of the ACF fields attached to the homepage. The ACF fields are divided into groups with the ACF 'group' field type, with sub-fields mapped to corresponding page elements. The fields are queried on the page template with the ``` get_fields() ``` function, which returns an array that is then broken down into smaller arrays by block for easier referencing in the template.
