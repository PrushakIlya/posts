<div class="pagination d-flex justify-content-center">
    <div class="d-flex">
        {for $page=1 to $count}
            <a href="/categories/{$category_id}/posts?page={$page}" class="link page {if $page === $current_page} text-primary {/if}">{$page}</a>
        {/for}
    </div>
</div>