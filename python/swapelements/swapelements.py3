import fileinput

content = []
for line in fileinput.input():
    content.append(line.strip())
    
for line in content:
	data = line.split(':')
	index = data[0].strip().split(' ')
	keys = data[1].strip().split(', ')
	for key in keys:
		key = key.split('-')
		a = index[int(key[0])]
		b = index[int(key[1])]
		index[int(key[0])] = (b)
		index[int(key[1])] = (a)
	print(' '.join(index))