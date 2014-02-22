import fileinput

for line in fileinput.input():
  data = int(line.strip())
  print(bin(data)[2:])
fileinput.close()