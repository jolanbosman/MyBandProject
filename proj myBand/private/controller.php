<?php

function homepage_action( ) {
    global $smarty, $page;
    $articles = get_articles();
    $smarty->assign('articles',$articles);
    // VIEWS
    display_page($page);

}

function page_not_found_action() {
    //view
    global $smarty;
    $smarty->display('notfound.tpl');
}

function contact_action() {
    global $page;
    display_page($page);
}

function news_action() {
    global $smarty, $pageno, $page, $searchterm;
    // MODEL
    $articles = get_some_articles();
    $number_of_pages = get_number_of_pages();
    $smarty->assign('current_page',$pageno);
    $smarty->assign('number_of_pages',$number_of_pages);
    $smarty->assign('articles',$articles);
    // VIEWS
    display_page($page);
}

function display_page($page) {
    global $smarty;
    $smarty->assign('title',strtoupper($page));
    $smarty->display('header.tpl');
    $smarty->display('menu.tpl');
    $smarty->display($page .'.tpl');
    $smarty->display('footer.tpl');
}


function login_action() {
    check_login();
}

function show_login_form() {
    global $smarty;
    $smarty->display('header.tpl');
    $smarty->display('inlogformulier.tpl');
    $smarty->display('footer.tpl');
}

function beheer_action() {
    global $smarty;
    $articles = get_some_articles();
    $smarty->assign('articles',$articles);
    $smarty->display('header.tpl');
    $smarty->display('cms.tpl');
    $smarty->display('footer.tpl');
}

function delete_action() {
    delete_id();
}

