<h1>CMS</h1>
<table>
    <tr>
        <td>1</td><td>2</td><td>3</td>
    </tr>
{foreach from=$articles item=article}
    <tr>
    <td>{$article[0]}</td>
    <td>{$article[1]}</td>
    <td>{$article[2]}</td>
    <td><a href="index.php?page=edit&id={$article[0]}">EDIT</a></td>
    <td><a href="index.php?page=delete&id={$article[0]}">DELETE</a></td>
    </tr>
{/foreach}
</table>