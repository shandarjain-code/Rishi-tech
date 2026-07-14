# Rishi Jain - Portfolio & Lead Generation System

A complete, high-converting portfolio website with lead generation system built with Laravel 11, featuring a multi-step form, admin panel, and modern UI/UX design.

## Features

### Frontend
- **Responsive Design**: Mobile-first design using Tailwind CSS
- **Multi-page Website**: Home, Portfolio, Services, Contact, and Start Project pages
- **Multi-step Lead Form**: Interactive stepper form with Alpine.js
- **Hero Section**: Conversion-focused landing page with CTAs
- **Floating WhatsApp Button**: Quick contact integration
- **Social Links**: LinkedIn, GitHub, and Freelancer profiles
- **SEO Optimized**: Proper meta tags and semantic HTML

### Backend
- **Laravel 11**: Latest stable version with modern features
- **MVC Architecture**: Clean, maintainable code structure
- **Database**: MySQL with proper migrations and relationships
- **Form Validation**: Comprehensive validation for all inputs
- **File Upload**: Image management for projects
- **Lead Management**: Complete lead capture and storage system

### Admin Panel (Filament)
- **Secure Authentication**: Protected admin dashboard
- **CRUD Operations**: Full management for leads, projects, services, and skills
- **Dashboard Overview**: Statistics and recent activities
- **Filters & Search**: Advanced filtering capabilities
- **Image Upload**: Drag-and-drop file management
- **Responsive Design**: Mobile-friendly admin interface

## Project Structure

```
backend/
|-- app/
|   |-- Http/Controllers/
|   |   |-- HomeController.php
|   |   |-- PortfolioController.php
|   |   |-- ServicesController.php
|   |   |-- ContactController.php
|   |   |-- LeadController.php
|   |-- Models/
|   |   |-- Lead.php
|   |   |-- Project.php
|   |   |-- Service.php
|   |   |-- Skill.php
|   |-- Filament/Resources/
|   |   |-- LeadResource.php
|   |   |-- ProjectResource.php
|   |   |-- ServiceResource.php
|   |   |-- SkillResource.php
|-- database/
|   |-- migrations/
|   |-- seeders/
|       |-- DatabaseSeeder.php
|-- resources/
|   |-- views/
|   |   |-- layouts/
|   |   |   |-- app.blade.php
|   |   |-- home.blade.php
|   |   |-- portfolio.blade.php
|   |   |-- services.blade.php
|   |   |-- contact.blade.php
|   |   |-- start-project.blade.php
|   |   |-- thank-you.blade.php
|-- routes/
|   |-- web.php
```

## Tech Stack

- **Backend**: Laravel 11, PHP 8.2+
- **Frontend**: Blade Templates, Tailwind CSS, Alpine.js
- **Database**: MySQL
- **Admin Panel**: Filament 5.x
- **Authentication**: Laravel Breeze (optional)
- **File Storage**: Local storage (configurable for cloud)

## Installation & Setup

### Prerequisites
- PHP 8.2 or higher
- Composer
- MySQL or MariaDB
- Node.js (for asset compilation, optional)

### Step 1: Clone & Install Dependencies
```bash
git clone <repository-url>
cd portfolio/backend
composer install
```

### Step 2: Environment Configuration
```bash
cp .env.example .env
php artisan key:generate
```

### Step 3: Database Setup
Update your `.env` file with database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=your_password
```

### Step 4: Run Migrations & Seed Data
```bash
php artisan migrate
php artisan db:seed
```

### Step 5: Create Storage Link
```bash
php artisan storage:link
```

### Step 6: Start Development Server
```bash
php artisan serve
```

Visit `http://localhost:8000` to see your portfolio website.

### Step 7: Access Admin Panel
Visit `http://localhost:8000/admin` to access the admin panel.

## Database Schema

### Leads Table
- `id` - Primary key
- `name` - Client name
- `email` - Client email
- `phone` - Phone number (optional)
- `project_type` - Type of project (Mobile App, Website, E-commerce, SaaS)
- `budget` - Budget range ($500-$1000, $1000-$5000, $5000+)
- `timeline` - Project timeline (1 Week, 1 Month, 2-3 Months)
- `description` - Project details
- `created_at`, `updated_at` - Timestamps

