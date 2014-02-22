import fileinput

tree = []

for line in fileinput.input():
  tree.append(line.strip())
fileinput.close()

base = 0

for row in tree:
  row = row.split(' ')
  base = base + int(sorted(row, key=int)[-1])

print(base)