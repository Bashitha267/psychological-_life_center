<?php require_once 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Program - SereneMind</title>
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
                    <li><a href="internship.php" class="text-dark font-medium text-sm hover:text-primary transition-colors duration-300 border-b-2 border-primary pb-1">Internship</a></li>
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
                    <li><a href="projects.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Projects</a></li>
                    <li><a href="internship.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block border-b-2 border-primary">Internship</a></li>
                    <li><a href="foreign-joins.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Partnerships</a></li>
                    <li><a href="contact.php" class="text-dark font-medium text-lg hover:text-primary transition-colors pb-2 block">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="bg-gradient-to-br from-primary to-secondary text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-display font-bold mb-4">Internship Program</h1>
            <p class="text-xl text-arctic">NSBM University Partnership - Shape Your Future in Psychology</p>
        </div>
    </section>

    <!-- Internship Split Screen Section -->
    <section class="py-0">
        <div class="max-w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <!-- Left Side: Visual Content -->
                <div class="bg-arctic p-8 lg:p-12">
                    <div class="mb-8">
                        <img src="assets/images/internship-students.jpg" alt="Psychology Students" class="w-full rounded-lg shadow-lg mb-6">
                        <div class="text-center bg-white p-6 rounded-lg shadow-md">
                            <img src="<?php echo $internshipInfo['partnerLogo']; ?>" alt="NSBM University" class="h-16 mx-auto mb-3">
                            <p class="text-primary font-semibold">Official Academic Partner</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-2xl font-display font-bold text-dark mb-6">Program Benefits</h3>
                        <ul class="space-y-3">
                            <?php foreach($internshipInfo['benefits'] as $benefit): ?>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                                <span class="text-light"><?php echo $benefit; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="grid grid-cols-2 gap-4 mt-6">
                            <div class="text-center p-4 bg-arctic rounded-lg">
                                <i class="fas fa-clock text-3xl text-primary mb-2"></i>
                                <div>
                                    <strong class="text-dark block">Duration</strong>
                                    <p class="text-light text-sm"><?php echo $internshipInfo['duration']; ?></p>
                                </div>
                            </div>
                            <div class="text-center p-4 bg-arctic rounded-lg">
                                <i class="fas fa-users text-3xl text-primary mb-2"></i>
                                <div>
                                    <strong class="text-dark block">Available Positions</strong>
                                    <p class="text-light text-sm"><?php echo $internshipInfo['positions']; ?> openings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Application Form -->
                <div class="bg-white p-8 lg:p-12">
                    <div class="max-w-2xl mx-auto">
                        <h2 class="text-3xl font-display font-bold text-dark mb-3">Apply for Internship</h2>
                        <p class="text-light mb-8">Complete the form below to begin your application process</p>
                        
                        <form id="internship-form" class="multi-step-form" method="POST" action="process-internship.php">
                            <!-- Step 1: Personal Information -->
                            <div class="form-step active" data-step="1">
                                <h3 class="text-xl font-display font-semibold text-dark mb-6">Personal Information</h3>
                                <div class="mb-4">
                                    <label for="fullname" class="block text-dark font-medium mb-2">Full Name *</label>
                                    <input type="text" id="fullname" name="fullname" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label for="email" class="block text-dark font-medium mb-2">Email Address *</label>
                                        <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-dark font-medium mb-2">Phone Number *</label>
                                        <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="address" class="block text-dark font-medium mb-2">Address *</label>
                                    <textarea id="address" name="address" rows="3" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                                </div>
                                <button type="button" class="w-full bg-primary text-white px-6 py-3 rounded-md font-medium hover:bg-secondary transition-colors duration-300 next-step">Next Step</button>
                            </div>

                            <!-- Step 2: Academic Information -->
                            <div class="form-step hidden" data-step="2">
                                <h3 class="text-xl font-display font-semibold text-dark mb-6">Academic Information</h3>
                                <div class="mb-4">
                                    <label for="university" class="block text-dark font-medium mb-2">University/Institution *</label>
                                    <input type="text" id="university" name="university" value="NSBM Green University" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label for="degree" class="block text-dark font-medium mb-2">Degree Program *</label>
                                        <input type="text" id="degree" name="degree" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div>
                                        <label for="year" class="block text-dark font-medium mb-2">Year of Study *</label>
                                        <select id="year" name="year" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                            <option value="">Select Year</option>
                                            <option value="1">1st Year</option>
                                            <option value="2">2nd Year</option>
                                            <option value="3">3rd Year</option>
                                            <option value="4">4th Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="student-id" class="block text-dark font-medium mb-2">Student ID Number *</label>
                                    <input type="text" id="student-id" name="student_id" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div class="flex gap-4">
                                    <button type="button" class="flex-1 bg-secondary text-white px-6 py-3 rounded-md font-medium hover:bg-primary transition-colors duration-300 prev-step">Previous</button>
                                    <button type="button" class="flex-1 bg-primary text-white px-6 py-3 rounded-md font-medium hover:bg-secondary transition-colors duration-300 next-step">Next Step</button>
                                </div>
                            </div>

                            <!-- Step 3: Additional Details -->
                            <div class="form-step hidden" data-step="3">
                                <h3 class="text-xl font-display font-semibold text-dark mb-6">Additional Details</h3>
                                <div class="mb-4">
                                    <label for="interest" class="block text-dark font-medium mb-2">Area of Interest *</label>
                                    <select id="interest" name="interest" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                        <option value="">Select Area</option>
                                        <option value="clinical">Clinical Psychology</option>
                                        <option value="child">Child Psychology</option>
                                        <option value="counseling">Counseling</option>
                                        <option value="research">Research</option>
                                        <option value="community">Community Mental Health</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="start-date" class="block text-dark font-medium mb-2">Preferred Start Date *</label>
                                    <input type="date" id="start-date" name="start_date" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div class="mb-4">
                                    <label for="motivation" class="block text-dark font-medium mb-2">Why do you want to intern at SereneMind? *</label>
                                    <textarea id="motivation" name="motivation" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                                </div>
                                <div class="mb-6">
                                    <label for="cv" class="block text-dark font-medium mb-2">Upload CV (PDF) *</label>
                                    <input type="file" id="cv" name="cv" accept=".pdf" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div class="flex gap-4">
                                    <button type="button" class="flex-1 bg-secondary text-white px-6 py-3 rounded-md font-medium hover:bg-primary transition-colors duration-300 prev-step">Previous</button>
                                    <button type="submit" class="flex-1 bg-primary text-white px-6 py-3 rounded-md font-medium hover:bg-secondary transition-colors duration-300">Submit Application</button>
                                </div>
                            </div>
                        </form>

                        <!-- Form Progress Indicator -->
                        <div class="flex items-center justify-center mt-8">
                            <div class="flex items-center space-x-2">
                                <div class="progress-step active w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-semibold" data-step="1">1</div>
                                <div class="w-16 h-1 bg-gray-300"></div>
                                <div class="progress-step w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center font-semibold" data-step="2">2</div>
                                <div class="w-16 h-1 bg-gray-300"></div>
                                <div class="progress-step w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center font-semibold" data-step="3">3</div>
                            </div>
                        </div>
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

    <!-- Floating Contact Button -->
    <a href="contact.php" class="floating-btn" aria-label="Contact Us">
        <i class="fas fa-comments"></i>
        <span>Contact Us</span>
    </a>

    <script src="assets/js/main.js"></script>
</body>
</html>
