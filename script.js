// Info Toggle
const infoButtons = document.querySelectorAll(".info-btn");

infoButtons.forEach(button => {
    button.addEventListener("click", function() {
        const info = this.nextElementSibling;

        if (info.style.display === "block") {
            info.style.display = "none";
            this.textContent = "View Info";
        } else {
            info.style.display = "block";
            this.textContent = "Hide Info";
        }
    });
});

// Review Modal
const modal = document.getElementById("reviewModal");
const reviewButtons = document.querySelectorAll(".review-btn");
const closeBtn = document.querySelector(".close");

reviewButtons.forEach(button => {
    button.addEventListener("click", function() {
        modal.style.display = "block";
    });
});

closeBtn.onclick = function() {
    modal.style.display = "none";
};

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

// 🌸 Falling Petals with Wind Effect
function createPetal() {
    const petal = document.createElement("div");
    petal.classList.add("petal");
    petal.innerHTML = "🌸";

    // Random horizontal position
    petal.style.left = Math.random() * window.innerWidth + "px";

    // Random size
    const size = Math.random() * 20 + 10;
    petal.style.fontSize = size + "px";

    // Random animation speed
    petal.style.animationDuration = (Math.random() * 5 + 5) + "s";

    // Random opacity
    petal.style.opacity = Math.random();

    document.body.appendChild(petal);

    setTimeout(() => {
        petal.remove();
    }, 10000);
}

setInterval(createPetal, 250);
