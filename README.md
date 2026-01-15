# GlowLab

# GlowLab- Online Beauty Clinic

## Group Information

**Group Name**: Beryls
**Section**: 5

**Group Members** :
- AFIQAH BINTI SUBOH - 2316362
- DANIA SUFIYYA BINTI FARID - 2315736
- NUR ATHIRAH BINTI AIZU - 2314334
- NURUL HANIS FATINI BINTI HAIRUL FADLI - 2310460 


## Project Overview

Introduction: GlowLab is a web-based beauty clinic system designed to simplify the appointment booking process and daily clinic management. Users can explore available treatments service, schedule appointments and view booking details through the system. Admin can monitor appointments and control booking workflows using a centralized dashboard.


## Project Objectives

Primary Goal: To streamline the beauty clinic appointment booking and management process.
User Experience Goal: To ensure a consistent, accessible and easy-to-navigate web experience for both customers and administrators. 
Technical Goal: Implement Laravel MVC architecture with full CRUD operations.

## Target Users

Customers: Individuals looking for beauty treatments services online
Administrators: Authorized clinic staff who manage bookings and system content. 

## Features and Functionalities

** Customer Features**

Browse services: View all available beauty treatments with a details descriptions
Book Appointments: Schedule an appointment by selecting service, date and time
View Appointment History: Check past and upcoming appointments.
Manage Appointments: Cancel or rescheduled appointments before the scheduled time.
User Login: Secure account creation and authentication
Review and Ratings: Provide a review and rate the services after appointments

**Admin Features**

Admin Dashboard: View upcoming booking
Manage Appointments: Approve, reschedule or cancel customers bookings

## Technical Implementation

** Technology Stack**

- Backend Framework: Laravel 10.x
- Frontend: Blade Templates with Bootstrap 5
- Database: MySQL 8.0
- Authentication: Laravel Breeze
- Image Storage: Laravel File Storage
- Development Environment: XAMPP

** Database Design**

Database Schema Overview
Our database consists of 6 main tables designed to handle users, restaurants, menus, orders, and related data:
Core Tables:
User :  Customer and admin accounts
Service: Service details and description
Booking_Service: Booking appointments with the details such as services, date and time
Booking: Booking status
Booking_history: Changes made to the appointments such as rescheduling or cancellation
Review: Review and ratings of a service made by a user who completed an appointment. 

### Entity Relationship Diagram (ERD) 
### ERD AND SEQUENCE DIAGRAM LINK
** https://drive.google.com/file/d/1GrAFfqUyiiTtLBIflnbWsFhdWVuHwaRR/view?usp=sharing


Key Relationships:
A user can make multiple appointment booking to services (One-to-Many).
A service can have multiple bookings (One-to-Many).
Multiple booking services can have multiple booking histories (Many-to-Many).
A service can have multiple reviews (One-to-Many).
User can leave multiple reviews (One-to-Many)

** Laravel Components Implementation**

- Routes (Web.php)
  //Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Home Page
Route::get('/', function () {
    return view('mainpage');
})->name('mainpage');

// Appointment Page
Route::get('/appointment', [AppointmentController::class, 'create'])->name('appointment');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

// Confirmation Page
Route::get('/appointment/confirmation/{id}', [AppointmentController::class, 'confirmation'])->name('confirmation');

Route::get('/profile', [AppointmentController::class, 'profile'])
    ->name('profile')
    ->middleware('auth'); // Only logged-in users can access

// Edit / Update / Delete / Complete routes
Route::get('/appointment/{id}/edit', [AppointmentController::class, 'edit'])->name('appointment.edit');
Route::put('/appointment/{id}', [AppointmentController::class, 'update'])->name('appointment.update');
Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');
Route::put('/appointment/{id}/complete', [AppointmentController::class, 'markComplete'])->name('appointments.complete');

