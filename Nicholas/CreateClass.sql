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