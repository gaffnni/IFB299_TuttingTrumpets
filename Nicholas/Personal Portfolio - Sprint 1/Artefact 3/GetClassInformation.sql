Select CONCAT(ta.FirstName, ' ', ta.LastName) AS TeacherName, i.Name As Instrument, p.Name As Proficiency, c.NumOfStudents, c.Description, c.StartDate, c.Day, c.EndDate, c.Time, c.SessionLength, c.Cost
From class c
Inner Join instruments i on c.InstrumentId = i.Id
Inner Join teachersaccounts ta on c.TeacherId = ta.Id
Inner Join proficiency p on c.ProficiencyId = p.Id
