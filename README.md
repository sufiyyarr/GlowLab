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

Introduction :


## Project Objectives



## Target Users




## Features and Functionalities

** Customer Features**


**Admin Features**


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

### Entity Relationship Diagram (ERD) 
### ERD AND SEQUENCE DIAGRAM LINK
** https://drive.google.com/file/d/1GrAFfqUyiiTtLBIflnbWsFhdWVuHwaRR/view?usp=sharing


Key Relationships:

** Laravel Components Implementation**

- Routes (Web.php)
  

- Controllers
  
  *Main Controllers Implemented are below :*










- Models and Relationships
  

- Views and User Interface

  *Blade Templates Structure:*
 
   *Design Features:*
   - Responsive Design: Bootstrap 5 for mobile-first approach
   - Color Scheme: 
   - Navigation: 
   - Interactive Elements: 




## User Authentication System
### ** Authentication Features**
*1. User Registration* 
Users can create an account by providing required details such as:
Username / Full Name
Email address (unique)
Password
*2. User Login*
Registered users can log in using Email and password.
Credentials are verified against securely stored records
Incorrect login attempts return controlled error messages without revealing sensitive information
*3. Logout functionality*
*4. Password management*
Passwords are never stored in plain text
Secure hashing algorithms (e.g., bcrypt) are used
Optional features may include
Password reset via email
Password update within user profile
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

bash/n
git clone https://github.com/[your-username]/QuickPlate.git
cd QuickPlate

2. Install Dependencies

composer install
npm install

3. Environment Configuration

cp .env.example .env
php artisan key:generate

4. Database Setup

bash# Configure database in .env file
php artisan migrate
php artisan db:seed

5. Start Development Server

//Laravel backend
php artisan serve

//Frontend
npm run dev

## Testing and Quality Assurance

###  Functionality Testing
- User registration and login system
- Appointment booking and confirmation
- Appointment reschedule/cancel functionality
- Service’s review, rating functionality and review display
- Appointment details display
- Admin user management
- Responsive design across devices

### Browser Compatibility
- Microsoft Edge
- Google Chrome
- 

### Performance Testing
-
-

## Challenges Faced and Solutions
### Challenge 1:
- Problem:
- Solution:
### Challenge 2:
- Problem:
- Solution:

## Future Enhancements


## Learning Outcomes



## References


## Conclusion

### Key Achievements

### Project Impact


- Project Completion Date: 14/1/2026
- Course: INFO 3305 Web Application Development



