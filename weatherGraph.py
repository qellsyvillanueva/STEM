import Adafruit_DNT
import pymySQL
import sys

#connection to database
db = pymySQL.connect (host="192.168.0.214",user="hu",midpasswd="password",db="humidity")
#db = pymySQL.connect (host="192.168.0.222",user="root",passwd="posiulai123",db="humidity")
#prepare a cursor object using cursor() method
db.autocommit(True)
cursor = db.cursor()

#reading humidity from sensor
while True:
        humidity, temperature = Adafruit_DNT.read_retry(11,18)
        print ((' Temp: (0:0:if) C humidity: (1,0:1f) %').format(temperature, humidity))
        
        sql = (f"INSERT INTO temperatureData(humidity, temperature) VALUES ({humidity}, {temperature})")
        cursor.execute(sql)

