<?php

/*
h1. Wet Hive theme for the Textpattern Content Management System

Copyright (C) 2013 Robert Wetzlmayr

This theme demonstrates how to amend and customize "Hive", one of the core admin-side themes.

It serves as a starting point for your own customizations and is not meant to be complete (or aesthetically pleasing).

You customizations are stored separately from the core theme and will thus survive any updates to core.

h3. Installation

# Download and unzip this theme.
# Create a 'wet_hive' directory in /textpattern/theme.
# Copy 'wet_hive.php' and the accompanying style sheet 'wet_hive.css' into /textpattern/theme/wet_hive.
# Go to the preferences tab and change the admin-side theme to 'Wet_hive'.
# If all went well:
## A kitten will show up instead of the top-left Textpattern logo
## Your admin-side's base font will be set to 'Roboto'.
# Add your own custom styles to /textpattern/theme/wet_hive/custom.css and design away...

h3. Frequently Asked Questions

Q: Can I change the 'wet_hive' name to something else?
A: Yes. Just rename both the directory /textpattern/theme/wet_hive and the file /textpattern/theme/wet_hive/wet_hive.php to your liking.

Q: Can I add more than one style sheet, remove the 'Roboto' font, or add a custom Javascript file to the <head>?
A: Yes. Look into the html_head() function in wet_hive.php.

Q: How can I uninstall this theme?
A: Change the admin-side theme to something else, then delete the /textpattern/theme/wet_hive directory.


This theme is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation, version 2.

This theme is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Textpattern. If not, see <http://www.gnu.org/licenses/>.
*/

if (!defined('txpinterface'))
{
	die('txpinterface is undefined.');
}

// Pull in the parent theme
theme::based_on('hive');

// Define this theme's specialities
class wet_hive_theme extends hive_theme
{
	function html_head()
	{
		$myurl = $this->url;
		$this->url = 'theme/hive/';

		return
			// Use all styles and scripts from the parent theme
			parent::html_head().
			// Add a font resource
			"<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic'>".
			// Overwrite the parent theme's styles with my own custom styles
			"<link rel='stylesheet' href='".$myurl."wet_hive.css'>";
	}

	function manifest()
	{
		return array(
			'author'      => 'Robert Wetzlmayr',
			'author_uri'  => 'http://wetzlmayr.com/',
			'version'     => '0.1',
			'description' => 'Textpattern Wet Hive Theme',
			'help'        => 'http://textpattern.com/admin-theme-help',
		);
	}
}
