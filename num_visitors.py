#!/usr/bin/python
a = []
file = open("visitors.txt", "r")
for line in file:
  a += [line]
  print a[0]
file.close()
