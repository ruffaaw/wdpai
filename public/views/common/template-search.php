<template id="product-template">
    <div id="{{product.id}}">
        <img src="{{product.image}}" onmouseover="zoomIn(event)">
        <div>
            <h1>{{product.name}}</h1>
            <p>{{product.price}} PLN</p>
            <form class="cartButton" action="addToCart" method="POST">
                <input type="hidden" name="id" value="{{product.id}}">
                <button type="submit" class="button" id="cartButton">{{product.button}}</button>
            </form>
        </div>
    </div>
</template>
