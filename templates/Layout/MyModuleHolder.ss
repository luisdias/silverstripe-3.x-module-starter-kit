<div class="content-container">     
    <article>
        <h1>$Title</h1>
        <div class="content">$Content</div>
    </article>
    <% loop Children %>
        <article>
            <h2><a href="$Link" title="Read more on &quot;{$Title}&quot;">$Title</a></h2>
            <p>$Content.FirstParagraph</p>
            <a href="$Link" title="Read more on &quot;{$Title}&quot;">Read more &gt;&gt;</a>
        </article>
    <% end_loop %>
    $Form
</div>