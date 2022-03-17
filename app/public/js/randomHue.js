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