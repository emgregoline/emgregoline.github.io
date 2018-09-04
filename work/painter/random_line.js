function drawRandomLine() {
    const x = randInteger(surf.width)
    const y = randInteger(surf.height)
    const x2 = randInteger(surf.width)
    const y2 = randInteger(surf.height)
    const red = randInteger(255)
    const green = randInteger(255)
    const blue = randInteger(255)
    ctx.beginPath()
    ctx.strokeStyle = `rgb(${red}, ${green}, ${blue})`
    ctx.lineWidth = 10
    ctx.moveTo(x, y)
    ctx.lineTo(x2, y2)
    ctx.stroke()
}

var randomLineTool = {
    click: drawRandomLine
}
