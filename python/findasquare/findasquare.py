import fileinput
import math
import re


def distance(x1,y1,x2,y2):
  try:
    distance = math.sqrt((x2-x1)**2 + (y2-y1)**2)
    return distance
  except ZeroDivisionError:
   return None

for line in fileinput.input():
  data = line.strip()
  pattern = re.compile('\((\d*),(\d*)\)')
  matches = pattern.findall(data)
  box = True
  a = None
  b = None
  for i in range(len(matches)):
    points = list(set(matches))
    if(len(points) < len(matches)):
      box = False
      break
    p = points.pop(i)
    for x in range(len(matches)):
      dist = distance(int(p[0]),int(p[1]),int(matches[x][0]),int(matches[x][1]))
      if(a == None and dist != 0):
        a = dist
      if (b == None and a != dist and dist != 0):
        b = dist
      if(dist != a and dist != b and dist != 0):
        box = False
        break
  if box == True:
    print("true")
  else:
    print("false")
fileinput.close()