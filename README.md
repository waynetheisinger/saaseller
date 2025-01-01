# 🚀 SaaSeller, An API-First Laravel SaaS Starter Pack

Welcome to the **API-First Laravel SaaS Starter** – a robust, scalable backend boilerplate built with **Laravel**, designed to serve as the foundation for SaaS applications with **multi-tiered Access Control (ACL)**, **subscription management**, and **partner-level account hierarchies**.

---

## 🚧 **Disclaimer 1: Project is Under Development**

**⚠️ This project is currently in active development and is not yet functional.**

We are in the process of building and refining the core features, including authentication, subscription management, and access control layers. While you are welcome to explore the codebase, please note:

- Key features may be incomplete or non-functional.
- Breaking changes are likely as the project evolves.
- Contributions are welcome, but please check open issues and milestones before submitting pull requests.

Stay tuned for updates as we work towards our first stable release! 🚀

---

## 🚧 **Disclaimer 2: Currently a Full Laravel Installation**

**⚠️ This project is currently a full Laravel installation, not a plug-and-play starter pack.**

At this stage, the repository contains a **complete Laravel application**, rather than a streamlined package designed to be installed via the Laravel Installer.

**What this means:**
- The project must be cloned and run as a standalone Laravel app.
- It is not yet available as an installable package via Composer.

Future plans include converting this project into a **true starter pack** that can be installed with a single command, like:

```bash
laravel new my-project --starter=SaaSeller
```

For now, you can clone and run the project manually:

```bash
git clone https://github.com/yourusername/saaseller.git
cd saaseller
composer install
php artisan migrate
php artisan serve
```

Thank you for your patience as we refine and prepare this project for broader usability! 🛠️✨

---


The project is designed to be consumed by the following frontend starter packs.
1. [Livewire-SaaSeller](#)
2. [Vue-SaaSeller](#)
3. [React-SaaSeller](#)

---

## 📚 **Table of Contents**

1. [Project Overview](#project-overview)
2. [Features](#features)
3. [Getting Started](#getting-started)
4. [Installation](#installation)
5. [Configuration](#configuration)
6. [API Documentation](#api-documentation)
7. [Security](#security)
8. [Contribution Guidelines](#contribution-guidelines)
9. [License](#license)
10. [Support](#support)

---

## 📝 **Project Overview**

This project is built with an **API-First methodology**, focusing on clean separation between backend and frontend. It leverages:

- **Laravel Sanctum:** Token-based API authentication.
- **Spatie Laravel-Permission:** Role-Based Access Control (RBAC).
- **Middleware & Policies:** Attribute-Based Access Control (ABAC).
- **Swagger/OpenAPI:** Well-documented API endpoints.

Ideal for SaaS platforms with:
- Trial accounts
- Subscription-based feature toggles
- Multi-level access controls (e.g., Super Admin, Partner Admin, Customer Admin)
- Role-based permissions for users

---

## 🛠️ **Features**

- 🧩 **API-First Architecture:** Decoupled backend ready for any frontend (React, Vue, Mobile, etc.).
- 🔑 **Authentication:** Token-based auth via **Laravel Sanctum**.
- 🛡️ **Access Control:** Multi-tiered ACL with **Spatie Laravel-Permission**.
- 💳 **Subscriptions:** Plan management with trial periods and gated features.
- 🤝 **Partner Accounts:** Support for partners managing client accounts.
- 📑 **API Documentation:** OpenAPI/Swagger for clear API contracts.
- 📊 **Monitoring:** Integration with Laravel Telescope.
- 🚀 **Scalable Design:** Built with future scalability in mind.

---

## 🚀 **Getting Started**

### 🐳 **Prerequisites**

Ensure you have the following installed:
- **PHP 8.1+**
- **Composer**

### 📦 **Clone the Repository**

```bash
git clone https://github.com/yourusername/saaseller.git
cd saaseller
```

### ⚙️ **Environment Configuration**

Copy the `.env.example` file:

```bash
cp .env.example .env
```

Update the database and application credentials in `.env`.

---

## 📥 **Installation**

### Backend Dependencies

```bash
composer install
php artisan migrate
php artisan breeze:install api
php artisan db:seed
php artisan serve
```

---

## 🔧 **Configuration**

### Authentication
- Token-based authentication is powered by **Laravel Sanctum**.

### Subscriptions
- Plans and features can be configured in `config/subscriptions.php`.

### API Routes
- All API endpoints are prefixed with `/api/v1/`.
- OpenAPI documentation is available at `/api/documentation`.

---

## 📑 **API Documentation**

The API is fully documented using **Swagger/OpenAPI**.  
To view the documentation locally:
- Start the application: `php artisan serve`
- Access the docs at: [`http://localhost:8000/api/documentation`](http://localhost:8000/api/documentation)

---

## 🔒 **Security**

We take security seriously. Please read our [SECURITY.md](./SECURITY.md) for guidelines on reporting vulnerabilities.

If you discover a security issue, please contact us directly and do not file a public issue.

---

## 🤝 **Contribution Guidelines**

We welcome contributions! Please follow these steps:
1. Fork the repository.
2. Create a feature branch: `git checkout -b feature/your-feature`
3. Commit your changes: `git commit -m "Add feature"`
4. Push to the branch: `git push origin feature/your-feature`
5. Open a Pull Request.

Please ensure you follow the **PSR-12 Coding Standard** and include appropriate tests for your changes.

---

## 📝 **License**

This project is open-source software licensed under the **MIT License**. See the [LICENSE](./LICENSE.md) file for more details.

---

## 📮 **Support**

If you encounter any issues:
- Check the **open issues** or **discussions** tab.
- Create a new issue if your question isn't covered.

For direct support, please contact us via **[wayne@orchid-interactive.com](mailto:email@example.com)**.

---

**Happy Building! 🚀**
