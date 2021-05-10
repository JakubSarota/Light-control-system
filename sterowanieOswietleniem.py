# import RPi.GPIO as GPIO

# GPIO.setmode(GPIO.BCM)

# GPIO.setup(4, GPIO.OUT)

# GPIO.output(4,True)

from Projekt.shortcuts import test
import req

def button(req):

    return test(req,'stronaGlowna.php')

def output(req):
    data=req.get('stronaGlowna.php')
    print(data.text)
    data=data.text
    return render(req,'polaczenie.php', {'data':data})