var http = require('http')

function loadLog(){
    const fs = require('fs')
    const contenido = fs.readFileSync('/log.txt','utf-8')
    const arr = contenido.split(/\r?\n/)
    console.log(arr)
}
//CONEXION ARDUINO
const { Boar, Serv } = require('johnny-five')
const board = new Board()

board.on('ready', function()){
    console.log('board.ready')
    const serv = new Serv({
        pin: 8
    })
    serv.to(30)
}