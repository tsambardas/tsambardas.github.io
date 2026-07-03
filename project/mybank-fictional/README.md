# MyBank — Fictional Bank Website (Portfolio Project)

A multi-page banking website concept, designed and developed by **Tulay Tsambardas** as part of the Certificate IV in Web Development (ICT40120).

> **Disclaimer:** MyBank is a fictional brand. All products, interest rates, company details, ABN and licence numbers on this site are invented for demonstration purposes only. This is not a real bank and no personal data is collected or stored.

## Live demo

The static version of the site runs on any web host (for example GitHub Pages). Start at `index.html`.

The demo login accepts username `demo` with password `demo1234`.

## What this project demonstrates

- **HTML5** — semantic multi-page structure built on HTML5 Boilerplate
- **CSS3** — custom layout, responsive design with media queries (`css/responsive.css`), CSS grid/flexbox columns
- **JavaScript** — image slideshow, chat popup, tab interactions, form handling
- **jQuery UI** — tabbed content on the Home Loans page
- **PHP + MySQL** — full authentication system: registration with hashed passwords (`password_hash`), login with prepared statements (`mysqli`), session handling, password reset, and a validated enquiry form
- **Accessibility & SEO basics** — alt text on images, meta descriptions, per-page titles

## Pages

| Page | File | Notes |
|---|---|---|
| Landing page | `index.html` | Project introduction and entry point |
| Home | `mybank_index.html` | Slideshow, sections, chat popup |
| Personal banking | `mybank_personal.html` | Accounts, cards, banking tools |
| Home loans | `mybank_homeloans.html` | jQuery UI tabs, rate tables |
| About us | `mybank_aboutus.html` | Company, careers, community |
| Login (demo) | `login.html` | Static demo of the PHP login |
| Contact (demo) | `contact.html` | Static demo of the PHP enquiry form |

## PHP version

The full server-side implementation is included: `config.php`, `login.php`, `register.php`, `reset-password.php`, `welcome.php`, `logout.php`, `contact.php`.

To run it locally or on a PHP host, see **`docs/php-setup-guide.md`**. The database schema is in **`docs/mybank.sql`**.

## Project structure

```
├── index.html              # Landing page
├── mybank_*.html           # Main site pages
├── login.html              # Static login demo
├── contact.html            # Static contact demo
├── *.php                   # PHP + MySQL version (see docs/)
├── css/                    # Stylesheets
├── js/                     # Scripts
├── images/                 # Site imagery
├── jquery-ui-1.13.2.custom # jQuery UI library
├── docs/                   # PHP setup guide + database schema
└── _archive/               # Unused boilerplate files (kept for reference)
```

---

**TT** — Tulay Tsambardas · Digital Designer · © 2026 All rights reserved.
