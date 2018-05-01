SET @Username = 'JDs';
Set @FirstName = 'John';
Set @LastName = 'Doe';
Set @Email = 'John.Doe@gmail.com';
Set @Salt = 1;
Set @Password = 'Password';

INSERT INTO adminaccounts(FirstName,LastName,EmailAddress,Password)
VALUES(@FirstName, @LastName, @Email, @Password);
INSERT INTO accounts(Username, AdminId)
SELECT @Username, LAST_INSERT_ID();