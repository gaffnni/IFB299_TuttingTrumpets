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