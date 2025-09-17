<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions - Responsive Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{asset('js/script.js')}}"></script>
    </head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <i class="fas fa-server"></i>
                    <span>TechSolutions</span>
                </div>
                <ul class="nav-links">
                    <li><a href="#home" class="active" data-section="home">Home</a></li>
                    <li><a href="#about" data-section="about">About</a></li>
                    <li><a href="#contact" data-section="contact">Contact</a></li>
                    <li><a href="#server" data-section="server">Server</a></li>
                </ul>
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Home Section -->
    <section id="home" class="active">
        <div class="container">
            <h1>Innovative Technology Solutions</h1>
            <p>We provide cutting-edge server solutions and web services to help your business grow in the digital age.</p>
            <a href="#server" class="btn" data-section="server">Explore Our Services</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2 class="section-title">About Us</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>We Deliver Excellence</h3>
                    <p>TechSolutions was founded in 2010 with a mission to provide reliable and scalable server infrastructure for businesses of all sizes.</p>
                    <p>Our team of experienced engineers and developers are committed to delivering top-notch solutions tailored to your specific needs.</p>
                    <p>With data centers across the globe, we ensure 99.9% uptime and exceptional performance for your critical applications.</p>
                    <a href="#contact" class="btn" data-section="contact">Get in Touch</a>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?ixlib=rb-4.0.3" alt="About TechSolutions">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Get In Touch</h3>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Location</h4>
                            <p>123 Tech Street, San Francisco, CA 94103</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Phone</h4>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>info@techsolutions.com</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Send Message</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Server Section -->
    <section id="server">
        <div class="container">
            <h2 class="section-title">Server Status</h2>
            <div class="server-content">
                <div class="server-status">
                    <h3><span class="status-indicator"></span>All Systems Operational</h3>
                    <p>Our servers are running smoothly with no issues detected.</p>
                </div>
                <p>We provide enterprise-grade server solutions with 99.9% uptime guarantee, advanced security, and 24/7 monitoring.</p>
                <div class="stats">
                    <div class="stat-box">
                        <i class="fas fa-server"></i>
                        <h3>99.9%</h3>
                        <p>Uptime</p>
                    </div>
                    <div class="stat-box">
                        <i class="fas fa-bolt"></i>
                        <h3>2.5ms</h3>
                        <p>Response Time</p>
                    </div>
                    <div class="stat-box">
                        <i class="fas fa-database"></i>
                        <h3>50PB</h3>
                        <p>Data Served</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
                <p>&copy; 2023 TechSolutions. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Navigation
            const menuToggle = document.querySelector('.menu-toggle');
            const navLinks = document.querySelector('.nav-links');
            const navItems = document.querySelectorAll('.nav-links a');
            const sections = document.querySelectorAll('section');
            
            // Mobile menu toggle
            menuToggle.addEventListener('click', function() {
                navLinks.classList.toggle('active');
            });
            
            // Section navigation
            navItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Get the target section
                    const targetSection = this.getAttribute('data-section');
                    
                    // Update active navigation item
                    navItems.forEach(navItem => navItem.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Show the target section
                    sections.forEach(section => {
                        section.classList.remove('active');
                        if (section.id === targetSection) {
                            section.classList.add('active');
                        }
                    });
                    
                    // Close mobile menu if open
                    navLinks.classList.remove('active');
                    
                    // Scroll to top
                    window.scrollTo(0, 0);
                });
            });
            
            // Contact form handling
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Get form values
                    const name = document.getElementById('name').value;
                    const email = document.getElementById('email').value;
                    const message = document.getElementById('message').value;
                    
                    // Simple validation
                    if (name && email && message) {
                        alert('Thank you for your message! We will get back to you soon.');
                        contactForm.reset();
                    } else {
                        alert('Please fill in all fields.');
                    }
                });
            }
        });
    </script>
</body>
</html>