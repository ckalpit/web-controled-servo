import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setup(16,GPIO.IN)
GPIO.setup(21,GPIO.IN)
GPIO.setup(20,GPIO.IN)

