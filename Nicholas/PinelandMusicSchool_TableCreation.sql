CREATE TABLE `TeachersAccounts` (
	`Id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`FirstName` varchar NOT NULL,
	`LastName` varchar NOT NULL,
	`DateOfBirth` DATE NOT NULL,
	`Address` varchar NOT NULL,
	`Gender` varchar NOT NULL,
	`HomePhone` INT,
	`MobPhone` INT NOT NULL,
	`EmailAddress` varchar NOT NULL,
	`Password` varchar NOT NULL,
	`AdminCreationId` INT,
	`CreateDate` DATETIME NOT NULL,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `ParentDetails` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`FirstName` varchar NOT NULL,
	`LastName` varchar NOT NULL,
	`PhoneNumber` varchar,
	`CreateDate` DATETIME NOT NULL,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `TeachersLanguages` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`TeacherId` INT NOT NULL,
	`LanguageId` INT NOT NULL,
	`ProficiencyId` INT NOT NULL,
	`CreateDate` DATETIME NOT NULL,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Languages` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`Name` varchar NOT NULL,
	`CreateDate` DATETIME NOT NULL,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `TeachersIntruments` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`TeacherId` INT NOT NULL,
	`InstrumentId` INT NOT NULL,
	`ProficiencyId` INT NOT NULL,
	`CreateDate` DATETIME NOT NULL,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Proficiency` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`Value` varchar NOT NULL,
	`CreateDate` DATETIME NOT NULL,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Instruments` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`Name` varchar NOT NULL,
	`Type` varchar NOT NULL,
	`CreateDate` DATETIME NOT NULL,
	`UpdateDate` DATETIME NOT NULL,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `StudentsAccounts` (
	`Id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`FirstName` varchar NOT NULL,
	`LastName` varchar NOT NULL,
	`DateOfBirth` DATE NOT NULL,
	`Address` varchar NOT NULL,
	`Gender` varchar NOT NULL,
	`HomePhone` INT,
	`MobPhone` INT NOT NULL,
	`EmailAddress` varchar NOT NULL,
	`Password` varchar NOT NULL,
	`ParentsId` INT,
	`CreateDate` DATETIME NOT NULL,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `TeachersFeedback` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`TeacherId` INT NOT NULL,
	`FeedbackId` INT NOT NULL,
	`CreateDate` DATETIME NOT NULL,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Feedback` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`Feedback` varchar NOT NULL,
	`Rating` varchar NOT NULL,
	`StudentId` INT NOT NULL,
	`CreateDate` DATETIME NOT NULL,
	`UpdateDate` DATETIME NOT NULL,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `AdminAccounts` (
	`Id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`FirstName` varchar NOT NULL,
	`LastName` varchar NOT NULL,
	`EmailAddress` varchar NOT NULL,
	`Password` varchar NOT NULL,
	`CreateDate` DATETIME NOT NULL,
	`UpdateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `ClassRegistration` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`TeacherId` INT NOT NULL,
	`IntrusmentId` INT NOT NULL,
	`NumStudents` INT NOT NULL,
	`StartDate` DATE NOT NULL,
	`EndDate` DATE NOT NULL,
	`Time` TIME NOT NULL,
	`SessionLength` INT NOT NULL,
	`Cost` INT NOT NULL,
	`StudentId` INT,
	`Approved` BOOLEAN NOT NULL DEFAULT '0',
	`CreateDate` DATETIME NOT NULL,
	`CreateDate` DATETIME,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Accounts` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`Username` varchar NOT NULL,
	`StudentId` INT,
	`TeacherId` INT,
	`AdminId` INT,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `SchoolsIntrustments` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`InstrumentId` INT NOT NULL,
	`Quality` INT NOT NULL,
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

ALTER TABLE `TeachersFeedback` ADD CONSTRAINT `TeachersFeedback_fk0` FOREIGN KEY (`TeacherId`) REFERENCES `TeachersAccounts`(`Id`);

ALTER TABLE `TeachersFeedback` ADD CONSTRAINT `TeachersFeedback_fk1` FOREIGN KEY (`FeedbackId`) REFERENCES `Feedback`(`Id`);

ALTER TABLE `Feedback` ADD CONSTRAINT `Feedback_fk0` FOREIGN KEY (`StudentId`) REFERENCES `StudentsAccounts`(`Id`);

ALTER TABLE `ClassRegistration` ADD CONSTRAINT `ClassRegistration_fk0` FOREIGN KEY (`TeacherId`) REFERENCES `TeachersAccounts`(`Id`);

ALTER TABLE `ClassRegistration` ADD CONSTRAINT `ClassRegistration_fk1` FOREIGN KEY (`IntrusmentId`) REFERENCES `Instruments`(`Id`);

ALTER TABLE `ClassRegistration` ADD CONSTRAINT `ClassRegistration_fk2` FOREIGN KEY (`StudentId`) REFERENCES `StudentsAccounts`(`Id`);

ALTER TABLE `Accounts` ADD CONSTRAINT `Accounts_fk0` FOREIGN KEY (`StudentId`) REFERENCES `StudentsAccounts`(`Id`);

ALTER TABLE `Accounts` ADD CONSTRAINT `Accounts_fk1` FOREIGN KEY (`TeacherId`) REFERENCES `TeachersAccounts`(`Id`);

ALTER TABLE `Accounts` ADD CONSTRAINT `Accounts_fk2` FOREIGN KEY (`AdminId`) REFERENCES `AdminAccounts`(`Id`);

ALTER TABLE `SchoolsIntrustments` ADD CONSTRAINT `SchoolsIntrustments_fk0` FOREIGN KEY (`InstrumentId`) REFERENCES `Instruments`(`Id`);

