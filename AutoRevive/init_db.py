import sqlite3

conn = sqlite3.connect('auto_revive.db')
c = conn.cursor()

# Create users table
c.execute('''
CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT UNIQUE NOT NULL,
    password TEXT NOT NULL,
    mobile TEXT,
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)
''')


# Create cars table
c.execute('''
CREATE TABLE IF NOT EXISTS cars (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    model TEXT NOT NULL,
    brand TEXT NOT NULL,
    price_per_day REAL NOT NULL,
    availability INTEGER DEFAULT 1,
    image_path TEXT
)
''')

# Create bookings table
c.execute('''
CREATE TABLE IF NOT EXISTS bookings (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    user_id INTEGER,
    car_id INTEGER,
    start_date TEXT NOT NULL,
    end_date TEXT NOT NULL,
    total_price REAL,
    status TEXT DEFAULT 'Booked',
    FOREIGN KEY(user_id) REFERENCES users(id),
    FOREIGN KEY(car_id) REFERENCES cars(id)
)
''')

conn.commit()
conn.close()

print("✅ Database and tables created successfully.")
