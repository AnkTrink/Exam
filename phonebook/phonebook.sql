CREATE TABLE contacts_table (
                                id INT AUTO_INCREMENT PRIMARY KEY,
                                name varchar(50) NOT NULL,
                                phone_number varchar(20) NOT NULL
);

INSERT INTO contacts_table (name, phone_number) VALUES ('Quang Anh', 23456789);
INSERT INTO contacts_table (name, phone_number) VALUES ('Son', 23456788);
INSERT INTO contacts_table (name, phone_number) VALUES ('Hoang', 23456787);