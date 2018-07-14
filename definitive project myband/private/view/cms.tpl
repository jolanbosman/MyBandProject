
<h1>CMS</h1>

<p>
    <a href="index.php?page=new">Create new article</a>
</p>
<table>
    <tr>
        <td>ID</td><td>Title</td><td>Content</td><td>Control Panel</td>
    </tr>
{foreach from=$articles item=article}
    <tr>
    <td>{$article[0]}</td>
    <td>{$article[1]}</td>
    <td>{$article[2]}</td>
    <td><a href="index.php?page=edit&article_id={$article[0]}">EDIT</a></td>
    <td><a href="index.php?page=cms&delete_id={$article[0]}">DELETE</a></td>
    </tr>
{/foreach}
</table>


