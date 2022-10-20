{include file="header.tpl"}

<div class="card" style="width: 18rem;">
    <img src="img/skincare.jpg" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{$product->name}</h5>
        <p class="card-text">Cantidad(ml):{$product->milliliters}</p> 
        <p class="card-text">Precio: ${$product->price}</p>
        <p class="card-text">Marca: {$product->brands}</p>

        <a href="home" class="btn btn-primary">Volver al inicio</a> 
      
    </div>
</div>

{include file="footer.tpl"}
