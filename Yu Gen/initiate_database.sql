#Admin Account
SET @Username = 'MK', @FirstName = 'Mika', @LastName = 'Williams', @Email = 'Mika.Williams@gmail.com', @Salt = 1, @Password = 'Password';

INSERT INTO adminaccounts(FirstName,LastName,EmailAddress, Salt, Password)
VALUES(@FirstName, @LastName, @Email, @Salt, @Password);
INSERT INTO accounts(Username, AdminId)
SELECT @Username, LAST_INSERT_ID();

#CreateTeacher1
SET @Username = 'Senator', 
@FirstName = 'Arnold', 
@LastName = 'Vinnick',
@DateOfBirth = STR_TO_DATE('04/12/1994', '%d/%m/%Y') , 
@Address = '1 Street Lane, Brisbane, Qld, Australia', 
@Gender = 'Male', 
@PhoneNumber = 0754121294,
@Email = 'John.Doe@gmail.com', 
@Salt = 1,
@Password = 'Password001', 
@AdminCreationId = 1;

#CreateTeacher2
SET @Username = 'Professor', 
@FirstName = 'Mozart', 
@LastName = 'Huckleberry',
@DateOfBirth = STR_TO_DATE('14/06/1974', '%d/%m/%Y') , 
@Address = '20 Music Road, Brisbane, Qld, Australia', 
@Gender = 'Male', 
@PhoneNumber = 0745673277,
@Email = 'momozart@gmail.com', 
@Salt = 1,
@Password = 'Password002', 
@AdminCreationId = 2;

#CreateTeacher3
SET @Username = 'Ssmith05', 
@FirstName = 'Samuel', 
@LastName = 'Smithy',
@DateOfBirth = STR_TO_DATE('10/07/1988', '%d/%m/%Y') , 
@Address = '40 Drum Cresent, Brisbane, Qld, Australia', 
@Gender = 'Male', 
@PhoneNumber = 0758496211,
@Email = 'Smithy@gmail.com', 
@Salt = 1,
@Password = 'Password003', 
@AdminCreationId = 3;

#CreateTeacher3
SET @Username = 'Scottyy', 
@FirstName = 'Laura', 
@LastName = 'Scott',
@DateOfBirth = STR_TO_DATE('02/01/1990', '%d/%m/%Y') , 
@Address = '32 Sounds Cresent, Brisbane, Qld, Australia', 
@Gender = 'Female', 
@PhoneNumber = 0732165748,
@Email = 'LauraScott@gmail.com', 
@Salt = 1,
@Password = 'Password004', 
@AdminCreationId = 4;

INSERT INTO teachersaccounts(FirstName,LastName,DateOfBirth,Address,Gender,PhoneNumber,EmailAddress, Salt, Password,AdminCreationId)
VALUES(@FirstName, @LastName, @DateOfBirth, @Address, @Gender, @PhoneNumber, @Email, @Salt, @Password, @AdminCreationId);
INSERT INTO accounts(Username, TeacherId)
SELECT @Username, LAST_INSERT_ID();

#Create Student
SET @Username = 'Leroy', 
@FirstName = 'Larry', 
@LastName = 'Jenkins',
@DateOfBirth = STR_TO_DATE('16/06/1994', '%d/%m/%Y') , 
@Address = '2 Street Lane, Brisbane, Qld, Australia', 
@Gender = 'Male', 
@PhoneNumber = 0412456987, 
@Email = 'LarryLarry@gmail.com',
@FacebookURL = 'https://www.facebook.com/LarryLarrison94',
@RequireInstrument = 1,
@Salt = 1,
@Password = 'Password1';

#Create Student
SET @Username = 'Dgoon1', 
@FirstName = 'Dave', 
@LastName = 'Goon',
@DateOfBirth = STR_TO_DATE('12/03/1996', '%d/%m/%Y') , 
@Address = '3 High Court, Brisbane, Qld, Australia', 
@Gender = 'Male', 
@PhoneNumber = 0412451234, 
@Email = 'DavoG@gmail.com',
@FacebookURL = 'https://www.facebook.com/Davo96',
@RequireInstrument = 1,
@Salt = 1,
@Password = 'Password2';

#Create Student
SET @Username = 'Bvorc2', 
@FirstName = 'Boris', 
@LastName = 'Vorchevsky',
@DateOfBirth = STR_TO_DATE('12/09/1997', '%d/%m/%Y') , 
@Address = '7 Tedious Street, Brisbane, Qld, Australia', 
@Gender = 'Male', 
@PhoneNumber = 0427817563, 
@Email = 'BVorchevsky@gmail.com',
@FacebookURL = 'https://www.facebook.com/BorisVorch',
@RequireInstrument = 1,
@Salt = 1,
@Password = 'Password3';

INSERT INTO studentsaccounts(FirstName,LastName,DateOfBirth,Address,Gender,PhoneNumber,EmailAddress, FacebookURL, RequireInstrument, Salt, Password)
VALUES(@FirstName, @LastName, @DateOfBirth, @Address, @Gender, @PhoneNumber, @Email, @FacebookURL, @RequireInstrument, @Salt, @Password);
INSERT INTO accounts(Username, StudentId)
SELECT @Username, LAST_INSERT_ID();

#Create Languages
Insert Into languages(Name)
Select 'English'
UNION ALL
Select 'French'
UNION ALL
Select 'Spanish'
UNION ALL
Select 'Hindi'
UNION ALL
Select 'Arabic'
UNION ALL
Select 'Portuguese'
UNION ALL
Select 'Russian';
UNION ALL
Select 'Chinese';

