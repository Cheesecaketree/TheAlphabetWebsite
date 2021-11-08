function randomHue() {
    return 360 * Math.random();
}

function randomSat(min, max) {
    return (min + (max-min) * Math.random());
}

function randomLight(min, max) {
    return (min + (max-min) * Math.random());
}

function getHSL(hue, saturation, lightness) {
    return "hsl(" + hue + ", " + saturation + "%, " + lightness + "%)"
}


function spinHue(hue, amount) {
    var nHue = hue + amount;
    if (nHue > 360) {
        nHue = nHue - 360;
    }
    return nHue;
}

function setColors() {
    const hue = randomHue();
    const sat = randomSat(99, 100);
    const light = randomLight(65, 85);

    // making the colors
    var letterColor = getHSL(hue, sat, light);
    var backgroundColor = getHSL(spinHue(hue, 180), sat, light);

    // getting elements
    var background = document.getElementById('cBackground');
    var colored = document.getElementsByClassName('colored');

    background.style.backgroundColor = backgroundColor;

    for(var i = 0; i < colored.length; i++) {
        colored[i].style.color = letterColor;
    }
}

function setLetter() {
    const alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZÄÖÜ";
    const element = document.getElementById("let");

    element.innerHTML = alphabet[Math.floor(Math.random() * alphabet.length)];
}