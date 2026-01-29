# 🎨 3D RGB – 3D File Marketplace Platform

🌐 **Live Website:** https://3d.irpsc.com  
🐙 **GitHub Repository:** https://github.com/iranpsc/3drgb.git  

---

## 📌 Overview

**3D RGB** is a full-featured digital marketplace for selling and distributing **3D models, avatars, textures, renders, and other digital assets**.  
The platform is built using **Laravel**, **Blade**, and **Tailwind CSS**, designed with scalability, performance, and clean architecture in mind.

This repository contains the complete source code of the 3D RGB platform.

---

## 🎯 Project Goals

- Create a scalable and production-ready 3D asset marketplace  
- Provide a modern and responsive user interface  
- Deliver a powerful and secure admin panel  
- Follow Laravel best practices and clean code principles  
- Enable easy maintenance and future expansion  

---

## 🚀 Features

### 👥 User Features
- User registration and authentication  
- User dashboard  
- Product listing and browsing  
- Advanced search and filtering  
- Shopping cart system  
- Secure checkout flow  
- Download purchased digital files  
- Order history tracking  
- Fully responsive design  

### 🛒 Store & Product Features
- Digital product management  
- Product categories and tags  
- Product pricing and status control  
- Secure file upload and download system  
- SEO-friendly product pages  

### 🧑‍💼 Admin Panel Features
- Admin authentication and authorization  
- Admin dashboard  
- User management  
- Product CRUD operations  
- Category management  
- Order and sales management  
- File and storage management  
- Role-based access control  

### ⚙️ Technical Features
- Laravel MVC architecture  
- Blade component-based views  
- Tailwind CSS utility-first design  
- Database migrations and seeders  
- Secure environment configuration  
- Clean and maintainable codebase  

---

## 🧱 Built With

- **Laravel** – PHP Framework  
- **Blade** – Laravel Templating Engine  
- **Tailwind CSS** – Utility-first CSS Framework  
- **MySQL / MariaDB** – Database  
- **Node.js & NPM** – Frontend Asset Tooling  

---

## 📦 Installation

### ✅ Requirements

- PHP >= 8.1  
- Composer  
- Node.js >= 16  
- NPM or Yarn  
- MySQL / MariaDB  

---

### 🔧 Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/iranpsc/3drgb.git
   ```

2. Navigate to the project directory:
   ```bash
   cd 3drgb
   ```

3. Install backend dependencies:
   ```bash
   composer install
   ```

4. Install frontend dependencies:
   ```bash
   npm install
   ```

5. Create environment file:
   ```bash
   cp .env.example .env
   ```

6. Configure database credentials in `.env`

7. Generate application key:
   ```bash
   php artisan key:generate
   ```

8. Run database migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```

9. Compile frontend assets:
   ```bash
   npm run dev
   ```

10. Start development server:
    ```bash
    php artisan serve
    ```

Application will be available at:  
`http://localhost:8000`

---

## 📁 Project Structure

```text
├── app/                # Core application logic
├── database/           # Migrations and seeders
├── public/             # Public assets
├── resources/
│   ├── views/          # Blade templates
│   ├── css/            # Tailwind styles
│   └── js/             # Frontend scripts
├── routes/
│   └── web.php         # Web routes
├── storage/            # Uploaded files
├── .env.example
├── composer.json
└── package.json
```

---

## 🔐 Roles & Permissions

| Role  | Access Level |
|------|--------------|
| Guest | Browse products |
| User  | Purchase and download |
| Admin | Full system control |

---

## 📈 Roadmap

- Payment gateway integration  
- Multi-vendor support  
- Product ratings and reviews  
- Discount and coupon system  
- Public API  
- Multi-language support  
- 3D model preview viewer  

---

## 🧪 Testing

```bash
php artisan test
```

---

## 🤝 Contributing

1. Fork the repository  
2. Create a new branch (`feature/your-feature`)  
3. Commit your changes  
4. Push to your branch  
5. Open a Pull Request  

---

## 📜 License

This project is licensed under the **MIT License**.  
See the `LICENSE` file for more details.

---

## 📬 Contact

- 🌐 Website: https://3d.irpsc.com  
- 📧 Email: contact@irpsc.com  
- 🐙 GitHub: https://github.com/iranpsc  

---

⭐ If you like this project, please give it a star!
