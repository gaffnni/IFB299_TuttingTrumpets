Set @TeacherId = 1;
Set @Language = 'Italian';
Set @Profiencey = 'Competent';

Select @ProfienceyId:=Id
From proficiency
Where Name = @Profiencey;

Select @LanguageId:=Id
From languages
Where Name = @Language;

Insert Into teacherslanguages(TeacherId, LanguageId, ProficiencyId)
Select @TeacherId, @LanguageId, @ProfienceyId;