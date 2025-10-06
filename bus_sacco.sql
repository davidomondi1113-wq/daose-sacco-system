-- Loan Types
CREATE TABLE loan_types (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample loan types
INSERT INTO loan_types (name, description) VALUES
('Development Loan', 'For personal or business development projects.'),
('Emergency Loan', 'Quick loan for urgent needs.'),
('Education Loan', 'Helps members fund education expenses.');

-- News & Events
CREATE TABLE news_events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    content TEXT NOT NULL,
    published_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample news/events
INSERT INTO news_events (title, content) VALUES
('Annual General Meeting 2025', 'Our AGM will be held on 10th November 2025 at Kisumu Hall.'),
('Dividend Announcement', 'Members will receive dividends at the end of this financial year.'),
('New Branch Opening', 'We are opening a new branch in Kakamega next month.');
