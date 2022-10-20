{include file="header.tpl"}
<div class="col-md-4">
    <h2>{$titulo}</h2>
    <form class ="form-alta" action="edit-brand/{$brand->brand_ID}" method="POST">
    <a href="brands" class="btn btn-primary">Volver a las marcas</a> 
        <div class="formulario"><p>Name: </p><input value="{$brand->name}" type="text" name="name" id="name" required></div>
        <div class="formulario"><p>Country: </p><input value="{$brand->country}" type="text" name="country" id="country" required></div>
        <div class="formulario"><p>Foundation: </p><input value="{$brand->foundation}" type="number" name="foundation" id="foundation" required></div>
        <div class="formulario"><p>Website: </p><input value="{$brand->website}" type="text" name="website" id="website" required></div>

       
        <div class="formulario"><button type="submit" class="btn btn-primary"> Edit </button></div>
    </form>
</div>
{include file="footer.tpl"}
