create DATABASE MVC_Project;
USE MVC_Project;
ALTER DATABASE MVC_Project CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE users (
  Id varchar(255) Unique primary key,
  Role ENUM('admin', 'doctor', 'patient') NOT NULL,
  Email VARCHAR(255) UNIQUE NOT NULL,
  Password VARCHAR(255) NOT NULL,
  FullName VARCHAR(255) NOT NULL,
  Phone VARCHAR(20),
  Address varchar(255),
  Url_Image VARCHAR(255)
);

CREATE TABLE doctors (
  Id varchar(255) Unique primary key,
  UserId varchar(255) NOT NULL,
  Specialization VARCHAR(200),
  Hospital VARCHAR(255),
  FOREIGN KEY (UserId) REFERENCES users(Id)
);

CREATE TABLE patients (
  Id varchar(255) Unique primary key,
  UserId varchar(255) NOT NULL,
  FOREIGN KEY (UserId) REFERENCES users(Id)
);

CREATE TABLE admins (
  Id varchar(255) Unique primary key,
  UserId varchar(255) NOT NULL,
  FOREIGN KEY (UserId) REFERENCES users(Id)
);

CREATE TABLE booking (
  Id varchar(255) Unique primary key,
  PatientId varchar(255) NOT NULL,
  DoctorId varchar(255) NOT NULL,
  Options ENUM('Tructiep', 'Zalo') NOT NULL,
  StartAt DATETIME NOT NULL,
  EndTimeOption ENUM('0.5', '1', '1.5') NOT NULL,
  FOREIGN KEY (PatientId) REFERENCES patients(Id),
  FOREIGN KEY (DoctorId) REFERENCES doctors(Id)
);

CREATE TABLE Messages (
 Id varchar(255) Unique primary key,
  SenderId varchar(255) NOT NULL,
  ReceiverId varchar(255) NOT NULL,
  MessageType VARCHAR(255) NOT NULL,
  FOREIGN KEY (SenderId) REFERENCES Users(Id),
  FOREIGN KEY (ReceiverId) REFERENCES Users(Id)
);

-- Chèn dữ liệu cho bác sĩ (doctors)
INSERT INTO users (Id, Role, Email, Password, Fullname, Phone, Address, Url_Image)
VALUES
  ('1', 'doctor', 'doctor1@mental.health.care.hospital', 'password1', 'Nguyễn Văn A', '0921-123-456', '123 Đường A, Quận 1, TP.HCM', 'image1.jpg'),
  ('2', 'doctor', 'doctor2@mental.health.care.hospital', 'password2', 'Trần Thị B', '0921-234-567', '456 Đường B, Quận 2, TP.HCM', 'image2.jpg'),
  ('3', 'doctor', 'doctor3@mental.health.care.hospital', 'password3', 'Phạm Văn C', '0921-345-678', '789 Đường C, Quận 3, TP.HCM', 'image3.jpg'),
  ('4', 'doctor', 'doctor4@mental.health.care.hospital', 'password4', 'Lê Thị D', '0921-456-789', '012 Đường D, Quận 4, TP.HCM', 'image4.jpg'),
  ('5', 'doctor', 'doctor5@mental.health.care.hospital', 'password5', 'Nguyễn Văn E', '0921-567-890', '345 Đường E, Quận 5, TP.HCM', 'image5.jpg'),
  ('6', 'doctor', 'doctor16@mental.health.care.hospital', 'password6', 'Lê Thị Q', '0921-890-123', '678 Đường Q, Quận 16, TP.HCM', 'image16.jpg'),
  ('7', 'doctor', 'doctor17@mental.health.care.hospital', 'password7', 'Nguyễn Văn R', '0921-901-234', '901 Đường R, Quận 17, TP.HCM', 'image17.jpg'),
  ('8', 'doctor', 'doctor18@mental.health.care.hospital', 'password8', 'Trần Thị S', '0921-012-345', '234 Đường S, Quận 18, TP.HCM', 'image18.jpg'),
  ('9', 'doctor', 'doctor19@mental.health.care.hospital', 'password9', 'Phạm Văn T', '0921-123-456', '567 Đường T, Quận 19, TP.HCM', 'image19.jpg'),
  ('10', 'doctor', 'doctor20@mental.health.care.hospital', 'password10', 'Lê Thị U', '0921-234-567', '890 Đường U, Quận 20, TP.HCM', 'image20.jpg');




INSERT INTO doctors (Id, UserId, Specialization, Hospital)
VALUES
  ('1',  '1', 'Tâm lý học', 'Bệnh viện Tâm thần Trung ương'),
  ('2','2', 'Tâm thần học lâm sàng', 'Bệnh viện Tâm thần Huế'),
  ('3','3', 'Tâm lý trị liệu', 'Bệnh viện Tâm thần Hà Nội'),
  ('4','4', 'Tâm thần trẻ em và thanh thiếu niên', 'Bệnh viện Tâm thần TP.HCM'),
  ('5','5', 'Tâm thần não', 'Bệnh viện Tâm thần Đà Nẵng'),
  ('6','6', 'Tâm thần nghiện', 'Bệnh viện Tâm thần Cần Thơ'),
  ('7', '7', 'Tâm thần lão khoa', 'Bệnh viện Tâm thần Đồng Nai'),
  ('8','8', 'Tâm thần pháp y', 'Bệnh viện Tâm thần Bắc Giang'),
  ('9','9', 'Y học giấc ngủ', 'Bệnh viện Tâm thần Bình Dương'),
  ('10','10', 'Tâm thần liên hệ', 'Bệnh viện Tâm thần Vũng Tàu');


-- Chèn dữ liệu cho bệnh nhân (patients)
INSERT INTO users (Id, Role, Email, Password, FullName, Phone, Address, Url_Image)
VALUES
  ('11','patient', 'benh_nhan1@example.com', 'password1', 'Nguyễn Thị Hương', '1111111111', '123 Đường A, Quận 1, TP.HCM', 'image1.jpg'),
  ('12','patient', 'benh_nhan2@example.com', 'password2', 'Trần Văn Hải', '2222222222', '456 Đường B, Quận 2, TP.HCM', 'image2.jpg'),
  ('13','patient', 'benh_nhan3@example.com', 'password3', 'Phạm Thị Trang', '3333333333', '789 Đường C, Quận 3, TP.HCM', 'image3.jpg'),
  ('14','patient', 'benh_nhan4@example.com', 'password4', 'Lê Văn Tùng', '4444444444', '012 Đường D, Quận 4, TP.HCM', 'image4.jpg'),
  ('15','patient', 'benh_nhan5@example.com', 'password5', 'Nguyễn Thị Mỹ', '5555555555', '345 Đường E, Quận 5, TP.HCM', 'image5.jpg');


INSERT INTO patients (Id, UserId)
VALUES
  ('1','11'),
  ('2','12'),
   ('3','13'),
   ('4', '14'),
   ('5','15');


-- Chèn dữ liệu cho quản trị viên (admins)
INSERT INTO users (Id, Role, Email, Password, FullName, Phone, Url_Image)
VALUES
  ('16', 'admin', 'admin1@mentalheath.management', 'admin1', 'Nguyễn Công', '0921-234-567', 'image5.jpg'),
  ( '17', 'admin', 'admin2@mentalheath.management', 'admin2', 'Hospital Management', '0921-234-567', 'image6.jpg');

INSERT INTO admins (Id, UserId)
VALUES
  ('1','16'),
  ('2','17');
