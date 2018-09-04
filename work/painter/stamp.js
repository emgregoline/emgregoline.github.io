const stampImg1 = document.querySelector('#stamp1')

function stamp1(e) {
    const halfWidth = stampImg1.naturalWidth / 2
    const halfHeight = stampImg1.naturalHeight / 2
    ctx.drawImage(stampImg1, e.x - halfWidth, e.y - halfHeight)
}

var stampTool1 = {
    click: stamp1,
    drag: stamp1
}



const stampImg2 = document.querySelector('#stamp2')

function stamp2(e) {
    const halfWidth = stampImg2.naturalWidth / 2
    const halfHeight = stampImg2.naturalHeight / 2
    ctx.drawImage(stampImg2, e.x - halfWidth, e.y - halfHeight)
}

var stampTool2 = {
    click: stamp2,
    drag: stamp2
}



const stampImg3 = document.querySelector('#stamp3')

function stamp3(e) {
    const halfWidth = stampImg3.naturalWidth / 2
    const halfHeight = stampImg3.naturalHeight / 2
    ctx.drawImage(stampImg3, e.x - halfWidth, e.y - halfHeight)
}

var stampTool3 = {
    click: stamp3,
    drag: stamp3
}


const stampImg4 = document.querySelector('#stamp4')

function stamp4(e) {
    const halfWidth = stampImg4.naturalWidth / 2
    const halfHeight = stampImg4.naturalHeight / 2
    ctx.drawImage(stampImg4, e.x - halfWidth, e.y - halfHeight)
}

var stampTool4 = {
    click: stamp4,
    drag: stamp4
}




const stampImg5 = document.querySelector('#stamp5')

function stamp5(e) {
    const halfWidth = stampImg5.naturalWidth / 2
    const halfHeight = stampImg5.naturalHeight / 2
    ctx.drawImage(stampImg5, e.x - halfWidth, e.y - halfHeight)
}

var stampTool5 = {
    click: stamp5,
    drag: stamp5
}


const stampImgE = document.querySelector('#stampE')

function stampE(e) {
    const halfWidth = stampImgE.naturalWidth / 2
    const halfHeight = stampImgE.naturalHeight / 2
    ctx.drawImage(stampImgE, e.x - halfWidth, e.y - halfHeight)
}

var stampToolE = {
    click: stampE,
    drag: stampE
}




