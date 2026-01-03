-- SereneMind Database Schema
-- Run this SQL script when you're ready to migrate from data.php to MySQL

-- Create Database
CREATE DATABASE IF NOT EXISTS serenemind CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE serenemind;

-- Hero Carousel Table
CREATE TABLE hero_carousel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    subtitle VARCHAR(255) NOT NULL,
    display_order INT DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Services Table
CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    details TEXT NOT NULL,
    icon_path VARCHAR(255) NOT NULL,
    display_order INT DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Staff Table
CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    position VARCHAR(255) NOT NULL,
    credentials VARCHAR(255) NOT NULL,
    bio TEXT NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    is_leadership BOOLEAN DEFAULT FALSE,
    display_order INT DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Projects Table
CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    project_date DATE NOT NULL,
    short_description TEXT NOT NULL,
    case_study TEXT NOT NULL,
    thumbnail_path VARCHAR(255) NOT NULL,
    display_order INT DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Project Images Table
CREATE TABLE project_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_id INT NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    display_order INT DEFAULT 0,
    FOREIGN KEY (project_id) REFERENCES projects(id) ON DELETE CASCADE
);

-- Project Key Results Table
CREATE TABLE project_results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_id INT NOT NULL,
    result_text TEXT NOT NULL,
    display_order INT DEFAULT 0,
    FOREIGN KEY (project_id) REFERENCES projects(id) ON DELETE CASCADE
);

-- Internship Information Table
CREATE TABLE internship_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    partner_logo_path VARCHAR(255) NOT NULL,
    duration VARCHAR(100) NOT NULL,
    available_positions INT NOT NULL,
    is_active BOOLEAN DEFAULT TRUE,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Internship Benefits Table
CREATE TABLE internship_benefits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    benefit_text VARCHAR(255) NOT NULL,
    display_order INT DEFAULT 0
);

-- Internship Applications Table
CREATE TABLE internship_applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    address TEXT NOT NULL,
    university VARCHAR(255) NOT NULL,
    degree VARCHAR(255) NOT NULL,
    year_of_study INT NOT NULL,
    student_id VARCHAR(100) NOT NULL,
    area_of_interest VARCHAR(100) NOT NULL,
    start_date DATE NOT NULL,
    motivation TEXT NOT NULL,
    cv_path VARCHAR(255),
    status ENUM('pending', 'reviewing', 'approved', 'rejected') DEFAULT 'pending',
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Contact Information Table
CREATE TABLE contact_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    address TEXT NOT NULL,
    phone VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    emergency_line VARCHAR(50) NOT NULL,
    map_lat DECIMAL(10, 8) NOT NULL,
    map_lng DECIMAL(11, 8) NOT NULL,
    weekdays_hours VARCHAR(100) NOT NULL,
    saturday_hours VARCHAR(100) NOT NULL,
    sunday_hours VARCHAR(100) NOT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Social Media Links Table
CREATE TABLE social_media (
    id INT AUTO_INCREMENT PRIMARY KEY,
    platform VARCHAR(50) NOT NULL,
    url VARCHAR(255) NOT NULL,
    is_active BOOLEAN DEFAULT TRUE
);

-- Partnership Information Table
CREATE TABLE partnership_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description TEXT NOT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Partner Countries Table
CREATE TABLE partner_countries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    country_name VARCHAR(100) NOT NULL,
    display_order INT DEFAULT 0
);

-- Partnership Opportunities Table
CREATE TABLE partnership_opportunities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    opportunity_text VARCHAR(255) NOT NULL,
    display_order INT DEFAULT 0
);

-- Partnership Inquiries Table
CREATE TABLE partnership_inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    org_name VARCHAR(255) NOT NULL,
    country VARCHAR(100) NOT NULL,
    contact_name VARCHAR(255) NOT NULL,
    contact_email VARCHAR(255) NOT NULL,
    phone VARCHAR(50),
    partnership_type VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    status ENUM('pending', 'reviewing', 'responded', 'closed') DEFAULT 'pending',
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Contact Messages Table
CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50),
    subject VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    status ENUM('unread', 'read', 'responded', 'archived') DEFAULT 'unread',
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert Initial Data (from data.php)
-- Hero Carousel
INSERT INTO hero_carousel (image_path, title, subtitle, display_order) VALUES
('assets/images/hero1.jpg', 'Welcome to SereneMind', 'Sri Lanka\'s Leading Psychological Life Center', 1),
('assets/images/hero2.jpg', 'Professional Mental Health Care', 'Compassionate Support for Your Journey', 2),
('assets/images/hero3.jpg', 'Empowering Lives Through Therapy', 'Your Mental Wellness Matters', 3);

