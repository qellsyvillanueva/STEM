import MySQLdb
 
#connecting to server
db = MySQLdb.connect(host="localhost",user="user",passwd="password",db="school"
 
# creating cursor
cur = db.cursor(MySQLdb.cursors.DictCursor);
 
cur.execute(sql)
 
# disconnecting from server
cur.close()
db.close()
