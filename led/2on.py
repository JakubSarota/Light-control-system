print(' Wlaczylem swiatlo 2')
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)

GPIO.setup(13, GPIO.OUT)
GPIO.setup(16, GPIO.OUT)

GPIO.output(13, GPIO.HIGH)
GPIO.output(16, GPIO.HIGH)
