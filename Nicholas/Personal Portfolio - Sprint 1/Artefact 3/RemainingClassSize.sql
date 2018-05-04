Set @ClassId = 1;

Select @StudentCount:=COUNT(*)
From classesstudents
Where ClassId = @ClassId;

Select NumOfStudents - @StudentCount As RemainingClassSize
From class
Where Id = @ClassId
