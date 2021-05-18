# from Flask import Flask, request
# import RPi.GPIO as GPIO

# app = Flask(__name__)

# led1 = (11)
# GPIO.setmode()


# @app.route('/', methods['GET'])
# def led():
#     status = request.args.get('status')
#     if status == "on":
#         led.on()
#     elif status == "off":
#         led.off()

from flask import Flask, request
import RPi.GPIO as GPIO

app = Flask(__name__)
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(12, GPIO.OUT)


# {{url}}/led?status=on
@app.route('/', methods=['GET'])
def led():
    status = request.args.get('status')
    if status == "on":
        GPIO.output(12, GPIO.HIGH)
    elif status == "off":
        GPIO.output(12, GPIO.LOW)