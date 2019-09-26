# Python3 implementation of the approach 
  
# Pattern table from Case 1 
values = { 
    1: 0, 
    10: 4, 
    100: 4, 
    1000: 454, 
    10000: 454, 
    100000: 45454, 
    1000000: 45454, 
    10000000: 4545454, 
    100000000: 4545454, 
    1000000000: 454545454, 
    10000000000: 454545454, 
    100000000000: 45454545454, 
    1000000000000: 45454545454, 
    10000000000000: 4545454545454, 
    100000000000000: 4545454545454, 
    1000000000000000: 454545454545454, 
    10000000000000000: 454545454545454, 
    100000000000000000: 45454545454545454, 
    1000000000000000000: 45454545454545454, 
} 
  
# Function that returns the number of  
# even and odd digits in val 
def count_even_odd(val): 
    even = odd = 0
    while val > 0: 
        num = val % 10
        if num % 2 == 0: 
            even += 1
        else: 
            odd += 1
        val //= 10
  
    return even, odd 
  
# Function that returns True if num  
# satisfies the given condition 
def satisfies_condition(num): 
    even, odd = count_even_odd(num) 
    if even % 2 == 1 and odd % 2 == 0: 
        return True
    return False
  
  
# Function to return the count of numbers  
# from 1 to val that satisfies the given condition 
def count_upto(val): 
  
    # If the value is already present in the 
    # values dict 
    if int(val) in values: 
        return values[int(val)] 
  
    # If the value is even 
    # Case 2 
    if len(val) % 2 == 0: 
        return values[int('1' + '0' * (len(val) - 1))] 
  
    val_len = len(val) 
    count = values[int('1' + '0' * (val_len - 1))] 
  
    # Now the problem is to count the desired 
    # numbers from 10**(val_len-1) + 1 to val 
    left_end = int('1' + '0' * (val_len - 1)) + 1
  
    # Case 3 
    # Eliminating all the even numbers 
    count += (int(val) - left_end) // 2
  
    if satisfies_condition(int(val)) or satisfies_condition(left_end): 
        count += 1
    return count 
  
  
if __name__ == '__main__': 
  
    # Input L and R ( as a string ) 
    l, r = '9959', '91111191159'
  
    right = count_upto(r) 
  
    left = 0
    if(left == '1'): 
        left = 0
    else: 
        left = count_upto(str(int(l)-1)) 
  
    print(right - left)