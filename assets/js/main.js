// SereneMind - Main JavaScript
// Interactive functionality for all pages

// ===== Mobile Navigation =====
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger, .mobile-menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu-overlay');
    const navMenu = document.querySelector('.nav-menu');
    
    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        });
        
        // Close menu when clicking on backdrop
        mobileMenu.addEventListener('click', function(e) {
            if (e.target === mobileMenu || e.target.closest('a')) {
                mobileMenu.classList.remove('active');
                hamburger.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
        
        // Close menu when clicking on a link
        document.querySelectorAll('.mobile-menu-overlay a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                hamburger.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }
    
    // Scroll Animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
            }
        });
    }, observerOptions);
    
    // Observe all sections with scroll-animate class
    document.querySelectorAll('.scroll-animate').forEach(section => {
        observer.observe(section);
    });
});

// ===== Hero Carousel =====
let currentSlideIndex = 0;
const slides = document.querySelectorAll('.carousel-slide');
const indicators = document.querySelectorAll('.indicator');

function showSlide(index) {
    if (!slides.length) return;
    
    // Hide all slides
    slides.forEach(slide => slide.classList.remove('active'));
    indicators.forEach(indicator => indicator.classList.remove('active'));
    
    // Show current slide
    currentSlideIndex = (index + slides.length) % slides.length;
    slides[currentSlideIndex].classList.add('active');
    if (indicators[currentSlideIndex]) {
        indicators[currentSlideIndex].classList.add('active');
    }
}

function moveSlide(direction) {
    showSlide(currentSlideIndex + direction);
}

function currentSlide(index) {
    showSlide(index);
}

// Auto-play carousel
if (slides.length > 0) {
    setInterval(() => {
        moveSlide(1);
    }, 5000);
}

// ===== Smooth Scrolling =====
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// ===== Form Validation =====
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePhone(phone) {
    const re = /^[\d\s\-\+\(\)]+$/;
    return re.test(phone);
}

// ===== Multi-Step Form (Internship) =====
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('internship-form');
    if (!form) return;
    
    let currentStep = 1;
    const totalSteps = 3;
    
    function showStep(step) {
        // Hide all steps
        document.querySelectorAll('.form-step').forEach(s => {
            s.classList.remove('active');
        });
        
        // Show current step
        const currentStepElement = document.querySelector(`[data-step="${step}"]`);
        if (currentStepElement) {
            currentStepElement.classList.add('active');
        }
        
        // Update progress indicators
        document.querySelectorAll('.progress-step').forEach((indicator, index) => {
            if (index < step) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }
    
    function validateStep(step) {
        const stepElement = document.querySelector(`[data-step="${step}"]`);
        const inputs = stepElement.querySelectorAll('input[required], select[required], textarea[required]');
        let isValid = true;
        
        inputs.forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
                input.style.borderColor = '#dc3545';
            } else {
                input.style.borderColor = '#E0E6ED';
                
                // Additional validation
                if (input.type === 'email' && !validateEmail(input.value)) {
                    isValid = false;
                    input.style.borderColor = '#dc3545';
                }
                
                if (input.type === 'tel' && !validatePhone(input.value)) {
                    isValid = false;
                    input.style.borderColor = '#dc3545';
                }
            }
        });
        
        return isValid;
    }
    
    // Next button handlers
    document.querySelectorAll('.next-step').forEach(button => {
        button.addEventListener('click', function() {
            if (validateStep(currentStep)) {
                currentStep++;
                if (currentStep <= totalSteps) {
                    showStep(currentStep);
                }
            } else {
                alert('Please fill in all required fields correctly.');
            }
        });
    });
    
    // Previous button handlers
    document.querySelectorAll('.prev-step').forEach(button => {
        button.addEventListener('click', function() {
            currentStep--;
            if (currentStep >= 1) {
                showStep(currentStep);
            }
        });
    });
    
    // Form submission
    form.addEventListener('submit', function(e) {
        if (!validateStep(currentStep)) {
            e.preventDefault();
            alert('Please fill in all required fields correctly.');
        }
    });
    
    // Initialize
    showStep(currentStep);
});

