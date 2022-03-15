DECLARE @loc_teamName AS VARCHAR(50)
DECLARE @loc_manager AS VARCHAR(50)
DECLARE @loc_member1 AS VARCHAR(50)
DECLARE @loc_member2 AS VARCHAR(50)
DECLARE @loc_member3 AS VARCHAR(50)
DECLARE @loc_member4 AS VARCHAR(50)
DECLARE @loc_member5 AS VARCHAR(50)
DECLARE @loc_member6 AS VARCHAR(50)


SET @loc_teamName = 'TeamB'
SET @loc_manager = 'billb23'
SET @loc_member1 = 'yada'
SET @loc_member2 = 'yada'
SET @loc_member3 = 'yada'
SET @loc_member4 = 'yada'
SET @loc_member5 = 'yada'
SET @loc_member6 = 'yada'


INSERT INTO teams(teamName, manager, member1, member2, member3, member4, member5, member6 )
VALUES (@loc_teamName, @loc_manager, @loc_member1, @loc_member2, @loc_member3, @loc_member4, @loc_member5, @loc_member6);