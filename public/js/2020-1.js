// // Navigation
// const navToggle = document.querySelector('.nav-toggle');
// const navLinks = document.querySelectorAll('.nav__link');

// navToggle.addEventListener('click', () =>{
//     document.body.classList.toggle('nav-open');
// });

// navLinks.forEach(link => {
//     link.addEventListener('click', () => {
//         document.body.classList.remove('nav-open');
//     });
// });

// Typewriter effect
const TypeWriter = function(txtElement, words, waitTime = 3000){
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.wordIndex = 0;
    this.waitTime = parseInt(waitTime, 10);
    this.type();
    this.isDeleting = false;
}

// Type method
TypeWriter.prototype.type = function(){
    // Current index of word
    const current = this.wordIndex % this.words.length;

    // Get full text of current word
    const fullTxt = this.words[current];

    // Check if deleting
    if (this.isDeleting) {
        // Remove char
        this.txt = fullTxt.substring(0, this.txt.length - 1);

    } else {
        // Add char
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    // Insert txt into element
    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

    // Initial type speed
    let typeSpeed = 300;

    if (this.isDeleting) {
        typeSpeed /= 2;
    }

    // If word is complete
    if (!this.isDeleting && this.txt === fullTxt) {
        // Make pasuse at end
        typeSpeed = this.waitTime;
        // Set delete to true
        this.isDeleting = true;
    }else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        // Move to next word
        this.wordIndex++;
        // Pause before start typing
        typeSpeed = 500;
    }

    setTimeout(() => this.type(), typeSpeed);
}

// Init on DOM load
document.addEventListener('DOMContentLoaded', init);

// Init App
function init(){
    // Navigation
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelectorAll('.nav__link');

    navToggle.addEventListener('click', () =>{
        document.body.classList.toggle('nav-open');
    });

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            document.body.classList.remove('nav-open');
        });
    });

    // TypeWriter effect
    const txtElement = document.querySelectorAll('.txtType');
    const txtDetail = document.querySelector('.txtType');
    // const words = JSON.parse(txtElement.getAttribute('data-words'));
    // const waitTime = txtElement.getAttribute('data-wait');

    // Init TypeWriter
    // new TypeWriter(txtElement, words, waitTime);
    new TypeWriter(txtElement[0], JSON.parse(txtElement[0].getAttribute('data-words')), txtElement[0].getAttribute('data-wait'));
    new TypeWriter(txtElement[1], JSON.parse(txtElement[1].getAttribute('data-words')), txtElement[1].getAttribute('data-wait'));
    new TypeWriter(txtDetail, JSON.parse(txtDetail.getAttribute('data-words')), txtDetail.getAttribute('data-wait'));

}