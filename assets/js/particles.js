class Particle {
    constructor(x, y, size, speedX, speedY) {
        this.x = x;
        this.y = y;
        this.size = size;
        this.speedX = speedX;
        this.speedY = speedY;
    }

    update() {
        this.x += this.speedX;
        this.y += this.speedY;

        // Bounce off the walls
        if (this.x <= 0 || this.x >= canvas.width) {
            this.speedX = -this.speedX;
        }
        if (this.y <= 0 || this.y >= canvas.height) {
            this.speedY = -this.speedY;
        }
    }
}

class ParticleSystem {
    constructor(canvas) {
        this.canvas = canvas;
        this.ctx = canvas.getContext('2d');
        this.numberOfParticles = 200; // Increased from previous value
        this.particles = [];
        this.width = canvas.width;
        this.height = canvas.height;

        this.createParticles();
    }

    createParticles() {
        for(let i = 0; i < this.numberOfParticles; i++) {
            const x = Math.random() * this.width;
            const y = Math.random() * this.height;
            const size = Math.random() * (24 - 8) + 8; // Increased size range: 8px to 24px
            this.particles.push(new Particle(x, y, size, Math.random() * 2 - 1, Math.random() * 2 - 1));
        }
    }

    update() {
        this.particles.forEach(particle => particle.update());
    }

    draw() {
        this.ctx.clearRect(0, 0, this.width, this.height);
        this.particles.forEach(particle => {
            this.ctx.beginPath();
            this.ctx.arc(particle.x, particle.y, particle.size/2, 0, Math.PI * 2);
            this.ctx.fillStyle = 'rgba(255, 255, 255, 0.5)';
            this.ctx.fill();
        });
    }
}

// Usage
const canvas = document.getElementById('particleCanvas');
const particleSystem = new ParticleSystem(canvas);

function animate() {
    particleSystem.update();
    particleSystem.draw();
    requestAnimationFrame(animate);
}

animate();