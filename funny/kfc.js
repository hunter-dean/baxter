// kfc.js

document.addEventListener("DOMContentLoaded", function () {
    alert("Welcome to KFC! What would you like to order?");

    function placeOrder() {
        var banConfirmation = confirm("Are you sure you want to place an order?");
        
        if (banConfirmation) {
            alert("You have been banned from KFC!");
        } else {
            alert("Feel free to explore the menu and place an order when you're ready.");
        }
    }

    var orderButton = document.getElementById("place-order-btn");

    if (orderButton) {
        orderButton.addEventListener("click", placeOrder);
    }
});
