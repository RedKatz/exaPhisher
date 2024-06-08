import time
class bcolors:
    HEADER    = '\033[95m'
    OKBLUE    = '\033[34m'
    OKGREEN   = '\033[92m'
    WARNING   = '\033[93m'
    FAIL      = '\033[91m'
    BOLD      = '\033[1m'
    UNDERLINE = '\033[4m'
    ENDC      = '\033[0m'
    GREY      = '\033[90m'
    BG_RED    = '\033[41m'
square_tild = (bcolors.FAIL+"["+bcolors.ENDC+"∼"+bcolors.FAIL+"]"+bcolors.ENDC)

while True:
    #open file in read mode
    file = open("info.txt", "r")

    #read the content of file
    data = file.read()

    #get the length of the data
    if len(data) > 0:
        time.sleep(1)
        break


print(square_tild+bcolors.OKBLUE+bcolors.BOLD+''' Login Info Found !'''+bcolors.OKGREEN+'''
''')        
print(data)
print(bcolors.ENDC)
time.sleep(4)
f = open("info.txt", "w")
f.write("")
f.close()