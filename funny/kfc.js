document.addEventListener("DOMContentLoaded", function () {
    alert("Welcome to KFC! What would you like to order?");

    // Function to simulate placing an order
    function placeOrder() {
        var orderConfirmation = confirm("Do you want to place an order?");
        
        if (orderConfirmation) {
            alert("Your order has been placed! Thank you for choosing KFC.");
        } else {
            alert("Feel free to explore the menu and place an order when you're ready.");
        }
    }

    // Attach the placeOrder function to a button click event
    var orderButton = document.getElementById("place-order-btn");

    if (orderButton) {
        orderButton.addEventListener("click", placeOrder);
    }
});

