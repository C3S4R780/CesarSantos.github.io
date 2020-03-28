var canvas = document.querySelector('canvas');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var c = canvas.getContext('2d');

// Squares
// c.fillStyle = '#ff0000';
// c.fillRect(100, 100, 150, 150);
// c.fillStyle = '#00ffff';
// c.fillRect(450, 100, 150, 150);
// c.fillRect(250, 250, 200, 100);
// c.fillRect(150, 350, 400, 150);
// c.fillRect(150, 500, 100, 130);
// c.fillRect(450, 500, 100, 130);

// Lines
// c.beginPath();
// c.moveTo(100, 100);
// c.lineTo(500, 400);
// c.strokeStyle = '#0000FF';
// c.stroke();

// Arc (Circle)
// c.beginPath();
// c.arc(450, 450, 100, 0, Math.PI * 2, false);
// c.strokeStyle = 'yellow';
// c.stroke();

// for (let i = 0; i < 50; i++) {
//   let x = Math.random() * window.innerWidth;
//   let y = Math.random() * window.innerHeight;
//   let strokeColor = "rgb(" + Math.floor(Math.random() * 255) + "," + Math.floor(Math.random() * 255) + "," + Math.floor(Math.random() * 255) + ")";
//
//   c.beginPath();
//   c.arc(x, y, 100, 0, Math.PI * 2, false);
//   c.strokeStyle = strokeColor;
//   c.stroke()
// }

const mouse = {
  x: undefined,
  y: undefined
}

const maxRadius = 50;
// const minRadius = 5;

const colorArray = [
  '#999',
  '#777',
  '#555',
  '#333',
  '#ff3333',
]

window.addEventListener('mousemove', function (e) {
  mouse.x = e.x;
  mouse.y = e.y;
});

window.addEventListener('resize', function () {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  init();
})

function Circle(x, y, dx, dy, radius) {
  this.x = x;
  this.y = y;
  this.dx = dx;
  this.dy = dy;
  this.radius = radius;
  this.minRadius = radius;
  this.color = colorArray[Math.floor(Math.random() * colorArray.length)];

  this.draw = function () {
    c.beginPath();
    c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
    c.fillStyle = this.color;
    c.fill();
  }

  this.update = function () {
    if (this.x + this.radius > innerWidth || this.x - this.radius < 0) {
      this.dx = -this.dx;
    }
    if (this.y + this.radius > innerHeight || this.y - this.radius < 0) {
      this.dy = -this.dy;
    }

    this.x += this.dx;
    this.y += this.dy;

    // Interactivity
    if (mouse.x - this.x < 50 && mouse.x - this.x > -50 &&
      mouse.y - this.y < 50 && mouse.y - this.y > -50
    ) {
      if (this.radius < maxRadius) {
        this.radius += 3;
      }
    } else if (this.radius > this.minRadius) {
      this.radius -= 1;
    }

    this.draw();
  }
}


let circleArray = [];

function init() {

  circleArray = [];
  for (var i = 0; i < 800; i++) {
    let radius = Math.random() * 3 + 2;
    let x = Math.random() * (innerWidth - radius * 2) + radius;
    let y = Math.random() * (innerHeight - radius * 2) + radius;
    let dx = (Math.random() - 0.5) * 1.5;
    let dy = (Math.random() - 0.5) * 1.5;
    circleArray.push(new Circle(x, y, dx, dy, radius));
  }
}

function animate() {
  requestAnimationFrame(animate);
  c.clearRect(0, 0, innerWidth, innerHeight);

  for (var i = 0; i < circleArray.length; i++) {
    circleArray[i].update();
  }
}

init();
animate();
