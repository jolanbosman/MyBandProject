
<?php

// Require MVC-stuff
require_once('../private/model.php');
require_once('../private/controller.php');
require_once('../private/smarty/Smarty.class.php');

// Create Smarty object and set directories
$smarty = new Smarty();
$smarty->setTemplateDir('../private/view');
$smarty->setCompileDir('../private/tmp');

define('ARTICLES_PER_PAGE',5);

// Check what page is requested (ternary)
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : '1';
$searchterm = isset($_GET['searchterm']) ? '%' . $_GET['searchterm'] . '%' : '%';

if (isset($_POST['submit_login'])) {
    login_action();
}

if (isset($_SESSION['loggedin'])) {
    beheer_action();
    exit();
}

// Call the right controller
switch ($page) {
    case 'beheerder': beheerder_action(); break;
    case 'home': homepage_action($smarty); break;
    case 'news': news_action(); break;
    case 'contact': contact_action(); break;
    case 'login': login_action(); break;
    case 'admin': show_login_form(); break;
    case 'delete': delete_action(); break;
    case 'edit': edit_action(); break;
    case 'cms': beheer_action(); break;
    case 'new': new_action(); break;
    default: page_not_found_action($smarty); break;
}