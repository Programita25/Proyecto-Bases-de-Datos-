document.addEventListener('DOMContentLoaded', function() {
    const quantities = {
        quantity1: 10,
        quantity2: 5,
        quantity3: 20,
    };

    document.querySelectorAll('.add-to-cart').forEach((button, index) => {
        button.addEventListener('click', function() {
            const quantityId = `quantity${index + 1}`;
            const currentQuantity = document.getElementById(quantityId).textContent;
            
            if (quantities[quantityId] > 0) {
                quantities[quantityId]--;
                document.getElementById(quantityId).textContent = quantities[quantityId];
                alert('Producto añadido al carrito');
            } else {
                alert('Producto agotado');
            }
        });
    });
});