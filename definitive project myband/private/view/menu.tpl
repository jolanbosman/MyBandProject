
<nav class="navbar">
    <img src="images/logo.png" alt="LOGO">
    <a href="index.php?page=home">HOME</a>
    <a href="index.php?page=news">NEWS</a>
    <a href="index.php?page=contact">CONTACT</a>
    <a href="index.php?page=admin">BEHEREN</a>


    <form method="get" action="index.php">
        <input type="hidden" name="page" value="news">
        <input name="searchterm" placeholder="Search Here">
        <input type="submit" name="submit" value="Search">
    </form>

</nav>
<div class="site-content">