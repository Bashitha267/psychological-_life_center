<?php require_once 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SereneMind</title>
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
                    <li><a href="foreign-joins.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 pb-1 border-b-2 border-transparent hover:border-primary">Partnerships</a></li>
                    <li><a href="contact.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 border-b-2 border-primary pb-1">Contact</a></li>
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
                    <li><a href="foreign-joins.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Partnerships</a></li>
                    <li><a href="contact.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block border-b-2 border-primary">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="bg-gradient-to-br from-primary to-secondary text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-display font-bold mb-4">Contact Us</h1>
            <p class="text-xl text-arctic">We're here to help. Reach out to us anytime.</p>
        </div>
    </section>

    <!-- Google Maps Section -->
    <section class="h-96">
        <div id="map" class="w-full h-full google-map"></div>
    </section>

    <!-- Contact Content Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Sidebar: Contact Info & Hours -->
                <aside class="space-y-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-2xl font-display font-bold text-dark mb-6">Get in Touch</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-primary text-xl mt-1 mr-4"></i>
                                <div>
                                    <strong class="text-dark block mb-1">Address</strong>
                                    <p class="text-light"><?php echo $contactInfo['address']; ?></p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone text-primary text-xl mt-1 mr-4"></i>
                                <div>
                                    <strong class="text-dark block mb-1">Phone</strong>
                                    <p class="text-light"><a href="tel:<?php echo str_replace(' ', '', $contactInfo['phone']); ?>" class="hover:text-primary"><?php echo $contactInfo['phone']; ?></a></p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-envelope text-primary text-xl mt-1 mr-4"></i>
                                <div>
                                    <strong class="text-dark block mb-1">Email</strong>
                                    <p class="text-light"><a href="mailto:<?php echo $contactInfo['email']; ?>" class="hover:text-primary"><?php echo $contactInfo['email']; ?></a></p>
                                </div>
                            </div>
                            <div class="flex items-start bg-arctic p-4 rounded-lg">
                                <i class="fas fa-phone-volume text-secondary text-xl mt-1 mr-4"></i>
                                <div>
                                    <strong class="text-dark block mb-1">24/7 Emergency Line</strong>
                                    <p class="text-primary font-semibold"><a href="tel:<?php echo str_replace(' ', '', $contactInfo['emergencyLine']); ?>"><?php echo $contactInfo['emergencyLine']; ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-2xl font-display font-bold text-dark mb-6">Opening Hours</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center pb-3 border-b border-gray-200">
                                <span class="text-light">Monday - Friday</span>
                                <strong class="text-dark"><?php echo $contactInfo['hours']['weekdays']; ?></strong>
                            </div>
                            <div class="flex justify-between items-center pb-3 border-b border-gray-200">
                                <span class="text-light">Saturday</span>
                                <strong class="text-dark"><?php echo $contactInfo['hours']['saturday']; ?></strong>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-light">Sunday</span>
                                <strong class="text-dark"><?php echo $contactInfo['hours']['sunday']; ?></strong>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-2xl font-display font-bold text-dark mb-6">Follow Us</h3>
                        <div class="space-y-3">
                            <a href="<?php echo $socialMedia['facebook']; ?>" target="_blank" class="flex items-center p-3 bg-arctic hover:bg-primary hover:text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-facebook-f text-xl mr-3"></i>
                                <span class="font-medium">Facebook</span>
                            </a>
                            <a href="<?php echo $socialMedia['linkedin']; ?>" target="_blank" class="flex items-center p-3 bg-arctic hover:bg-primary hover:text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-linkedin-in text-xl mr-3"></i>
                                <span class="font-medium">LinkedIn</span>
                            </a>
                            <a href="<?php echo $socialMedia['youtube']; ?>" target="_blank" class="flex items-center p-3 bg-arctic hover:bg-primary hover:text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-youtube text-xl mr-3"></i>
                                <span class="font-medium">YouTube</span>
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-md p-8">
                        <h2 class="text-3xl font-display font-bold text-dark mb-3">Send us a Message</h2>
                        <p class="text-light mb-8">Fill out the form below and we'll get back to you within 24 hours.</p>
                        
                        <form id="contact-form" method="POST" action="process-contact.php">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="first-name" class="block text-dark font-medium mb-2">First Name *</label>
                                    <input type="text" id="first-name" name="first_name" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div>
                                    <label for="last-name" class="block text-dark font-medium mb-2">Last Name *</label>
                                    <input type="text" id="last-name" name="last_name" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="email" class="block text-dark font-medium mb-2">Email Address *</label>
                                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div>
                                    <label for="phone" class="block text-dark font-medium mb-2">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="subject" class="block text-dark font-medium mb-2">Subject *</label>
                                <select id="subject" name="subject" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                    <option value="">Select a subject</option>
                                    <option value="appointment">Book an Appointment</option>
                                    <option value="inquiry">General Inquiry</option>
                                    <option value="emergency">Emergency Consultation</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block text-dark font-medium mb-2">Your Message *</label>
                                <textarea id="message" name="message" rows="6" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                            </div>
                            <div class="mb-6">
                                <label class="flex items-start">
                                    <input type="checkbox" name="privacy" required class="mt-1 mr-2">
                                    <span class="text-dark">I agree to the <a href="#" class="text-primary hover:underline">privacy policy</a> and consent to being contacted.</span>
                                </label>
                            </div>
                            <button type="submit" class="w-full bg-primary text-white px-6 py-3 rounded-md font-medium hover:bg-secondary transition-colors duration-300 flex items-center justify-center">
                                Send Message <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
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

    <!-- Google Maps API -->
    <script>
        function initMap() {
            const location = { 
                lat: <?php echo $contactInfo['mapCoordinates']['lat']; ?>, 
                lng: <?php echo $contactInfo['mapCoordinates']['lng']; ?> 
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: location,
                styles: [
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
                    }
                ]
            });
            const marker = new google.maps.Marker({
                position: location,
                map: map,
                title: "SereneMind Psychological Life Center"
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap"></script>
    
    <script src="assets/js/main.js"></script>
</body>
</html>
