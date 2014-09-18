import csv
import sys
import json
import codecs

#EDIT THIS LIST WITH YOUR REQUIRED JSON KEY NAMES
fieldnames=["sno","question","option1","option2","option3","option4","answer","flag"]

fi=codecs.open('csv/data.csv','r')
f=fi.read()
fi.close()

f=f.replace('\t',',')
#print f
csv_filename = f
f=open(csv_filename, 'r')
csv_reader = csv.DictReader(f,fieldnames)
json_filename = csv_filename.split(".")[0]+".json"
jsonf = open(json_filename,'w') 
data = json.dumps([r for r in csv_reader])
jsonf.write(data) 
f.close()
jsonf.close()
