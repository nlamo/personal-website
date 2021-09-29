// NOTE: Before, I was using JS to hide the *images* for the landscape display.
//       Instead, now, I hide them by default, just so prevent any weird issues on first load.


const loadingSpinner = document.getElementById('loader');
const landscapeDrawings = document.getElementById('landscape-drawings-container');
const topDrawing = document.getElementById('top-drawing');
const topDrawingSmartphone = document.getElementById('top-drawing-smartphone');
const topDrawingWide = document.getElementById('top-drawing-wide');
const bottomDrawing = document.getElementById('bottom-drawing');
const bottomDrawingSmartphone = document.getElementById('bottom-drawing-smartphone');
const bottomDrawingWide = document.getElementById('bottom-drawing-wide');
const speechBubble = document.getElementById('speech-bubble');

function loadLandscapeScene() {
    // NOTE: all relevant containers/imgs have been hidden by default
    
    showLoadingSpinner();
}

function showLandscapeScene() {

    setTimeout(function() {
        hideLoadingSpinner();

        landscapeDrawings.style.visibility = 'visible';
        speechBubble.style.visibility = 'visible';
        bottomDrawing.style.visibility = 'visible'; 
        bottomDrawingSmartphone.style.visibility = 'visible'; 
        bottomDrawingWide.style.visibility = 'visible';
        topDrawing.style.visibility = 'visible';
        topDrawingSmartphone.style.visibility = 'visible';
        topDrawingWide.style.visibility = 'visible';
      }, 1500);
}

function showLoadingSpinner() {
    loadingSpinner.hidden = false;
}

function hideLoadingSpinner() {
    loadingSpinner.hidden = true;
};


loadLandscapeScene();
showLandscapeScene();