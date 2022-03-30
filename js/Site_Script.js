function hover_twitter(element) {
    element.setAttribute('src', 'img/Icon/twitter.gif');
}

function unhover_twitter(element) {
    element.setAttribute('src', 'img/Icon/twitter.png');
}

function hover_linkedin(element) {
    element.setAttribute('src', 'img/Icon/linkedin.gif');
}

function unhover_linkedin(element) {
    element.setAttribute('src', 'img/Icon/linkedin.png');
}
function hover_github(element) {
    element.setAttribute('src', 'img/Icon/github.gif');
}

function unhover_github(element) {
    element.setAttribute('src', 'img/Icon/github.png');
}


function hover_instagram(element) {
    element.setAttribute('src', 'img/Icon/instagram.gif');
}

function unhover_instagram(element) {
    element.setAttribute('src', 'img/Icon/instagram.png');
}

function hover_Profile(element) {
    element.setAttribute('width', '250px');
}

function unhover_Profile(element) {
    element.setAttribute('height', '180px');
}

function openPage(pageName, elmnt, color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();