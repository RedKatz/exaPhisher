import os
from multiprocessing import Process
scelta_termux = "false"
os.system("clear")
sudo_check = input("Are you on Termux [y/n]: ")
if sudo_check == "n":
    verifica_sudo = input("Are you running this script as sudo? [y/n]: ")
    if verifica_sudo == "y":
        pass
    else:
        print("run this script as sudo")
        exit()
    pass
else:
    scelta_termux = input("are you on termux? [y/n]: ")
    if scelta_termux == "y":
        os.chdir("..")
        os.system("touch ./src/termux_ver.py")
        
        pass
    else:
        print("please run this script as sudo")
        exit()

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

print(bcolors.WARNING+'''
                      '''+bcolors.OKGREEN+'''  _____      _         '''+bcolors.WARNING+'''              
                      '''+bcolors.OKGREEN+''' / ____|    | |              '''+bcolors.WARNING+'''             
         _____  ____ _'''+bcolors.OKGREEN+'''| (___   ___| |_ _   _ _ __ '''+bcolors.WARNING+''' 
        / _ \ \/ / _` '''+bcolors.OKGREEN+''' \___ \ / _ \ __| | | | '_ \ '''+bcolors.WARNING+'''
       |  __/>  < (_| '''+bcolors.OKGREEN+''' ____) |  __/ |_| |_| | |_) |'''+bcolors.WARNING+'''   
        \___/_/\_\__,_'''+bcolors.OKGREEN+'''|_____/ \___|\__|\__,_| .__/ '''+bcolors.OKGREEN+'''   
                                            | |
                                            |_| 
'''+bcolors.ENDC)

print("Welcome to exaphisher setup! following packages will be installed:") 
print('''
- npm
- ngrok
- php
- localtunnel
''')
setup_scelta = input("Continue? [y/n]: ")

if setup_scelta == "y":
    pass
else:
    print("Exit setup...")
    exit()
os.system("clear")
def command(comando):
    os.system(comando)

def linux_debian():
    print(bcolors.OKGREEN+"Ngrok setup"+bcolors.ENDC)
    command(' curl -s https://ngrok-agent.s3.amazonaws.com/ngrok.asc | sudo tee /etc/apt/trusted.gpg.d/ngrok.asc >/dev/null && echo "deb https://ngrok-agent.s3.amazonaws.com buster main" | sudo tee /etc/apt/sources.list.d/ngrok.list && sudo apt update && sudo apt install ngrok ')
    ngrok_token = input(bcolors.UNDERLINE+"paste your ngrok token here:"+bcolors.ENDC+" ")
    command("ngrok config add-authtoken "+ ngrok_token)
    print(bcolors.OKGREEN+"php Setup"+bcolors.ENDC)
    command("apt-get install php ")
    print(bcolors.OKGREEN+"Localtunnel setup"+bcolors.ENDC)
    command("apt-get install npm ")
    command("npm install -g localtunnel")
    print(bcolors.OKGREEN+"Localhost setup"+bcolors.ENDC)
    print("Type yes to finish setup")
    os.system("ssh -R 80:localhost:8080 nokey@localhost.run")
    print(bcolors.WARNING+"Type yes to finish setup"+bcolors.ENDC)
    os.system("ssh -R 80:localhost:8080 nokey@localhost.run")
    print(bcolors.OKGREEN+"Setup Completed Successfully!")
    os.chdir("..")
    print("Type python3 main.py to run exaPhisher!")

def linux_arch():
    arch_yay = input(bcolors.WARNING+"Do you have yay package manager? [y/n]: "+bcolors.ENDC)
    if arch_yay == "y":
        pass
    else:
        print("install yay package menager and run the setup; Guide: https://cloudcone.com/docs/article/how-to-install-yay-helper-on-archlinux/"+bcolors.ENDC)
    print(bcolors.OKGREEN+"Ngrok setup"+bcolors.ENDC)
    command('yay -S ngrok')
    ngrok_token = input(bcolors.UNDERLINE+"paste your ngrok token here:"+bcolors.ENDC+" ")
    command("ngrok config add-authtoken "+ ngrok_token)
    print(bcolors.OKGREEN+"Php setup"+bcolors.ENDC)
    command("pacman -S php ")
    print(bcolors.OKGREEN+"Localtunnel setup"+bcolors.ENDC)
    command("apt install nodejs ")
    command("npm install -g localtunnel")
    print(bcolors.OKGREEN+"Localhost setup"+bcolors.ENDC)
    print("Type yes to finish setup")
    os.system("ssh -R 80:localhost:8080 nokey@localhost.run")
    print(bcolors.WARNING+"Type yes to finish setup"+bcolors.ENDC)
    os.system("ssh -R 80:localhost:8080 nokey@localhost.run")
    print(bcolors.OKGREEN+"Setup Completed Successfully!")
    os.chdir("..")
    print("Type python3 main.py to run exaPhisher!")

def termux():
    print(bcolors.OKGREEN+"Localtunnel setup"+bcolors.ENDC)
    print(bcolors.OKGREEN+"Localhost setup"+bcolors.ENDC)
    print("Type yes to finish setup")
    os.system("pkg install openssh")
    os.system("pkg install openssl")
    os.system("pkg install php")
    print(bcolors.WARNING+"Type yes to finish setup"+bcolors.ENDC)
    os.system("ssh -R 80:localhost:8080 nokey@localhost.run")
    time.sleep(2)
    print(bcolors.OKGREEN+"Setup Completed Successfully!")
    os.chdir("..")
    print("Type python3 main.py to run exaPhisher!")
if scelta_termux == "y":
    termux()
    command("toch /src/termux_ver.py")
    pass
else:
    print(bcolors.WARNING+'''
                      '''+bcolors.OKGREEN+'''  _____      _         '''+bcolors.WARNING+'''              
                      '''+bcolors.OKGREEN+''' / ____|    | |              '''+bcolors.WARNING+'''             
         _____  ____ _'''+bcolors.OKGREEN+'''| (___   ___| |_ _   _ _ __ '''+bcolors.WARNING+''' 
        / _ \ \/ / _` '''+bcolors.OKGREEN+''' \___ \ / _ \ __| | | | '_ \ '''+bcolors.WARNING+'''
       |  __/>  < (_| '''+bcolors.OKGREEN+''' ____) |  __/ |_| |_| | |_) |'''+bcolors.WARNING+'''   
        \___/_/\_\__,_'''+bcolors.OKGREEN+'''|_____/ \___|\__|\__,_| .__/ '''+bcolors.OKGREEN+'''   
                                            | |
                                            |_| 
'''+bcolors.ENDC)
    print('''Which System You Are Using?

1) Linux - Debian based
2) Linux - Arch based
3) Termux
''')
    scelta_distro = input(": ")
    if scelta_distro == "1":
        linux_debian()
    elif scelta_distro == "2":
        linux_arch()
    elif scelta_distro == "3":
        termux()





















os.system("touch setup_ver.py")
