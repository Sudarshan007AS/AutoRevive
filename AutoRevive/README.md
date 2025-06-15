> 🚧 **Status:** This project is currently under active development.<br>
> Core functionalities such as user authentication, booking workflows, and admin management are being implemented incrementally.
> Contributions and suggestions are welcome.

## Current Status

- [x] Static frontend layout
- [x] Signup & login form
- [x] PHP connection to SQLite
- [ ] Session-based login logic
- [ ] Booking functionality
- [ ] Admin CRUD system
- [ ] Car image uploads & filters
- [ ] Dashboard analytics

## How to Run It Locally

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
