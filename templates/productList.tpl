{include file="header.tpl"}

<table class="table">
  <thead>
      <tr>
        <th scope="col">Product</th>
        <th scope="col">Milliliters(ml)</th>
        <th scope="col">Price</th>
        <th scope="col">Brand</th>
        {if !isset($smarty.session.USER_ID)}
          {else}
        <th scope="col">Delete</th>
        <th scope="col">Edit</th>
          {/if}
    </tr>
  </thead>
  <tbody>
    {foreach from=$products item=$product}
        <tr>
        <th scope="row"><a href="view-product/{$product->product_ID}" class="mylists" >{$product->name}</a></th>
        <td>{$product->milliliters}</td>
        <td>${$product->price}</td>
        <td>{$product->brands}</td>
        {if !isset($smarty.session.USER_ID)} 
          {else}
          <td><a class="btn btn-outline-danger" href="delete-product/{$product->product_ID}">Delete</a> </td>
          <td><a class="btn btn-outline-success" href="edit-product-form/{$product->product_ID}">Edit</a></td>
        {/if}
        
        </tr>
    {/foreach}
  </tbody>
</table>
{if !isset($smarty.session.USER_ID)} 
  {else}
  {include file="addProduct.tpl"}
{/if}
{include file="footer.tpl"}

