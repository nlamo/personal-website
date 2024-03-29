const loadingSpinner = document.getElementById("loader");
const landscapeDrawings = document.getElementById("landscape-drawings-container");
const topDrawing = document.getElementById("top-drawing");
const topDrawingSmartphone = document.getElementById("top-drawing-smartphone");
const bottomDrawing = document.getElementById("bottom-drawing");
const bottomDrawingSmartphone = document.getElementById("bottom-drawing-smartphone");
const speechBubble = document.getElementById("speech-bubble");

function loadLandscapeScene() {
   showLoadingSpinner();
}

function showLandscapeScene() {

   setTimeout(function () {
      hideLoadingSpinner();

      landscapeDrawings.style.visibility = "visible";
      bottomDrawing.style.visibility = "visible";
      bottomDrawingSmartphone.style.visibility = "visible";
      topDrawing.style.visibility = "visible";
      topDrawingSmartphone.style.visibility = "visible";
   }, 1500);
}

function showLoadingSpinner() {
   loadingSpinner.hidden = false;
}

function hideLoadingSpinner() {
   loadingSpinner.hidden = true;
}

loadLandscapeScene();
showLandscapeScene();
