# AutoRevive – Car Rental System

**AutoRevive** is a web-based car rental management system aimed at streamlining the vehicle rental process through a simple and intuitive interface. Built with HTML, CSS, PHP, and SQLite, the system enables customers to register, log in, browse available cars, and submit rental requests. It is designed to be modular, allowing for future expansion into features like admin dashboards, booking analytics, and automated invoicing.

> 🚧 **Status:** This project is currently under active development.<br>
> Core functionalities such as user authentication, booking workflows, and admin management are being implemented incrementally. Contributions and suggestions are welcome.

## Project Objectives

- Provide an online platform to browse and book rental cars  
- Allow customer registration, login, and profile-based booking  
- Set up a lightweight backend using PHP with SQLite for simplicity  
- Develop a clean and responsive frontend user experience  
- Extendable to admin, analytics, and payment systems in future versions  

## Technologies Used

- **Frontend**: HTML, CSS  
- **Backend**: Python, PHP  
- **Database**: SQLite  
- **Planned**: JS validation, Date Pickers, Responsive design, Admin analytics

## Key Features (Planned & Partial)

- Customer signup & login system *(Partially implemented)*  
- Car listing and booking forms  
- Admin panel to manage cars and view bookings *(Upcoming)*  
- Start/end date selection for rentals  
- Receipt or invoice generation  
- Feedback and rating for cars *(Optional)* 

## Folder Structure

```
AutoRevive/
│
├── index.html                  # Homepage
├── login.html                  # Customer login form
├── signup.html                 # Customer signup form
├── emp_login.html              # Placeholder for employee login
├── rent.html                   # Basic rent request form
├── thar.html                   # Sample car listing
│
├── login.php                   # PHP login handler (in progress)
├── signup.php                  # PHP signup handler (in progress)
├── welcome.php                 # Landing page post login
├── logout.php                  # Destroys session and logs user out
├── connect.php                 # SQLite DB connection handler
│
├── init_db.py                  # Python script to generate auto_revive.db
├── auto_revive.db              # SQLite database (generated)
│
├── css/                        # Stylesheets
└── image/                      # Asset images
```

## Current Status

- [x] Static frontend layout
- [x] Signup & login form
- [x] PHP connection to SQLite
- [ ] Session-based login logic
- [ ] Booking functionality
- [ ] Admin CRUD system
- [ ] Car image uploads & filters
- [ ] Dashboard analytics

## Getting Started

### 1. Clone the repository
```bash
git clone https://github.com/Sudarshan007AS/car-rental-system-autorevive.git
cd car-rental-system-autorevive
```

### 2. Create the SQLite database
```bash
python init_db.py
```

### 3. Enable SQLite in your PHP setup
Edit your `php.ini` file:
- Uncomment: `extension=sqlite3`
- Restart Apache/XAMPP

### 4. Open in browser (using XAMPP or localhost)
Visit:
```
http://localhost/car-rental-system-autorevive/index.html
```

## Future Enhancements

- Admin dashboard with car/add/delete/edit views  
- Date-wise rental blocking  
- PDF invoice generation  
- Email notifications  
- Responsive mobile design  
- Vehicle filtering by price, type, fuel, etc.  

## 👤 Author

**Sudarshan A S**  
[LinkedIn](https://www.linkedin.com/in/sudarshanas) • [GitHub](https://github.com/Sudarshan007AS)

---
