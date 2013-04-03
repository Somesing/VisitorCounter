#!/usr/bin/python

a = []
file = open("Firefox.txt", "rw")
for line in file:
  a += [line]
print a
num = int(a[0])
num = num + 1
file.close()

file = open("Firefox.txt", "w")
file.write(repr(num))
file.close()
