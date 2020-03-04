#use the datetime object to create and manipulate date and time RESOURCE: HTTPS://WWW.GURU99.COM/DATE-TIME-AND-DATETIME-CLASSES-IN-PYTHON.HTML

# import modules needed from datetime
from datetime import time
from datetime import date
from datetime import datetime

#create a main loop so this module can be imported
#is used because when we import code
def main():
	
	#create a new date time object that holds the current datetime
	currentTime = datetime.now()
	print(currentTime)
	print(type(currentTime))
	
	#print only the time from the datetime 
	print("Time: ", datetime.time(currentTime))
	
	#use strftime to print only the year from the datetime object
	print("Year: ", currentTime.strftime("%Y"))
	
	#use strftime to print an easy and readale date
	print("Date :", currentTime.strftime("%a, %B, %d, %Y"))
	
if __name__ == "__main__":
	main()
