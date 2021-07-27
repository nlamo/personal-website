const loadingSpinner = document.getElementById('loader');
const landscapeDrawings = document.getElementById('landscape-drawings-container');
const topPortrait = document.getElementById('top-portrait');
const bottomPortrait = document.getElementById('bottom-portrait');
const speechBubble = document.getElementById('speech-bubble');

function showLoadingSpinner() {
    bottomPortrait.style.visibility = 'hidden';
    topPortrait.style.visibility = 'hidden';
    speechBubble.hidden = true;
    landscapeDrawings.hidden = true;
    loadingSpinner.hidden = false;
}

function removeLoadingSpinner() {

    setTimeout(function() {
        loadingSpinner.hidden = true;
        landscapeDrawings.hidden = false;
        speechBubble.hidden = false;
        bottomPortrait.style.visibility = 'visible'; 
        topPortrait.style.visibility = 'visible';
      }, 1500);
}

showLoadingSpinner();
removeLoadingSpinner();