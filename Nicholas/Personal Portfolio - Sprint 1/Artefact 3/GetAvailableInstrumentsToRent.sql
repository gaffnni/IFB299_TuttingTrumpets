Select Distinct i.Name
From instruments i
Inner Join schoolsinstruments si on i.Id = si.InstrumentId
Order By Name
