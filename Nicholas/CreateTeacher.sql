SET @Username = 'Senator', 
@FirstName = 'Arnold', 
@LastName = 'Vinnick',
@DateOfBirth = STR_TO_DATE('04/12/1994', '%d/%m/%Y') , 
@Address = '1 Street Lane, Brisbane, Qld, Australia', 
@Gender = 'Male', 
@PhoneNumber = 0412456789, 
@Email = 'John.Doe@gmail.com', 
@Salt = 1,
@Password = 'Password', 
@AdminCreationId = 1;

INSERT INTO teachersaccounts(FirstName,LastName,DateOfBirth,Address,Gender,PhoneNumber,EmailAddress, Salt, Password,AdminCreationId)
VALUES(@FirstName, @LastName, @DateOfBirth, @Address, @Gender, @PhoneNumber, @Email, @Salt, @Password, @AdminCreationId);
INSERT INTO accounts(Username, TeacherId)
SELECT @Username, LAST_INSERT_ID();