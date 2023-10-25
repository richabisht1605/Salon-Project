const text = "Welcome to our Salon website!";
const typingSpeed = 100; // Adjust typing speed in milliseconds

const typedTextElement = document.querySelector(".typed-text");
const cursorElement = document.querySelector(".cursor");

let charIndex = 0;

function type() {
  if (charIndex < text.length) {
    typedTextElement.textContent += text.charAt(charIndex);
    charIndex++;
    setTimeout(type, typingSpeed);
  }
}

document.addEventListener("DOMContentLoaded", () => {
  // Start typing animation
  setTimeout(type, typingSpeed);
});
