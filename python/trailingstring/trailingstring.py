import fileinput

content = []
for line in fileinput.input():
  data = line.strip().split(',')
  if data[0][-len(data[1]):] == data[1]:
    print('1')
  else:
    print('0')

fileinput.close()