{extends file="base.tpl"}

{block name=body}
    <a href="/" class="link underline"><- To Main Page</a>
    <div class="text-white d-flex">
        <div class="pr-5 d-flex align-items-center">
            <a href="/posts_categories/{$category_id}?page={$page}&filter=view_up" class="link {if $filter === 'view_up'}text-primary{/if}">Count View</a>
            <p>⭡</p>
        </div>
        <div class="pr-5 d-flex align-items-center">
            <a href="/posts_categories/{$category_id}?page={$page}&filter=view_down" class="link {if $filter === 'view_down'}text-primary{/if}">Count View</a>
            <p>⭣</p>
        </div>
        <div class="pr-5 d-flex align-items-center">
            <a href="/posts_categories/{$category_id}?page={$page}&filter=publication_up" class="link {if $filter === 'publication_up'}text-primary{/if}">Publication Date </a>
            <p>⭣</p>
        </div>
        <div class="pr-5 d-flex align-items-center">
            <a href="/posts_categories/{$category_id}?page={$page}&filter=publication_down" class="link {if $filter === 'publication_down'}text-primary{/if}">Publication Date </a>
            <p>⭡</p>
        </div>
    </div>
    <div>
        <div>
            <div class="cards">
                {foreach from=$posts item=value}
                    {include file="./blocks/post_block.tpl"
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

        {include file="./blocks/pagination.tpl"
        count=$count
        category_id=$category_id
        current_page=$page
        }
    </div>
{/block}
