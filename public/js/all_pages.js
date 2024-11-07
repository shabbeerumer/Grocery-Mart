// web js start

// Define a map for image sources related to each image element's ID
// const imageMap = {
//     img1: ["../images/pp1.png", "../images/pp2.png"], // Images for the first card
//     img2: ["../images/pp3.png", "../images/pp4.png"], // Images for the second card
//     img3: ["../images/pp5.png", "../images/pp6.png"], // Images for the third card
//     img4: ["../images/pp7.png", "../images/pp8.png"], // Images for the fourth card
//     img5: ["../images/pp9.png", "../images/pp10.png"], // Images for the fifth card
//     img6: ["../images/pp11.png", "../images/pp12.png"], // Images for the sixth card
//     img7: ["../images/p1.png", "../images/p2.png"],
//     img8: ["../images/p3.png", "../images/p4.png"],
//     img9: ["../images/p5.png", "../images/p6.png"],
//     img10: ["../images/p7.png", "../images/p8.png"],
//     img11: ["../images/p9.png", "../images/p10.png"],
//     img12: ["../images/p11.png", "../images/p12.png"],
//     img13: ["../images/e1.png", "../images/ee1.png"],
//     img14: ["../images/e2.png", "../images/ee2.png"],
//     img15: ["../images/e3.png", "../images/ee3.png"],
//     img16: ["../images/e2.png", "../images/ee2.png"],
//     img17: ["../images/f1.png", "../images/f11.png"],
//     img18: ["../images/f2.png", "../images/f22.png"],
//     img19: ["../images/f3.png", "../images/f33.png"],
//     img20: ["../images/f4.png", "../images/f44.png"],
// };
function swapImage(imgElement) {
    imgElement.dataset.originalImage = imgElement.src; // Store the original image URL
    imgElement.src = imgElement.dataset.secondImage; // Change to the second image on hover
}

function resetImage(imgElement) {
    imgElement.src = imgElement.dataset.originalImage; // Revert back to the original image
}

// Function to start rotating images
function startImageRotation(imgElement, images) {
    let currentImageIndex = 0;
    const interval = setInterval(() => {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        imgElement.src = images[currentImageIndex];
    }, 1000); // Change image every 1 second

    // Return the interval ID so we can stop it later
    return interval;
}

// Add hover event listeners to all wrapper elements
document.querySelectorAll(".wrapper").forEach((wrapper) => {
    const imgElement = wrapper.querySelector("img"); // Get the image inside this wrapper
    const images = imageMap[imgElement.id]; // Get the array of images for this specific image element
    let interval;

    // Start changing images on hover
    wrapper.addEventListener("mouseenter", () => {
        if (images) {
            interval = startImageRotation(imgElement, images);
        }
    });

    // Stop changing images when hover ends
    wrapper.addEventListener("mouseleave", () => {
        clearInterval(interval);
    });
});

var light = document.getElementById("lightordark");
light.addEventListener("click", function () {
    // Toggle dark mode class on the body
    if (document.body.classList.contains("dark-mode")) {
        document.body.classList.remove("dark-mode");
        document.getElementById("lightordark").innerHTML =
            "<i class='bi bi-moon-fill'></i>"; // Change to moon icon for light mode
    } else {
        document.body.classList.add("dark-mode");
        document.getElementById("lightordark").innerHTML =
            "<i class='bi bi-sun-fill'></i>"; // Change to sun icon for dark mode
    }
});

let currentPosition = 0;
const totalImages = 10;
const imagesToShow = 4;
const imageWidthPercentage = 100 / imagesToShow;
const sliderWrapper = document.querySelector(".slider-wrapper");

function automove() {
    if (currentPosition > -(totalImages - imagesToShow)) {
        currentPosition--;
    } else {
        currentPosition = 0;
    }
    updateSliderPosition();
}
function movePrev() {
    if (currentPosition < 0) {
        currentPosition++;
        updateSliderPosition();
    }
}
function updateSliderPosition() {
    sliderWrapper.style.transform = `translateX(${
        currentPosition * imageWidthPercentage
    }%)`;
}

setInterval(automove, 3000);

// web js end

// admin js start

// admin js end
