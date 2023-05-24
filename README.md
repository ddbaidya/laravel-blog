# Laravel Open Blog

Laravel Open Blog is an open-source project that provides a quick start admin dashboard with a blog website for every Laravel developer. It aims to help you kickstart your own blog application using the Laravel framework.

## Features

-   Admin Dashboard: A user-friendly admin dashboard for managing blog posts, categories, tags, and other settings.
-   Blog Website: A pre-built front-end for displaying blog posts, categories, tags, and enabling user interaction.
-   Authentication: Built-in user authentication system for managing admin users and securing access to the admin dashboard.
-   CRUD Operations: Perform Create, Read, Update, and Delete operations for blog posts, categories, and tags.
-   SEO-Friendly URLs: Generate search engine optimized URLs for blog posts using slugs.
-   Markdown Editor: Integrated markdown editor for easy blog post creation.
-   Theming Support: Customize the look and feel of the blog website with theme support.

## Getting Started

Follow the steps below to get started with Laravel Open Blog:

### Prerequisites

-   PHP (>= 7.4)
-   Composer
-   Node.js (>= 12.0)
-   NPM or Yarn

### Clone the Repository

```bash
git clone https://github.com/ddbaidya/laravel-open-blog.git
cd laravel-open-blog
```

### Install Dependencies

```bash
composer install
```

### Configure Environment

-   Create a copy of the .env.example file and rename it to .env. Update the necessary database and application settings within the .env file.

```bash
cp .env.example .env
```

### Generate Application Key

```bash
php artisan key:generate
```

### Migrate and Seed the Database

```bash
php artisan migrate --seed
```

### Run the Application

```bash
php artisan serve
```

-   You should now be able to access the Laravel Open Blog application by visiting http://localhost:8000 in your web browser.

## Contributing to Laravel Open Blog

We welcome contributions to Laravel Open Blog! If you would like to contribute, please follow the guidelines in the CONTRIBUTING.md file.

## License

Laravel Open Blog is open-source software licensed under the MIT license.

<center>

## Thank you! 🙏

</center>