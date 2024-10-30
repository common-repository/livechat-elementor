<?php

define( 'WPLC_OPTION_PREFIX', 'livechat_' );
define( 'WPLC_MENU_SLUG', 'livechat' );
define( 'WPLC_RESOURCES_URL', 'https://www.livechat.com/wp-resources-integration/' );
define( 'WPLC_APP_URL_PATTERN', 'https://connect.livechatinc.com/%s/%s%s' );
define( 'WPLC_API_URL_PATTERN', 'https://%s.livechatinc.com' );
define( 'WPLC_WIDGET_URL_REGEX', '/^https:\/\/connect(-eu)?\.livechatinc\.com\/api\/v1\/script\/([a-z]|[A-Z]|[0-9]|[-]){36}\/widget\.js(\?lcv=([a-z]|[A-Z]|[0-9]|[-]){36})?$/' );
define( 'WPLC_ELEMENTOR_WIDGET_URL_REGEX', '/^https:\/\/connect(-eu)?\.livechatinc\.com\/api\/v1\/script\/([a-z]|[A-Z]|[0-9]|[-]){36}\/%s\.js$/' );
define( 'WPLC_AA_URL', 'https://my.livechatinc.com' );
define( 'WPLC_CONNECT_BRIDGE_SCRIPT_URL', 'https://cdn.livechat-static.com/integrations/integrations-connect/connect-bridge.js' );
define( 'WPLC_PARTNER_ID', 'nQCr28N7R' );
define( 'WPLC_UTM_SOURCE', 'elementor.com' );
define( 'WPLC_UTM_MEDIUM', 'integration' );
define( 'WPLC_UTM_CAMPAIGN', 'elementor_integration' );
define( 'WPLC_PLUGIN_SLUG', 'livechat-elementor' );
define( 'WPLC_PLUGIN_MAIN_FILE', 'livechat-elementor/elementor-livechat.php' );

const WPLC_DEPRECATED_OPTION_PREFIXES = array(
	'wp-legacy'  => 'livechat_',
	'woo-legacy' => 'wc-lc_',
	'woo-2.x'    => 'woo_livechat_',
);
