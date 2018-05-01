Set @StudentId = 1;
Set @ClassId = 1;

Insert into classesstudents(StudentId, ClassId)
Select @StudentId, @ClassId;