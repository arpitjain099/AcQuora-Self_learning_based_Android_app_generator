import codecs
fi=codecs.open('data.json','r')
print("fafa")
f2=fi.read()
fi.close()
f3=codecs.open('json.js','w')
strtowrite='var JSONObjects= '+str(f2)
f3.write(strtowrite)
f3.close()
