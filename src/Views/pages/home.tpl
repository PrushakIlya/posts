{extends file="../base.tpl"}

{block name=body}
    <div class="main">
        {foreach from=$postsCategory key=category item=posts}
            {assign var="category" value=$category|split:"_"}
            <div>
                <div class="header d-flex justify-content-between align-items-center">
                    <h2 class="category">{$category[0]}</h2>
                    <a href="/categories/{$category[1]}/posts" class="link">All posts</a>
                </div>
                <div class="cards">
                    {foreach from=$posts item=value}
                        {include file="../blocks/post_block.tpl"
                        img_path=$value.img_path
                        name=$value.post_name
                        description=$value.description
                        publication_date=$value.publication_date
                        count_views=$value.count_views
                        id=$value.id
                        }
                    {/foreach}
                </div>
            </div>
        {/foreach}
    </div>
{/block}
