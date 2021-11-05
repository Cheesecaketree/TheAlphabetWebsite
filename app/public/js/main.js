var tinycolor = require("tinycolor2");

var background = document.getElementById('cBackground');
var symbol = document.getElementById('character');

var colors = ["##77dd77", "#89cff0", "#ff6961", "#ff694f", "#ca9bf7", "#ffb7ce", "#fdfd96", "#cb99c9", "#bee7a5", "#befd73", "#bdb0d0", "#b2fba5"];
var rand_index = Math.floor(Math.random() * colors.length);

char_color = colors[rand_index]
backg_color = tinycolor(char_color).spin(180).toString();

symbol.style.color = char_color;
background.style.color = backg_color;