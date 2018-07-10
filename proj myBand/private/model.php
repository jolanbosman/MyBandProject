<?php

function make_connection() {
    $mysqli = new mysqli('localhost','root','','myband_db');
    if ($mysqli->connect_errno) {
        die('connection error: ' . $mysqli->connect_errno . '<br>');
    }
    return $mysqli;
}

function get_articles() {
    $mysqli = make_connection();
    $query = "SELECT title FROM articles";
    $stmt = $mysqli->prepare($query) or die ('Error preparing 1.');
    $stmt->bind_result($title) or die ('Error binding results 1.');
    $stmt->execute() or die ('Error executing');
    $results = array();
    while ($result = $stmt->fetch()) {
        $results[] = $title;
    }
return $results;
}

function get_some_articles() {
    global $pageno, $searchterm;
    $mysqli = make_connection();
    $firstrow = ($pageno -1) * ARTICLES_PER_PAGE;
    $per_page = ARTICLES_PER_PAGE;

    $query = "SELECT article_id, title , content, imagelink ";
    $query .= "FROM articles ";
    $query .= "WHERE title LIKE ? OR ";
    $query .= "content LIKE ? ";
    $query .= "ORDER BY article_id DESC ";
    $query .= "LIMIT $firstrow,$per_page";

    $stmt = $mysqli->prepare($query) or die ('Error preparing 2.');
    $stmt->bind_param('ss', $searchterm, $searchterm) or die ('Error binding searchterm.');
    $stmt->bind_result($id, $title, $content, $imagelink) or die ('Error binding results 1.');
    $stmt->execute() or die ('Error executing');
    $results = array();
    while ($stmt->fetch()) {
        $article = array();
        $article[] = $id;
        $article[] = $title;
        $article[] = $content;
        $article[] = $imagelink;
        $results[] = $article;
    }
    return $results;
}

function get_number_of_pages() {
    $number_of_pages = calculate_pages() or die ('Error calculating.');
    return $number_of_pages;
}

function calculate_pages() {
    $mysqli = make_connection();
    $query = "SELECT * FROM articles";
    $result = $mysqli->query($query) or die ('Error querying 2');
    $rows = $result->num_rows;
    $number_of_pages = ceil($rows / ARTICLES_PER_PAGE);
    return $number_of_pages;
}

function verify_login() {

}

function check_login() {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == 'admin') {
        $_SESSION['loggedin'] = 'loggedin';
        setcookie('username',$username, time() + 3600);
    }
}

function delete_id() {
    $id = $_GET['id'];
    $query = "DELETE FROM articles WHERE article_id = {$article[0]}";
    $result = mysqli_query($dbc,$query) or die ('Error deleting');
    header("Location: beheren.php");
}