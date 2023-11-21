// Wrap your existing JavaScript code in a jQuery ready function
$(document).ready(function () {
    // Get the header element
    const header = $('header h1');

    // Function to generate a random color
    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // Function to change the header text color
    function changeHeaderColor() {
        header.css('color', getRandomColor());
    }

    // Change the header text color every 2 seconds
    setInterval(changeHeaderColor, 2000);

    // Shake the "Thanks for visiting!" text when the page is loaded
    $('p:contains("Thanks for visiting!")').effect('shake', { distance: 10, times: 3 }, 1000);
});