// ===== Contact Form Validation =====
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    if (!contactForm) return;
    
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        const firstName = document.getElementById('first-name');
        const lastName = document.getElementById('last-name');
        const email = document.getElementById('email');
        const subject = document.getElementById('subject');
        const message = document.getElementById('message');
        const privacy = document.querySelector('input[name="privacy"]');
        
        // Reset borders
        [firstName, lastName, email, subject, message].forEach(field => {
            if (field) field.style.borderColor = '#E0E6ED';
        });
        
        // Validate fields
        if (!firstName.value.trim()) {
            firstName.style.borderColor = '#dc3545';
            isValid = false;
        }
        
        if (!lastName.value.trim()) {
            lastName.style.borderColor = '#dc3545';
            isValid = false;
        }
        
        if (!email.value.trim() || !validateEmail(email.value)) {
            email.style.borderColor = '#dc3545';
            isValid = false;
        }
        
        if (!subject.value) {
            subject.style.borderColor = '#dc3545';
            isValid = false;
        }
        
        if (!message.value.trim()) {
            message.style.borderColor = '#dc3545';
            isValid = false;
        }
        
        if (!privacy.checked) {
            isValid = false;
            alert('Please agree to the privacy policy.');
        }
        
        if (isValid) {
            // Show success message
            alert('Thank you for your message! We will get back to you within 24 hours.');
            contactForm.reset();
        } else {
            alert('Please fill in all required fields correctly.');
        }
    });
});

// ===== Partnership Form Validation =====
document.addEventListener('DOMContentLoaded', function() {
    const partnershipForm = document.getElementById('partnership-form');
    if (!partnershipForm) return;
    
    partnershipForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        const requiredFields = partnershipForm.querySelectorAll('input[required], select[required], textarea[required]');
        
        requiredFields.forEach(field => {
            field.style.borderColor = '#E0E6ED';
            
            if (!field.value.trim()) {
                field.style.borderColor = '#dc3545';
                isValid = false;
            }
            
            if (field.type === 'email' && !validateEmail(field.value)) {
                field.style.borderColor = '#dc3545';
                isValid = false;
            }
        });
        
        const agreement = partnershipForm.querySelector('input[name="agreement"]');
        if (!agreement.checked) {
            isValid = false;
            alert('Please agree to the terms and conditions.');
        }
        
        if (isValid) {
            alert('Thank you for your partnership inquiry! We will review your submission and contact you soon.');
            partnershipForm.reset();
        } else {
            alert('Please fill in all required fields correctly.');
        }
    });
});

// ===== Scroll Animations =====
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Animate elements on scroll
document.addEventListener('DOMContentLoaded', function() {
    const animateElements = document.querySelectorAll('.service-card, .project-card, .staff-card, .result-card, .opportunity-card');
    
    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

// ===== Floating Button Animation =====
document.addEventListener('DOMContentLoaded', function() {
    const floatingBtn = document.querySelector('.floating-btn');
    if (floatingBtn) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                floatingBtn.style.opacity = '1';
                floatingBtn.style.visibility = 'visible';
            } else {
                floatingBtn.style.opacity = '0';
                floatingBtn.style.visibility = 'hidden';
            }
        });
        
        // Initially hide
        floatingBtn.style.transition = 'opacity 0.3s ease, visibility 0.3s ease';
        if (window.scrollY <= 300) {
            floatingBtn.style.opacity = '0';
            floatingBtn.style.visibility = 'hidden';
        }
    }
});

// ===== Image Loading =====
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('img');
    
    images.forEach(img => {
        img.addEventListener('load', function() {
            this.style.opacity = '1';
        });
        
        img.style.opacity = '0';
        img.style.transition = 'opacity 0.3s ease';
        
        if (img.complete) {
            img.style.opacity = '1';
        }
    });
});