### Projects Table
- `id` - Primary key
- `title` - Project title
- `description` - Project description
- `image` - Project image path
- `tech_stack` - JSON array of technologies
- `live_link` - Live project URL (optional)
- `github_link` - GitHub repository URL (optional)
- `sort_order` - Display order
- `created_at`, `updated_at` - Timestamps

### Services Table
- `id` - Primary key
- `title` - Service title
- `description` - Service description
- `icon` - Icon identifier
- `sort_order` - Display order
- `created_at`, `updated_at` - Timestamps

### Skills Table
- `id` - Primary key
- `name` - Skill name
- `category` - Skill category (Frontend, Backend, Mobile, Database, DevOps)
- `proficiency_percentage` - Skill level (0-100)
- `sort_order` - Display order
- `created_at`, `updated_at` - Timestamps

## Frontend Features

### Multi-Step Lead Form
- **Step 1**: Project Type Selection
- **Step 2**: Budget Range
- **Step 3**: Timeline Preference
- **Step 4**: Project Description
- **Step 5**: Contact Information

### Responsive Design
- Mobile-first approach
- Tablet and desktop optimized
- Smooth animations and transitions
- Modern gradient effects

### SEO Features
- Semantic HTML5 structure
- Meta tags for all pages
- Open Graph tags
- Structured data markup

## Admin Panel Features

### Lead Management
- View all submitted leads
- Filter by project type, budget, timeline
- Sort by submission date
- Export functionality
- Lead details view

### Project Management
- Add/edit/delete projects
- Image upload with preview
- Technology stack management
- Sort order control
- Live demo and GitHub links

### Service Management
- Service CRUD operations
- Icon management
- Sort order control
- Description editing

### Skills Management
- Skill categories
- Proficiency levels
- Visual progress bars
- Category-based filtering

## Customization

### Personal Information
Update your personal details in the following files:
- `resources/views/layouts/app.blade.php` - Footer and navigation
- `resources/views/home.blade.php` - Hero section and about
- `resources/views/contact.blade.php` - Contact information

### Styling
- Modify `resources/views/layouts/app.blade.php` for global styles
- Update Tailwind CSS configuration in `tailwind.config.js`
- Custom CSS can be added to the layout file

### Content
- Update seed data in `database/seeders/DatabaseSeeder.php`
- Add new projects, services, and skills through admin panel
- Customize project descriptions and details

## Deployment

### Production Setup
1. Set `APP_ENV=production` in `.env`
2. Configure production database
3. Set up file storage (local or cloud)
4. Configure mail settings for notifications
5. Run `php artisan config:cache`
6. Run `php artisan route:cache`
7. Set up web server (Apache/Nginx)
8. Configure SSL certificate

### Environment Variables
```env
APP_NAME="Rishi Jain Portfolio"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=mysql
DB_HOST=your-db-host
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=your-db-user
DB_PASSWORD=your-db-password

MAIL_MAILER=smtp
MAIL_HOST=your-mail-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@domain.com
MAIL_FROM_NAME="${APP_NAME}"
```

## Security Considerations

- CSRF protection enabled
- SQL injection prevention through Eloquent ORM
- XSS protection with proper escaping
- File upload validation
- Admin panel authentication
- Environment variable security

## Performance Optimization

- Database indexing on frequently queried columns
- Image optimization and lazy loading
- CSS and JavaScript minification
- Caching configuration
- CDN integration options

## Support & Maintenance

For support, updates, or custom development:
- **Phone/WhatsApp**: +91 9522339343
- **Email**: rishi@example.com
- **Website**: rishijain.tech
- **LinkedIn**: https://www.linkedin.com/in/rishi-jain-b14945262/
- **Freelancer**: https://www.freelancer.in/u/rishi9343

## License

This project is proprietary and owned by Rishi Jain. All rights reserved.

---

**Built with passion by Rishi Jain | 8+ Years Experience | 100+ Projects Delivered**
