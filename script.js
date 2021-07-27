const loadingSpinner = document.getElementById('loader');
const landscapeDrawings = document.getElementById('landscape-drawings-container');
const topPortrait = document.getElementById('top-portrait');
const bottomPortrait = document.getElementById('bottom-portrait');
const speechBubble = document.getElementById('speech-bubble');

function loadLandscapeScene() {
    bottomPortrait.style.visibility = 'hidden';
    topPortrait.style.visibility = 'hidden';
    speechBubble.hidden = true;
    landscapeDrawings.hidden = true;
    
    showLoadingSpinner();
}

function showLandscapeScene() {

    setTimeout(function() {
        hideLoadingSpinner();

        landscapeDrawings.hidden = false;
        speechBubble.hidden = false;
        bottomPortrait.style.visibility = 'visible'; 
        topPortrait.style.visibility = 'visible';
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