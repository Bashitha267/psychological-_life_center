# Missing Images - Placeholder Guide

The following image files are expected by the website but are currently missing. You need to add these image files to the specified directories:

## Service Images (GIF or static images)
- `assets/images/service1.gif` - Individual Therapy icon/animation
- `assets/images/service2.gif` - Group Therapy icon/animation
- `assets/images/service3.gif` - Couple's Counseling icon/animation
- `assets/images/service4.gif` (if exists)
- `assets/images/service5.gif` (if exists)
- `assets/images/service6.gif` (if exists)

**Recommended**: Use icon images (PNG/JPG 200x200px) or animated GIFs related to mental health services.

## Hero Carousel Images
- `assets/images/hero1.jpg` - Main hero image 1 (1920x600px)
- `assets/images/hero2.jpg` - Main hero image 2 (1920x600px)
- `assets/images/hero3.jpg` - Main hero image 3 (1920x600px)

**Recommended**: High-quality images showing therapy sessions, peaceful environments, or your center.

## Project Thumbnails
- `assets/images/projects/project1-thumb.jpg` - Project 1 thumbnail (800x600px)
- `assets/images/projects/project2-thumb.jpg` - Project 2 thumbnail (800x600px)
- `assets/images/projects/project3-thumb.jpg` (if exists)
- `assets/images/projects/project4-thumb.jpg` (if exists)

**Recommended**: Images showcasing community projects, workshops, or initiatives.

## Project Gallery Images
For each project, you may also need gallery images:
- `assets/images/projects/project1-1.jpg` through `project1-6.jpg`
- `assets/images/projects/project2-1.jpg` through `project2-6.jpg`
- etc.

## Testimonial Client Photos
- `assets/images/testimonials/client1.jpg` - Client 1 photo (300x300px circular)
- `assets/images/testimonials/client2.jpg` - Client 2 photo (300x300px circular)
- `assets/images/testimonials/client3.jpg` - Client 3 photo (300x300px circular)
- `assets/images/testimonials/client4.jpg` - Client 4 photo (300x300px circular)
- `assets/images/testimonials/client5.jpg` - Client 5 photo (300x300px circular)
- `assets/images/testimonials/client6.jpg` - Client 6 photo (300x300px circular)

**Important**: Use anonymous/stock photos or photos with permission. These display as circular avatars.

## Staff Photos
Staff photos are defined in data.php and should be added to:
- `assets/images/staff/` directory

**Recommended**: Professional headshots (500x500px minimum) for each staff member.

## Quick Fix Options:

### Option 1: Use Placeholder Service (Recommended for Development)
Use a placeholder image service temporarily:
- Update `data.php` to use placeholder URLs like:
  - `https://via.placeholder.com/200x200/4A90E2/FFFFFF?text=Service+Icon`
  - `https://via.placeholder.com/1920x600/87CEEB/FFFFFF?text=Hero+Image`

### Option 2: Download Stock Images
Use free stock photo sites:
- **Unsplash** (https://unsplash.com) - Search for "therapy", "counseling", "mental health"
- **Pexels** (https://pexels.com) - Free stock photos
- **Pixabay** (https://pixabay.com) - Free images

### Option 3: Create Simple Placeholders
Create simple colored placeholder images with text using any image editor or online tool.

## File Structure:
```
assets/
└── images/
    ├── hero1.jpg
    ├── hero2.jpg
    ├── hero3.jpg
    ├── service1.gif
    ├── service2.gif
    ├── service3.gif
    ├── projects/
    │   ├── project1-thumb.jpg
    │   ├── project2-thumb.jpg
    │   ├── project1-1.jpg
    │   └── ... (more project images)
    ├── testimonials/
    │   ├── client1.jpg
    │   ├── client2.jpg
    │   ├── client3.jpg
    │   ├── client4.jpg
    │   ├── client5.jpg
    │   └── client6.jpg
    └── staff/
        ├── staff1.jpg
        └── ... (more staff photos)
```

## Note:
The directories have been created. You just need to add the image files. Until you add real images, you may see broken image icons on the website, but the layout and functionality will work correctly.
