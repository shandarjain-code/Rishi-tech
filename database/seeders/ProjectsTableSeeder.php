<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 8,
                'title' => 'Hot Tub Lead Generation & Comparison Platform',
                'description' => 'A full-stack lead generation and comparison platform for hot tubs, built with Laravel. It connects customers with dealers and manufacturers through a dynamic multi-panel system.',
                'tech_stack' => '["laravel","php","mysql","js","html","css"]',
                'live_link' => 'https://hottubbuyer.co.uk/',
                'github_link' => NULL,
                'sort_order' => 1,
                'created_at' => '2026-04-12 05:26:00',
                'updated_at' => '2026-07-13 11:28:07',
                'video_path' => 'projects/videos/01KXDHB1HW82SQVJ029SM2TF6T.mp4',
                'slug' => 'hot-tub-lead-generation-comparison-platform',
                'short_overview' => 'A full-stack lead generation and comparison platform for hot tubs, built with Laravel. It connects customers with dealers and manufacturers through a dynamic multi-panel system.',
                'thumbnail_path' => 'projects/thumbnails/01KXDHB1G3Z6ESFMKW8NK1Z1ZT.png',
                'category' => 'SaaS , Marketplace , Lead Generation , Dealer Management , E-Commerce , Manufacturer Directory',
                'is_featured' => 1,
                'features' => '["Dealer Portal","Manufacturer Management","Product Listings","Quote Requests","Lead Management","Admin Dashboard","Search & Filters","Product Comparison","User Authentication","Responsive Design"]',
                'challenge' => 'Building a marketplace that connected customers with verified dealers and manufacturers while ensuring accurate lead distribution was the biggest challenge. The platform required postcode-based lead routing, role-based dashboards, advanced search, secure authentication, and smooth performance across all devices.',
                'solution' => 'I developed a scalable Laravel platform with automatic postcode-based lead distribution, sending dealer leads within an 80-mile radius while allowing manufacturers to receive enquiries from anywhere. I also implemented role-based dashboards, product management, advanced search, secure authentication, and a responsive interface to deliver a fast and reliable user experience.',
                'faqs' => '[{"question":"How are customer leads assigned to dealers and manufacturers?","answer":"The platform automatically matches customer enquiries using the customer\'s postcode. Verified dealers within an 80-mile radius receive the lead instantly, while manufacturers can receive enquiries from any location, allowing them to connect with customers across the country."},{"question":"What features are available for dealers?","answer":"Dealers have access to a dedicated dashboard where they can manage their profile, receive postcode-based leads, respond to enquiries, manage subscriptions, track lead history, and update their business information."},{"question":"What can manufacturers do on the platform?","answer":"Manufacturers can showcase their products, manage company information, receive enquiries from customers nationwide, connect with dealers, and increase their brand visibility through the platform."},{"question":"What administrative features are included?","answer":"The Admin Dashboard provides complete control over the platform, including customer, dealer, and manufacturer management, product listings, categories, lead management, user roles and permissions, subscriptions, CMS content, homepage sections, FAQs, testimonials, and system settings from a centralized interface."},{"question":"Does the platform provide analytics and customer insights?","answer":"Yes. The platform integrates with Google Analytics, Microsoft Clarity, and Google Ads to provide detailed visitor analytics, traffic sources, conversion tracking, user behavior, session recordings, and heatmaps. These insights help administrators understand customer interests, optimize marketing campaigns, and improve the overall user experience."},{"question":"Can administrators manage leads effectively?","answer":"Yes. Administrators can view, assign, filter, and monitor all customer enquiries. The system automatically routes dealer leads based on postcode coverage while allowing manufacturers to receive enquiries from any location."}]',
                'meta_title' => 'Hot Tub Buyer | Laravel Marketplace with Postcode Lead Distribution',
                'meta_description' => 'Developed a feature-rich Laravel marketplace connecting customers with verified hot tub dealers and manufacturers. Includes postcode-based lead allocation, dealer dashboards, product management, analytics, Google Ads integration, Microsoft Clarity, secure authentication, and responsive design.',
            ),
            1 => 
            array (
                'id' => 10,
            'title' => 'Learning Management System (LMS)',
            'description' => 'This Learning Management System (LMS) provides everything needed to deliver online education and professional training. Administrators can create and manage courses, learning labs, webinars, published programs, coding exercises, readiness assessments, and career pathways from a centralized dashboard. The platform includes student enrollment, progress tracking, secure authentication, payment gateway integration, role-based access, certificates, and a responsive user experience, making it a complete solution for modern online learning.',
                'tech_stack' => '["React.js","Node.js","Express.js","MongoDB","JavaScript","HTML5","CSS3","Tailwind CSS","Redux Toolkit","JWT Authentication","REST API","Razorpay"]',
                'live_link' => 'http://20.109.106.169/',
                'github_link' => NULL,
                'sort_order' => 2,
                'created_at' => '2026-07-13 12:04:41',
                'updated_at' => '2026-07-13 12:05:04',
                'video_path' => 'projects/videos/01KXDNTZ3CM621KX45267F4WVX.mp4',
                'slug' => 'learning-management-system',
                'short_overview' => 'A complete Learning Management System for creating and managing courses, labs, webinars, career pathways, readiness assessments, and learning programs with secure payments and a powerful admin dashboard.',
                'thumbnail_path' => 'projects/thumbnails/01KXDNTZ1TE8CAR6TAD4E155CT.png',
                'category' => 'EdTech, Learning Management System, Online Education, E-Learning',
                'is_featured' => 1,
                'features' => '["Course Management","Learning Labs","Webinars","Published Programs","Coding Exercises","Readiness Assessments","Career Pathways","Student Dashboard","Admin Dashboard","Progress Tracking","Certificates","Payment Gateway,","Role-Based Access"]',
                'challenge' => 'Building a scalable learning platform that could manage courses, labs, webinars, assessments, and career pathways while providing a seamless experience for students and administrators was the biggest challenge.',
                'solution' => 'I developed a centralized LMS with role-based dashboards, course and lab management, webinar scheduling, online assessments, payment gateway integration, progress tracking, and a responsive interface to deliver a smooth and engaging learning experience.',
                'faqs' => '[{"question":"What can administrators manage?","answer":"Administrators can create and manage courses, labs, webinars, learning programs, coding exercises, assessments, career pathways, users, payments, certificates, and platform settings from a single dashboard."},{"question":"How do students access learning content?","answer":"Students can enroll in courses, attend webinars, complete labs, take assessments, track their progress, and earn certificates through their personalized dashboard."},{"question":"Does the platform support online payments?","answer":"Yes. The platform includes secure payment gateway integration for course purchases, enrollments, and premium learning programs."},{"question":"Can instructors create learning content?","answer":"Yes. Administrators and authorized users can create courses, labs, webinars, coding exercises, assessments, and learning programs directly from the admin dashboard."},{"question":"How is student progress tracked?","answer":"The system tracks course completion, lab activities, assessment results, certificates, and learning progress in real time."},{"question":"Does the platform support career development?","answer":"Yes. Students can complete readiness assessments, explore career pathways, and follow structured learning programs to build job-ready skills."}]',
                'meta_title' => 'Learning Management System | Online Courses, Labs & Career Pathways',
                'meta_description' => 'A feature-rich Learning Management System built with Laravel featuring course management, learning labs, webinars, coding exercises, readiness assessments, career pathways, student progress tracking, secure payments, and a powerful admin dashboard.',
            ),
            2 => 
            array (
                'id' => 11,
                'title' => 'Tripmates – Ride Sharing & Carpooling App',
                'description' => 'Tripmates is a complete ride-sharing and carpooling platform designed to simplify daily travel. Drivers can publish rides, manage bookings, and communicate with passengers, while users can search, book, and track rides in real time. The platform includes secure authentication, push notifications, payment integration, trip management, and an admin dashboard to manage users, rides, bookings, and platform operations.',
            'tech_stack' => '["Flutter","Firebase","laravel","Mysql","REST API","Firebase Authentication","Firebase Cloud Messaging (FCM)","Google Maps API"]',
                'live_link' => 'https://play.google.com/store/apps/details?id=com.yanditab.tripmates&hl=en_IN',
                'github_link' => NULL,
                'sort_order' => 3,
                'created_at' => '2026-07-13 12:46:44',
                'updated_at' => '2026-07-13 12:49:40',
                'video_path' => 'projects/videos/01KXDR7YE5VCATBJ699DE589SS.mp4',
                'slug' => 'tripmates-ride-sharing-app',
                'short_overview' => 'A modern ride-sharing platform that connects drivers and passengers with real-time ride booking, secure authentication, notifications, and an intuitive mobile experience.',
                'thumbnail_path' => 'projects/thumbnails/01KXDR7YB0ZF4Q35SX16REPM81.jpeg',
                'category' => 'Ride Sharing, Carpooling, Mobile App, Transportation',
                'is_featured' => 1,
                'features' => '["Ride Publishing","Ride Search","Ride Booking","Driver Dashboard","Passenger Dashboard","Google Maps","Live Location","Push Notifications","OTP Authentication","Booking Management","Admin Dashboard","Payment Integration","Trip History","Ratings & Reviews","Responsive UI"]',
                'challenge' => 'Building a reliable ride-sharing platform with real-time booking, live location tracking, secure authentication, and smooth communication between drivers and passengers while ensuring a fast and seamless user experience.',
                'solution' => 'I developed a scalable Flutter application with Firebase and Node.js, integrating Google Maps, push notifications, OTP authentication, booking management, payment integration, and role-based dashboards for passengers, drivers, and administrators.',
                'faqs' => '[{"question":"How can drivers publish rides?","answer":"Drivers can create rides by entering their departure location, destination, travel date, available seats, and fare directly from the mobile app."},{"question":"How do passengers book a ride?","answer":"Passengers can search available rides, view ride details, select seats, and confirm their booking through a simple and secure booking process."},{"question":"Does the app support live location?","answer":"Yes. Google Maps integration provides location services, route information, and accurate pickup and destination details."},{"question":"How are users authenticated?","answer":"The app uses secure OTP authentication through Firebase to provide a safe and hassle-free login experience."},{"question":"What can administrators manage?","answer":"Administrators can manage users, rides, bookings, payments, reports, notifications, and platform settings through a centralized admin dashboard."}]',
                'meta_title' => 'Tripmates | Ride Sharing & Carpooling Mobile App',
                'meta_description' => 'A feature-rich ride-sharing application built with Flutter, Firebase, Node.js, and MongoDB featuring ride publishing, booking, Google Maps, OTP authentication, push notifications, payment integration, and an advanced admin dashboard.',
            ),
            3 => 
            array (
                'id' => 12,
                'title' => 'GetBrnd – Booking & Business Website',
                'description' => 'GetBrnd is a fully customized WordPress booking platform built to match the client\'s business requirements. I developed custom plugins that allow administrators to create and manage services dynamically, handle bookings, and control website content from a centralized dashboard. The platform also includes automated WhatsApp template notifications for booking confirmations, live chat support, secure contact forms, and a responsive design, providing a seamless experience for both customers and administrators.',
                'tech_stack' => '["WordPress","PHP","MySQL","JavaScript","HTML5","CSS3","Elementor","Custom Plugin Development","WhatsApp Business API","REST API","Twilio"]',
                'live_link' => NULL,
                'github_link' => NULL,
                'sort_order' => 0,
                'created_at' => '2026-07-13 14:11:47',
                'updated_at' => '2026-07-13 14:11:47',
                'video_path' => 'projects/videos/01KXDX3PF049QE6RV1GZ3D62Y2.mp4',
                'slug' => 'getbrnd-booking-business-website',
                'short_overview' => 'A custom WordPress booking platform with dynamic service management, automated WhatsApp notifications, live chat support, and a powerful admin dashboard.',
                'thumbnail_path' => 'projects/thumbnails/01KXDX3PDFBZ5RE7PE3MDYKVPC.png',
                'category' => 'WordPress , Booking System , Custom Plugin Development , Business Website',
                'is_featured' => 1,
                'features' => '["Dynamic Service Management","Online Booking System","Custom WordPress Plugins","WhatsApp Template Notifications","Live Chat Support","Booking Management","Contact Forms","Responsive Design","SEO Friendly","Content Management","Role-Based Access"]',
                'challenge' => 'The main challenge was developing a fully customized booking system with dynamic service management while automating customer communication through WhatsApp and keeping the admin dashboard simple and easy to manage.',
                'solution' => 'I built custom WordPress plugins that allow administrators to manage services and bookings from the dashboard. I integrated automated WhatsApp template messages for booking confirmations, added live chat support, and optimized the website for speed, security, and a seamless user experience across all devices.',
                'faqs' => '[{"question":"How are services managed on the website?","answer":"Administrators can create, edit, organize, and publish services directly from the WordPress dashboard using custom-built management tools without writing any code."},{"question":"How does the booking system work?","answer":"Customers can browse services, submit booking requests, and receive booking confirmations through a simple and user-friendly booking process."},{"question":"Are WhatsApp notifications sent automatically?","answer":"Yes. When a customer submits a booking request, the system automatically sends pre-approved WhatsApp template messages, keeping customers informed throughout the booking process."},{"question":"Does the website include live chat support?","answer":"Yes. Live chat is integrated to allow visitors to connect with the business instantly, improving customer support and engagement."},{"question":"Can administrators manage bookings easily?","answer":"Yes. The admin dashboard provides complete control over bookings, services, customer enquiries, website content, and platform settings from one centralized location."},{"question":"Is the platform mobile-friendly?","answer":"Yes. The website is fully responsive and optimized to deliver a smooth experience across desktop, tablet, and mobile devices."}]',
                'meta_title' => 'GetBrnd | Custom WordPress Booking System & WhatsApp Automation',
                'meta_description' => 'A custom WordPress booking platform featuring dynamic service management, online bookings, custom plugin development, automated WhatsApp notifications, live chat integration, responsive design, and a powerful admin dashboard.',
            ),
            4 => 
            array (
                'id' => 13,
                'title' => 'Digital ID Card Maker App',
                'description' => 'Digital ID Card Maker is a cross-platform mobile application built with Flutter and powered by a Laravel backend. The app allows users to create professional student, employee, school, college, and business ID cards using customizable templates. Users can securely sign in with Google, generate up to five ID cards for free, and unlock unlimited premium features through subscription plans. The application integrates Stripe and Razorpay for secure online payments while providing an intuitive and responsive user experience.',
                'tech_stack' => '["Flutter","Dart","Laravel","PHP","MySQL","REST API","Google Authentication","Stripe","Razorpay","Firebase Cloud Messaging"]',
                'live_link' => NULL,
                'github_link' => NULL,
                'sort_order' => 5,
                'created_at' => '2026-07-13 14:28:11',
                'updated_at' => '2026-07-13 14:28:11',
                'video_path' => 'projects/videos/01KXDY1QBB3QS8GMV1R2VXP7C3.mp4',
                'slug' => 'digital-id-card-maker-app',
                'short_overview' => 'A Flutter-based mobile application that enables users to create professional digital ID cards with secure authentication, premium memberships, and online payment integration.',
                'thumbnail_path' => 'projects/thumbnails/01KXDY1Q9BR2VM0Z1JPPN31350.png',
                'category' => 'Mobile App , Flutter, SaaS , Productivity , Digital ID Cards',
                'is_featured' => 1,
                'features' => '["Digital ID Card Creato","Student ID Cards","Employee ID Cards","Business ID Cards","Custom Templates","Google Sign-In","Premium Membership","Stripe Integration","Razorpay Integration","Subscription Management","Secure Authentication","Admin Dashboard","Responsive UI"]',
                'challenge' => 'The biggest challenge was building a flexible ID card generation system with secure authentication, premium subscriptions, and multiple payment gateways while keeping the app fast and easy to use.',
                'solution' => 'I developed a Flutter application connected to a Laravel backend with Google Sign-In, customizable ID card templates, secure subscription management, and integrated Stripe and Razorpay for seamless premium upgrades.',
                'faqs' => '[{"question":"What types of ID cards can users create?","answer":"Users can create student, employee, school, college, business, and organization ID cards using professionally designed templates."},{"question":"How does the free plan work?","answer":"New users can create up to five digital ID cards for free. After reaching the limit, they can upgrade to a premium membership for unlimited access."},{"question":"Which payment gateways are supported?","answer":"The app supports both Stripe and Razorpay, allowing users to purchase premium memberships securely."},{"question":"How do users sign in?","answer":"Users can securely access the application using Google Sign-In, providing a fast and hassle-free authentication experience."},{"question":"Can administrators manage templates and subscriptions?","answer":"Yes. The admin dashboard allows administrators to manage templates, users, premium memberships, subscriptions, and application settings from a centralized panel."},{"question":"Is the application available on Android and iOS?","answer":"Yes. The application is developed with Flutter, providing a consistent experience across both Android and iOS devices."}]',
                'meta_title' => 'Digital ID Card Maker App | Flutter & Laravel',
                'meta_description' => 'A Flutter and Laravel-powered Digital ID Card Maker with Google Sign-In, customizable templates, premium memberships, Stripe and Razorpay integration, and a powerful admin dashboard for managing users and subscriptions.',
            ),
            5 => 
            array (
                'id' => 14,
                'title' => 'Guitar Giveaway & Shopify Store',
                'description' => 'This Shopify-based eCommerce platform combines online guitar sales with an engaging giveaway system. Customers can browse and purchase guitars, accessories, and music products while participating in promotional giveaways. The store includes optimized product listings, inventory management, secure checkout, discount campaigns, and marketing integrations. The admin dashboard allows easy management of products, orders, giveaways, customers, and store content, providing a complete solution for growing an online music business.',
                'tech_stack' => '["Shopify","Liquid","HTML5","CSS3","JavaScript","Shopify Admin API","Shopify Apps","Google Analytics","Google Ads"]',
                'live_link' => 'https://vintagegiveaways.com.au/',
                'github_link' => NULL,
                'sort_order' => 7,
                'created_at' => '2026-07-13 14:45:50',
                'updated_at' => '2026-07-13 14:45:50',
                'video_path' => 'projects/videos/01KXDZ21JX4QKFPVDX5Q51QYKJ.mp4',
                'slug' => 'guitar-giveaway-shopify-store',
                'short_overview' => 'A custom Shopify eCommerce store featuring guitar giveaways, product sales, inventory management, and marketing integrations for a seamless shopping experience.',
                'thumbnail_path' => 'projects/thumbnails/01KXDZ21HND415MJ2XV777DPFJ.png',
                'category' => 'Shopify , eCommerce , Giveaway Platform , Online Store',
                'is_featured' => 1,
                'features' => '["Giveaway Management","Guitar Product Listings","Inventory Management","Secure Checkout","Discount Codes","Order Management","Customer Accounts","Product Search & Filters","Collection Management","Google Analytics","Google Ads Tracking","Responsive Design","SEO Optimization"]',
                'challenge' => 'The main challenge was combining a giveaway system with a complete Shopify store while ensuring accurate inventory management, smooth order processing, and an easy shopping experience.',
                'solution' => 'I developed a custom Shopify store with organized product collections, inventory tracking, giveaway management, Google Analytics and Google Ads integration, and a responsive user interface to provide a fast and engaging shopping experience.',
                'faqs' => '[{"question":"Can customers purchase products and join giveaways?","answer":"Yes. Customers can shop for guitars and accessories while also participating in promotional giveaways through the same platform."},{"question":"How are products managed?","answer":"Products, collections, pricing, images, and inventory are managed directly from the Shopify admin dashboard, making updates quick and simple."},{"question":"How is inventory tracked?","answer":"The store automatically tracks product inventory, helping prevent overselling and ensuring stock levels remain accurate."},{"question":"Does the store support marketing analytics?","answer":"Yes. Google Analytics and Google Ads tracking are integrated to monitor traffic, conversions, and campaign performance."}]',
                'meta_title' => 'Guitar Giveaway Shopify Store | eCommerce & Inventory Management',
                'meta_description' => 'A Shopify eCommerce store featuring guitar giveaways, product listings, inventory management, secure checkout, Google Analytics, Google Ads integration, and a fully responsive shopping experience.',
            ),
        ));
        
        
    }
}