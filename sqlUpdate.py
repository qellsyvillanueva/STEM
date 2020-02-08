import MySQLdb
 
db = MySQLdb.connect(host="localhost",user="user",passwd="password",db="school"
 
# creating cursor
cur = db.cursor(MySQLdb.cursors.DictCursor);
 
name= 'BIG BRAIN'
age= 17
gradeLevel= 11
 
# create table as per requirement
sql = "UPDATE students SET gradeLevel = '100' WHERE name = 'BIG BRAIN' "
cur.execute(sql)
 
# disconnecting from server
cur.close()
db.close()

