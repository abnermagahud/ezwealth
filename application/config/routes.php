<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "main_controller";
$route['^(about_us|ecredit|transfer_ecredit|ecredit_history|buyecredit|products|affiliate|faq|contact_us|dashboard|inactive|active|expired|basic|premium|six_months|one_year|ewallet|payments|capture_page|landing_page|referrals|e_wallet|leads|update_info|online_training|login|logout|loggedout|instant_access|join_now|create_account|change_password|delete_account|paypal|add_bank|delete_announcement|add_announcement|add_admin|delete_admin|pay|starter_activation|year_activation|months_activation|transfer_bank||edit_profile|edit_announcement|exportToExcel|toExcel|withdrawal|createaccount|disapproved_subscription|onchange|onchange_transfer|edit_bank|primarypage|edit_page|sends|getVideoUrl|getWebForm|config_get|create_page|deactivate|accounting|restore_default|exportdaily|exportweekly|exportmonthly|bundle|bundle_activation|get_close_redirect|covertmoney|ecreditconversionhistory|approved_ecredit|disapprove_ecredit|send_message|delete_image|message|delete_message|activate_free_basic|activate_free_premium)(/:any)?$'] = "main_controller/$1";
$route['contact-us'] = "main_controller/contact_us";
$route['join-now'] = "main_controller/join_now";
//$route['capture-page'] = "member/capture_page";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */