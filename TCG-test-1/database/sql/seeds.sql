CREATE TABLE IF NOT EXISTS customers (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  phone VARCHAR(20),
  email VARCHAR(255),
  organisation VARCHAR(255),
  date_of_birth DATE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


INSERT INTO customers (name, phone, email, organisation, date_of_birth) VALUES
  ('Bukayo Saka', '+9876543210', 'b.saka@example.com', 'London Arsenal', '2001-09-05'),
  ('Thomas Partey', '+5555555555', 't.partey@example.com', 'Red and Whites', '1993-06-13'),
  ('Kieran Tierney', '+9999999999', 'k.tierney@example.com', 'United Gunners', '1997-06-05'),
  ('Gabriel Martinelli', '+1111111111', 'g.martinelli@example.com', 'Royal Arsenal', '2001-06-18'),
  ('Emile Smith Rowe', '+2222222222', 'e.smithrowe@example.com', 'Arsenal United', '2000-07-28'),
  ('Granit Xhaka', '+4444444444', 'g.xhaka@example.com', 'North Londoners', '1992-09-27'),
  ('Rob Holding', '+6666666666', 'r.holding@example.com', 'Red Army', '1995-09-20'),
  ('Gabriel Magalhaes', '+9999999999', 'g.magalhaes@example.com', 'Blue and Red FC', '1997-12-19'),
  ('Albert Sambi Lokonga', '+2345678901', 'a.lokonga@example.com', 'London Gunners', '1999-10-22'),
  ('Martin Odegaard', '+4567890123', 'm.odegaard@example.com', 'Red and White Army', '1998-12-17'),
  ('Aaron Ramsdale', '+5678901234', 'a.ramsdale@example.com', 'North London FC', '1998-05-14'),
  ('Ben White', '+6789012345', 'b.white@example.com', 'Arsenal Stars', '1997-10-08'),
  ('Takehiro Tomiyasu', '+7890123456', 't.tomiyasu@example.com', 'Gunners Athletic', '1998-11-05'),
  ('Mikel Arteta', '+8901234567', 'm.arteta@example.com', 'Red Team', '1982-03-26');