-- Services
INSERT INTO services (title, description, details, icon_path, display_order) VALUES
('Individual Therapy', 'Personalized one-on-one sessions with experienced psychologists tailored to your unique needs.', 'Our individual therapy sessions provide a safe, confidential space where you can explore your thoughts, feelings, and behaviors with a qualified mental health professional.', 'assets/images/service1.gif', 1),
('Family Counseling', 'Strengthen family bonds and resolve conflicts through guided therapeutic sessions.', 'Family counseling helps improve communication, resolve conflicts, and create a more harmonious home environment for all family members.', 'assets/images/service2.gif', 2),
('Child Psychology', 'Specialized care for children dealing with behavioral, emotional, and developmental challenges.', 'Our child psychology services address a wide range of issues including ADHD, anxiety, autism spectrum disorders, and learning difficulties.', 'assets/images/service3.gif', 3),
('Anxiety & Depression Treatment', 'Evidence-based treatment programs for managing anxiety disorders and depression.', 'We offer comprehensive treatment including cognitive behavioral therapy, mindfulness techniques, and medication management when necessary.', 'assets/images/service4.gif', 4),
('Stress Management', 'Learn effective techniques to cope with daily stressors and improve overall well-being.', 'Our stress management programs teach practical skills including relaxation techniques, time management, and healthy coping mechanisms.', 'assets/images/service5.gif', 5),
('Career Counseling', 'Professional guidance for career decisions, transitions, and workplace challenges.', 'We help you navigate career choices, overcome workplace stress, and achieve professional fulfillment through personalized counseling.', 'assets/images/service6.gif', 6);

-- Staff
INSERT INTO staff (name, position, credentials, bio, image_path, is_leadership, display_order) VALUES
('Dr. Nimal Perera', 'Director & Consultant Psychiatrist', 'MBBS, MD (Psychiatry)', 'With over 20 years of experience, Dr. Perera leads our center with compassion and expertise in treating complex mental health conditions.', 'assets/images/staff/dr-nimal.jpg', TRUE, 1),
('Dr. Sanduni Silva', 'Head of Clinical Services', 'MBBS, DPM, MD (Psychiatry)', 'Dr. Silva specializes in mood disorders and anxiety, bringing warmth and evidence-based care to every patient interaction.', 'assets/images/staff/dr-sanduni.jpg', TRUE, 2),
('Ms. Dilini Fernando', 'Senior Clinical Psychologist', 'MSc Clinical Psychology', 'Specializing in cognitive behavioral therapy and trauma-focused interventions for adults and adolescents.', 'assets/images/staff/ms-dilini.jpg', FALSE, 3),
('Dr. Kamal Bandara', 'Consultant Psychiatrist', 'MBBS, MD (Psychiatry)', 'Expert in treating psychotic disorders and providing comprehensive psychiatric assessments and medication management.', 'assets/images/staff/dr-kamal.jpg', FALSE, 4),
('Ms. Chamari Wickramasinghe', 'Child & Adolescent Psychologist', 'MSc Educational Psychology', 'Dedicated to helping children and teenagers overcome emotional challenges through play therapy and family interventions.', 'assets/images/staff/ms-chamari.jpg', FALSE, 5),
('Mr. Ruwan De Silva', 'Counseling Psychologist', 'MSc Counseling Psychology', 'Provides supportive counseling for relationship issues, stress management, and personal development.', 'assets/images/staff/mr-ruwan.jpg', FALSE, 6);

-- Contact Information
INSERT INTO contact_info (address, phone, email, emergency_line, map_lat, map_lng, weekdays_hours, saturday_hours, sunday_hours) VALUES
('123, Duplication Road, Colombo 04, Sri Lanka', '+94 11 234 5678', 'info@serenemind.lk', '+94 77 123 4567', 6.9022, 79.8611, '8:00 AM - 6:00 PM', '9:00 AM - 1:00 PM', 'Closed');

-- Social Media
INSERT INTO social_media (platform, url) VALUES
('linkedin', 'https://linkedin.com/company/serenemind'),
('youtube', 'https://youtube.com/@serenemindlk'),
('facebook', 'https://facebook.com/serenemindlk');

-- Internship Info
INSERT INTO internship_info (title, description, partner_logo_path, duration, available_positions) VALUES
('NSBM University Collaboration', 'SereneMind is proud to partner with NSBM Green University to offer internship opportunities for psychology students. Gain hands-on experience in clinical settings under expert supervision.', 'assets/images/nsbm-logo.png', '6 months', 10);

-- Internship Benefits
INSERT INTO internship_benefits (benefit_text, display_order) VALUES
('Direct clinical exposure', 1),
('Mentorship from experienced professionals', 2),
('Certificate of completion', 3),
('Potential employment opportunities', 4);

-- End of SQL Script
