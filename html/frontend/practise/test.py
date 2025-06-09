import re

str = 'vutha.nhtai'
match = re.match(r'\.', str)
if match: #n?u t?n t?i chu?i kh?p
    print('Khop!');
else:
    print ('Khong khop!')
