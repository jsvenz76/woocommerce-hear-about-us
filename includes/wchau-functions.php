<?php
/**
 * @author Koen Van den Wijngaert <koen@siteoptimo.com>
 */

function wchau_get_template($template) {
	$plugin_path = trailingslashit(wchau_get_plugin_path());

	require_once $plugin_path . 'templates/' . $template . '.php';
}

function wchau_get_plugin_path() {
	global $WCHAU;

	return $WCHAU->plugin_path();
}