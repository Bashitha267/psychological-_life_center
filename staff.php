<?php require_once 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinical Staff Directory - SereneMind</title>
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
</head>
<body class="font-sans bg-white text-dark">

    <nav class="bg-white shadow-sm sticky top-0 z-50 py-4 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-display font-semibold text-primary">SereneMind</h1>
                <p class="text-[10px] uppercase tracking-widest text-light">Psychological Life Center</p>
            </div>
            <ul class="hidden md:flex space-x-8">
                <li><a href="index.php" class="text-dark hover:text-primary transition-colors">Home</a></li>
                <li><a href="services.php" class="text-dark hover:text-primary transition-colors">Services</a></li>
                <li><a href="staff.php" class="text-primary font-semibold border-b-2 border-primary">Staff Directory</a></li>
                <li><a href="contact.php" class="text-dark hover:text-primary transition-colors">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header class="bg-arctic py-24 border-b border-primary/5">
        <div class="max-w-7xl mx-auto px-4">
            <div class="max-w-3xl">
                <span class="text-primary font-bold tracking-widest uppercase text-xs mb-4 block">Our Professionals</span>
                <h1 class="text-5xl md:text-7xl font-display font-bold text-dark mb-6 leading-tight">Clinical Staff Directory</h1>
                <p class="text-xl text-light leading-relaxed">Meet our multidisciplinary team of licensed psychologists, clinical counselors, and administrative leaders dedicated to providing evidence-based mental health care.</p>
            </div>
        </div>
    </header>

    <main class="py-20">
        <div class="max-w-7xl mx-auto px-4 space-y-24">

            <section>
                <div class="flex items-center gap-4 mb-12">
                    <h2 class="text-3xl font-display font-bold">Clinical Leadership</h2>
                    <div class="h-px bg-gray-200 flex-grow"></div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    <?php 
                    $leadership = array_filter($staff, function($m) { return $m['isLeadership']; });
                    foreach($leadership as $member): 
                    ?>
                    <div class="flex flex-col md:flex-row bg-white rounded-[2rem] border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-500">
                        <div class="md:w-2/5 h-80 md:h-auto">
                            <img src="<?php echo $member['image']; ?>" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
                        </div>
                        <div class="md:w-3/5 p-10 flex flex-col justify-center">
                            <span class="text-primary font-bold text-[10px] uppercase tracking-tighter mb-2"><?php echo $member['credentials']; ?></span>
                            <h3 class="text-2xl font-display font-bold mb-1 text-dark"><?php echo $member['name']; ?></h3>
                            <p class="text-secondary font-semibold text-sm mb-4"><?php echo $member['position']; ?></p>
                            <p class="text-light text-sm leading-relaxed italic mb-6">"<?php echo $member['bio']; ?>"</p>
                            <a href="contact.php" class="text-dark font-bold text-xs flex items-center gap-2 hover:text-primary transition-colors">
                                CONSULTATION <i class="fas fa-calendar-check"></i>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section>
                <div class="flex items-center gap-4 mb-12">
                    <h2 class="text-3xl font-display font-bold">Counseling & Specialist Staff</h2>
                    <div class="h-px bg-gray-200 flex-grow"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php 
                    $clinical = array_filter($staff, function($m) { return !$m['isLeadership']; });
                    foreach($clinical as $member): 
                    ?>
                    <div class="group">
                        <div class="aspect-[4/5] rounded-3xl overflow-hidden mb-6 bg-arctic">
                            <img src="<?php echo $member['image']; ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>
                        <h3 class="text-xl font-display font-bold text-dark mb-1"><?php echo $member['name']; ?></h3>
                        <p class="text-primary font-bold text-[10px] uppercase tracking-widest mb-3"><?php echo $member['credentials']; ?></p>
                        <p class="text-light text-sm line-clamp-3"><?php echo $member['bio']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>

        </div>
    </main>

    <section class="py-24 bg-dark text-white rounded-t-[4rem]">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-display font-bold mb-8 italic">Ready to speak with one of our practitioners?</h2>
            <p class="text-white/60 text-lg mb-12">Professional, confidential, and compassionate care is just a consultation away.</p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="contact.php" class="bg-primary text-white px-10 py-4 rounded-full font-bold hover:bg-secondary transition-all">Schedule Appointment</a>
                <a href="services.php" class="border border-white/20 px-10 py-4 rounded-full font-bold hover:bg-white/10 transition-all">Explore Services</a>
            </div>
        </div>
    </section>

    <footer class="bg-white py-12 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm text-light">&copy; <?php echo date('Y'); ?> SereneMind Psychological Life Center. All staff are licensed practitioners.</p>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>