// Services & Details Pages
Route::view('/services', 'services')->name('services');
Route::view('/facialDetails', 'facialDetails')->name('facialDetails');
Route::view('/acneDetails', 'acneDetails')->name('acneDetails');
Route::view('/antiagingDetails', 'antiagingDetails')->name('antiagingDetails');
Route::view('/brighteningDetails', 'brighteningDetails')->name('brighteningDetails');
Route::view('/hydratingDetails', 'hydratingDetails')->name('hydratingDetails');
Route::view('/pigmentationDetails', 'pigmentationDetails')->name('pigmentationDetails');

// Contact & About Pages
Route::get('/contact', [ReviewController::class, 'index'])->name('contact');
Route::post('/contact', [ReviewController::class, 'store'])->name('reviews.store');
Route::view('/about', 'about')->name('about');

// Admin Dashboard
Route::get('/admin/dashboard', function () {
    $appointment = \App\Models\Appointment::all();
    return view('admin', compact('appointment'));
})->name('admin.dashboard');

Route::put('/appointment/{id}/complete', [AppointmentController::class, 'markComplete'])->name('appointments.complete');


- Controllers
  
  *Main Controllers Implemented are below :*

- AuthController: Handles Login page
- ServicesController: Manage services offered on the website
- AboutController: Handles About page to display clinic-related information
- ContactController: Handles contact information and reviews and rating form
- ReviewController: Handles creating reviews and rating
- AppointmentController: Manage appointments display for user profile and admin, and CRUD operations for appointments
- ConfirmationController: Display confirmation booking for appointment
- ProfileController: Customer profile for appointment listings

 *Controllers for displaying service details:*
- AcneDetailsController
- AntiagingDetailsController
- BrighteningDetailsController
- FacialDetailsController
- HydratingDetailsController
- PigmentationDetailsController

- Models and Relationships
//User Model
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    @var list<string>
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    @var list<string>
    protected $hidden = [
        'password',
        'remember_token',
    ];
    @return array<string, string>
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    
}

//Appointment Model
class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'service',
        'date',
        'time',
        'message',
        'status'
    ];
}

//Review Model
class Review extends Model
{
    use HasFactory;

    protected $primaryKey = 'review_id';

    protected $fillable = [
        'name',
        'email',
        'rating',
        'comment',
    ];
}
- Views and User Interface

  *Blade Templates Structure:*
- login.blade.php - Login and authentication page
- mainpage.blade.php - Home page to the beauty clinic website
- services.blade.php - Services listings
- about.blade.php - About us page
- contact.blade.php - Contact information, reviews and ratings display
- appointment.blade.php - Make an appointment by filling in the form
- confirmation.blade.php - Display booking confirmation
- profile.blade.php - display user information, pending appointments, and completed appointments
- admin.blade.php - admin page to manage appointment bookings
- Service details pages :  
    - acneDetails.blade.php
    - antiagingDetails.blade.php
    - brighteningDetails.blade.php
    - facialDetails.blade.php
    - hydratingDetails.blade.php
    - pigmentationDetails.blade.php
 
   *Design Features:*
   - Responsive Design: Bootstrap 5 for mobile-first approach
   - Color Scheme: Soft brown and white representing aesthetic beauty clinic
   - Navigation: Structured navigation with multiple tabs 
   - Interactive Elements: Appointment management and real-time appointment status.


## User Authentication System
### ** Authentication Features**
*1. User Registration* 
Users can create an account by providing the required details such as:
Email address
Password
*2. User Login*
Registered users can log in using Email and password.
Credentials are verified against securely stored records
Incorrect login attempts return controlled error messages without revealing sensitive information
*3. Password management*
Passwords are never stored in plain text
Secure hashing algorithms (e.g., bcrypt) are used
### **Authorization & Access Control**
*1. Role-Based Access Control (RBAC)*
The system may support different user roles such as:
Admin
Registered User
Each role has predefined access permissions
Sensitive pages and actions are restricted based on user roles
*2. Protected Routes / Pages*
Only authenticated users can access protected areas, for example profile page.
Unauthorized users are redirected to the dashboard page before need to login for booking services.

