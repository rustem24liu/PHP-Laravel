import './bootstrap';
// public/js/app.js
window.onload = function() {
    console.log("Page Loaded!");

    // Example of a simple button click event
    document.getElementById("infoButton").addEventListener("click", function() {
        alert("Button clicked!");
    });
}
