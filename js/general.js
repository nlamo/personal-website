let headerName = document.getElementsByClassName("header-name");

headerName[0].addEventListener('mouseenter', (e) => {
   headerName[0].classList.add('hovered');
});

headerName[0].addEventListener('mouseleave', (e) => {
   headerName[0].classList.remove('hovered');
});