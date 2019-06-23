CREATE TABLE xbasic_details (
    ID int NOT NULL AUTO_INCREMENT,
    username varchar(255),
    firstname varchar(255),
    secondname varchar(255),
    contact varchar(20),
    address varchar(255),
    email varchar(255),
    birthday varchar(255),
    gender varchar(255),
    PRIMARY KEY (ID)
);









         "UPDATE `xbasic_details` SET firstname='$firstname', secondname='$secondname', contact='$contact',address='$address', email='$email', birthday='$birthday', gender='$gender' where username='$username' "
