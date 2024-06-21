let alt
let lar

function ajustarTamanho() {
    alt = window.innerHeight
    lar = window.innerWidth

    console.log(alt, lar)
}

ajustarTamanho()

function posicaoRandom() {
    let posX = Math.floor(Math.random() * lar) - 90
    let posY = Math.floor(Math.random() * alt) - 90

    posX = posX < 0 ? 0 : posX
    posY = posY < 0 ? 0 : posY

    console.log(posX, posY)

    let mosquito = document.createElement('img')
    mosquito.src = 'imgs/mosquito.png'
    mosquito.className = 'mosquito1'
    mosquito.style.left = posX + 'px'
    mosquito.style.top = posY + 'px'
    mosquito.style.position = 'absolute'

    document.body.appendChild(mosquito)
}