{extends file="../../base.tpl"}

{block name=body}
    {if $post}
        <a href="/" class="link underline"><- To Main Page</a>
        <div class="text-white">
            <img src='/images/{$post.img_path}' alt="">
            <h1>{$post.name}</h1>
            <p>{$post.text}</p>
            <p>Count Views: {$post.count_views}</p>
            <p>{$post.publication_date}</p>
        </div>
    {/if}

    {include file="../../blocks/same_post_block.tpl"
    samePosts=$same_posts
    }
{/block}
