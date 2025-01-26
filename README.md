# Academe API 🎓

A Laravel-based RESTful API for university course registration and academic management.

## Learning Project Overview

This project is designed as a learning exercise for:
- Laravel API development fundamentals
- Authentication & authorization
- Database relationships
- API resource management
- Input validation
- RESTful principles

Feel free to use this project for:
- Learning Laravel
- Teaching web development
- Portfolio projects
- Code examples
- Academic assignments

## Features
- [x] Authentication & Authorization
  - [x] Sanctum setup
  - [x] User registration/login
  - [x] Admin/Student roles
  - [x] API documentation

- [ ] Student Profile Management
  - [ ] Student CRUD API
  - [ ] Academic history
  - [ ] Performance scoring

- [ ] Course Management
  - [ ] Course CRUD endpoints
  - [ ] Capacity management
  - [ ] Prerequisites system
  - [ ] Search/filter functionality

- [ ] Enrollment System
  - [ ] Enrollment/drop API
  - [ ] Schedule conflict detection
  - [ ] Grade submission
  - [ ] Waitlist handling

- [ ] Academic Records
  - [ ] Grade management
  - [ ] Performance calculation
  - [ ] Academic analytics

## Tech Stack

- PHP 8.x
- Laravel 11.x
- MySQL/PostgreSQL
- Laravel Sanctum
- Swagger Documentation

## Prerequisites

- PHP >= 8.1
- Composer
- MySQL/PostgreSQL
- Node.js & NPM

## Installation

```bash
# Clone repository
git clone [repository-url]
cd academe-api

# Install dependencies
composer install

# Environment setup
cp .env.example .env
php artisan key:generate

# Database setup
php artisan migrate

# Start server
php artisan serve
```

## API Documentation

API documentation is available at `/api/documentation` using Swagger UI.

## Database Structure

```
Users: id, name, email, password, role
Students: id, user_id, student_id, major, graduation_year
Courses: id, code, title, description, credits, capacity, schedule
Enrollments: id, student_id, course_id, enrollment_date, grade
```

## Available Endpoints

| Method | Endpoint                  | Description              | Access  |
|--------|---------------------------|--------------------------|---------|
| POST   | /api/register             | Student registration     | Public  |
| POST   | /api/login                | Login                    | Public  |
| POST   | /api/logout               | Logout                   | Authenticated  |

## Testing

```bash
php artisan test
```

## Contributing

Contributions are welcome! Feel free to:
- Submit bug reports
- Suggest new features
- Create pull requests
- Share learning resources
- Improve documentation

## License

MIT License

Copyright (c) 2024
