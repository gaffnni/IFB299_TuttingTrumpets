CREATE TABLE `TeachersAccounts` (
	`Id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`FirstName` varchar(100) NOT NULL,
	`LastName` varchar(100) NOT NULL,
	`DateOfBirth` DATE NOT NULL,
	`Address` varchar(500) NOT NULL,
	`Gender` varchar(10) NOT NULL,
	`PhoneNumber` INT NOT NULL,
	`EmailAddress` varchar(200) NOT NULL,
	`Password` varchar(100) NOT NULL,
	`AdminCreationId` INT,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `ParentDetails` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`FirstName` varchar(100) NOT NULL,
	`LastName` varchar(100) NOT NULL,
	`PhoneNumber` INT,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `TeachersLanguages` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`TeacherId` INT NOT NULL,
	`LanguageId` INT NOT NULL,
	`ProficiencyId` INT NOT NULL,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Languages` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`Name` varchar(100) NOT NULL UNIQUE,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `TeachersIntruments` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`TeacherId` INT NOT NULL,
	`InstrumentId` INT NOT NULL,
	`ProficiencyId` INT NOT NULL,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Proficiency` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`Name` varchar(100) NOT NULL UNIQUE,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Instruments` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`Name` varchar(100) NOT NULL UNIQUE,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `StudentsAccounts` (
	`Id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`FirstName` varchar(100) NOT NULL,
	`LastName` varchar(100) NOT NULL,
	`DateOfBirth` DATE NOT NULL,
	`Address` varchar(500) NOT NULL,
	`Gender` varchar(10) NOT NULL,
	`PhoneNumber` INT,
	`EmailAddress` varchar(200) NOT NULL,
	`FacebookURL` varchar(500) NOT NULL,
	`RequireInstrument` BOOLEAN NOT NULL,
	`Password` varchar(100) NOT NULL,
	`ParentsId` INT,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Feedback` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`Rating` INT NOT NULL,
	`Feedback` varchar(500),
	`StudentId` INT NOT NULL,
	`TeacherId` INT NOT NULL,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `AdminAccounts` (
	`Id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`FirstName` varchar(100) NOT NULL,
	`LastName` varchar(100) NOT NULL,
	`EmailAddress` varchar(200) NOT NULL,
	`Password` varchar(100) NOT NULL,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Class` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`TeacherId` INT NOT NULL,
	`InstrumentId` INT NOT NULL,
	`ProficiencyId` INT,
	`NumOfStudents` INT NOT NULL,
	`Description` varchar(500),
	`StartDate` DATE NOT NULL,
	`Day` varchar(50) NOT NULL,
	`EndDate` DATE NOT NULL,
	`Time` TIME NOT NULL,
	`SessionLength` INT NOT NULL,
	`Cost` INT NOT NULL,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Accounts` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`Username` varchar(100) NOT NULL UNIQUE,
	`StudentId` INT,
	`TeacherId` INT,
	`AdminId` INT,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `SchoolsInstruments` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`InstrumentId` INT NOT NULL,
	`ClientId` varchar(100),
	`Quality` INT NOT NULL,
	`Rented` BOOLEAN NOT NULL DEFAULT false,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `ClassesStudents` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`ClassId` INT NOT NULL,
	`StudentId` INT NOT NULL,
	`Approved` BOOLEAN NOT NULL DEFAULT false,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `StudentInstrumentRental` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`StudentId` INT NOT NULL,
	`SchoolInstrumentsId` INT NOT NULL,
	`CreateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`EndDate` DATETIME,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

ALTER TABLE `TeachersAccounts` ADD CONSTRAINT `TeachersAccounts_fk0` FOREIGN KEY (`AdminCreationId`) REFERENCES `AdminAccounts`(`Id`);

ALTER TABLE `TeachersLanguages` ADD CONSTRAINT `TeachersLanguages_fk0` FOREIGN KEY (`TeacherId`) REFERENCES `TeachersAccounts`(`Id`);

ALTER TABLE `TeachersLanguages` ADD CONSTRAINT `TeachersLanguages_fk1` FOREIGN KEY (`LanguageId`) REFERENCES `Languages`(`Id`);

ALTER TABLE `TeachersLanguages` ADD CONSTRAINT `TeachersLanguages_fk2` FOREIGN KEY (`ProficiencyId`) REFERENCES `Proficiency`(`Id`);

ALTER TABLE `TeachersIntruments` ADD CONSTRAINT `TeachersIntruments_fk0` FOREIGN KEY (`TeacherId`) REFERENCES `TeachersAccounts`(`Id`);

ALTER TABLE `TeachersIntruments` ADD CONSTRAINT `TeachersIntruments_fk1` FOREIGN KEY (`InstrumentId`) REFERENCES `Instruments`(`Id`);

ALTER TABLE `TeachersIntruments` ADD CONSTRAINT `TeachersIntruments_fk2` FOREIGN KEY (`ProficiencyId`) REFERENCES `Proficiency`(`Id`);

ALTER TABLE `StudentsAccounts` ADD CONSTRAINT `StudentsAccounts_fk0` FOREIGN KEY (`ParentsId`) REFERENCES `ParentDetails`(`Id`);

ALTER TABLE `Feedback` ADD CONSTRAINT `Feedback_fk0` FOREIGN KEY (`StudentId`) REFERENCES `StudentsAccounts`(`Id`);

ALTER TABLE `Feedback` ADD CONSTRAINT `Feedback_fk1` FOREIGN KEY (`TeacherId`) REFERENCES `TeachersAccounts`(`Id`);

ALTER TABLE `Class` ADD CONSTRAINT `Class_fk0` FOREIGN KEY (`TeacherId`) REFERENCES `TeachersAccounts`(`Id`);

ALTER TABLE `Class` ADD CONSTRAINT `Class_fk1` FOREIGN KEY (`InstrumentId`) REFERENCES `Instruments`(`Id`);

ALTER TABLE `Class` ADD CONSTRAINT `Class_fk2` FOREIGN KEY (`ProficiencyId`) REFERENCES `Proficiency`(`Id`);

ALTER TABLE `Accounts` ADD CONSTRAINT `Accounts_fk0` FOREIGN KEY (`StudentId`) REFERENCES `StudentsAccounts`(`Id`);

ALTER TABLE `Accounts` ADD CONSTRAINT `Accounts_fk1` FOREIGN KEY (`TeacherId`) REFERENCES `TeachersAccounts`(`Id`);

ALTER TABLE `Accounts` ADD CONSTRAINT `Accounts_fk2` FOREIGN KEY (`AdminId`) REFERENCES `AdminAccounts`(`Id`);

ALTER TABLE `SchoolsInstruments` ADD CONSTRAINT `SchoolsInstruments_fk0` FOREIGN KEY (`InstrumentId`) REFERENCES `Instruments`(`Id`);

ALTER TABLE `ClassesStudents` ADD CONSTRAINT `ClassesStudents_fk0` FOREIGN KEY (`ClassId`) REFERENCES `Class`(`Id`);

ALTER TABLE `ClassesStudents` ADD CONSTRAINT `ClassesStudents_fk1` FOREIGN KEY (`StudentId`) REFERENCES `StudentsAccounts`(`Id`);

ALTER TABLE `StudentInstrumentRental` ADD CONSTRAINT `StudentInstrumentRental_fk0` FOREIGN KEY (`StudentId`) REFERENCES `StudentsAccounts`(`Id`);

ALTER TABLE `StudentInstrumentRental` ADD CONSTRAINT `StudentInstrumentRental_fk1` FOREIGN KEY (`SchoolInstrumentsId`) REFERENCES `SchoolsInstruments`(`Id`);
