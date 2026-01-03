# SereneMind - Psychological Life Center Website

## Professional, Clean, and Empathetic Web UI

This is a comprehensive website for **SereneMind**, Sri Lanka's largest psychological life center. The design features an airy, calming aesthetic with Arctic Blue (#F0F8FF) and Sky Blue gradients, elegant typography (Playfair Display for headings, Montserrat for body text), and a focus on empathy and professionalism.

---

## 🎨 Design Specifications

- **Color Palette:**
  - Soft Whites
  - Arctic Blue: #F0F8FF
  - Sky Blue: #87CEEB
  - Primary Blue: #4A90E2

- **Typography:**
  - Headings: Playfair Display (serif)
  - Body: Montserrat (sans-serif)

- **Design Principles:**
  - Clean and minimal
  - Airy spacing
  - Empathetic and warm
  - Professional authority

---

## 📁 Project Structure

```
psy/
├── index.php                 # Homepage with multi-sections
├── services.php              # Services directory with GIF/Video support
├── staff.php                 # Staff directory with professional profiles
├── projects.php              # Projects gallery
├── project-detail.php        # Single project view with 6-image masonry
├── internship.php            # NSBM internship portal
├── foreign-joins.php         # International partnerships
├── contact.php               # Contact page with Google Maps
├── data.php                  # Centralized data configuration
├── assets/
│   ├── css/
│   │   └── style.css         # Main stylesheet
│   ├── js/
│   │   └── main.js           # JavaScript functionality
│   └── images/               # Image assets (see below)
└── README.md                 # This file
```

---

## 🖼️ Required Images

Please add the following images to complete the website:

### **assets/images/** (Root Level)
- `hero1.jpg` - Hero carousel image 1 (serene nature)
- `hero2.jpg` - Hero carousel image 2 (therapy environment)
- `hero3.jpg` - Hero carousel image 3 (empowering setting)
- `internship-students.jpg` - Students in clinical setting
- `nsbm-logo.png` - NSBM University logo

### **assets/images/services/**
- `service1.gif` - Individual therapy animation
- `service2.gif` - Family counseling animation
- `service3.gif` - Child psychology animation
- `service4.gif` - Anxiety/depression treatment animation
- `service5.gif` - Stress management animation
- `service6.gif` - Career counseling animation

### **assets/images/staff/**
- `dr-nimal.jpg` - Director headshot
- `dr-sanduni.jpg` - Head of Clinical Services headshot
- `ms-dilini.jpg` - Senior Clinical Psychologist headshot
- `dr-kamal.jpg` - Consultant Psychiatrist headshot
- `ms-chamari.jpg` - Child Psychologist headshot
- `mr-ruwan.jpg` - Counseling Psychologist headshot

### **assets/images/projects/**
- `project1-thumb.jpg` - Project 1 thumbnail
- `project1-1.jpg` through `project1-6.jpg` - Project 1 gallery images
- `project2-thumb.jpg` - Project 2 thumbnail
- `project2-1.jpg` through `project2-6.jpg` - Project 2 gallery images
- `project3-thumb.jpg` - Project 3 thumbnail
- `project3-1.jpg` through `project3-6.jpg` - Project 3 gallery images
- `project4-thumb.jpg` - Project 4 thumbnail
- `project4-1.jpg` through `project4-6.jpg` - Project 4 gallery images

---

## 🚀 Getting Started

### 1. **Setup XAMPP**
   - Ensure XAMPP is installed and running
   - Apache server should be active

### 2. **Add Images**
   - Create the directory structure as outlined above
   - Add your images to the appropriate folders

### 3. **Configure Google Maps API**
   - Open `contact.php`
   - Find line: `src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap"`
   - Replace `YOUR_GOOGLE_MAPS_API_KEY` with your actual API key
   - Get a free API key from: https://developers.google.com/maps/documentation/javascript/get-api-key

### 4. **Access the Website**
   - Open browser and navigate to: `http://localhost/psy/`

