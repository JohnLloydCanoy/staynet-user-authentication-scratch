<h1 align="center">STAYNET - Boarding House Finder 🏠</h1>

**STAYNET** is a modern, responsive web application designed to help students and professionals find the perfect boarding house, dorm, or apartment in Cagayan de Oro City. Built with a focus on **User Experience (UX)** and **Maintainability**, STAYNET connects guests with local hosts through a clean, intuitive interface.

<h2>Main Dashboard</h2>
<img src="readme_assets/Screenshot 2026-02-21 172210.png" alt="Screenshot 2026-02-21 172210" style="width:100%">

## 🚀 Features & Progress
- **Modern UI/UX:** Styled with Tailwind CSS for a premium, clean look.
- **Dynamic Property Listings:** Reusable PHP components for property cards and navigation.
- **Secure Authentication:** Standardized Sign In and Sign Up dialogs with role-based selection (Guest/Host).
- **Scalable Database:** Relational MySQL schema designed to handle users, properties, and bookings.
- **Environment Security:** Utilizes `vlucas/phpdotenv` to keep database credentials safe and private.

## 🛠️ Tech Stack
- **Frontend:** HTML5, Tailwind CSS
- **Backend:** PHP 8.2 (Vanilla/Scratch)
- **Database:** MySQL
- **Dependency Management:** Composer
- **Libraries:** `vlucas/phpdotenv`
<h2></h2>
## 📁 Project Structure
```text
staynet-user-authentication-scratch/
├── assets/             # Images and local styles
├── components/         # Reusable UI components (Header, Footer, Nav)
│   └── buttons/        # Standardized button components
├── config/             # Database connection and environment setup
├── database/           # SQL schemas and blueprints
├── vendor/             # External libraries (managed by Composer)
├── .env                # Environment secrets (Git-ignored)
├── .gitignore          # Rules for hiding sensitive files
└── index.php           # Main landing page

<h2>Last Updated: 7:31 pm</h2>
<h3>Febuary 22, 2023</h3>
