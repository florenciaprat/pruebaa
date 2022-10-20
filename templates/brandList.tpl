{include file="header.tpl"}

  <div> {$error} </div>

<table class="table">
  <thead>
      <tr>
        <th scope="col">Brand</th>
        <th scope="col">Country</th>
        <th scope="col">Foundation</th>
        <th scope="col">Website</th>
        {if !isset($smarty.session.USER_ID)} 
          {else}
          <th scope="col">Delete</th>
          <th scope="col">Edit</th>
        {/if}
      </tr>
  </thead>
  <tbody>
    {foreach from=$brands item=$brand}
        <tr>
        <th scope="row"><a href="view-brand-products/{$brand->brand_ID}" class="mylists"> {$brand->name} </a></th>
        <td>{$brand->country}</td>
        <td>{$brand->foundation}</td>
        <td>{$brand->website}</td>
        {if !isset($smarty.session.USER_ID)} 
          {else}
          <td><a class="btn btn-outline-danger" href="delete-brand/{$brand->brand_ID}">Delete</a> </td>
          <td><a class="btn btn-outline-success" href="edit-brand-form/{$brand->brand_ID}">Edit</a></td>
        {/if}
        </tr>
    {/foreach} 
  </tbody>
</table>
{if !isset($smarty.session.USER_ID)}
  {else}
    {include file="addBrand.tpl"}
{/if}

{include file="footer.tpl"}
