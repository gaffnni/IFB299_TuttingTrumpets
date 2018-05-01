Set @StudentId = 1;
Set @InstrumentName = 'Saxophone';


Select @InstrumentId:=Id
From instruments
Where Name = @InstrumentName;

Select @SchoolInstrumentId:=Id
From schoolsinstruments
Where InstrumentId = @InstrumentId
And Rented is false;

Update schoolsinstruments
Set Rented = true, UpdateDate = CURRENT_TIMESTAMP
Where Id = @SchoolInstrumentId;

Insert Into studentinstrumentrental(StudentId, SchoolInstrumentsId)
Select @StudentId, @SchoolInstrumentId;