// ===== Back to Top =====
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// ===== Loading Placeholder for GIF/Videos =====
document.addEventListener('DOMContentLoaded', function() {
    const serviceAnimations = document.querySelectorAll('.service-animation');
    
    serviceAnimations.forEach(animation => {
        animation.addEventListener('error', function() {
            // If GIF/video fails to load, replace with placeholder
            this.src = 'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"%3E%3Crect fill="%23F0F8FF" width="200" height="200"/%3E%3Ctext x="50%25" y="50%25" text-anchor="middle" dy=".3em" fill="%234A90E2" font-family="Arial" font-size="16"%3EService Icon%3C/text%3E%3C/svg%3E';
        });
    });
});

// ===== Form Input Enhancement =====
document.addEventListener('DOMContentLoaded', function() {
    const formInputs = document.querySelectorAll('input, textarea, select');
    
    formInputs.forEach(input => {
        // Add focus effect
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
        
        // Clear error on input
        input.addEventListener('input', function() {
            this.style.borderColor = '#E0E6ED';
        });
    });
});

// ===== Prevent Multiple Form Submissions =====
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function() {
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Submitting...';
                
                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.textContent = submitBtn.dataset.originalText || 'Submit';
                }, 3000);
            }
        });
    });
});

// ===== Navbar Scroll Effect =====
let lastScroll = 0;
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', function() {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 100) {
        navbar.style.boxShadow = '0 4px 16px rgba(0, 0, 0, 0.1)';
    } else {
        navbar.style.boxShadow = '0 2px 8px rgba(0, 0, 0, 0.08)';
    }
    
    lastScroll = currentScroll;
});

// ===== Console Welcome Message =====
console.log('%cSereneMind Psychological Life Center', 'color: #4A90E2; font-size: 20px; font-weight: bold;');
console.log('%cWelcome to our website! We\'re here to support your mental wellness journey.', 'color: #5A6C7D; font-size: 12px;');

// ===== Testimonials Swiper =====
let currentTestimonial = 0;
const testimonialSlides = document.querySelectorAll('.testimonial-slide');
let testimonialInterval;

function showTestimonial(index) {
    if (!testimonialSlides.length) return;
    
    // Hide all slides
    testimonialSlides.forEach(slide => slide.classList.remove('active'));
    
    // Calculate index with wrapping
    currentTestimonial = (index + testimonialSlides.length) % testimonialSlides.length;
    
    // Show current slide
    testimonialSlides[currentTestimonial].classList.add('active');
    
    // Update pagination dots
    updatePaginationDots();
}

function changeTestimonial(direction) {
    showTestimonial(currentTestimonial + direction);
    resetTestimonialAutoplay();
}

function goToTestimonial(index) {
    showTestimonial(index);
    resetTestimonialAutoplay();
}

function createPaginationDots() {
    const pagination = document.querySelector('.swiper-pagination');
    if (!pagination || !testimonialSlides.length) return;
    
    pagination.innerHTML = '';
    testimonialSlides.forEach((slide, index) => {
        const dot = document.createElement('span');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToTestimonial(index));
        pagination.appendChild(dot);
    });
}

function updatePaginationDots() {
    const dots = document.querySelectorAll('.swiper-pagination .dot');
    dots.forEach((dot, index) => {
        if (index === currentTestimonial) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
}

function startTestimonialAutoplay() {
    testimonialInterval = setInterval(() => {
        showTestimonial(currentTestimonial + 1);
    }, 5000); // Change every 5 seconds
}

function resetTestimonialAutoplay() {
    clearInterval(testimonialInterval);
    startTestimonialAutoplay();
}

// Initialize testimonials swiper
document.addEventListener('DOMContentLoaded', function() {
    if (testimonialSlides.length > 0) {
        showTestimonial(0);
        createPaginationDots();
        startTestimonialAutoplay();
        
        // Pause autoplay when hovering over testimonial
        const testimonialCard = document.querySelector('.testimonial-card');
        if (testimonialCard) {
            testimonialCard.addEventListener('mouseenter', () => {
                clearInterval(testimonialInterval);
            });
            testimonialCard.addEventListener('mouseleave', () => {
                startTestimonialAutoplay();
            });
        }
    }
});

// Export functions for inline use
window.moveSlide = moveSlide;
window.currentSlide = currentSlide;
window.scrollToTop = scrollToTop;
window.changeTestimonial = changeTestimonial;
window.goToTestimonial = goToTestimonial;
