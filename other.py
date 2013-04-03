#!/usr/bin/python

a = []
file = open("other.txt", "rw")
for line in file:
  a += [line]
print a
num = int(a[0])
num = num + 1
file.close()

file = open("other.txt", "w")
file.write(repr(num))
file.close()
