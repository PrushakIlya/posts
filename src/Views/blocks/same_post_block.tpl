<div class="posts">
    <h2 class="text-white">The Same Posts</h2>
    <div class="d-flex">
        {foreach from=$same_posts item=value}
            {include file="./post_block.tpl"
                img_path=$value.img_path
                name=$value.name
                description=$value.description
                publication_date=$value.publication_date
                count_views=$value.count_views
                id=$value.id
            }
        {/foreach}
    </div>
</div>