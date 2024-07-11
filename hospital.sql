SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE Doctor(
    doctorId INT PRIMARY key AUTO_INCREMENT,
    name varchar(50) not null,
    specialty varchar(50) not null,
    addr varchar(20),
    phone1 varchar(15),
    phone2 varchar(15)
   );

   CREATE TABLE Staff(
    StaffId INT PRIMARY key AUTO_INCREMENT,
    name varchar(50) not null,
    type varchar(50) not null,
    addr varchar(20),
    age INT not null,
    phone1 varchar(15),
    phone2 varchar(15)
   );

   CREATE TABLE Rooms(
    RoomId INT PRIMARY key,
    NumOfDay INT ,
    bill real ,
    TypeOfRoom varchar(20) 
   );

   CREATE TABLE Treatment(
    prescriptionCode INT PRIMARY key AUTO_INCREMENT,
    price REAL
);

CREATE TABLE Patients(
    patientId INT PRIMARY key AUTO_INCREMENT,
    name varchar(50) not null,
    disease varchar(50) not null,
    dateOFExamine DATE,
    gender varchar(10) not null,
    phone1 varchar(15),
    phone2 varchar(15),
    doctorId INT,
    RoomId INT,
    prescriptionCode INT,
    FOREIGN KEY (doctorId) REFERENCES doctor(doctorId),
    FOREIGN KEY (RoomId) REFERENCES rooms(RoomId),
    FOREIGN KEY (prescriptionCode) REFERENCES Treatment(prescriptionCode)
   );

   CREATE TABLE Care(
    staffId INT,
    patientId INT,
    FOREIGN KEY (staffId) REFERENCES staff(staffId),
    FOREIGN KEY (patientId) REFERENCES patients(patientId)
   );

   CREATE TABLE Maintenance(
    staffId INT,
    RoomId INT,
    FOREIGN KEY (staffId) REFERENCES staff(staffId),
    FOREIGN KEY (RoomId) REFERENCES rooms(RoomId)
   );