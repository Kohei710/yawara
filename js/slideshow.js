let counter = 1;
const slideElement = document.getElementsByClassName("jsSlideItem");

const slideshow = () => {
    if(counter >= slideElement.length){
        counter = 0;
    } 
    for(let i = 0; i < slideElement.length; i++){
        slideElement[i].style.opacity = 0;
    }
    slideElement[counter].style.opacity = 1;
    counter++;
} 

setInterval("slideshow()", 3500);
