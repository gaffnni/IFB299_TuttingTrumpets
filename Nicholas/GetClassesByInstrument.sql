Set @InstrumentName = 'Saxophone';

Select c.*
From class c
Inner Join instruments i on c.InstrumentId = i.Id
Where i.Name = @InstrumentName;
