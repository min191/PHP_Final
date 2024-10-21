CREATE DATABASE IF NOT EXISTS php_finals;
USE php_final;

-- Table for Students
CREATE TABLE Students (
    Student_ID INT PRIMARY KEY AUTO_INCREMENT,
    Student_Name VARCHAR(255),
    Student_Email VARCHAR(255),
    Student_DateOfBirth DATE,
    Student_Address VARCHAR(255),
    Student_PhoneNumber VARCHAR(20)
);

-- Table for Lecturers
CREATE TABLE Lecturers (
    Lecturer_ID INT PRIMARY KEY AUTO_INCREMENT,
    Lecturer_Name VARCHAR(255),
    Lecturer_Email VARCHAR(255),
    Lecturer_PhoneNumber VARCHAR(20),
    Lecturer_Department VARCHAR(255)
);

-- Table for Courses
CREATE TABLE Courses (
    Course_ID INT PRIMARY KEY AUTO_INCREMENT,
    Course_Name VARCHAR(255),
    Description TEXT,
    Course_Fees DECIMAL(10, 2),
    Course_StartDate DATE,
    Course_EndDate DATE
);

-- Table for Questions and Answers (Q&A)
CREATE TABLE QA (
    QA_ID INT PRIMARY KEY AUTO_INCREMENT,
    Student_ID INT,
    Lecturer_ID INT,
    QA_Question TEXT,
    QA_Answer TEXT,
    FOREIGN KEY (Student_ID) REFERENCES Students(Student_ID),
    FOREIGN KEY (Lecturer_ID) REFERENCES Lecturers(Lecturer_ID)
);

-- Table for Student Feedback
CREATE TABLE StudentFeedback (
    FeedbackID INT PRIMARY KEY AUTO_INCREMENT,
    Student_ID INT,
    Feedback_Text TEXT,
    FOREIGN KEY (Student_ID) REFERENCES Students(Student_ID)
);

-- Table for Administrators
CREATE TABLE Administrators (
    Admin_ID INT PRIMARY KEY AUTO_INCREMENT,
    Admin_Name VARCHAR(255),
	Admin_Email VARCHAR(255),
	Admin_PhoneNumber VARCHAR(20)
);