#Create Proficiencies
Insert into proficiency(Name)
Select 'Novice'
UNION ALL
Select 'Advanced Beginner'
UNION ALL
Select 'Competent'
UNION ALL
Select 'Proficient'
UNION ALL
Select 'Expert';

#Create Instruments
Insert Into tt.instruments(Name)
Select 'Electric guitar'
UNION ALL
Select 'Keyboard'
UNION ALL
Select 'Piano'
UNION ALL
Select 'Guitar'
UNION ALL
Select 'Drums'
UNION ALL
Select 'Violin'
UNION ALL
Select 'Saxophone'
UNION ALL
Select 'Flute'
UNION ALL
Select 'Cello'
UNION ALL
Select 'Clarinet'
UNION ALL
Select 'Harmonium';
UNION ALL
Select 'Tablas';
UNION ALL
Select 'Santurs';
UNION ALL
Select 'Vina';

#Create Teacher Languages
Set @TeacherId = 1;
Set @Language = 'French';
Set @Profiencey = 'Expert';

#Create Teacher Languages
Set @TeacherId = 2;
Set @Language = 'Hindi';
Set @Profiencey = 'Proficient';

#Create Teacher Languages
Set @TeacherId = 3;
Set @Language = 'Portuguese';
Set @Profiencey = 'Competent';

Select @ProfienceyId:=Id
From proficiency
Where Name = @Profiencey;

Select @LanguageId:=Id
From languages
Where Name = @Language;

Insert Into teacherslanguages(TeacherId, LanguageId, ProficiencyId)
Select @TeacherId, @LanguageId, @ProfienceyId;

#Create ParentDetails for Student 1
Set @StudentId = 1;
Set @FirstName = 'Jane';
Set @LastName = 'Bourne';
Set @PhoneNumber = 0478900600;

Insert Into parentdetails(FirstName, LastName, PhoneNumber)
Select @FirstName, @LastName, @PhoneNumber;

Update StudentsAccounts
Set ParentsId = LAST_INSERT_ID(), UpdateDate = CURRENT_TIMESTAMP
Where Id = @StudentId;

#Create Schools Instrument
Set @InstrumentName = 'Saxophone';
Set @ClientId = 'SAX0003';
Set @Quality = 5;

#Create Schools Instrument
Set @InstrumentName = 'Guitar';
Set @ClientId = 'GUIT0002';
Set @Quality = 4;

#Create Schools Instrument
Set @InstrumentName = 'Cello';
Set @ClientId = 'CELL0007';
Set @Quality = 3;

Select @InstrumentId:=Id
From instruments
Where Name = @InstrumentName;

Insert into schoolsinstruments(InstrumentId, ClientId, Quality)
Select @InstrumentId, @ClientId, @Quality;

#Create Class
Set @TeacherId = 1;
Set @InstrumentName = 'Saxophone';
Set @ProficiencyName = 'Novice';
Set @NumOfStudents = 3;
Set @Description = 'Introductory class in Saxophone';
Set @StartDate = STR_TO_DATE('1/05/2018', '%d/%m/%Y');
Set @EndDate = STR_TO_DATE('1/06/2018', '%d/%m/%Y');
Set @Time = '14:00:00';
Set @SessionLength = 60;
Set @Cost = 99;

#Create Class
Set @TeacherId = 2;
Set @InstrumentName = 'Guitar';
Set @ProficiencyName = 'Expert';
Set @NumOfStudents = 1;
Set @Description = 'Expert class in Guitar';
Set @StartDate = STR_TO_DATE('2/04/2018', '%d/%m/%Y');
Set @EndDate = STR_TO_DATE('2/07/2018', '%d/%m/%Y');
Set @Time = '11:00:00';
Set @SessionLength = 60;
Set @Cost = 150;

#Create Class
Set @TeacherId = 3;
Set @InstrumentName = 'Voice';
Set @ProficiencyName = 'Competent';
Set @NumOfStudents = 5;
Set @Description = 'Intermediate Vocal Lessons';
Set @StartDate = STR_TO_DATE('1/01/2018', '%d/%m/%Y');
Set @EndDate = STR_TO_DATE('1/04/2018', '%d/%m/%Y');
Set @Time = '08:00:00';
Set @SessionLength = 30;
Set @Cost = 100;

Select @ProficiencyId:=Id
From proficiency
Where Name = @ProficiencyName;

Select @InstrumentId:=Id
From instruments
Where Name = @InstrumentName;

Insert Into class(TeacherId, InstrumentId, ProficiencyId, NumOfStudents, Description, StartDate, Day, EndDate, Time, SessionLength, Cost)
Select @TeacherId, @InstrumentId, @ProficiencyId, @NumOfStudents, @Description, @StartDate, DAYNAME(@StartDate), @EndDate, @Time, @SessionLength, @Cost;

#Create Teacher Feedback
Set @Feedback = 'This is a really good teacher';
Set @Rating = 5;
Set @StudentId = 1;
Set @TeacherId = 1;

#Create Teacher Feedback
Set @Feedback = 'This teacher is competent but gets upset easily, I feel uncomfortable when she shouts';
Set @Rating = 2;
Set @StudentId = 2;
Set @TeacherId = 2;

Insert Into tt.feedback(Rating,Feedback,StudentId,TeacherId)
Select @Rating, @Feedback, @StudentId, @TeacherId;

#Assign Student to class
Set @StudentId = 1;
Set @ClassId = 1;

Insert into classesstudents(StudentId, ClassId)
Select @StudentId, @ClassId;