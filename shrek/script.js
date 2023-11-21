// Get the header element
const header = document.querySelector('header h1');

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
    header.style.color = getRandomColor();
}

// Change the header text color every 2 seconds
setInterval(changeHeaderColor, 2000);
