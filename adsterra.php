<?php
/*
 * Plugin Name:       Adsterra
 * Plugin URI:        
 * Description:       Easily integrate Adsterra ads into your WordPress site. Adsterra UnOfficial WordPress Plugin
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Nishant Shah
 * Author URI:        https://shahnishant.com.np
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://adsterra.com/adsterra-plugin/
 * Text Domain:       adsterra
 */
    require('db-class.php');
    
    
   /* Pounder */
function add_popunder() {
    $db = new Database();
    $popunder = $db->getDataByName('popunder');
    if ($popunder) {
        if (($popunder['additional'] == 'post' && is_single()) || ($popunder['additional'] == 'page' && is_page())) {
            echo stripslashes(base64_decode($popunder['value']));
        } elseif ($popunder['additional'] == 'everywhere') {
            echo stripslashes(base64_decode($popunder['value']));
        }
    }
}

add_action('wp_head', 'add_popunder');


    // Activation Hook
    register_activation_hook(__FILE__, 'create_adsterra_table');

    function create_adsterra_table() {
        $db = new Database();
        $db->createTable();
    }

    // Deactivation Hook
    register_deactivation_hook(__FILE__, 'delete_adsterra_table');

    function delete_adsterra_table() {
        global $db;
        $table_name = $db->getTableName();

        if ($db->tableExists()) {
            $db->dropTable();
        } else {
            error_log("$table_name doesn't exist. Action: Adsterra Plugin Deactivation");
        }
    }

    // Add CSS in Admin Menu
    function add_custom_styles() {
        global $pagenow;

        if ($pagenow === 'admin.php' && isset($_GET['page']) && in_array($_GET['page'], ['adsterra-dashboard', 'adsterra-analytics', 'adsterra-settings'])) {
            wp_enqueue_style('custom-plugin-styles', plugins_url('css/tailwind.css', __FILE__));
            wp_enqueue_script('custom-plugin-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js', array('jquery'), '1.0', true);
        }
    }

    add_action('admin_enqueue_scripts', 'add_custom_styles');

    // Admin Menu Registration
    add_action('admin_menu', 'add_menu');

    function add_menu() {
        global $logo_url;

        $logo_url = 'https://www.google.com/s2/favicons?domain=adsterra.com&sz=12';

        add_menu_page(
            'Adsterra',
            'Adsterra',
            'manage_options',
            'adsterra-dashboard',
            'adsterra_dashboard_callback',
            $logo_url,
            100
        );

        $submenu_pages = [
            ['Analytics', 'adsterra-analytics'],
            ['Settings', 'adsterra-settings'],
        ];

        foreach ($submenu_pages as $page) {
            add_submenu_page(
                'adsterra-dashboard',
                $page[0],
                $page[0],
                'manage_options',
                $page[1],
                str_replace('-', '_', $page[1]) . '_callback'
            );
        }
    }

    // Dashboard
    function adsterra_dashboard_callback() {
        include('home.php');
    }

    // Analytics
    include('analytics.php');

    // Settings
    function adsterra_settings_callback() {
        $db = new Database();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $form_names = [
                'popunder' => 'Popunder',
                'social_bar' => 'social_bar',
                'native_banner' => 'native_banner',
                '468_60_banner' => '468_60',
                '160_300_banner' => '160_300',
                '300_250_banner' => '300_250',
                '160_600_banner' => '160_600',
                '320_50_banner' => '320_50',
                '728_90_banner' => '728_90',
                'api_key' => 'api_key',
            ];

            foreach ($form_names as $form_name => $name) {
                if (isset($_POST[$form_name])) {
                    $value = $_POST["ad_script"];
                    $additional = stripos($form_name,'banner') || $form_name == 'api_key'  ? ' ' : $_POST["show_in"];
                    $db->insertOrUpdateData([
                        'name' => $name,
                        'value' => base64_encode($value),
                        'additional' => $additional,
                    ]);
                }
            }
        }
    include('settings.php');
    }
    

// Add Ad Scripts in front-end


function add_social_bar() {
    $db = new Database();
    $social_bar = $db->getDataByName('social_bar');
    
    if ($social_bar) {
        if (($social_bar['additional'] == 'post' && is_single()) || ($social_bar['additional'] == 'page' && is_page())) {
            echo stripslashes(base64_decode($social_bar['value']));
        } elseif ($social_bar['additional'] == 'everywhere') {
            echo stripslashes(base64_decode($social_bar['value']));
        }
    }
}

add_action('wp_head', 'add_social_bar');


function banner_shortcode_function($atts) {
    $db = new Database();
    $atts = shortcode_atts(array(
        'size' => 'native_banner',
    ), $atts);
    $size = str_replace('/', '_', $atts['size']);
    $results = $db->getDataByName($size);
    if($results){
       $code = stripslashes(base64_decode($results['value']));
    }else{
        return " ";
    }
    
    return $code;    
}

add_shortcode('banner', 'banner_shortcode_function');
