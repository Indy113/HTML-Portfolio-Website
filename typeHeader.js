var i = 0;
var txt = "My Name is Andrew Smith"; // The text
var txt2 = "Headline 2";
var txt3 = "Headline 3";
var txt4 = "Headling 4";
var speed = 50; // The speed/duration of the effect in milliseconds

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("typeEffect").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
};

function typeWriter2() {
  if (i < txt2.length) {
    document.getElementById("typeEffect2").innerHTML += txt2.charAt(i);
    i++;
    setTimeout(typeWriter2, speed);
  }
};

function typeWriter3() {
  if (i < txt3.length) {
    document.getElementById("typeEffect3").innerHTML += txt3.charAt(i);
    i++;
    setTimeout(typeWriter3, speed);
  }
};

function typeWriter4() {
  if (i < txt4.length) {
    document.getElementById("typeEffect4").innerHTML += txt4.charAt(i);
    i++;
    setTimeout(typeWriter4, speed);
  }
};

function typeEffectOnLoad() {
    typeWriter();
};
