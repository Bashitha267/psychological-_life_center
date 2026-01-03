<?php require_once 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - SereneMind</title>
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
<body class="font-sans bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50 py-4">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-display font-semibold text-primary">SereneMind</h1>
                    <p class="text-xs text-light">Psychological Life Center</p>
                </div>
                <ul class="hidden md:flex space-x-8">
                    <li><a href="index.php" class="text-dark hover:text-primary transition-colors">Home</a></li>
                    <li><a href="services.php" class="text-dark hover:text-primary transition-colors">Services</a></li>
                    <li><a href="staff.php" class="text-primary font-semibold">Our Team</a></li>
                    <li><a href="projects.php" class="text-dark hover:text-primary transition-colors">Projects</a></li>
                    <li><a href="internship.php" class="text-dark hover:text-primary transition-colors">Internship</a></li>
                    <li><a href="foreign-joins.php" class="text-dark hover:text-primary transition-colors">Partnerships</a></li>
                    <li><a href="contact.php" class="text-dark hover:text-primary transition-colors">Contact</a></li>
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
                    <li><a href="staff.php" class="text-dark font-medium text-lg hover:text-primary transition-colors border-b-2 border-primary pb-2 block">Our Team</a></li>
                    <li><a href="projects.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Projects</a></li>
                    <li><a href="internship.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Internship</a></li>
                    <li><a href="foreign-joins.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Partnerships</a></li>
                    <li><a href="contact.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="relative bg-gradient-to-br from-arctic via-white to-secondary/10 py-24">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-display font-semibold text-dark mb-6">Our Professional Team</h1>
            <p class="text-xl text-light max-w-3xl mx-auto">Meet the dedicated experts committed to your mental well-being</p>
        </div>
    </section>

    <!-- Staff Directory Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <?php foreach($staff as $member): ?>
                <div class="bg-arctic rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300">
                    <div class="h-80 overflow-hidden">
                        <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-display font-semibold text-primary mb-2"><?php echo $member['name']; ?></h3>
                        <p class="text-secondary font-semibold mb-2"><?php echo $member['position']; ?></p>
                        <p class="text-sm text-light mb-4"><?php echo $member['credentials']; ?></p>
                        <p class="text-light"><?php echo $member['bio']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-arctic to-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-display font-semibold text-dark mb-6">Schedule a Consultation</h2>
            <p class="text-lg text-light mb-10">Connect with our experienced professionals for personalized mental health care.</p>
            <a href="contact.php" class="inline-block px-12 py-4 bg-gradient-to-r from-primary to-secondary text-white font-semibold rounded-full shadow-2xl hover:shadow-3xl hover:-translate-y-1 transition-all duration-300">
                Book Appointment <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-8">
                <div>
                    <h3 class="text-2xl font-display font-semibold mb-4">SereneMind</h3>
                    <p class="text-white/70 mb-6">Sri Lanka's leading psychological life center dedicated to providing compassionate, professional mental health care.</p>
                    <div class="flex gap-3">
                        <a href="<?php echo $socialMedia['linkedin']; ?>" target="_blank" aria-label="LinkedIn" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary transition-all duration-300">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="<?php echo $socialMedia['youtube']; ?>" target="_blank" aria-label="YouTube" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary transition-all duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="<?php echo $socialMedia['facebook']; ?>" target="_blank" aria-label="Facebook" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary transition-all duration-300">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-display font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="services.php" class="text-white/70 hover:text-primary transition-colors">Services</a></li>
                        <li><a href="staff.php" class="text-white/70 hover:text-primary transition-colors">Our Team</a></li>
                        <li><a href="projects.php" class="text-white/70 hover:text-primary transition-colors">Projects</a></li>
                        <li><a href="internship.php" class="text-white/70 hover:text-primary transition-colors">Internship</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-display font-semibold mb-4">Contact</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-white/70">
                            <i class="fas fa-map-marker-alt text-primary mt-1"></i>
                            <span><?php echo $contactInfo['address']; ?></span>
                        </li>
                        <li class="flex items-start gap-3 text-white/70">
                            <i class="fas fa-phone text-primary mt-1"></i>
                            <span><?php echo $contactInfo['phone']; ?></span>
                        </li>
                        <li class="flex items-start gap-3 text-white/70">
                            <i class="fas fa-envelope text-primary mt-1"></i>
                            <span><?php echo $contactInfo['email']; ?></span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-display font-semibold mb-4">Opening Hours</h4>
                    <ul class="space-y-2 mb-6">
                        <li class="text-white/70">Weekdays: <?php echo $contactInfo['hours']['weekdays']; ?></li>
                        <li class="text-white/70">Saturday: <?php echo $contactInfo['hours']['saturday']; ?></li>
                        <li class="text-white/70">Sunday: <?php echo $contactInfo['hours']['sunday']; ?></li>
                    </ul>
                    <a href="contact.php" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-primary to-secondary rounded-full font-semibold hover:shadow-lg transition-all duration-300">
                        <i class="fas fa-phone-volume"></i>
                        Emergency: <?php echo $contactInfo['emergencyLine']; ?>
                    </a>
                </div>
            </div>
            <div class="border-t border-white/10 pt-8 text-center">
                <p class="text-white/50">&copy; <?php echo date('Y'); ?> SereneMind Psychological Life Center. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating Contact Button -->
    <a href="contact.php" class="fixed bottom-8 right-8 bg-gradient-to-r from-primary to-secondary text-white px-6 py-4 rounded-full shadow-2xl hover:shadow-3xl hover:-translate-y-1 transition-all duration-300 flex items-center gap-3 z-40" aria-label="Contact Us">
        <i class="fas fa-comments text-xl"></i>
        <span class="font-semibold">Contact Us</span>
    </a>

    <script src="assets/js/main.js"></script>
</body>
</html>
