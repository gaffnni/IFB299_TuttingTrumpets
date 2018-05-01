ALTER TABLE `TeachersAccounts` DROP FOREIGN KEY `TeachersAccounts_fk0`;

ALTER TABLE `TeachersLanguages` DROP FOREIGN KEY `TeachersLanguages_fk0`;

ALTER TABLE `TeachersLanguages` DROP FOREIGN KEY `TeachersLanguages_fk1`;

ALTER TABLE `TeachersLanguages` DROP FOREIGN KEY `TeachersLanguages_fk2`;

ALTER TABLE `TeachersIntruments` DROP FOREIGN KEY `TeachersIntruments_fk0`;

ALTER TABLE `TeachersIntruments` DROP FOREIGN KEY `TeachersIntruments_fk1`;

ALTER TABLE `TeachersIntruments` DROP FOREIGN KEY `TeachersIntruments_fk2`;

ALTER TABLE `StudentsAccounts` DROP FOREIGN KEY `StudentsAccounts_fk0`;

ALTER TABLE `Feedback` DROP FOREIGN KEY `Feedback_fk0`;

ALTER TABLE `Feedback` DROP FOREIGN KEY `Feedback_fk1`;

ALTER TABLE `Class` DROP FOREIGN KEY `Class_fk0`;

ALTER TABLE `Class` DROP FOREIGN KEY `Class_fk1`;

ALTER TABLE `Class` DROP FOREIGN KEY `Class_fk2`;

ALTER TABLE `Accounts` DROP FOREIGN KEY `Accounts_fk0`;

ALTER TABLE `Accounts` DROP FOREIGN KEY `Accounts_fk1`;

ALTER TABLE `Accounts` DROP FOREIGN KEY `Accounts_fk2`;

ALTER TABLE `SchoolsInstruments` DROP FOREIGN KEY `SchoolsInstruments_fk0`;

ALTER TABLE `ClassesStudents` DROP FOREIGN KEY `ClassesStudents_fk0`;

ALTER TABLE `ClassesStudents` DROP FOREIGN KEY `ClassesStudents_fk1`;

ALTER TABLE `StudentInstrumentRental` DROP FOREIGN KEY `StudentInstrumentRental_fk0`;

ALTER TABLE `StudentInstrumentRental` DROP FOREIGN KEY `StudentInstrumentRental_fk1`;

DROP TABLE IF EXISTS `TeachersAccounts`;

DROP TABLE IF EXISTS `ParentDetails`;

DROP TABLE IF EXISTS `TeachersLanguages`;

DROP TABLE IF EXISTS `Languages`;

DROP TABLE IF EXISTS `TeachersIntruments`;

DROP TABLE IF EXISTS `Proficiency`;

DROP TABLE IF EXISTS `Instruments`;

DROP TABLE IF EXISTS `StudentsAccounts`;

DROP TABLE IF EXISTS `Feedback`;

DROP TABLE IF EXISTS `AdminAccounts`;

DROP TABLE IF EXISTS `Class`;

DROP TABLE IF EXISTS `Accounts`;

DROP TABLE IF EXISTS `SchoolsInstruments`;

DROP TABLE IF EXISTS `ClassesStudents`;

DROP TABLE IF EXISTS `StudentInstrumentRental`;
