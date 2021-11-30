var index = 1;
showSlides(index);

function currentSlide(x){
    showSlides(index = x);
}

function showSlides(x){
    var i;
    var slides = document.getElementsByClassName("slides");
    var dots = document.getElementsByClassName("dot");
    if(x > slides.length){
        index = 1;
    }
    if(x < 1){
        index = slides.length;
    }

    for(i = 0; i<slides.length; i++){
        slides[i].style.display = "none";
    }

    for(i = 0; i<dots.length; i++){
        dots[i].className = dots[i].className.replace(" active","");
    }
    slides[index-1].style.display = "block";
    dots[index-1].className += " active";
}