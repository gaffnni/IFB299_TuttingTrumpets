#Admin Account
SET @Username = 'JD', @FirstName = 'John', @LastName = 'Doe', @Email = 'John.Doe@gmail.com', @Salt = 1, @Password = 'Password';

INSERT INTO adminaccounts(FirstName,LastName,EmailAddress, Salt, Password)
VALUES(@FirstName, @LastName, @Email, @Salt, @Password);
INSERT INTO accounts(Username, AdminId)
SELECT @Username, LAST_INSERT_ID();

#CreateTeacher
SET @Username = 'Senator', 
@FirstName = 'Arnold', 
@LastName = 'Vinnick',
@DateOfBirth = STR_TO_DATE('04/12/1994', '%d/%m/%Y') , 
@Address = '1 Street Lane, Brisbane, Qld, Australia', 
@Gender = 'Male', 
@PhoneNumber = 0754121294,
@Email = 'John.Doe@gmail.com', 
@Salt = 1,
@Password = 'Password', 
@AdminCreationId = 1;

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
@Password = 'Password2';

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
Select 'Clarinet';

#Create Teacher Languages
Set @TeacherId = 1;
Set @Language = 'French';
Set @Profiencey = 'Expert';

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

Insert Into tt.feedback(Rating,Feedback,StudentId,TeacherId)
Select @Rating, @Feedback, @StudentId, @TeacherId;

#Assign Student to class
Set @StudentId = 1;
Set @ClassId = 1;

Insert into classesstudents(StudentId, ClassId)
Select @StudentId, @ClassId;