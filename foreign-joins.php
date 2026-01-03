<?php require_once 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Partnerships - SereneMind</title>
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
                    <li><a href="projects.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Projects</a></li>
                    <li><a href="internship.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Internship</a></li>
                    <li><a href="foreign-joins.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 border-b-2 border-primary pb-1">Partnerships</a></li>
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
                    <li><a href="projects.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Projects</a></li>
                    <li><a href="internship.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Internship</a></li>
                    <li><a href="foreign-joins.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block border-b-2 border-primary">Partnerships</a></li>
                    <li><a href="contact.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="bg-gradient-to-br from-primary to-secondary text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-display font-bold mb-4">Global Partnerships</h1>
            <p class="text-xl text-arctic">Collaborating internationally to advance mental health care</p>
        </div>
    </section>

    <!-- Partnership Overview -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-display font-bold text-dark mb-6">International Collaboration</h2>
                    <p class="text-light leading-relaxed"><?php echo $foreignPartnerships['description']; ?></p>
                </div>
                <div class="bg-arctic p-8 rounded-lg">
                    <svg viewBox="0 0 800 400" class="w-full h-auto">
                        <!-- Simplified world map SVG -->
                        <path d="M50,150 Q100,120 150,150 T250,150 T350,150 T450,150 T550,150 T650,150 Q700,120 750,150" 
                              fill="none" stroke="#87CEEB" stroke-width="2" opacity="0.3"/>
                        <path d="M50,200 Q100,230 150,200 T250,200 T350,200 T450,200 T550,200 T650,200 Q700,230 750,200" 
                              fill="none" stroke="#87CEEB" stroke-width="2" opacity="0.3"/>
                        <path d="M50,250 Q100,220 150,250 T250,250 T350,250 T450,250 T550,250 T650,250 Q700,280 750,250" 
                              fill="none" stroke="#87CEEB" stroke-width="2" opacity="0.3"/>
                        
                        <!-- Partner location pins -->
                        <circle cx="180" cy="120" r="8" fill="#4A90E2" class="location-pin animate-pulse"/>
                        <circle cx="520" cy="180" r="8" fill="#4A90E2" class="location-pin animate-pulse"/>
                        <circle cx="680" cy="220" r="8" fill="#4A90E2" class="location-pin animate-pulse"/>
                        <circle cx="450" cy="160" r="8" fill="#4A90E2" class="location-pin animate-pulse"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Countries -->
    <section class="py-16 bg-arctic">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-display font-bold text-dark mb-12 text-center">Our Partner Countries</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <?php foreach($foreignPartnerships['partnerCountries'] as $country): ?>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 text-center">
                    <i class="fas fa-globe text-4xl text-primary mb-3"></i>
                    <h3 class="text-dark font-semibold"><?php echo $country; ?></h3>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Collaboration Opportunities -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-display font-bold text-dark mb-12 text-center">Collaboration Opportunities</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach($foreignPartnerships['opportunities'] as $opportunity): ?>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-handshake text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-display font-semibold text-dark mb-3"><?php echo $opportunity; ?></h3>
                    <p class="text-light">Connect with us to explore how we can work together in this area.</p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Partnership Inquiry Form -->
    <section class="py-16 bg-arctic">
        <div class="max-w-4xl mx-auto px-4">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-display font-bold text-dark mb-4">Partnership Inquiry</h2>
                    <p class="text-light">Interested in collaborating with SereneMind? Fill out the form below and we'll get back to you shortly.</p>
                </div>
                <form id="partnership-form" method="POST" action="process-partnership.php">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="org-name" class="block text-dark font-medium mb-2">Organization Name *</label>
                            <input type="text" id="org-name" name="org_name" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="country" class="block text-dark font-medium mb-2">Country *</label>
                            <input type="text" id="country" name="country" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="contact-name" class="block text-dark font-medium mb-2">Contact Person *</label>
                            <input type="text" id="contact-name" name="contact_name" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="contact-email" class="block text-dark font-medium mb-2">Email Address *</label>
                            <input type="email" id="contact-email" name="contact_email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-dark font-medium mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div class="mb-4">
                        <label for="partnership-type" class="block text-dark font-medium mb-2">Type of Collaboration *</label>
                        <select id="partnership-type" name="partnership_type" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                            <option value="">Select Type</option>
                            <option value="research">Research Collaboration</option>
                            <option value="exchange">Professional Exchange</option>
                            <option value="training">Training & Development</option>
                            <option value="clinical">Joint Clinical Projects</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-dark font-medium mb-2">Tell us about your organization and proposed collaboration *</label>
                        <textarea id="message" name="message" rows="6" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                    </div>
                    <div class="mb-6">
                        <label class="flex items-start">
                            <input type="checkbox" name="agreement" required class="mt-1 mr-2">
                            <span class="text-dark">I agree to the terms and conditions of partnership inquiry</span>
                        </label>
                    </div>
                    <button type="submit" class="w-full bg-primary text-white px-6 py-3 rounded-md font-medium hover:bg-secondary transition-colors duration-300">Submit Inquiry</button>
                </form>
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
