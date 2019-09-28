'''In this encryption a variable(call it as 'x') is set to length of string+1 and a charcter in string
is crypted by adding 'x' in its ascii code.while itering through string 'x' will be decrease by 1 after
each iteration''' 



#Encryption
loc = input("enter loaction:")
counter = len(loc)+1
cry_loc = ''

for i in loc:
    asc = ord(i)
    asc+=counter
    cry_loc+=chr(asc)
    counter-=1

print(cry_loc)

#decryption
code = input("enter code:")
counter = len(loc)+1
loct = ''

for i in code:
    asc = ord(i)
    asc-=counter
    loct+=chr(asc)
    counter-=1

print(loct)
