const slidingText = document.querySelector('.sliding-text');
const words = ["clean", "problem free", "clever"];

let index = 0;

function changeText() {
    slidingText.style.transition = 'ease';
    slidingText.style.transform = 'translateY(0)';
    index = (index + 1) % words.length;

    setTimeout(() => {
        slidingText.style.transition = 'transform 1s';
        slidingText.style.transform = `translateY(-100%)`;

        setTimeout(() => {
            slidingText.textContent = words[index];
        }, 500);
    }, 2000);
}

setInterval(changeText, 2000);