---

## 📄 Pages Overview

### **1. Homepage (index.php)**
- Hero carousel with 3 slides
- Top 3 services grid
- Latest 2 projects
- Leadership highlight (Director & Head of Staff)
- NSBM internship CTA block
- Footer with social links

### **2. Services (services.php)**
- Full services list (6 services)
- Each service with GIF/video support
- Detailed descriptions
- Book appointment CTAs

### **3. Staff Directory (staff.php)**
- Professional grid layout
- High-quality headshots (circular on homepage, standard on directory)
- Name, credentials, position, bio (2 lines max)
- All 6 staff members displayed

### **4. Projects Gallery (projects.php)**
- Minimalist card layout
- Date/name tags
- 4 community projects
- View details buttons

### **5. Project Detail (project-detail.php)**
- 6-image masonry gallery with lightbox
- Long-form case study
- Key results highlights
- Related projects

### **6. Internship Portal (internship.php)**
- Split-screen layout
- Left: Visual content + NSBM logo + benefits
- Right: Multi-step application form (3 steps)
- Program details (duration, positions)

### **7. Foreign Partnerships (foreign-joins.php)**
- Global partnership overview
- World map visualization
- Partner countries grid
- Collaboration opportunities
- Partnership inquiry form

### **8. Contact (contact.php)**
- Full-width Google Maps integration
- Sidebar: Contact info + opening hours + social links
- Modern contact form with soft-rounded inputs
- Emergency line highlight

---

## 🗄️ Data Management

All content is stored in `data.php` for easy management:

- Hero carousel images
- Services (6 items)
- Staff members (6 items)
- Projects (4 items with galleries)
- Internship information
- Contact details
- Social media links
- Partnership information

**Later migration to MySQL:**
The structure in `data.php` is designed to easily convert to database queries. Simply replace the PHP arrays with MySQL `SELECT` statements.

---

## 🎯 Key Features

✅ **Responsive Design** - Mobile, tablet, desktop optimized  
✅ **Smooth Animations** - Scroll effects, hover transitions  
✅ **Hero Carousel** - Auto-play with manual controls  
✅ **Multi-Step Forms** - Internship application (3 steps)  
✅ **Image Lightbox** - Project gallery viewer  
✅ **Form Validation** - Client-side validation  
✅ **Floating CTA** - Contact button (appears on scroll)  
✅ **Google Maps** - Integrated location map  
✅ **Social Integration** - LinkedIn, YouTube, Facebook  

---

## 🛠️ Customization

### **Colors**
Edit CSS variables in `assets/css/style.css`:
```css
:root {
    --primary-color: #4A90E2;
    --secondary-color: #87CEEB;
    --arctic-blue: #F0F8FF;
    /* ... more variables */
}
```

### **Content**
Edit data in `data.php`:
```php
$heroImages = [ /* ... */ ];
$services = [ /* ... */ ];
$staff = [ /* ... */ ];
// etc.
```

### **Fonts**
Fonts are loaded from Google Fonts. To change:
1. Edit the `<link>` tag in page headers
2. Update font-family in CSS

---

## 📱 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

---

## 🔒 Security Notes

For production deployment:
1. Implement server-side form validation
2. Add CSRF protection
3. Sanitize all user inputs
4. Use prepared statements for MySQL
5. Enable HTTPS
6. Protect sensitive files (.php, .env)

---

## 📞 Support

For questions or issues:
- Email: info@serenemind.lk
- Phone: +94 11 234 5678
- Emergency: +94 77 123 4567

---

## 📝 License

© 2026 SereneMind Psychological Life Center. All rights reserved.

---

## 🎉 Next Steps

1. **Add all images** to the appropriate folders
2. **Configure Google Maps API** key in contact.php
3. **Test all pages** in your browser
4. **Customize content** in data.php to match your actual data
5. **Prepare MySQL database** for production migration

---

**Built with care for mental wellness. 💙**
