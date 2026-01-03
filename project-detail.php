<?php 
require_once 'data.php';

// Get project ID from URL
$projectId = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Find the project
$currentProject = null;
foreach($projects as $project) {
    if($project['id'] === $projectId) {
        $currentProject = $project;
        break;
    }
}

// Redirect if project not found
if(!$currentProject) {
    header('Location: projects.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $currentProject['title']; ?> - SereneMind</title>
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

    <!-- Project Header -->
    <section class="bg-gradient-to-br from-primary to-secondary text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <a href="projects.php" class="inline-flex items-center text-arctic hover:text-white transition-colors duration-300 mb-6">
                <i class="fas fa-arrow-left mr-2"></i> Back to Projects
            </a>
            <div>
                <span class="inline-block bg-white text-primary px-4 py-1 rounded-full text-sm font-medium mb-4">
                    <i class="fas fa-calendar mr-1"></i>
                    <?php echo date('F d, Y', strtotime($currentProject['date'])); ?>
                </span>
                <h1 class="text-3xl md:text-4xl font-display font-bold mb-4"><?php echo $currentProject['title']; ?></h1>
                <p class="text-lg text-arctic"><?php echo $currentProject['shortDesc']; ?></p>
            </div>
        </div>
    </section>

    <!-- Project Gallery -->
    <section class="py-16 bg-arctic">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-display font-bold text-dark mb-8 text-center">Project Gallery</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php foreach($currentProject['images'] as $index => $image): ?>
                <div class="overflow-hidden rounded-lg shadow-md cursor-pointer hover:shadow-xl transition-shadow duration-300" onclick="openLightbox(<?php echo $index; ?>)">
                    <img src="<?php echo $image; ?>" alt="<?php echo $currentProject['title']; ?> - Image <?php echo $index + 1; ?>" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Case Study -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4">
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-3xl font-display font-bold text-dark mb-6">About This Project</h2>
                <p class="text-light leading-relaxed"><?php echo $currentProject['caseStudy']; ?></p>
            </div>
        </div>
    </section>

    <!-- Key Results -->
    <section class="py-16 bg-arctic">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-display font-bold text-dark mb-8 text-center">Key Results & Impact</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach($currentProject['keyResults'] as $result): ?>
                <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                    <i class="fas fa-check-circle text-3xl text-primary mb-4"></i>
                    <p class="text-dark"><?php echo $result; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Related Projects -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-display font-bold text-dark mb-8 text-center">Other Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php 
                $relatedCount = 0;
                foreach($projects as $project): 
                    if($project['id'] !== $projectId && $relatedCount < 3):
                        $relatedCount++;
                ?>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="<?php echo $project['thumbnail']; ?>" alt="<?php echo $project['title']; ?>" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-display font-semibold text-dark mb-4"><?php echo $project['title']; ?></h3>
                        <a href="project-detail.php?id=<?php echo $project['id']; ?>" class="inline-block bg-secondary text-white px-6 py-2 rounded-md font-medium hover:bg-primary transition-colors duration-300">View Details</a>
                    </div>
                </div>
                <?php 
                    endif;
                endforeach; 
                ?>
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

    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox()">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
        <button class="lightbox-prev" onclick="changeLightboxImage(-1); event.stopPropagation();">&#10094;</button>
        <button class="lightbox-next" onclick="changeLightboxImage(1); event.stopPropagation();">&#10095;</button>
    </div>

    <script src="assets/js/main.js"></script>
    <script>
        // Lightbox functionality
        const images = <?php echo json_encode($currentProject['images']); ?>;
        let currentImageIndex = 0;

        function openLightbox(index) {
            currentImageIndex = index;
            document.getElementById('lightbox').style.display = 'block';
            document.getElementById('lightbox-img').src = images[currentImageIndex];
        }

        function closeLightbox() {
            document.getElementById('lightbox').style.display = 'none';
        }

        function changeLightboxImage(direction) {
            currentImageIndex += direction;
            if (currentImageIndex < 0) currentImageIndex = images.length - 1;
            if (currentImageIndex >= images.length) currentImageIndex = 0;
            document.getElementById('lightbox-img').src = images[currentImageIndex];
        }

        // Close lightbox with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeLightbox();
        });
    </script>
</body>
</html>
