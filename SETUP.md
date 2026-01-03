# SereneMind - Quick Setup Guide

## 🚀 5-Minute Setup

### Step 1: Verify Installation
✅ All files are in: `c:\xampp\htdocs\psy\`

### Step 2: Start XAMPP
1. Open XAMPP Control Panel
2. Start **Apache** service
3. (Optional) Start **MySQL** if you plan to use the database

### Step 3: Add Images
You need to add images to these folders:

```
psy/assets/images/
├── hero1.jpg, hero2.jpg, hero3.jpg
├── internship-students.jpg
├── nsbm-logo.png
├── services/
│   └── service1.gif through service6.gif
├── staff/
│   └── dr-nimal.jpg, dr-sanduni.jpg, etc. (6 images)
└── projects/
    └── project thumbnails and galleries (28 images total)
```

**Quick Tip:** Use placeholder images from:
- https://placeholder.com/
- https://picsum.photos/
- Or any stock photo site

### Step 4: Configure Google Maps (Optional)
1. Get a free API key: https://console.cloud.google.com/google/maps-apis
2. Open `contact.php`
3. Find line with `YOUR_GOOGLE_MAPS_API_KEY`
4. Replace with your actual key

### Step 5: Test the Website
Open your browser and go to:
```
http://localhost/psy/
```

## 📄 Available Pages

| Page | URL |
|------|-----|
| Homepage | http://localhost/psy/ |
| Services | http://localhost/psy/services.php |
| Staff | http://localhost/psy/staff.php |
| Projects | http://localhost/psy/projects.php |
| Internship | http://localhost/psy/internship.php |
| Partnerships | http://localhost/psy/foreign-joins.php |
| Contact | http://localhost/psy/contact.php |

## 🎨 Customization Quick Guide

### Change Colors
Edit `assets/css/style.css` - Lines 10-20:
```css
:root {
    --primary-color: #4A90E2;  /* Change this */
    --secondary-color: #87CEEB;  /* And this */
}
```

### Change Content
Edit `data.php`:
- Hero images: `$heroImages` (line 4)
- Services: `$services` (line 18)
- Staff: `$staff` (line 70)
- Projects: `$projects` (line 128)
- Contact info: `$contactInfo` (line 241)

### Add More Services/Staff/Projects
1. Open `data.php`
2. Find the relevant array
3. Copy an existing item
4. Modify the values
5. Save the file

## 🗄️ Future: Migrate to MySQL

When you're ready to use a database:

1. Open phpMyAdmin: http://localhost/phpmyadmin/
2. Create new database: `serenemind`
3. Import `database-schema.sql`
4. Update PHP files to use database queries instead of `data.php`

Example migration for services:
```php
// Old (data.php)
$services = [/* array */];

// New (MySQL)
$query = "SELECT * FROM services WHERE is_active = 1 ORDER BY display_order";
$result = mysqli_query($conn, $query);
$services = mysqli_fetch_all($result, MYSQLI_ASSOC);
```

## 🎯 Features Checklist

- ✅ Responsive design (mobile, tablet, desktop)
- ✅ Smooth animations and transitions
- ✅ Auto-playing hero carousel
- ✅ Multi-step internship form
- ✅ Image lightbox for project galleries
- ✅ Form validation
- ✅ Floating contact button
- ✅ Google Maps integration
- ✅ Social media links

## 🐛 Troubleshooting

### Images not showing?
- Check file paths in `data.php`
- Verify images exist in `assets/images/`
- Check file names match exactly (case-sensitive)

### Forms not working?
- Create `process-contact.php`, `process-internship.php`, and `process-partnership.php` to handle form submissions
- Or use the JavaScript alerts for now (already implemented)

### Carousel not moving?
- Check browser console for JavaScript errors
- Ensure `assets/js/main.js` is loading
- Verify jQuery is not conflicting

### Google Maps not showing?
- Add a valid API key in `contact.php`
- Enable Maps JavaScript API in Google Cloud Console
- Check browser console for API errors

## 📞 Need Help?

Check these files:
- `README.md` - Full documentation
- `assets/images/README.md` - Image specifications
- `database-schema.sql` - Database structure

## 🎉 You're All Set!

Your SereneMind website is ready to go. Just add your images and start customizing the content!

**Happy coding! 💙**
