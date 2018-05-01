SET @Username = 'JDs';
Set @FirstName = 'John';
Set @LastName = 'Doe';
Set @Email = 'John.Doe@gmail.com';
Set @Salt = 1;
Set @Password = 'Password';

INSERT INTO adminaccounts(FirstName,LastName,EmailAddress, Salt, Password)
VALUES(@FirstName, @LastName, @Email, @Salt, @Password);
INSERT INTO accounts(Username, AdminId)
SELECT @Username, LAST_INSERT_ID();