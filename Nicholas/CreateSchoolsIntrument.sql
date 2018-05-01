Set @InstrumentName = 'Saxophone';
Set @ClientId = 'SAX0001';
Set @Quality = 5;

Select @InstrumentId:=Id
From instruments
Where Name = @InstrumentName;

Insert into schoolsinstruments(InstrumentId, ClientId, Quality)
Select @InstrumentId, @ClientId, @Quality;