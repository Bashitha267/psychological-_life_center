<?php
// Data configuration for SereneMind - Later will be replaced with MySQL queries

// Hero Carousel Images
$heroImages = [
    [
        'image' => 'https://images.unsplash.com/photo-1573497620053-ea5300f94f21?w=1920&h=600&fit=crop',
        'title' => 'Welcome to SereneMind',
        'subtitle' => 'Sri Lanka\'s Leading Psychological Life Center'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1544027993-37dbfe43562a?w=1920&h=600&fit=crop',
        'title' => 'Professional Mental Health Care',
        'subtitle' => 'Compassionate Support for Your Journey'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1512290923902-8a9f81dc236c?w=1920&h=600&fit=crop',
        'title' => 'Empowering Lives Through Therapy',
        'subtitle' => 'Your Mental Wellness Matters'
    ]
];

// Services Data
$services = [
    [
        'id' => 1,
        'title' => 'Individual Therapy',
        'description' => 'Personalized one-on-one sessions with experienced psychologists tailored to your unique needs.',
        'icon' => 'https://via.placeholder.com/200x200/4A90E2/FFFFFF?text=Individual+Therapy',
        'details' => 'Our individual therapy sessions provide a safe, confidential space where you can explore your thoughts, feelings, and behaviors with a qualified mental health professional.'
    ],
    [
        'id' => 2,
        'title' => 'Family Counseling',
        'description' => 'Strengthen family bonds and resolve conflicts through guided therapeutic sessions.',
        'icon' => 'https://via.placeholder.com/200x200/87CEEB/FFFFFF?text=Family+Counseling',
        'details' => 'Family counseling helps improve communication, resolve conflicts, and create a more harmonious home environment for all family members.'
    ],
    [
        'id' => 3,
        'title' => 'Child Psychology',
        'description' => 'Specialized care for children dealing with behavioral, emotional, and developmental challenges.',
        'icon' => 'https://via.placeholder.com/200x200/4A90E2/FFFFFF?text=Child+Psychology',
        'details' => 'Our child psychology services address a wide range of issues including ADHD, anxiety, autism spectrum disorders, and learning difficulties.'
    ],
    [
        'id' => 4,
        'title' => 'Anxiety & Depression Treatment',
        'description' => 'Evidence-based treatment programs for managing anxiety disorders and depression.',
        'icon' => 'https://via.placeholder.com/200x200/87CEEB/FFFFFF?text=Anxiety+Treatment',
        'details' => 'We offer comprehensive treatment including cognitive behavioral therapy, mindfulness techniques, and medication management when necessary.'
    ],
    [
        'id' => 5,
        'title' => 'Stress Management',
        'description' => 'Learn effective techniques to cope with daily stressors and improve overall well-being.',
        'icon' => 'https://via.placeholder.com/200x200/4A90E2/FFFFFF?text=Stress+Management',
        'details' => 'Our stress management programs teach practical skills including relaxation techniques, time management, and healthy coping mechanisms.'
    ],
    [
        'id' => 6,
        'title' => 'Career Counseling',
        'description' => 'Professional guidance for career decisions, transitions, and workplace challenges.',
        'icon' => 'https://via.placeholder.com/200x200/87CEEB/FFFFFF?text=Career+Counseling',
        'details' => 'We help you navigate career choices, overcome workplace stress, and achieve professional fulfillment through personalized counseling.'
    ]
];

