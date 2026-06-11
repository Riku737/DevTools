# DevTools

A lightweight Laravel application that catalogs developer tools, libraries, and resources organized by categories and subcategories. It provides a searchable directory of links, descriptions, and metadata to help developers discover useful services and libraries quickly.

## Features
- **Resource catalog:** Categories, subcategories, and resource entries with descriptions and pricings.
- **Search:** Resource-only search that performs quick lookups across name, description, and URL.
- **Seeders:** Import data from JSON exports and safe seeding routines to avoid duplicate keys.
- **SQLite-ready:** Works out-of-the-box with a local SQLite file for easy sharing or demo purposes.

**How to Install and Run**

- **Requirements:** PHP 8.1+ with `pdo_sqlite` enabled, Composer, and Node.js if you want to build assets.
- Install PHP dependencies and copy the example env:

```bash
composer install
cp .env.example .env
```

- Use SQLite locally (recommended): edit `.env` to set the connection and file path, for example:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

- Create the SQLite file and set permissions if needed:

```bash
mkdir -p database
type nul > database\database.sqlite
```

- Generate the application key, run migrations and seed the DB:

```bash
php artisan key:generate
php artisan migrate --seed
```

- (Optional) If the repo includes a demo DB file at `database/developer_tools`, you may set `DB_DATABASE` to that path instead of creating a new SQLite file.

**How to Use**

- Start the development server:

```bash
php artisan serve
```

- Open your browser at `http://127.0.0.1:8000` and use the search box to find resources by name, description, or URL.
- Browse categories and subcategories from the UI to see grouped resources.
- To update or add data, edit the JSON files in `database/data/` and re-run the relevant seeders:

```bash
php artisan db:seed --class=\Database\Seeders\CategoriesSeeder
php artisan db:seed --class=\Database\Seeders\SubcategoriesSeeder
php artisan db:seed --class=\Database\Seeders\ResourcesSeeder
```

**Notes on Publishing / Git Hygiene**
- Keep `.env` out of the repo. Provide `.env.example` instead.
- Ignore `vendor/`, `node_modules/`, and local SQLite files unless you intentionally want to ship a demo DB.
- Migrations and seeders are the canonical source of project data — prefer running `php artisan migrate --seed` for fresh setups.

**Troubleshooting**
- If Laravel seems to cache configuration changes, clear caches:

```bash
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

- If you encounter JSON seeder import issues, verify the JSON structure in `database/data/` and ensure the seeders are extracting `data` arrays when phpMyAdmin-wrapped exports are present.

**Contributing**
- Contributions are welcome. Add new categories, subcategories, or resources via the JSON files and open a PR with data and UI improvements.

**License & Attribution**
- Add your preferred license and attribution here (e.g., MIT) before publishing.

---

If you want I can also add a short `CONTRIBUTING.md`, example issues, or a demo Docker Compose setup — tell me which you'd prefer.
