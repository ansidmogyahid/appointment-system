# ✂️ EasyCut: Appointment System

**EasyCut** is an elegant appointment scheduling system built using the **TALL Stack** — **Tailwind CSS**, **Alpine.js**, **Laravel**, and **Livewire**. Designed for salons, barbershops, clinics, and other service-based businesses, EasyCut streamlines the booking process, staff scheduling, and client management into one powerful and responsive web application.

---

## 📚 Table of Contents

-   [Features](#features)
-   [TALL Stack Overview](#tall-stack-overview)
-   [Installation](#installation)
-   [Configuration](#configuration)
-   [Running the App](#running-the-app)
-   [Testing](#testing)
-   [Usage Flow](#usage-flow)
-   [Folder Structure](#folder-structure)
-   [Contributing](#contributing)
-   [License](#license)
-   [Contact](#contact)

---

## 🌟 Features

-   🗓 Intuitive **Appointment Booking** calendar (day/week view)
-   ✂️ Define and manage **services**
-   👥 Assign **staff availability** to specific services
-   🧍 Client portal for self-booking
-   🔐 Role-based access: Admin, Staff, Client
-   🛎 Email/SMS **reminders and notifications**
-   📊 Admin **dashboard metrics** and history logs
-   🌐 **Responsive UI** optimized for mobile and desktop
-   🖼 Real-time interaction via **Livewire components**
-   🔍 Appointment filtering, searching, and status tracking
-   ⚙️ Timezone, duration, buffer time, and capacity configuration

---

## 💡 TALL Stack Overview

-   **Tailwind CSS** – Utility-first CSS framework for styling
-   **Alpine.js** – Lightweight JavaScript for UI interactivity
-   **Laravel 12** – Backend framework (PHP 8.2+)
-   **Livewire** – Reactive UI components with server-driven logic

---

## 🚀 Installation

### Prerequisites

-   PHP 8.2+
-   Composer
-   Node.js & npm
-   MySQL or compatible DB

### Setup Steps

```bash
# 1. Clone the repository
git clone https://github.com/yourusername/easycut.git
cd easycut

# 2. Install PHP dependencies
composer install

# 3. Install JS dependencies and build assets
npm install && npm run build

# 4. Set up environment
cp .env.example .env
php artisan key:generate

# 5. Configure .env
# (Edit DB credentials, mail driver, etc.)

# 6. Run migrations and seeders
php artisan migrate --seed

# 7. Serve the application
php artisan serve
```
