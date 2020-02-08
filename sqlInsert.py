import MySQLdb

db = MySQLdb.connect(host="localhost",user="user",passwd="password",db="school"

# creating cursor
cur = db.cursor(MySQLdb.cursors.DictCursor);

name= 'Jason'
age= 17
gradeLevel= 11

# create table as per requirement
sql = "INSERT INTO students (name,age,gradeLevel) VALUES ('Jason',17,11)"
cur.execute(sql)

# disconnecting from server
cur.close()
db.close()


