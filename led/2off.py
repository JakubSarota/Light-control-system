import RPi.GPIO as GPIO
 
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
 
GPIO.setup(13, GPIO.OUT)
GPIO.setup(16, GPIO.OUT)

GPIO.output(13, GPIO.LOW)
GPIO.output(16, GPIO.LOW)