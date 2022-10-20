{include file="header.tpl"}

<ul class="list-group">
<div> <h3>Los productos de {$brand->name} </h3> </div>
    {foreach from=$products item=$product}
    <li class="list-group-item list-group-item-success">{$product->name} </li>
    {/foreach} 
</ul>
<a href="brands" class="btn btn-outline-success" >Volver a las marcas</a>

{include file="footer.tpl"}
