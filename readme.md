# Units for WordPress


## Overview

Units provides your users with a way to choose and display their preferred unit of measurement on the fly. The user's preferred unit of measurement is saved via session, cookie, or none – configurable under the plugin settings. 

Any number of primary/alternate units can be added, along with their conversion formulas.

[WordPress Repository](https://wordpress.org/plugins/units/)

#### Demo 
[View the Demo](http://unitswitcher.com)


#### Installation 
1. Upload the `units` directory to wp-content/plugins/
2. Activate the plugin through the Plugins menu in WordPress
3. Visit the plugin settings to add units of measurement
4. Use the unit_switcher() template function or [unit_switcher] shortcode to display the switcher


#### Usage
Add primary units under Settings > Units. Alternate units may be added by providing their name and conversion formula. Multiple alternate units may be added for each primary unit.

Use the function `unit_switcher($value, $primaryunit, $round)` in your template to display the switcher. Pass the stored value as the first parameter and primary unit of measurement as the second value.

To display a single switcher, the shortcode [unit_switcher] is available for use. The shortcode requires two parameters: `unit` (the primary unit being converted) and `value` (the stored value).