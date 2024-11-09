console.log("Running");
document.getElementById("individual").addEventListener("click", ()=>{
    document.querySelector(".book1").innerHTML = ""
    console.log("Individual");
    document.querySelector(".book1").innerHTML += `<form action="contact.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputbox">
                    <span>name individual :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
            
                <div class="inputbox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
            
                <div class="inputbox">
                    <span>phone :</span>
                    <input type="text" placeholder="enter your number" name="number">
                </div>
            
                <div class="inputbox">
                    <span>addresss :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
            
                <div class="inputbox">
                    <span>coaching name :</span>
                    <input type="text" placeholder="enter the coaching name" name="coaching">
                </div>
            
                <div class="inputbox">
                    <span>country :</span>
                    <input type="text" placeholder="country name" name="country">
                </div>
            
                <div class="inputbox">
                    <span>number of students :</span>
                    <input type="number" placeholder="number of students" name="students">
                </div>
                <div class="inputbox">
                    <span>why do you want this? :</span>
                    <input type="text" placeholder="write here" name="about">
                </div>
                
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>`
        
})
document.getElementById("community").addEventListener("click", ()=>{
    document.querySelector(".book1").innerHTML = ""
    console.log("Community");
    document.querySelector(".book1").innerHTML = `<form action="contact.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputbox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
            
                <div class="inputbox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
            
                <div class="inputbox">
                    <span>phone :</span>
                    <input type="text" placeholder="enter your number" name="number">
                </div>
            
                <div class="inputbox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
            
                <div class="inputbox">
                    <span>coaching name :</span>
                    <input type="text" placeholder="enter the coaching name" name="coaching">
                </div>
            
                <div class="inputbox">
                    <span>country :</span>
                    <input type="text" placeholder="country name" name="country">
                </div>
            
                <div class="inputbox">
                    <span>number of students :</span>
                    <input type="number" placeholder="number of students" name="students">
                </div>
                <div class="inputbox">
                    <span>why do you want this? :</span>
                    <input type="text" placeholder="write here" name="about">
                </div>
                
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>`
        
})



let currentSlide = 0;

function moveSlide(step) {
    const slides1 = document.querySelector('.slides1');
    const totalSlides = document.querySelectorAll('.slide').length;

    currentSlide = (currentSlide + step + totalSlides) % totalSlides;

    const slideWidth = document.querySelector('.slide').clientWidth;
    slides1.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
}

// Optional: Auto-slide functionality
setInterval(() => moveSlide(1), 3000);



