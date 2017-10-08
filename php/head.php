<?php
	echo Theme::charset('utf-8');
	echo Theme::viewport('width=device-width, initial-scale=1, user-scalable=no');

	echo Theme::headTitle();
	echo Theme::headDescription();

	Theme::favicon('assets/favicon.png');

	// FontAwesome from Bludit Core
	echo Theme::fontAwesome();

        echo Theme::css('assets/css/main.css');
        echo '<noscript>'.Theme::css('assets/css/noscript.css').'</noscript>';

        // Load plugins with the hook siteHead
        Theme::plugins('siteHead');
?>