<h1>Edit article</h1>
<section>
<div class="container">
<form name="edit_article" action="" method="POST">
    <input hidden name="article_id" value="{$article[0]}"
    <p>
        <label>Title: </label>
        <input name="title" value="{$article[1]}"/>
    </p>
    <p>
        <label>Content: </label>
        <textarea name="content" value="">{$article[2]}</textarea>
    </p>
    <p>
        <label>Image: </label>
        <input name="image" value="{$article[3]}"/>
    </p>
    <input type="submit" name="submit" value="GO!" />
</form>
<p>
    <a href="index.php?page=cms">back to cms</a>
</p>
</div>
</section>