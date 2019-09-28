'''In this encryption, factors of string length is added from starting charcter of string in ascending
order'''


#Encryption
loc = input("enter loaction:")
len_loc = len(loc)
factors = []
cry_loc = ''
index = 0
for i in range(1,len_loc+1):
    if len_loc%i==0:
        factors.append(i)

for i in loc:
    asc = ord(i)
    asc+=factors[index]
    cry_loc+=chr(asc)
    index+=1
    if index==(len(factors)-1):
        index = 0

print(cry_loc)



#decryption
loc = input("enter loaction:")
len_loc = len(loc)
factors = []
cryp_loc = ''
index = 0
for i in range(1,len_loc+1):
    if len_loc%i==0:
        factors.append(i)

for i in loc:
    asc = ord(i)
    asc-=factors[index]
    cryp_loc+=chr(asc)
    index+=1
    if index==(len(factors)-1):
        index = 0

print(cryp_loc)