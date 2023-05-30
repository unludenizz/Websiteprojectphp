
let cards = []
let sum = 0
let hasBlackJack = false
let isAlive = true
let message = ""
let message_el = document.getElementById("message-el")
let sumEl = document.getElementById("sum-el")
let cardsEl = document.getElementById("cards-el")
let buttons = document.getElementById("buttons")


let player = {

    name: "Per",
    Chips: 145,
    sayHello: function() {
        console.log("Heisannn!")
    }

}



let playerEl = document.getElementById("player-el")
playerEl.textContent = player.name + ": $"+ player.Chips

function startgame(){
    let isAlive = true
    let firstcard = getRandomcard()
    let secondcard = getRandomcard()
    let cards = [firstcard,secondcard]
    let sum = firstcard + secondcard
    rendergame()
}

function rendergame(){
    if (sum < 21){
        message = "Do you want to draw a new card?"
    } else if(sum === 21){
        message ="wohoo! You've got Blackjack!"
        hasBlackJack = true
        buttons.innerHTML = '<button onclick="tryagain()">PLAY AGAIN!</button>'
    } else if (sum > 21) {
        message ="You're out of the game!"
        isAlive = false
        buttons.innerHTML = '<button onclick="tryagain()">TRY AGAIN!</button>'
    }

    message_el.textContent = message

    sumEl.textContent = "Sum: "+sum

    cardsEl.textContent ="Cards: "

    for(let i =0; i< cards.length;i++){
        cardsEl.textContent += cards[i] +" "
    }
}

function tryagain(){
    location.reload()
}



function newcard(){
    if(isAlive === true && hasBlackJack ===false){
        message = "Drawing a new card from the deck!"
        let cardvariable = getRandomcard()
        sum += cardvariable
        cards.push(cardvariable)
        rendergame()
    }
    

}

function getRandomcard(){
    randomnumber = Math.floor( Math.random() *13 ) + 1
    if (randomnumber >10){
        return 11
    }
    else if (randomnumber ===1){
        return 10
    }
    return randomnumber
}

