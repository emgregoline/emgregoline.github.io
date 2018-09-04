function drawRandomRect() {
    const x = randInteger(surf.width)
    const y = randInteger(surf.height)
    const width = 100 + randInteger(50)
    const height = 100 + randInteger(50)
    const red = randInteger(255)
    const green = randInteger(255)
    const blue = randInteger(255)
    ctx.fillStyle = `rgb(${red}, ${green}, ${blue})`
    ctx.fillRect(x, y, width, height)
}

var randomRectTool = {
    click: drawRandomRect
}