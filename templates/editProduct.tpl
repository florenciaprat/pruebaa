{include file="header.tpl"}
<div class="col-md-4">
    <h2>{$titulo}</h2>
    <form class ="form-alta" action="edit-product/{$product->product_ID}" method="POST">
    <a href="home" class="btn btn-primary">Volver al inicio</a> 
        <div class="formulario"><p>Name: </p><input value="{$product->name}" type="text" name="name" id="name" required></div>
        <div class="formulario"><p>Milliliters: </p><input value="{$product->milliliters}" type="number" name="milliliters" id="milliliters" required></div>
        <div class="formulario"><p>Price: </p><input value="{$product->price}" type="number" name="price" id="price" required></div>
        <div class="formulario"><p>Brand: </p><select name="brand_ID" id="brand_ID">
            {foreach from=$brands item=$brand}
                <option class="option" value="{$brand->brand_ID}">{$brand->name}</option>
            {/foreach}
            </select>
        </div>
        <div class="formulario"><button type="submit" class="btn btn-primary"> Edit </button></div>
    </form>
</div>
{include file="footer.tpl"}
