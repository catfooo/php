// get the modal
let modal = document.getElementById('modal');

// get img and insert into modal, use alt as caption
let img = document.getElementById('img');
let imgContent = document.getElementById('img-content');
let captionText = document.getElementById('caption');

img.onclick = function() {
    modal.style.display = "block";
    imgContent.src = this.src;
    captionText.innerHTML = this.alt;
}

// span closes the modal
let span = document.getElementsByClassName('close')[0];
span.onclick = function() {
    modal.style.display = "none";
}