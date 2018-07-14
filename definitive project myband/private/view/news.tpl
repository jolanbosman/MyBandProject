<h1>News</h1>
<a href="index.php?page=home">HOME</a>
<h3>Current Page: {$current_page}</h3>
{if $current_page gt 1}
    <a href="index.php?page=news&pageno={$current_page - 1}">Previous Page</a>
{/if}


{if $current_page lt $number_of_pages}
    <a href="index.php?page=news&pageno={$current_page + 1}">Next Page</a>
{/if}


{foreach from=$articles item=article}
    <h2>{$article[1]}</h2>
    <p>{$article[2]}</p>
{/foreach}