### **Security Measures**
*1. Password Security*
User passwords are hashed using Laravel’s Hash facade, which utilizes bcrypt by default
Plain-text passwords are never stored or logged at any point in the system
Password verification is handled securely using Laravel’s internal authentication mechanisms
*2. Session Security*
Session IDs are regenerated automatically upon successful login to prevent session fixation attacks
Session data is stored securely and invalidated upon user logout
*3. Input Validation & Sanitization*
Laravel’s validation rules are applied to all incoming requests for example, login and booking forms

*4. Error Handling*
Authentication-related errors for example, invalid credentials are handled gracefully using Laravel’s validation and authentication responses
Generic error messages are displayed to users to avoid revealing sensitive system details

## Installation and Setup Instructions
### Prerequisites :
- PHP >= 8.1
- Composer
- Node.js and NPM
- MySQL 8.0
- XAMPP 

### Step-by-Step Installation

1. Clone the Repository

Create a folder in D drive named ‘test-clone’
Open folder ‘test-clone’ in VsCode.exe
In Terminal, type the following: 
git clone https://github.com/sufiyyarr/GlowLab.git
cd GlowLab

2. Install Dependencies

composer install
npm install

3. Environment Configuration, type the following in the terminal: 
cp .env.example .env
Configure the .env file to:
DB_CONNECTION= mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=GlowLab
DB_USERNAME=root
DB_PASSWORD=

php artisan key:generate

4. Database Setup, type the following in the terminal:

php artisan migrate
php artisan db:seed

5. Start Development Server

//Laravel backend
php artisan serve

//Frontend
npm run dev

## Testing and Quality Assurance

###  Functionality Testing

User registration and login system
Appointment booking and confirmation
Appointment reschedule/cancel functionality
Service’s review/rating functionality and review display
Appointment details display
Admin user management

### Browser Compatibility

Microsoft Edge (Latest) 
Google Chrome (Latest) 
Mozilla Firefox (Latest) 

### Performance Testing

Page load time testing
Database queries optimized
Concurrent user simulation
Error handling and stability
Interactive front-end performance


## Challenges Faced and Solutions

### Challenge 1: Integrating New Feature Without Breaking Existing Page

Problem: Adding new features heightened the risk for breaking existing form logic and cluttering the UI
Solution: Ensure the form follows Laravel MVC pattern and keep UI clean and consistent within existing design

### Challenge 2: Data Validation and Security

Problem: User input from forms can be incomplete or invalid, leading to inconsistent data stored in the database
Solution: Applied Laravel request validation in the controller

### Challenge 3: Team Collaboration & Code Synchronization

Problem: Multiple team members worked on different parts of the project, which lead to missing files and merge conflicts
Solution: Clearly identified and shared only the modified files in one shared Google Drive folder

## Future Enhancements

Mobile App Version: Create an app for iOS and Android
Online Payment Integration: Allow customers to pay online during booking
Automated Reminders: Send automatic notifications before appointments
Service Management: Add, update or remove treatment services
AI-based Recommendations: Suggest popular or suitable treatments to new customers

## Learning Outcomes

### Technical Skills Gained 

Laravel Framework: Build web system using Laravel and understand MVC architecture
Database Design: Design and manage databases for bookings and users
Authentication: Implement user login
Frontend Development: Create user-friendly interfaces for customers and administrators

### Soft Skills Developed

Team Collaboration: Work productively within group members
Project Management: Plan and execute a complete web system project
Problem Solving: Debug and resolve issues in web application

## References


## Conclusion
The Glowlab website successfully demonstrated the integration of Laravel with a functional booking and user management system. It provides secure authentication, responsive interfaces for both customers and administrations and reliable database handling.

### Key Achievements

Developed a responsive and intuitive interface
Applied the MVC architecture effectively
Implemented secure authentication features
Produces clear documentation describing the website design

### Project Impact
This project offered valuable experience in developing a complete web application while working effectively as a team. The knowledge and skills gained are particles and can be applied to future projects.

- Project Completion Date: 14/1/2026
- Course: INFO 3305 Web Application Development



