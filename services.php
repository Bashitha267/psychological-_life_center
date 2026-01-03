<?php require_once 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - SereneMind Psychological Life Center</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
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
    <style>
        .service-card:hover .service-icon { transform: scale(1.1) rotate(5deg); }
        .category-header { position: sticky; top: 72px; z-index: 30; }
    </style>
</head>
<body class="font-sans bg-white text-dark">

    <nav class="bg-white shadow-sm sticky top-0 z-50 py-4">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-display font-semibold text-primary">SereneMind</h1>
                <p class="text-[10px] uppercase tracking-widest text-light">Psychological Life Center</p>
            </div>
            <ul class="hidden md:flex space-x-8">
                <li><a href="index.php" class="text-dark hover:text-primary transition-colors">Home</a></li>
                <li><a href="services.php" class="text-primary font-semibold border-b-2 border-primary">Services</a></li>
                <li><a href="staff.php" class="text-dark hover:text-primary transition-colors">Our Team</a></li>
                <li><a href="contact.php" class="text-dark hover:text-primary transition-colors">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="relative bg-arctic py-24 border-b border-primary/10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="max-w-3xl">
                <span class="text-primary font-bold tracking-widest uppercase text-sm mb-4 block">Care & Support</span>
                <h1 class="text-5xl md:text-7xl font-display font-bold text-dark mb-8 leading-tight">Evidence-based care for every stage of life.</h1>
                <p class="text-xl text-light leading-relaxed mb-10">We offer specialized psychological support ranging from clinical therapy to holistic wellness programs, tailored to the unique needs of individuals, families, and communities.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#clinical" class="bg-dark text-white px-6 py-3 rounded-full font-semibold hover:bg-primary transition-all">Clinical Services</a>
                    <a href="#specialty" class="bg-white border border-dark/10 text-dark px-6 py-3 rounded-full font-semibold hover:bg-arctic transition-all">Specialty Programs</a>
                </div>
            </div>
        </div>
    </section>

    <section id="clinical" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl">
                    <h2 class="text-4xl font-display font-bold mb-4">Core & Clinical Services</h2>
                    <p class="text-lg text-light">Professional therapeutic interventions for emotional and mental health challenges.</p>
                </div>
                <div class="hidden md:block h-px bg-dark/10 flex-grow mx-8 mb-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <?php 
                $clinical = array_filter($services, function($s) { return in_array($s['id'], [1,2,3,4,5,6]); });
                foreach($clinical as $s): 
                ?>
                <div class="group p-8 rounded-3xl border border-transparent hover:border-primary/20 hover:bg-arctic/50 transition-all duration-500">
                    <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center mb-6 service-icon transition-transform">
                        <img src="<?php echo $s['icon']; ?>" alt="icon" class="w-8 h-8 opacity-80">
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4 group-hover:text-primary transition-colors"><?php echo $s['title']; ?></h3>
                    <p class="text-light leading-relaxed mb-6"><?php echo $s['description']; ?></p>
                    <a href="contact.php" class="text-primary font-bold inline-flex items-center gap-2 hover:gap-4 transition-all">
                        Inquire Service <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="specialty" class="py-24 bg-arctic">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                <div class="lg:col-span-4">
                    <div class="sticky top-32">
                        <span class="text-primary font-bold tracking-widest uppercase text-xs mb-4 block">Specialized Care</span>
                        <h2 class="text-4xl font-display font-bold mb-6">Expanded & Specialty Services</h2>
                        <p class="text-light mb-8">Detailed assessments and developmental support for children and adults requiring targeted intervention.</p>
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=800&q=80" alt="Clinical" class="rounded-3xl shadow-xl">
                    </div>
                </div>
                <div class="lg:col-span-8 space-y-8">
                    <?php 
                    $specialty = array_filter($services, function($s) { return in_array($s['id'], [7,8,9,10,11]); });
                    foreach($specialty as $s): 
                    ?>
                    <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row gap-8 items-start">
                        <div class="bg-arctic p-4 rounded-xl">
                            <i class="fas fa-microscope text-primary text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-display font-bold mb-3"><?php echo $s['title']; ?></h3>
                            <p class="text-light mb-4"><?php echo $s['details']; ?></p>
                            <span class="text-xs font-bold py-1 px-3 bg-secondary/10 text-primary rounded-full uppercase tracking-wider">Clinical Assessment Available</span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-gradient-to-br from-primary/5 to-secondary/5 p-12 rounded-[3rem]">
                    <h2 class="text-3xl font-display font-bold mb-8">Holistic & Wellness</h2>
                    <div class="space-y-6">
                        <?php 
                        $wellness = array_filter($services, function($s) { return in_array($s['id'], [12,13,14]); });
                        foreach($wellness as $s): 
                        ?>
                        <div class="flex gap-4">
                            <i class="fas fa-leaf text-secondary mt-1"></i>
                            <div>
                                <h4 class="font-bold text-lg"><?php echo $s['title']; ?></h4>
                                <p class="text-light text-sm"><?php echo $s['description']; ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="bg-dark text-white p-12 rounded-[3rem] flex flex-col justify-center items-center text-center">
                    <div class="w-20 h-20 bg-primary/20 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-globe text-3xl text-primary"></i>
                    </div>
                    <h2 class="text-3xl font-display font-bold mb-4">Online Counselling</h2>
                    <p class="text-white/70 mb-8 max-w-sm">Access professional psychological support from anywhere in the world. Secure, confidential, and convenient video sessions.</p>
                    <a href="contact.php" class="bg-primary text-white px-10 py-4 rounded-full font-bold hover:scale-105 transition-transform">
                        Start Online Session
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-display font-bold mb-8">SereneMind</h2>
            <p class="text-white/50 max-w-xl mx-auto mb-12">Providing compassionate, professional mental health care for individuals and families across Sri Lanka.</p>
            <div class="flex justify-center gap-6 mb-12">
                <a href="#" class="hover:text-primary transition-colors"><i class="fab fa-linkedin text-2xl"></i></a>
                <a href="#" class="hover:text-primary transition-colors"><i class="fab fa-facebook text-2xl"></i></a>
                <a href="#" class="hover:text-primary transition-colors"><i class="fab fa-instagram text-2xl"></i></a>
            </div>
            <p class="text-sm text-white/30">&copy; <?php echo date('Y'); ?> SereneMind Psychological Life Center. All rights reserved.</p>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>