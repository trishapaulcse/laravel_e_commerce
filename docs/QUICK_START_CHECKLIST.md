# ✅ Quick Start Checklist

Follow this checklist to get your e-commerce platform running:

## 📦 Installation

- [ ] **Install Composer Dependencies**
  ```bash
  composer install
  ```

- [ ] **Install NPM Dependencies**
  ```bash
  npm install
  ```

- [ ] **Copy Environment File**
  ```bash
  copy .env.example .env
  ```

- [ ] **Generate Application Key**
  ```bash
  php artisan key:generate
  ```

## 🗄️ Database Setup

- [ ] **Create Database**
  - Open phpMyAdmin or MySQL Workbench
  - Create database: `adorsholipi`

- [ ] **Configure .env File**
  ```env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=adorsholipi
  DB_USERNAME=root
  DB_PASSWORD=
  ```

- [ ] **Run Migrations**
  ```bash
  php artisan migrate
  ```

## 🔐 Authentication Setup

- [ ] **Install Laravel Breeze**
  ```bash
  composer require laravel/breeze --dev
  ```

- [ ] **Install Breeze with Blade**
  ```bash
  php artisan breeze:install blade
  ```

- [ ] **Install NPM Dependencies Again**
  ```bash
  npm install
  ```

- [ ] **Run Migrations Again**
  ```bash
  php artisan migrate
  ```

## 🎨 Frontend Setup

- [ ] **Build Assets**
  ```bash
  npm run dev
  ```
  Keep this terminal running!

## 🚀 Start Development Server

- [ ] **Start Laravel Server** (in new terminal)
  ```bash
  php artisan serve
  ```

## ✅ Verify Installation

- [ ] **Visit Homepage**
  - Open: http://localhost:8000
  - Should see homepage

- [ ] **Register Account**
  - Click "Register" or visit: http://localhost:8000/register
  - Create an account

- [ ] **Login**
  - Login with your credentials

- [ ] **Access User Panel**
  - Visit: http://localhost:8000/user/dashboard
  - Should see user dashboard

- [ ] **Access Admin Panel**
  - Visit: http://localhost:8000/admin/dashboard
  - Should see admin dashboard

## 📊 Create Initial Data (Optional)

- [ ] **Create Categories**
  - Go to: http://localhost:8000/admin/categories
  - Add some categories (Electronics, Clothing, etc.)

- [ ] **Create Products**
  - Go to: http://localhost:8000/admin/products
  - Add some products

- [ ] **Test Shopping**
  - Visit homepage
  - Browse products
  - Add to cart
  - Test checkout

## 🔧 Troubleshooting

### If you see "No application encryption key"
```bash
php artisan key:generate
```

### If migrations fail
```bash
php artisan migrate:fresh
```

### If styles don't load
```bash
npm run build
# or keep running
npm run dev
```

### If routes don't work
```bash
php artisan route:clear
php artisan cache:clear
php artisan config:clear
```

### If views don't update
```bash
php artisan view:clear
```

## 📚 Next Steps After Setup

- [ ] Read `docs/SETUP_GUIDE.md`
- [ ] Review `docs/PROJECT_STRUCTURE.md`
- [ ] Check `docs/ROUTES_REFERENCE.md`
- [ ] Explore the codebase

## 🎯 Development Workflow

### Daily Development
1. Start Laravel server: `php artisan serve`
2. Start Vite: `npm run dev`
3. Code your features
4. Test in browser

### Before Committing
```bash
php artisan route:clear
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

## 📝 Important Files to Know

### Configuration
- `.env` - Environment variables
- `config/app.php` - App configuration
- `config/database.php` - Database configuration

### Routes
- `routes/web.php` - All web routes

### Controllers
- `app/Http/Controllers/Website/` - Public frontend
- `app/Http/Controllers/UserPanel/` - Customer dashboard
- `app/Http/Controllers/Admin/` - Admin panel

### Views
- `resources/views/website/` - Public views
- `resources/views/user-panel/` - User panel views
- `resources/views/admin/` - Admin views

### Models
- `app/Models/` - All database models

## 🎊 You're Ready!

Once all checkboxes are checked, your e-commerce platform is ready for development!

### Quick Access URLs
- **Homepage**: http://localhost:8000
- **Login**: http://localhost:8000/login
- **Register**: http://localhost:8000/register
- **User Dashboard**: http://localhost:8000/user/dashboard
- **Admin Dashboard**: http://localhost:8000/admin/dashboard
- **Products**: http://localhost:8000/products
- **Cart**: http://localhost:8000/cart

### Admin Features
- Manage Categories: http://localhost:8000/admin/categories
- Manage Products: http://localhost:8000/admin/products
- Manage Orders: http://localhost:8000/admin/orders
- Manage Coupons: http://localhost:8000/admin/coupons
- Manage Memberships: http://localhost:8000/admin/memberships

---

**Need Help?** Check the `docs/` folder for detailed documentation!
