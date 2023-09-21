<?php
/**
 * Plugin Name:       Minimum
 * Description:       Plugin
 * Version:           1.0.12

 */
// 插件名称
define( 'PLUGIN_NAME', '购买倍数限制' );

// 插件版本
define( 'PLUGIN_VERSION', '1.0.0' );

// 插件激活函数
function plugin_activate() {
	// 插件激活时执行的代码
}

// 插件禁用函数
function plugin_deactivate() {
	// 插件禁用时执行的代码
}

// 插件路径
define( 'PLUGIN_DIR', dirname( __FILE__ ) );

// 插件文件
include_once( PLUGIN_DIR . '/functions.php' );

// 插件启动
add_action( 'plugins_loaded', 'plugin_init' );

// 插件初始化函数
function plugin_init() {
	// 插件初始化时执行的代码
}

// 插件功能函数
function plugin_function() {
	// 插件功能函数
}

// 插件卸载函数
function plugin_uninstall() {
	// 插件卸载时执行的代码
}
