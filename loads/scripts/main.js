const cvs = select("#cvs");
const ctx = cvs.getContext('2d');
const width = cvs.width = 500;
const height = cvs.height = 500;
const cols = 20;
const size = width/cols;

const groundcolor = "green";
const snackBodyColor = "red";

let task = null;

let direction = 'r';
let foods = [];
let bodies = [
    {
        x: 1,
        y: 0,
    },
    {
        x: 0,
        y: 0,
    },
];

function render() {
    ctx.clearRect(0,0,width,height);

    ground();
    drawFood();
    snack();

}

function snack() {

    bodies.forEach((v,i) => {
        ctx.fillStyle = (i==0) ? 'black' : snackBodyColor; 
        ctx.fillRect(v.x*size, v.y*size, size, size);

        
        if (i != 0 && bodies[0].x == v.x && bodies[0].y == v.y) {
            clearInterval(task);
        }
    })

    bodies.pop();
    let head = {...bodies[0]};
    if (direction == 'r') head.x++;
    if (direction == 'l') head.x--;
    if (direction == 't') head.y--;
    if (direction == 'b') head.y++;
    
    if (head.x >= cols) head.x = 0;
    if (head.x < 0) head.x = cols-1;
    if (head.y >= cols) head.y = 0;
    if (head.y < 0) head.y = cols-1;
    bodies.unshift(head)
}

function drawFood() {
    foods.forEach((v,i) => {
        ctx.fillStyle = 'yellow';
        ctx.fillRect(v.x*size, v.y*size, size, size);
        if (bodies[0].x == v.x && bodies[0].y == v.y) {
            foods.splice(i,1);
            bodies.push(bodies[bodies.length-1]);
            dropFood();
        }
    });
}

function dropFood() {
    let x = Math.floor(Math.random() * cols);
    let y = Math.floor(Math.random() * cols);
    foods.push({x,y});
}

function ground() {
    ctx.fillStyle = groundcolor;
    ctx.fillRect(0,0,width,height);
}

task = setInterval(render, 300)
setTimeout(dropFood, 5000)

function setDirection(d) {
    if (d == 'l' && direction != 'r') direction = 'l';
    if (d == 'r' && direction != 'l') direction = 'r';
    if (d == 't' && direction != 'b') direction = 't';
    if (d == 'b' && direction != 't') direction = 'b';
}

document.onkeydown = (e) => {
    if (e.keyCode == 65) setDirection('l');
    if (e.keyCode == 87) setDirection('t');
    if (e.keyCode == 68) setDirection('r');
    if (e.keyCode == 83) setDirection('b');
}