<?php require_once 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SereneMind - Sri Lanka's Leading Psychological Life Center</title>
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
                    <li><a href="index.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 border-b-2 border-primary pb-1">Home</a></li>
                    <li><a href="services.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Services</a></li>
                    <li><a href="staff.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Our Staff</a></li>
                    <li><a href="projects.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Projects</a></li>
                    <li><a href="internship.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Internship</a></li>
                    <li><a href="foreign-joins.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Partnerships</a></li>
                    <li><a href="contact.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Contact</a></li>
                </ul>
                <button class="hamburger md:hidden flex flex-col space-y-2 cursor-pointer p-2">
                    <span class="w-7 h-1 bg-primary rounded-sm transition-all block"></span>
                    <span class="w-7 h-1 bg-primary rounded-sm transition-all block"></span>
                    <span class="w-7 h-1 bg-primary rounded-sm transition-all block"></span>
                </button>
            </div>
            <!-- Mobile Menu -->
            <div class="mobile-menu-overlay md:hidden">
                <ul class="flex flex-col space-y-4 p-6">
                    <li><a href="index.php" class="text-dark font-medium text-lg hover:text-primary transition-colors border-b-2 border-primary pb-2 block">Home</a></li>
                    <li><a href="services.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Services</a></li>
                    <li><a href="staff.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Our Staff</a></li>
                    <li><a href="projects.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Projects</a></li>
                    <li><a href="internship.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Internship</a></li>
                    <li><a href="foreign-joins.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Partnerships</a></li>
                    <li><a href="contact.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Carousel Section -->
    <section class="relative h-[600px] overflow-hidden">
        <div class="carousel-container relative h-full">
            <?php foreach($heroImages as $index => $hero): ?>
            <div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-1000 <?php echo $index === 0 ? 'active opacity-100' : ''; ?>">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo $hero['image']; ?>'); filter: brightness(0.7);"></div>
                <div class="absolute inset-0 flex items-center justify-center z-10">
                    <div class="max-w-7xl mx-auto px-4 text-center text-white">
                        <h1 class="text-5xl md:text-6xl font-display font-semibold mb-4 drop-shadow-lg"><?php echo $hero['title']; ?></h1>
                        <p class="text-xl md:text-2xl mb-8"><?php echo $hero['subtitle']; ?></p>
                        <a href="contact.php" class="inline-block px-8 py-3.5 bg-gradient-to-r from-primary to-secondary text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300">Get Started</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <button class="absolute top-1/2 -translate-y-1/2 left-5 z-20 w-12 h-12 bg-white/90 rounded-full flex items-center justify-center hover:bg-white hover:shadow-lg transition-all duration-300" onclick="moveSlide(-1)">
            <i class="fas fa-chevron-left text-primary"></i>
        </button>
        <button class="absolute top-1/2 -translate-y-1/2 right-5 z-20 w-12 h-12 bg-white/90 rounded-full flex items-center justify-center hover:bg-white hover:shadow-lg transition-all duration-300" onclick="moveSlide(1)">
            <i class="fas fa-chevron-right text-primary"></i>
        </button>
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex gap-2.5">
            <?php foreach($heroImages as $index => $hero): ?>
            <span class="indicator w-3 h-3 rounded-full cursor-pointer transition-all duration-300 <?php echo $index === 0 ? 'active bg-white scale-110' : 'bg-white/50'; ?>" onclick="currentSlide(<?php echo $index; ?>)"></span>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Services Grid Section -->
    <section class="py-20 bg-arctic scroll-animate">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in">
                <h2 class="text-4xl font-display font-semibold text-dark mb-4">Our Services</h2>
                <p class="text-lg text-light">Comprehensive mental health care tailored to your needs</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php 
                $topServices = array_slice($services, 0, 3);
                foreach($topServices as $index => $service): 
                ?>
                <div class="bg-white p-10 rounded-2xl shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 text-center animate-slide-up" style="animation-delay: <?php echo $index * 0.2; ?>s;">
                    <div class="w-24 h-24 mx-auto mb-6 rounded-2xl overflow-hidden">
                        <img src="<?php echo $service['icon']; ?>" alt="<?php echo $service['title']; ?>" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-2xl font-display font-semibold text-primary mb-4"><?php echo $service['title']; ?></h3>
                    <p class="text-light mb-6"><?php echo $service['description']; ?></p>
                    <a href="services.php#service-<?php echo $service['id']; ?>" class="inline-flex items-center gap-2 text-primary font-semibold hover:gap-4 transition-all duration-300">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-12">
                <a href="services.php" class="inline-block px-8 py-3.5 border-2 border-primary text-primary font-semibold rounded-full hover:bg-primary hover:text-white transition-all duration-300">View All Services</a>
            </div>
        </div>
    </section>

    <!-- Latest Projects Section -->
    <section class="py-20 bg-white scroll-animate">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in">
                <h2 class="text-4xl font-display font-semibold text-dark mb-4">Latest Projects</h2>
                <p class="text-lg text-light">Community initiatives making a difference</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <?php 
                $latestProjects = array_slice($projects, 0, 2);
                foreach($latestProjects as $project): 
                ?>
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    <div class="relative h-72 overflow-hidden group">
                        <img src="<?php echo $project['thumbnail']; ?>" alt="<?php echo $project['title']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute top-5 right-5">
                            <span class="inline-flex items-center gap-2 bg-white px-4 py-2 rounded-full text-sm font-semibold">
                                <i class="fas fa-calendar text-primary"></i>
                                <?php echo date('M d, Y', strtotime($project['date'])); ?>
                            </span>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-display font-semibold text-primary mb-4"><?php echo $project['title']; ?></h3>
                        <p class="text-light mb-6"><?php echo $project['shortDesc']; ?></p>
                        <a href="project-detail.php?id=<?php echo $project['id']; ?>" class="inline-flex items-center gap-2 text-primary font-semibold hover:gap-4 transition-all duration-300">
                            Read More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-12">
                <a href="projects.php" class="inline-block px-8 py-3.5 border-2 border-primary text-primary font-semibold rounded-full hover:bg-primary hover:text-white transition-all duration-300">View More Projects</a>
            </div>
        </div>
    </section>

    <!-- Staff Highlight Section -->
    <section class="py-20 bg-gradient-to-b from-arctic to-white scroll-animate">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in">
                <h2 class="text-4xl font-display font-semibold text-dark mb-4">Meet Our Leadership</h2>
                <p class="text-lg text-light">Dedicated professionals committed to your well-being</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php 
                $leadershipCount = 0;
                foreach($staff as $member):
                    if($member['isLeadership']):
                        $leadershipCount++;
                ?>
                <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-2xl transition-all duration-300 text-center animate-slide-up" style="animation-delay: <?php echo $leadershipCount * 0.15; ?>s;">
                    <div class="w-48 h-48 mx-auto mb-6 rounded-full overflow-hidden border-4 border-arctic">
                        <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-2xl font-display font-semibold text-primary mb-2"><?php echo $member['name']; ?></h3>
                    <p class="text-secondary font-semibold mb-2"><?php echo $member['position']; ?></p>
                    <p class="text-sm text-light mb-4"><?php echo $member['credentials']; ?></p>
                    <p class="text-light"><?php echo $member['bio']; ?></p>
                </div>
                <?php 
                    endif;
                endforeach; 
                ?>
            </div>
            <div class="text-center mt-12">
                <a href="staff.php" class="inline-block px-8 py-3.5 border-2 border-primary text-primary font-semibold rounded-full hover:bg-primary hover:text-white transition-all duration-300">Meet Our Full Team</a>
            </div>
        </div>
    </section>

    <!-- Internship & CTA Section -->
    <section class="py-16 bg-gradient-to-r from-arctic to-white scroll-animate">
        <div class="max-w-7xl mx-auto px-4 animate-fade-in">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block bg-gradient-to-r from-primary to-secondary text-white px-5 py-2 rounded-full text-sm font-semibold mb-6">
                        Student Opportunity
                    </div>
                    <h2 class="text-4xl font-display font-semibold text-dark mb-6"><?php echo $internshipInfo['title']; ?></h2>
                    <p class="text-lg text-light mb-8"><?php echo $internshipInfo['description']; ?></p>
                    <ul class="space-y-3 mb-8">
                        <?php foreach($internshipInfo['benefits'] as $benefit): ?>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-arctic flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-check-circle text-primary text-xs"></i>
                            </div>
                            <span class="text-light"><?php echo $benefit; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="internship.php" class="inline-block px-10 py-4 bg-gradient-to-r from-primary to-secondary text-white font-semibold rounded-full shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                        Apply Now <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-2xl shadow-lg">
                        <img src="https://res.cloudinary.com/dxoa3ashm/image/upload/v1767382246/NSBM-LOGO_zldy9f.png" alt="NSBM University" class="h-20 mx-auto mb-4 object-contain">
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-xl">
                        <img src="https://res.cloudinary.com/dxoa3ashm/image/upload/v1767382014/human_resource_circle_of_nsbm_green_university_cover_c79wtl.jpg" alt="Students" class="w-full h-64 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-arctic scroll-animate">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in">
                <h2 class="text-4xl font-display font-semibold text-dark mb-4">What Our Clients Say</h2>
                <p class="text-lg text-light">Real stories from people we've helped on their mental wellness journey</p>
            </div>
            <div class="relative max-w-4xl mx-auto">
                <div class="testimonials-swiper overflow-hidden">
                    <?php foreach($testimonials as $testimonial): ?>
                    <div class="testimonial-slide">
                        <div class="bg-white p-12 rounded-3xl shadow-lg">
                            <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gradient-to-r from-primary to-secondary flex items-center justify-center">
                                <i class="fas fa-quote-left text-white text-2xl"></i>
                            </div>
                            <div class="flex justify-center gap-1 mb-6">
                                <?php for($i = 0; $i < $testimonial['rating']; $i++): ?>
                                <i class="fas fa-star text-yellow-400"></i>
                                <?php endfor; ?>
                            </div>
                            <p class="text-lg text-light italic mb-8 text-center leading-relaxed"><?php echo $testimonial['text']; ?></p>
                            <div class="flex items-center justify-center gap-4">
                                <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-arctic">
                                    <img src="<?php echo $testimonial['image']; ?>" alt="<?php echo $testimonial['name']; ?>" class="w-full h-full object-cover">
                                </div>
                                <div class="text-left">
                                    <h4 class="font-display font-semibold text-dark"><?php echo $testimonial['name']; ?></h4>
                                    <p class="text-sm text-light"><?php echo $testimonial['role']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="flex items-center justify-center gap-4 mt-8">
                    <button class="w-12 h-12 rounded-full bg-white shadow-lg flex items-center justify-center hover:bg-primary hover:text-white transition-all duration-300" onclick="changeTestimonial(-1)">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="swiper-pagination flex gap-2"></div>
                    <button class="w-12 h-12 rounded-full bg-white shadow-lg flex items-center justify-center hover:bg-primary hover:text-white transition-all duration-300" onclick="changeTestimonial(1)">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
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
