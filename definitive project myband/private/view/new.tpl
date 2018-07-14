<h1>Create a new article</h1>
<section>
<div class="container">
<form name="new_article" action="" method="POST">
    <input hidden name="article_id" value=""
    <p>
        <label>Title: </label>
        <input name="title" value=""/>
    </p>
    <p>
        <label>Content: </label>
        <textarea name="content" value=""></textarea>
    </p>
    <p>
        <label>Image: </label>
        <input name="image" value=""/>
    </p>
    <input type="submit" name="submit" value="Create post" />
</form>
<p>
    <a href="index.php?page=cms">back to cms</a>
</p>
</div>
</section>