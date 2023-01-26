//console.log("basic javascript file has been loaded")

//vocabulary: variables, methods, functions
//conditional statements, objects, arrays

const myName = "Aidan Harrington"
console.log({myName});


/*
//event name, callback function
redBtn.addEventListener("click", function() {
    console.log("clickerooni");
    showcase.style.backgroundColor= "red";
    colorHeadline.innerText="Red";
}); 

yellowBtn.addEventListener("click", function() {
    console.log("clickerooni");
    showcase.style.backgroundColor= "yellow";
    colorHeadline.innerText="Yellow";
});

orangeBtn.addEventListener("click", function() {
    console.log("clickerooni");
    showcase.style.backgroundColor= "orange";
    colorHeadline.innerText="Orange";
}); //click event end
*/

// object can hold multiple properties about a variable, done through const thing = {stuff}, array is const thing = [stuff]
const person ={
    name: "DJ BALLS",
    age: 75,
    city: "BALLSCORD",
    job: "CEO"
};

// console.log(person.name);

// const people = ["Jeff", "Jonga", "Bingo", "Larzobium the Devourer of Suns"];
const people = [
    {
        name: "DJ BALLS",
        age: 75,
        city: "BALLSCORD",
        job: "CEO"
    },
    {
        name: "Yonka",
        age: 75,
        city: "BALLSCORD",
        job: "CEO"
    },
    {
        name: "Lorbus",
        age: 75,
        city: "BALLSCORD",
        job: "CEO"
    },
    {
        name: "Serena Williams",
        age: 75,
        city: "BALLSCORD",
        job: "CEO"
    },
]
// console.log(people);

// forEach iterates over arrays, creating variables of the name specified in the function's parentheses. local variable.

// old way of doing functions was function(){}, new way is () => {}. with only one variable you can go without parentheses, but its good to have

people.forEach((person) => {
    console.log(person.name);
    // console.log(index);
}); //forEach method end

//classic for loop (somewhat obsolete):
//counter, condition, and incrementer
// for (let i=0; i <people.length; i++){
//     console.log(people[i]);
// }

const colors = [
    {
        name: "Crimson",
        hex: "#DC143C"
    },
    {
        name: "SU Orange",
        hex: "#D44500"
    },
    {
        name: "Cerulean",
        hex: "#2A52BE"
    },
    {
        name: "Gold",
        hex: "#FFD700"
    },
    {
        name: "Forest Green",
        hex: "#228B22"
    }
]; //colors array end
//its good practice to name your array the plural form of your iteration variable

const showcase = document.getElementById("showcase");
const buttonsContainer = document.getElementById("buttonsContainer");
const colorHeadline = document.createElement("h3");
showcase.append(colorHeadline);
const buttons = document.getElementsByClassName('btn')

colors.forEach((color) => {
    console.log(color.name);
    const freshButton = document.createElement("button");
    freshButton.classList.add("btn");
    freshButton.innerText = color.name;
    freshButton.addEventListener("click", function(){
        showcase.style.backgroundColor = color.hex;
        colorHeadline.innerText = color.name;
        for (let button of buttons){
            button.classList.remove('active');
        };
        this.classList.add("active");
    });//click event end

    buttonsContainer.append(freshButton);
}); //forEach method end