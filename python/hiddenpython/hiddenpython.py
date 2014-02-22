import fileinput

content = []
for line in fileinput.input():
    content.append(line.strip())

for line in content:
  out = "";
  for letter in line:
    num = ord(letter)
    if num >= 97 and num <= 106:
      out = out + chr(num-49)
    elif num >= 48 and num <= 57:
      out = out + letter;
  if len(out) == 0:
    out = "NONE"
  print(out)