// Staff Data
$staff = [
    [
        'id' => 1,
        'name' => 'Dr. Nimal Perera',
        'position' => 'Director & Consultant Psychiatrist',
        'credentials' => 'MBBS, MD (Psychiatry)',
        'image' => 'https://i.pravatar.cc/500?img=12',
        'bio' => 'With over 20 years of experience, Dr. Perera leads our center with compassion and expertise in treating complex mental health conditions.',
        'isLeadership' => true
    ],
    [
        'id' => 2,
        'name' => 'Dr. Sanduni Silva',
        'position' => 'Head of Clinical Services',
        'credentials' => 'MBBS, DPM, MD (Psychiatry)',
        'image' => 'https://i.pravatar.cc/500?img=5',
        'bio' => 'Dr. Silva specializes in mood disorders and anxiety, bringing warmth and evidence-based care to every patient interaction.',
        'isLeadership' => true
    ],
    [
        'id' => 3,
        'name' => 'Ms. Dilini Fernando',
        'position' => 'Senior Clinical Psychologist',
        'credentials' => 'MSc Clinical Psychology',
        'image' => 'https://i.pravatar.cc/500?img=9',
        'bio' => 'Specializing in cognitive behavioral therapy and trauma-focused interventions for adults and adolescents.',
        'isLeadership' => false
    ],
    [
        'id' => 4,
        'name' => 'Dr. Kamal Bandara',
        'position' => 'Consultant Psychiatrist',
        'credentials' => 'MBBS, MD (Psychiatry)',
        'image' => 'https://i.pravatar.cc/500?img=13',
        'bio' => 'Expert in treating psychotic disorders and providing comprehensive psychiatric assessments and medication management.',
        'isLeadership' => false
    ],
    [
        'id' => 5,
        'name' => 'Ms. Chamari Wickramasinghe',
        'position' => 'Child & Adolescent Psychologist',
        'credentials' => 'MSc Educational Psychology',
        'image' => 'https://i.pravatar.cc/500?img=10',
        'bio' => 'Dedicated to helping children and teenagers overcome emotional challenges through play therapy and family interventions.',
        'isLeadership' => false
    ],
    [
        'id' => 6,
        'name' => 'Mr. Ruwan De Silva',
        'position' => 'Counseling Psychologist',
        'credentials' => 'MSc Counseling Psychology',
        'image' => 'https://i.pravatar.cc/500?img=14',
        'bio' => 'Provides supportive counseling for relationship issues, stress management, and personal development.',
        'isLeadership' => false
    ]
];

// Projects Data
$projects = [
    [
        'id' => 1,
        'title' => 'Community Mental Health Awareness Campaign',
        'date' => '2025-11-15',
        'shortDesc' => 'A month-long campaign reaching over 5,000 community members across Sri Lanka.',
        'thumbnail' => 'https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=800&h=600&fit=crop',
        'images' => [
            'https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1557804506-669a67965ba0?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1531538606174-0f90ff5dce83?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop'
        ],
        'caseStudy' => 'This comprehensive campaign aimed to reduce stigma around mental health in rural communities. Through workshops, public seminars, and school programs, we educated thousands about the importance of mental wellness and available resources. The initiative included training community leaders as mental health advocates and establishing support groups in 15 villages.',
        'keyResults' => [
            '5,000+ community members reached',
            '15 villages with active support groups',
            '50 community leaders trained',
            '30% increase in help-seeking behavior'
        ]
    ],
    [
        'id' => 2,
        'title' => 'Youth Mental Wellness Program',
        'date' => '2025-09-20',
        'shortDesc' => 'Partnering with schools to support adolescent mental health through counseling and education.',
        'thumbnail' => 'assets/images/projects/project2-thumb.jpg',
        'images' => [
            'assets/images/projects/project2-1.jpg',
            'assets/images/projects/project2-2.jpg',
            'assets/images/projects/project2-3.jpg',
            'assets/images/projects/project2-4.jpg',
            'assets/images/projects/project2-5.jpg',
            'assets/images/projects/project2-6.jpg'
        ],
        'caseStudy' => 'Recognizing the increasing mental health challenges faced by young people, this program provided free counseling services in 10 schools. We conducted stress management workshops, peer support training, and parent education sessions. The program also established confidential counseling spaces within schools.',
        'keyResults' => [
            '10 schools participated',
            '800+ students received counseling',
            '200 parents attended workshops',
            '90% satisfaction rate'
        ]
    ],
    [
        'id' => 3,
        'title' => 'Workplace Wellness Initiative',
        'date' => '2025-07-10',
        'shortDesc' => 'Corporate mental health program helping employees manage stress and improve productivity.',
        'thumbnail' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=800&h=600&fit=crop',
        'images' => [
            'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1553028826-f4804a6dba3b?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=600&h=400&fit=crop'
        ],
        'caseStudy' => 'This corporate wellness program was designed to address burnout, stress, and work-life balance issues in the workplace. We provided on-site counseling, stress management workshops, and resilience training to employees across 8 major corporations in Colombo.',
        'keyResults' => [
            '8 corporate partners',
            '1,200+ employees benefited',
            '25% reduction in stress-related absences',
            'Improved employee satisfaction scores'
        ]
    ],
    [
        'id' => 4,
        'title' => 'Post-Pandemic Recovery Support',
        'date' => '2025-05-05',
        'shortDesc' => 'Free counseling services for individuals struggling with pandemic-related mental health challenges.',
        'thumbnail' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&h=600&fit=crop',
        'images' => [
            'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1584515933487-779824d29309?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1588196749597-9ff075ee6b5b?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1585559604959-2077d7b39e40?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1584036561584-b03c19da874c?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?w=600&h=400&fit=crop'
        ],
        'caseStudy' => 'In response to the mental health crisis following the pandemic, we launched a comprehensive support program offering free counseling sessions, virtual support groups, and crisis intervention services for those affected by loss, isolation, and economic hardship.',
        'keyResults' => [
            '600+ individuals counseled',
            '50 support group sessions conducted',
            'Teletherapy services established',
            '95% reported significant improvement'
        ]
    ]
];

