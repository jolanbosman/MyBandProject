<h2>{$title}</h2>

<div>
<a href="index.php?page=home">HOME</a>
<a href="index.php?page=news">NEWS</a>
<a href="index.php?page=contact">CONTACT</a>
<a href="index.php?page=beheren">BEHEREN</a>
</div>

<form method="get" action="index.php">
    <input type="hidden" name="page" value="news">
    <input name="searchterm">
    <input type="submit" name="submit" value="ZOEK">
</form>