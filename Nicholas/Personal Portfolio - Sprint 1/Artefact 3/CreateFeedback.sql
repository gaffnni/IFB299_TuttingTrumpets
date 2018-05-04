Set @Feedback = 'This is a really good teacher';
Set @Rating = 5;
Set @StudentId = 1;
Set @TeacherId = 1;

Insert Into tt.feedback(Rating,Feedback,StudentId,TeacherId)
Select @Rating, @Feedback, @StudentId, @TeacherId