let alt
let lar

function ajustarTamanho() {
    alt = window.innerHeight
    lar = window.innerWidth

    console.log(alt, lar)
}

ajustarTamanho()

function posicaoRandom() {
    //remover o mosquito anterior (caso exista)
    if (document.getElementById('mosquito')) {
        document.getElementById('mosquito').remove()
    }

    let posX = Math.floor(Math.random() * lar) - 150
    let posY = Math.floor(Math.random() * alt) - 150

    posX = posX < 0 ? 0 : posX
    posY = posY < 0 ? 0 : posY

    console.log(posX, posY)

    //criando o elemento no html
    let mosquito = document.createElement('img')
    mosquito.src = 'imgs/mosquito.png'
    mosquito.className = tamanhoRandom() + ' ' + ladoAleatorio()
    mosquito.style.left = posX + 'px'
    mosquito.style.top = posY + 'px'
    mosquito.style.position = 'absolute'
    mosquito.id = 'mosquito'

    document.body.appendChild(mosquito)
}

function tamanhoRandom() {
    let classe = Math.floor(Math.random() *3)
    
    switch (classe) {
        case 0:
            return 'mosquito1'
        case 1:
            return 'mosquito2'
        case 2:
            return 'mosquito3'
    }
}

function ladoAleatorio() {
    let classe = Math.floor(Math.random() *2)
    
    switch (classe) {
        case 0:
            return 'ladoA'
        case 1:
            return 'ladoB'
    }
}