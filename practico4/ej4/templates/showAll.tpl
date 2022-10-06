<ul>
    {foreach from=$products item=$product}
    <li>{$product->name}</li>
    <li>{$product->price}</li>
    <li>{$product->description}</li>

    {/foreach}
</ul>