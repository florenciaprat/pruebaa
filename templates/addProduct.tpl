<div class="col-md-4">
    <h2>{$titulo}</h2>
    <form class ="form-alta" action="add-product" method="POST">
        <div class="formulario"><input placeholder="product name" type="text" name="name" id="name" required></div>
        <div class="formulario"><input placeholder="milliliters" type="number" name="milliliters" id="milliliters" required></div>
        <div class="formulario"><input placeholder="price" type="number" name="price" id="price" required></div>
        <div class="formulario"><select name="brand_ID" id="">
            {foreach from=$brands item=$brand}
                <option class="option" value="{$brand->brand_ID}">{$brand->name}</option>
            {/foreach}
            </select>
        </div>
        <div class="formulario"><button type="submit" class="btn btn-primary"> Add </button></div>
    </form>
</div>

