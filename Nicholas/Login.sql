Set @Username = 'Senator';
Set @Password = 'Password';

Select a.Id,
CASE
	WHEN sa.Id is not null Then sa.Id
	WHEN ta.Id is not null Then ta.Id
	WHEN aa.Id is not null Then aa.Id
END AS AccountId,
CASE
	WHEN sa.Id is not null Then 'Student'
	WHEN ta.Id is not null Then 'Teacher'
	WHEN aa.Id is not null Then 'Admin'
END AS AccountType,
CASE
	WHEN sa.Id is not null Then sa.Password
	WHEN ta.Id is not null Then ta.Password
	WHEN aa.Id is not null Then aa.Password
END AS Password,
CASE
	WHEN sa.Id is not null Then sa.Salt
	WHEN ta.Id is not null Then ta.Salt
	WHEN aa.Id is not null Then aa.Salt
END AS Salt
From accounts a
left join studentsaccounts sa on a.StudentId = sa.Id
left join adminaccounts aa on a.AdminId = aa.Id
left join teachersaccounts ta on a.TeacherId = ta.Id
Where Username = @Username;
