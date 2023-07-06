var i = 0;
var txt = 'My Name is Andrew Smith'; // The text
var speed = 50; // The speed/duration of the effect in milliseconds

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("typeEffect").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
};