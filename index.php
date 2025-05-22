<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Miyeye - Repostería artesanal de alta gama en Lima, Perú. Tortas personalizadas, cupcakes gourmet y postres únicos para ocasiones especiales.">
    <meta name="keywords" content="repostería, pasteles, tortas, cupcakes, Lima, Perú, artesanal, gourmet, personalizado">
    <meta name="author" content="Miyeye Repostería">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Miyeye - Repostería Artesanal de Alta Gama">
    <meta property="og:description" content="Sabores extraordinarios y diseños únicos para tus ocasiones especiales">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://miyeye.com">
    <meta property="og:image" content="https://miyeye.com/images/og-image.jpg">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Miyeye - Repostería Artesanal">
    <meta name="twitter:description" content="Repostería de alta gama con sabores extraordinarios">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    
    <title>Miyeye - Repostería Artesanal de Alta Gama | Lima, Perú</title>
    
    <!-- External CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="css/index.css" as="style">
    <link rel="preload" href="js/index.js" as="script">
</head>
<body>
    <!-- Header Navigation -->
    <header class="header" role="banner">
        <nav class="nav" role="navigation" aria-label="Navegación principal">
            <div class="logo" aria-label="Miyeye - Inicio">Miyeye</div>
            <ul class="nav-links">
                <li><a href="#inicio" aria-label="Ir a inicio">
                    <i class="fas fa-home" aria-hidden="true"></i> Inicio
                </a></li>
                <li><a href="#productos" aria-label="Ver nuestros productos">
                    <i class="fas fa-birthday-cake" aria-hidden="true"></i> Productos
                </a></li>
                <li><a href="#nosotros" aria-label="Conocer sobre nosotros">
                    <i class="fas fa-heart" aria-hidden="true"></i> Nosotros
                </a></li>
                <li><a href="#contacto" aria-label="Información de contacto">
                    <i class="fas fa-phone" aria-hidden="true"></i> Contacto
                </a></li>
            </ul>
            <button class="mobile-menu" aria-label="Abrir menú móvil" aria-expanded="false">
                <i class="fas fa-bars" aria-hidden="true"></i>
            </button>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="inicio" class="hero" role="banner">
            <!-- Decorative floating shapes -->
            <div class="floating-shape shape-1" aria-hidden="true"></div>
            <div class="floating-shape shape-2" aria-hidden="true"></div>
            <div class="floating-shape shape-3" aria-hidden="true"></div>
            
            <div class="hero-content">
                <h1>Miyeye</h1>
                <p class="hero-subtitle">Repostería de Alta Gama • Sabores Extraordinarios</p>
                <div class="cta-buttons">
                    <a href="#productos" class="cta-button cta-primary" aria-label="Ver nuestras creaciones">
                        <i class="fas fa-star" aria-hidden="true"></i>
                        <span>Ver Nuestras Creaciones</span>
                    </a>
                    <a href="https://wa.me/51999123456?text=¡Hola%20Miyeye!%20🎂%20Me%20interesa%20hacer%20un%20pedido.%20¿Podrían%20ayudarme%20con%20información%20sobre%20sus%20productos?" 
                       class="cta-button cta-secondary" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       aria-label="Hacer pedido por WhatsApp">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                        <span>Hacer Pedido</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Productos Section -->
        <section id="productos" class="productos fade-in" role="region" aria-labelledby="productos-title">
            <h2 id="productos-title" class="section-title">Nuestras Especialidades Gourmet</h2>
            <div class="productos-grid">
                <article class="producto-card">
                    <span class="producto-icon" role="img" aria-label="Torta">🎂</span>
                    <h3>Tortas de Autor</h3>
                    <p>Diseños exclusivos y personalizados para ocasiones especiales. Cada torta es una obra de arte comestible, elaborada con técnicas avanzadas de repostería y los ingredientes más selectos.</p>
                </article>
                
                <article class="producto-card">
                    <span class="producto-icon" role="img" aria-label="Cupcake">🧁</span>
                    <h3>Cupcakes Premium</h3>
                    <p>Pequeñas joyas gastronómicas con combinaciones de sabores únicos. Perfectos para eventos corporativos, celebraciones íntimas o como regalo gourmet de lujo.</p>
                </article>
                
                <article class="producto-card">
                    <span class="producto-icon" role="img" aria-label="Galleta">🍪</span>
                    <h3>Galletas Artesanales</h3>
                    <p>Elaboradas con mantequilla europea y técnicas tradicionales francesas. Cada galleta es horneada a la perfección y decorada con esmero artesanal excepcional.</p>
                </article>
                
                <article class="producto-card">
                    <span class="producto-icon" role="img" aria-label="Postre">🥧</span>
                    <h3>Postres Signature</h3>
                    <p>Creaciones exclusivas de nuestra casa: desde cheesecakes de maracuyá hasta tiramisú de café peruano. Postres que definen nuestra identidad culinaria única.</p>
                </article>
            </div>
        </section>

        <!-- Sobre Nosotros Section -->
        <section id="nosotros" class="sobre-nosotros fade-in" role="region" aria-labelledby="nosotros-title">
            <div class="sobre-content">
                <h2 id="nosotros-title">La Excelencia es Nuestro Estándar</h2>
                <p>En Miyeye, fusionamos la tradición repostera europea con la innovación contemporánea. Nuestro equipo de chefs especializados combina técnicas clásicas con ingredientes peruanos de primera calidad, creando experiencias gastronómicas memorables.</p>
                <p>Cada creación refleja nuestro compromiso con la excelencia artesanal, la sostenibilidad y la satisfacción absoluta de nuestros clientes más exigentes.</p>
                
                <!-- Stats Section -->
                <div class="stats" role="region" aria-label="Estadísticas de la empresa">
                    <div class="stat-item">
                        <span class="stat-number" aria-label="500 clientes satisfechos">500+</span>
                        <span class="stat-label">Clientes Satisfechos</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" aria-label="3 años de experiencia">3</span>
                        <span class="stat-label">Años de Experiencia</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" aria-label="100 por ciento ingredientes naturales">100%</span>
                        <span class="stat-label">Ingredientes Naturales</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" aria-label="Entrega en 24 horas">24h</span>
                        <span class="stat-label">Entrega Express</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contacto Section -->
        <section id="contacto" class="contacto fade-in" role="region" aria-labelledby="contacto-title">
            <div class="contacto-content">
                <h2 id="contacto-title">Conectemos y Creemos Juntos</h2>
                <div class="contacto-grid">
                    <article class="contacto-item">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        <h3>Ubicación Premium</h3>
                        <address>
                            Lima, Perú<br>
                            Entregas en toda la ciudad<br>
                            Servicio express disponible
                        </address>
                    </article>
                    
                    <article class="contacto-item">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                        <h3>WhatsApp Directo</h3>
                        <p>
                            <a href="https://wa.me/51999123456" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               aria-label="Contactar por WhatsApp">+51 999 123 456</a><br>
                            Respuesta inmediata<br>
                            Pedidos y consultas
                        </p>
                    </article>
                    
                    <article class="contacto-item">
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                        <h3>Email VIP</h3>
                        <p>
                            <a href="mailto:hola@miyeye.com" aria-label="Enviar email">hola@miyeye.com</a><br>
                            Cotizaciones especiales<br>
                            Eventos corporativos
                        </p>
                    </article>
                    
                    <article class="contacto-item">
                        <i class="fas fa-clock" aria-hidden="true"></i>
                        <h3>Horarios Premium</h3>
                        <p>
                            <time>Lun - Sáb: 8:00 - 21:00</time><br>
                            <time>Dom: 9:00 - 19:00</time><br>
                            Pedidos 24/7 online
                        </p>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <!-- WhatsApp Floating Button -->
    <aside>
        <a href="https://wa.me/51999123456?text=¡Hola%20Miyeye!%20🎂%20Me%20interesa%20hacer%20un%20pedido.%20¿Podrían%20ayudarme%20con%20información%20sobre%20sus%20productos?" 
           class="whatsapp-btn" 
           target="_blank" 
           rel="noopener noreferrer"
           title="Hacer pedido por WhatsApp"
           aria-label="Contactar por WhatsApp para hacer un pedido">
            <i class="fab fa-whatsapp" aria-hidden="true"></i>
        </a>
    </aside>

    <!-- Footer -->
    <footer class="footer" role="contentinfo">
        <p>&copy; 2025 Miyeye - Repostería de Alta Gama • Hecho con <span aria-label="amor">❤️</span> y Excelencia en Lima, Perú</p>
        
        <!-- Schema.org structured data -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Bakery",
            "name": "Miyeye",
            "description": "Repostería artesanal de alta gama especializada en tortas personalizadas, cupcakes gourmet y postres únicos",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Lima",
                "addressCountry": "PE"
            },
            "telephone": "+51-999-123-456",
            "email": "hola@miyeye.com",
            "openingHours": [
                "Mo-Sa 08:00-21:00",
                "Su 09:00-19:00"
            ],
            "servesCuisine": "Desserts",
            "priceRange": "$$",
            "acceptsReservations": true
        }
        </script>
    </footer>

    <!-- Custom JavaScript -->
    <script src="js/index.js"></script>
    
    <!-- Analytics (opcional - reemplazar con tu código) -->
    <!-- 
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    -->
</body>
</html>