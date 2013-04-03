#!/usr/bin/python

a = []
b = ["IE.txt", "Opera.txt", "Firefox.txt", "Safari.txt", "other.txt"]
for i in b:
  file = open(i, "rw")
  for line in file:
    a += [int(line)]
file.close()

print a
mx = -1
ind = 0
for x in range(0, 4):
  if a[x] > mx:
    mx = a[x]
    ind = x

if ind == 0:
  print ("Internet Explorer")
elif ind == 1:
  print ("Opera")
elif ind == 2:
  print("Firefox")
elif ind ==3:
  print("Safari")
else:
  print("Other")