// Internship Information
$internshipInfo = [
    'title' => 'NSBM University Collaboration',
    'description' => 'SereneMind is proud to partner with NSBM Green University to offer internship opportunities for psychology students. Gain hands-on experience in clinical settings under expert supervision.',
    'partnerLogo' => 'assets/images/nsbm-logo.png',
    'benefits' => [
        'Direct clinical exposure',
        'Mentorship from experienced professionals',
        'Certificate of completion',
        'Potential employment opportunities'
    ],
    'duration' => '6 months',
    'positions' => 10
];

// Contact Information
$contactInfo = [
    'address' => '123, Duplication Road, Colombo 04, Sri Lanka',
    'phone' => '+94 11 234 5678',
    'email' => 'info@serenemind.lk',
    'mapCoordinates' => [
        'lat' => 6.9022,
        'lng' => 79.8611
    ],
    'hours' => [
        'weekdays' => '8:00 AM - 6:00 PM',
        'saturday' => '9:00 AM - 1:00 PM',
        'sunday' => 'Closed'
    ],
    'emergencyLine' => '+94 77 123 4567'
];

// Social Media Links
$socialMedia = [
    'linkedin' => 'https://linkedin.com/company/serenemind',
    'youtube' => 'https://youtube.com/@serenemindlk',
    'facebook' => 'https://facebook.com/serenemindlk'
];

// Foreign Partnership Information
$foreignPartnerships = [
    'description' => 'SereneMind welcomes international collaborations and partnerships. We are committed to advancing mental health care through global knowledge exchange and research initiatives.',
    'partnerCountries' => ['United Kingdom', 'Australia', 'Singapore', 'India'],
    'opportunities' => [
        'Research collaborations',
        'Professional exchange programs',
        'Training and development initiatives',
        'Joint clinical projects'
    ]
];

// Client Testimonials/Reviews
$testimonials = [
    [
        'id' => 1,
        'name' => 'Anushka Perera',
        'role' => 'Marketing Professional',
        'image' => 'https://i.pravatar.cc/150?img=1',
        'rating' => 5,
        'text' => 'The support I received at SereneMind has been life-changing. The therapists are incredibly compassionate and professional. I finally feel heard and understood. Highly recommended for anyone seeking mental health support.',
        'date' => '2025-12-10'
    ],
    [
        'id' => 2,
        'name' => 'Rajith Fernando',
        'role' => 'Software Engineer',
        'image' => 'https://i.pravatar.cc/150?img=11',
        'rating' => 5,
        'text' => 'Exceptional service! The anxiety management program helped me regain control of my life. The staff is knowledgeable, friendly, and genuinely care about your wellbeing. Best decision I ever made.',
        'date' => '2025-11-25'
    ],
    [
        'id' => 3,
        'name' => 'Priya Jayawardena',
        'role' => 'Teacher',
        'image' => 'https://i.pravatar.cc/150?img=20',
        'rating' => 5,
        'text' => 'Working with Dr. Silva has been transformative. Her empathetic approach and evidence-based techniques have helped me overcome depression. The center provides a safe, welcoming environment for healing.',
        'date' => '2025-11-15'
    ],
    [
        'id' => 4,
        'name' => 'Kasun Wijesinghe',
        'role' => 'Business Owner',
        'image' => 'https://i.pravatar.cc/150?img=33',
        'rating' => 5,
        'text' => 'The stress management workshops were exactly what I needed. Practical techniques that I use daily. The team at SereneMind is professional, caring, and truly invested in your mental wellness journey.',
        'date' => '2025-10-30'
    ],
    [
        'id' => 5,
        'name' => 'Nadeeka Silva',
        'role' => 'University Student',
        'image' => 'https://i.pravatar.cc/150?img=47',
        'rating' => 5,
        'text' => 'As a student dealing with exam stress and anxiety, SereneMind provided the perfect support system. The counselors are understanding and the techniques they teach are practical and effective. Thank you!',
        'date' => '2025-10-20'
    ],
    [
        'id' => 6,
        'name' => 'Chaminda Bandara',
        'role' => 'Accountant',
        'image' => 'https://i.pravatar.cc/150?img=51',
        'rating' => 5,
        'text' => 'Outstanding experience from start to finish. The family counseling sessions saved my marriage. The therapists are skilled at creating a comfortable space for difficult conversations. Forever grateful!',
        'date' => '2025-10-05'
    ]
];
?>
