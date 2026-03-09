-- B3: Event Tracker

CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(200) NOT NULL,
    event_details JSON,
    start_datetime DATETIME
);