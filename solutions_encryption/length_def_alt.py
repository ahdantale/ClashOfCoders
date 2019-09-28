'''In this encryption alternate charcter is crypted by adding digits in length of string.
length of string in single digit also consider as double digit by adding 0 as prefix.'''

#Encryption
loc = input("enter loaction:")
len_loc = len(loc)
if len_loc <10:
    counter0 = 0
    counter1 = len_loc
else:
    len_loc = str(len_loc)
    counter0 = int(len_loc[0])
    counter1 = int(len_loc[1])
cry_loc = ''
flag = 0

for i in loc:
    asc = ord(i)
    if flag ==0:
        asc+=counter0
        cry_loc+=chr(asc)
        flag = 1
    else:
        asc+=counter1
        cry_loc+=chr(asc)
        flag = 0
        

print(cry_loc)

#decryption
loc = input("enter code:")
len_loc = len(loc)
if len_loc <10:
    counter0 = 0
    counter1 = len_loc
else:
    len_loc = str(len_loc)
    counter0 = int(len_loc[0])
    counter1 = int(len_loc[1])
cryp_loc = ''
flag = 0

for i in loc:
    asc = ord(i)
    if flag ==0:
        asc-=counter0
        cryp_loc+=chr(asc)
        flag = 1
    else:
        asc-=counter1
        cryp_loc+=chr(asc)
        flag = 0
        

print(cryp_loc)
