<?php require_once 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Projects - SereneMind</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#4A90E2',
                        'secondary': '#87CEEB',
                        'arctic': '#F0F8FF',
                        'dark': '#2C3E50',
                        'light': '#5A6C7D',
                    },
                    fontFamily: {
                        'display': ['Playfair Display', 'serif'],
                        'sans': ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body>
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50 py-4">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center">
                <div class="logo">
                    <h1 class="text-2xl font-display font-semibold text-primary">SereneMind</h1>
                    <p class="text-xs text-light">Psychological Life Center</p>
                </div>
                <ul class="hidden md:flex space-x-8 nav-menu">
                    <li><a href="index.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Home</a></li>
                    <li><a href="services.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Services</a></li>
                    <li><a href="staff.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Our Team</a></li>
                    <li><a href="projects.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 border-b-2 border-primary pb-1">Projects</a></li>
                    <li><a href="internship.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Internship</a></li>
                    <li><a href="foreign-joins.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Partnerships</a></li>
                    <li><a href="contact.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Contact</a></li>
                </ul>
                <button class="mobile-menu-btn md:hidden flex flex-col space-y-1.5 cursor-pointer">
                    <span class="w-6 h-0.5 bg-primary block"></span>
                    <span class="w-6 h-0.5 bg-primary block"></span>
                    <span class="w-6 h-0.5 bg-primary block"></span>
                </button>
            </div>
            <!-- Mobile Menu -->
            <div class="mobile-menu-overlay md:hidden">
                <ul class="flex flex-col space-y-4 p-6">
                    <li><a href="index.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Home</a></li>
                    <li><a href="services.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Services</a></li>
                    <li><a href="staff.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Our Team</a></li>
                    <li><a href="projects.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block border-b-2 border-primary">Projects</a></li>
                    <li><a href="internship.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Internship</a></li>
                    <li><a href="foreign-joins.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Partnerships</a></li>
                    <li><a href="contact.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="bg-gradient-to-br from-primary to-secondary text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-display font-bold mb-4">Community Projects</h1>
            <p class="text-xl text-arctic">Making a positive impact on mental health across Sri Lanka</p>
        </div>
    </section>

    <!-- Projects Gallery Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach($projects as $project): ?>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="relative overflow-hidden">
                        <img src="<?php echo $project['thumbnail']; ?>" alt="<?php echo $project['title']; ?>" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 right-4">
                            <span class="bg-white text-primary px-3 py-1 rounded-full text-sm font-medium shadow-md">
                                <i class="fas fa-calendar mr-1"></i>
                                <?php echo date('M d, Y', strtotime($project['date'])); ?>
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-display font-semibold text-dark mb-3"><?php echo $project['title']; ?></h3>
                        <p class="text-light mb-4"><?php echo $project['shortDesc']; ?></p>
                        <a href="project-detail.php?id=<?php echo $project['id']; ?>" class="inline-flex items-center text-primary font-medium hover:text-secondary transition-colors duration-300">
                            View Details <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-arctic py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-3xl font-display font-bold text-dark mb-4">Want to Collaborate?</h2>
                <p class="text-light mb-6">Partner with us to create meaningful mental health initiatives in your community.</p>
                <a href="contact.php" class="inline-block bg-primary text-white px-8 py-3 rounded-md font-medium hover:bg-secondary transition-colors duration-300">Get in Touch</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-8">
                <div>
                    <h3 class="text-xl font-display font-semibold mb-4">SereneMind</h3>
                    <p class="text-gray-300 mb-4">Sri Lanka's leading psychological life center dedicated to providing compassionate, professional mental health care.</p>
                    <div class="flex space-x-4">
                        <a href="<?php echo $socialMedia['linkedin']; ?>" target="_blank" aria-label="LinkedIn" class="text-white hover:text-secondary transition-colors duration-300">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="<?php echo $socialMedia['youtube']; ?>" target="_blank" aria-label="YouTube" class="text-white hover:text-secondary transition-colors duration-300">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                        <a href="<?php echo $socialMedia['facebook']; ?>" target="_blank" aria-label="Facebook" class="text-white hover:text-secondary transition-colors duration-300">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="services.php" class="text-gray-300 hover:text-secondary transition-colors duration-300">Services</a></li>
                        <li><a href="staff.php" class="text-gray-300 hover:text-secondary transition-colors duration-300">Our Team</a></li>
                        <li><a href="projects.php" class="text-gray-300 hover:text-secondary transition-colors duration-300">Projects</a></li>
                        <li><a href="internship.php" class="text-gray-300 hover:text-secondary transition-colors duration-300">Internship</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2">
                        <li class="flex items-start text-gray-300">
                            <i class="fas fa-map-marker-alt mt-1 mr-2"></i>
                            <span><?php echo $contactInfo['address']; ?></span>
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-phone mr-2"></i>
                            <span><?php echo $contactInfo['phone']; ?></span>
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-envelope mr-2"></i>
                            <span><?php echo $contactInfo['email']; ?></span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Opening Hours</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li>Weekdays: <?php echo $contactInfo['hours']['weekdays']; ?></li>
                        <li>Saturday: <?php echo $contactInfo['hours']['saturday']; ?></li>
                        <li>Sunday: <?php echo $contactInfo['hours']['sunday']; ?></li>
                    </ul>
                    <a href="contact.php" class="inline-block mt-4 text-secondary hover:text-white transition-colors duration-300">
                        <i class="fas fa-phone-volume mr-2"></i>Emergency: <?php echo $contactInfo['emergencyLine']; ?>
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> SereneMind Psychological Life Center. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating Contact Button -->
    <a href="contact.php" class="floating-btn" aria-label="Contact Us">
        <i class="fas fa-comments"></i>
        <span>Contact Us</span>
    </a>

    <script src="assets/js/main.js"></script>
</body>
</html>
