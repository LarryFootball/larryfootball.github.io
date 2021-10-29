var images = [
    '1.jpg',
    '2.jpg',
    '3.jpg',
    '4.jpg',
    '5.jpg',
    '6.jpg',
    '7.jpg',
    '8.jpg',
    '9.jpg'
];

var img = document.getElementById("img");

function imgDisp(num) {
    var num = Math.floor(Math.random() * 9);
    img.style.backgroundImage = 'url("' + images[num] + '")';
    img.style.backgroundRepeat = "no-repeat";
}
imgDisp();
