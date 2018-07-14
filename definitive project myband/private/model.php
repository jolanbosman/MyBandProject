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



function check_login() {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == 'admin') {
        $_SESSION['loggedin'] = 'loggedin';
        setcookie('username',$username, time() + 3600);
    }
}

function delete_id() {
    if ( isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];
        $mysqli = make_connection();
        $query = "DELETE FROM articles WHERE article_id = '$id'";
        $mysqli->query($query) or die ('Error binding 4');
    }
}

function edit_id() {
    if (isset($_POST['article_id'])) {
        print_r($_POST);
        $mysqli = make_connection();

        $article_id = $_POST['article_id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $imagelink = $_POST['image'];

        $query = "UPDATE articles SET title='$title', content='$content', imagelink='$imagelink' WHERE article_id=$article_id";

        if ($mysqli->query($query) === TRUE) {
            echo "Updated article";
        } else {
            echo "Error updating record: " . $mysqli->error;
        }
    }
}

function new_article() {
    if (isset($_POST['title'])) {
        print_r($_POST);
        $mysqli = make_connection();

        $title = $_POST['title'];
        $content = $_POST['content'];
        $imagelink = $_POST['image'];

        $query = "INSERT articles SET title='$title', content='$content', imagelink='$imagelink'";

        if ($mysqli->query($query) === TRUE) {
            echo "Created new article";
        } else {
            echo "Error updating record: " . $mysqli->error;
        }
    }
}

// get the id from the url parameter
function get_article_id_from_url() {
    if (!isset($_GET['article_id'])) {
        exit();
    }
    else {
        $articleId = $_GET['article_id'];
        return $articleId;
    }
}

// get specific article by id
function get_specific_article( $id ) {
    $mysqli = make_connection();

    $query = "  SELECT article_id, title , content, imagelink 
                FROM articles 
                WHERE article_id = $id ";

    $stmt = $mysqli->prepare($query) or die ('Error preparing specific article query');
    $stmt->bind_result($id, $title, $content, $imagelink) or die ('Error binding results 1.');
    $stmt->execute() or die ('Error executing');
    $article = array();
    while ($stmt->fetch()) {
        $article[] = $id;
        $article[] = $title;
        $article[] = $content;
        $article[] = $imagelink;
    }
    return $article;
}