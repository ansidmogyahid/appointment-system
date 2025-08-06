## 🚀 Installation

These steps guide you from **scratch** (no existing Laravel setup) to running EasyCut locally using **Laravel Herd**.

### 1. Install Prerequisites

1. **Install Git Bash**

    - Download from [https://git-scm.com/downloads](https://git-scm.com/downloads)
    - Install with default options.

2. **Install PHP 8.3**

    - Download and install [https://herd.laravel.com/windows](https://herd.laravel.com/windows)
    - Laravel Herd bundles PHP 8.3+ internally, so no separate PHP install is needed if you use Herd.

3. **Install Composer** (PHP dependency manager)

    - Download from [https://getcomposer.org/download/](https://getcomposer.org/download/)
    - Verify installation:
        ```bash
        composer -V
        ```

4. **Install Node.js and npm**

    - Download from [https://nodejs.org/](https://nodejs.org/) (LTS version recommended)
    - Verify installation:
        ```bash
        node -v
        npm -v
        ```

5. **Install Laravel Herd**

    - Download and install Laravel Herd (macOS only) from [https://laravel.com/herd](https://laravel.com/herd)
    - Herd provides PHP, MySQL, and Nginx pre-configured for local Laravel development.

6. **Set up MySQL database**
    - Herd comes with MySQL, access it via `localhost` with default Herd credentials (see Herd docs).
    - Create a database for EasyCut via command line or a GUI tool like TablePlus or Sequel Pro.

---

### 2. Clone and Setup Project

```bash
# 1. Clone the repository
git clone https://github.com/ansidmogyahid/appointment-system.git # change this
cd easycut

# 2. Install PHP dependencies
composer install

# 3. Install JS dependencies and build assets
npm install && npm run build

# 4. Set up environment file
cp .env.example .env
php artisan key:generate

# 5. Configure .env
# (Edit DB credentials, mail driver, etc.)

# 6. Run migrations and seeders
php artisan migrate --seed
```
