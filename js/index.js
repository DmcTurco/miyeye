/* ===== MIYEYE REPOSTERÍA - JAVASCRIPT ===== */

// ===== VARIABLES GLOBALES =====
let mouseX = 0;
let mouseY = 0;
let trailElements = [];

// ===== INICIALIZACIÓN =====
document.addEventListener('DOMContentLoaded', function() {
    initializeApp();
});

function initializeApp() {
    // Inicializar todas las funcionalidades
    setupSmoothScrolling();
    setupHeaderScrollEffect();
    setupScrollAnimations();
    setupProductCardEffects();
    setupStatsCounter();
    setupParallaxEffect();
    setupMobileMenu();
    setupWhatsAppButton();
    setupCursorTrail();
    setupRippleEffects();
    setupLoadingAnimation();
    setupDynamicBackground();
}

// ===== NAVEGACIÓN SUAVE =====
function setupSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// ===== EFECTO DE SCROLL EN HEADER =====
function setupHeaderScrollEffect() {
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
}

// ===== ANIMACIONES DE SCROLL =====
function setupScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observar todos los elementos fade-in
    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });
}

// ===== EFECTOS 3D EN TARJETAS DE PRODUCTOS =====
function setupProductCardEffects() {
    document.querySelectorAll('.producto-card').forEach(card => {
        card.addEventListener('mouseenter', function(e) {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;
            
            card.style.transform = `translateY(-15px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
        });
        
        card.addEventListener('mouseleave', function() {
            card.style.transform = 'translateY(0) rotateX(0deg) rotateY(0deg) scale(1)';
        });
        
        card.addEventListener('mousemove', function(e) {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 15;
            const rotateY = (centerX - x) / 15;
            
            card.style.transform = `translateY(-15px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
        });
    });
}

// ===== CONTADOR ANIMADO DE ESTADÍSTICAS =====
function setupStatsCounter() {
    function animateStats() {
        const stats = document.querySelectorAll('.stat-number');
        stats.forEach(stat => {
            const target = parseInt(stat.textContent);
            const suffix = stat.textContent.replace(/[0-9]/g, '');
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    stat.textContent = target + suffix;
                    clearInterval(timer);
                } else {
                    stat.textContent = Math.floor(current) + suffix;
                }
            }, 40);
        });
    }

    // Activar animación cuando la sección sea visible
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateStats();
                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const statsSection = document.querySelector('.stats');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }
}

// ===== EFECTO PARALLAX =====
function setupParallaxEffect() {
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const shapes = document.querySelectorAll('.floating-shape');
        
        shapes.forEach((shape, index) => {
            const speed = 0.5 + (index * 0.2);
            shape.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.1}deg)`;
        });
    });
}

// ===== MENÚ MÓVIL =====
function setupMobileMenu() {
    const mobileMenu = document.querySelector('.mobile-menu');
    const navLinks = document.querySelector('.nav-links');

    if (mobileMenu && navLinks) {
        mobileMenu.addEventListener('click', () => {
            navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
            
            // Agregar clase para animación
            if (navLinks.style.display === 'flex') {
                navLinks.classList.add('mobile-active');
            } else {
                navLinks.classList.remove('mobile-active');
            }
        });

        // Cerrar menú al hacer clic en un enlace
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 768) {
                    navLinks.style.display = 'none';
                    navLinks.classList.remove('mobile-active');
                }
            });
        });
    }
}

// ===== BOTÓN DE WHATSAPP =====
function setupWhatsAppButton() {
    // Animación de entrada del botón
    setTimeout(() => {
        const whatsappBtn = document.querySelector('.whatsapp-btn');
        if (whatsappBtn) {
            whatsappBtn.style.transform = 'scale(1.2)';
            setTimeout(() => {
                whatsappBtn.style.transform = 'scale(1)';
            }, 200);
        }
    }, 3000);

    // Efecto de rebote periódico
    setInterval(() => {
        const whatsappBtn = document.querySelector('.whatsapp-btn');
        if (whatsappBtn) {
            whatsappBtn.style.animation = 'none';
            setTimeout(() => {
                whatsappBtn.style.animation = 'pulse 2s infinite';
            }, 100);
        }
    }, 10000); // Cada 10 segundos
}

// ===== TRAIL DEL CURSOR =====
function setupCursorTrail() {
    function createTrailElement() {
        const trail = document.createElement('div');
        trail.className = 'cursor-trail';
        document.body.appendChild(trail);
        return trail;
    }

    // Inicializar elementos del trail
    for (let i = 0; i < 10; i++) {
        trailElements.push(createTrailElement());
    }

    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    // Animar trail del cursor
    function animateTrail() {
        let x = mouseX;
        let y = mouseY;
        
        trailElements.forEach((trail, index) => {
            x += (mouseX - x) * 0.3;
            y += (mouseY - y) * 0.3;
            
            trail.style.left = x + 'px';
            trail.style.top = y + 'px';
            trail.style.opacity = (10 - index) / 10 * 0.5;
            trail.style.transform = `scale(${(10 - index) / 10})`;
        });
        
        requestAnimationFrame(animateTrail);
    }

    animateTrail();
}

// ===== EFECTOS RIPPLE EN BOTONES =====
function setupRippleEffects() {
    document.querySelectorAll('.cta-button').forEach(button => {
        button.addEventListener('mouseenter', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(255, 255, 255, 0.3);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s linear;
                pointer-events: none;
            `;
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
}

// ===== ANIMACIÓN DE CARGA =====
function setupLoadingAnimation() {
    window.addEventListener('load', () => {
        document.body.style.overflow = 'visible';
        const hero = document.querySelector('.hero');
        if (hero) {
            hero.style.opacity = '0';
            hero.style.animation = 'none';
            
            setTimeout(() => {
                hero.style.opacity = '1';
                hero.style.animation = 'slideInDown 1s ease-out';
            }, 100);
        }
    });
}

// ===== CAMBIO DINÁMICO DE FONDO =====
function setupDynamicBackground() {
    let lastScrollY = 0;
    
    window.addEventListener('scroll', () => {
        const scrollPercentage = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
        const hue = Math.floor(scrollPercentage * 2); // Cambio más sutil
        
        // Aplicar filtro solo si hay cambio significativo
        if (Math.abs(window.scrollY - lastScrollY) > 50) {
            document.body.style.filter = `hue-rotate(${hue}deg)`;
            lastScrollY = window.scrollY;
        }
    });
}

// ===== UTILIDADES =====
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    }
}

// ===== MANEJO DE ERRORES =====
window.addEventListener('error', (e) => {
    console.error('Error en Miyeye:', e.error);
});

// ===== OPTIMIZACIÓN DE PERFORMANCE =====
// Optimizar scroll events con throttle
window.addEventListener('scroll', throttle(() => {
    // Los eventos de scroll ya están manejados arriba
}, 16)); // ~60fps

// ===== ACCESIBILIDAD =====
// Detectar si el usuario prefiere movimiento reducido
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

if (prefersReducedMotion.matches) {
    // Reducir animaciones para usuarios que lo prefieran
    document.documentElement.style.setProperty('--animation-duration', '0.1s');
}

// ===== DEBUG (solo en desarrollo) =====
if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
    console.log('🎂 Miyeye Repostería - Modo Desarrollo');
    console.log('✨ Todas las funcionalidades cargadas correctamente');
}