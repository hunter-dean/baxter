// Wrap your existing JavaScript code in a jQuery ready function
$(document).ready(function () {
    // Get the header element
    const header = $('header h1');
    const startcolor = 0;
    // Function to generate a random color
    function getColor() {
        for (let i = 0; i < 360; i++) {
            color = startcolor + i;
        }
        return color;
    }

    // Function to change the header text color
    function changeHeaderColor() {
        header.css('color', hsl(getColor(), 100%, 100%));
    }

    // Change the header text color every 2 seconds
    setInterval(changeHeaderColor, 2000);

    // Shake the "Thanks for visiting!" text when the page is loaded
    $('p:contains("Thanks for visiting!")').effect('shake', { distance: 10, times: 3 }, 1000);
});
