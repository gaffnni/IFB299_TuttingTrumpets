Set @StudentId = 1;
Set @FirstName = 'Jane';
Set @LastName = 'Bourne';
Set @PhoneNumber = 0478900600;

Insert Into parentdetails(FirstName, LastName, PhoneNumber)
Select @FirstName, @LastName, @PhoneNumber;

Update StudentsAccounts
Set ParentsId = LAST_INSERT_ID(), UpdateDate = CURRENT_TIMESTAMP
Where Id = @StudentId;