# Unit Switcher for WordPress


## Overview

Unit Switcher provides your users with a way to choose and display their preferred unit of measurement on the fly. The user's preferred unit of measurement is saved via session, cookie, or none – configurable under the plugin settings. 

One example of usage would be for a real estate listing website. If land size is stored as acres, it may be helpful to provide a method for users to toggle between acres and kilometers squared as their preferred method of measurement. Another example may be a recipe site, where it may be helpful to provide users with a way to toggle between ingredient measurement units.

Units may be added as needed, along with alternate units and the conversion formulas.


#### Demo 
[View the Demo](http://unitswitcher.com)


#### Installation 
1. Upload unit-switcher to the wp-content/plugins/ directory
2. Activate the plugin through the Plugins menu in WordPress
3. Visit the plugin settings to add units of measurement
4. Use the unit_switcher() template function or [unit_switcher] shortcode to display the switcher


#### Usage
First, add primary units under settings > Unit Switcher. Alternate units may be added by providing their name, singular name and conversion formula. Multiple alternate units may be set.

Use the function `unit_switcher($variable, $primaryunit)` in your template to display the switcher. Pass the stored value as the first paramter and primary unit of measurement as the second value.

To display a single switcher, the shortcode [unit_switcher] is available for use. The shortcode requires two parameters, `unit` (the primary unit being converted) and `value` (the stored value).
