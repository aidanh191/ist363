


const colors = [
    {
        name: "Crystal Black Silica",
        slug: "crystal-black-silica",
        hex: "#0d0d0b"
    },
    {
        name: "Crimson Red Pearl",
        slug: "crimson-red-pearl",
        hex: "#710e18"
    },
    {
        name: "Sapphire Blue Pearl",
        slug: "sapphire-blue-pearl",
        hex: "#00306d"
    },
    {
        name: "Ice Silver Metallic",
        slug: "ice-silver-metallic",
        hex: "#dfdfdf"
    },
    {
        name: "Lithium Red Pearl",
        slug: "lithium-red-pearl",
        hex: "#b81b18"
    },
    {
        name: "Magnetite Gray Metallic",
        slug: "magnetite-gray-metallic",
        hex: "#5B5E5E"
    },
    {
        name: "Crystal White Pearl",
        slug: "crystal-white-pearl",
        hex: "#eeeeee"
    },
    {
        name: "Ocean Blue Pearl",
        slug: "ocean-blue-pearl",
        hex: "#245f9e"
    },
];

const currentIndex = 0;
const showcase = document.getElementById("showcaseSub");
const buttonsContainer = document.getElementById("buttonsContainerSub");
const colorHeadline = document.createElement("h3");
const carImage = document.createElement("img");
carImage.classList.add("responsive-img");

showcase.append(colorHeadline);
showcase.append(carImage);

const swatches = document.getElementsByClassName('swatch');

colors.forEach((color, index) => {
    
    const { name, hex, slug } = color;
    const freshButton = document.createElement("button");
    freshButton.classList.add("swatch");
    freshButton.style.backgroundColor = color.hex;

    freshButton.addEventListener("click", () => {
        showCar(index);
    });

    buttonsContainer.append(freshButton);
}); //forEach method end

function showCar(index){
    for (let swatch of swatches){
        swatch.classList.remove('active');
    };
    swatches[index].classList.add("active");
    carImage.src = `/wp-content/themes/starbucks/img/impreza/${colors[index].slug}.webp`;
    colorHeadline.innerText = colors[index].name;
    
}
showCar(currentIndex);

const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

nextBtn.addEventListener("click", () => {
    currentIndex++;
    showCar(currentIndex);
}); // end of nextBtn listener


// carImage.src = `/wp-content/themes/starbucks/img/impreza/${slug}.webp`;
        // carImage.src = "/wp-content/themes/starbucks/img/impreza/" + color.slug + ".webp"; 
        // this also works ^