const dino = document.getElementById("player");
const game = document.getElementById("game");
const cactus = document.getElementById("cactus");
const score = document.getElementById("score")
let interval = null;
let playerScore = 0;
console.log("asas");

function jump(){
    if(dino.classList!="jump") {
        dino.classList.add("jump");
        setTimeout(function() {
            dino.classList.remove("jump");
        },500);
    }
}
document.addEventListener("keydown", function(event) {
    jump();
})

let isAlive = setInterval(function() {
    let dinoTop = parseInt(window.getComputedStyle(dino).getPropertyValue("top"));
    let cactusLeft = parseInt(window.getComputedStyle(cactus).getPropertyValue("left"));
    if(cactusLeft<75 && cactusLeft>0 && dinoTop >=120) {
        isAlive = false;
        if(confirm("Wanna try again? Get good.")) {
            location.reload();
            isAlive=true;
        } else {
            game.remove();
        }
    }
},10)

let scoreCounter = ()=>{
    playerScore++;
    score.innerHTML = `score <b>${playerScore}<b>`;
}

interval = setInterval(scoreCounter,200);

// function score(){
//     if(cactusLeft<-20) {
//         score+=10
//     }
// }