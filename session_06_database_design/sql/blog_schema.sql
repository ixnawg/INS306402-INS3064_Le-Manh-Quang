CREATE TABLE Users (
    id INT PRIMARY KEY,
    username VARCHAR(255),
    email VARCHAR(255)
);

CREATE TABLE Categories (
    id INT PRIMARY KEY,
    name VARCHAR(255)
);

CREATE TABLE Post (
    id INT PRIMARY KEY,
    user_id INT,
    category_id INT,
    title VARCHAR(255),
    content TEXT,
    created_at DATETIME,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    FOREIGN KEY (category_id) REFERENCES Categories(id)
);

CREATE TABLE Comments (
    id INT PRIMARY KEY,
    post_id INT,
    user_id INT,
    content TEXT,
    content_at DATETIME,
    FOREIGN KEY (post_id) REFERENCES Post(id),
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

CREATE TABLE Tags (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    Value3 VARCHAR(255)
);

CREATE TABLE PostTags (
    post_id INT,
    tag_id INT,
    FOREIGN KEY (post_id) REFERENCES Post(id),
    FOREIGN KEY (tag_id) REFERENCES Tags(id)
);