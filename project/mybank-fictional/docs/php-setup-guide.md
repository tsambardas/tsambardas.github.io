# Running the PHP version of MyBank

The static demo (login.html / contact.html) works on any host. To run the **real PHP + MySQL version** (working registration, login, sessions), follow one of the two options below.

---

## Option A — Run locally with XAMPP (best for testing)

XAMPP gives you Apache (web server), PHP and MySQL on your own computer.

1. Download and install XAMPP from https://www.apachefriends.org (choose the Windows version).
2. Open the **XAMPP Control Panel** and press **Start** next to *Apache* and *MySQL*.
3. Copy the whole `mybank-tulay` project folder into `C:\xampp\htdocs\`.
4. Create the database:
   - Open http://localhost/phpmyadmin in your browser.
   - Click **Import**, choose `docs/mybank.sql` from this project, and press **Go**.
   - You should now see a `mybank` database with `users` and `contact` tables.
5. Open http://localhost/mybank-tulay/mybank_index.html — the site now runs with working PHP.
6. Click **LogIn → Register now** to create a test account, then log in with it.

`config.php` already matches XAMPP's default settings (server `localhost`, user `root`, no password), so no changes are needed.

## Option B — Free online PHP hosting (e.g. InfinityFree)

1. Create a free account at https://www.infinityfree.com (or a similar free PHP host).
2. Create a new website (you get a free subdomain, e.g. `mybank-tulay.rf.gd`).
3. In the control panel, open **MySQL Databases** and create a database. Note the four values the host gives you: **server name, database name, username, password**.
4. Open **phpMyAdmin** for that database and import `docs/mybank.sql` (skip the `CREATE DATABASE`/`USE` lines if the host has already created the database — import just the two `CREATE TABLE` statements).
5. Edit `config.php` and replace the four values with the ones from step 3.
6. Upload all project files with the host's file manager (or FTP with FileZilla) into the `htdocs` folder.
7. Visit your subdomain — registration and login now work live.

**Note:** free hosts can be slow and may show ads. That is fine for demonstrating skills; for client work you would use paid hosting.

## Security notes (worth mentioning in interviews)

- `login.php` and `register.php` use **prepared statements** — protection against SQL injection.
- Passwords are stored with **`password_hash()`** — never in plain text.
- `contact1.php` (in `_archive/`) was an early draft that builds SQL from user input directly. It is kept only as a learning reference — it is vulnerable to SQL injection and should never be deployed.

---

**TT** — Tulay Tsambardas · Digital Designer · © 2026
