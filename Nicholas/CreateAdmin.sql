SET @Username = 'JD', @FirstName = 'John', @LastName = 'Doe', @Email = 'John.Doe@gmail.com', @Password = 'Password';

INSERT INTO adminaccounts(FirstName,LastName,EmailAddress,Password)
VALUES(@FirstName, @LastName, @Email, @Password);
INSERT INTO accounts(Username, AdminId)
SELECT @Username, LAST_INSERT_ID();