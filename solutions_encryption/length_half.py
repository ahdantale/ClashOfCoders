#Encryption
loc = input("enter loaction:")
len_loc = len(loc)
half = int(len_loc/2)
cry_loc = ''
counter = half
flag = 0

for i in loc:
    asc = ord(i)
    asc+=counter
    print(counter)
    if flag==0:
        counter-=1
    if flag==1:
        counter+=1
    if counter==0:
        flag=1
        counter+=1
    
    cry_loc+=chr(asc)
    
print(cry_loc)



#decryption
loc = input("enter loaction:")
len_loc = len(loc)
half = int(len_loc/2)
cryp_loc = ''
counter = half
flag = 0

for i in loc:
    asc = ord(i)
    asc-=counter
    print(counter)
    if flag==0:
        counter-=1
    if flag==1:
        counter+=1
    if counter==0:
        flag=1
        counter+=1
    
    cryp_loc+=chr(asc)
print(cryp_loc)