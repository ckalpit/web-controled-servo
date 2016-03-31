import RPi.GPIO as GPIO
import time
import sys

GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)
GPIO.setup(15,GPIO.OUT)

pwmOne = GPIO.PWM(15, 100)
pwmOne.start(0)
i = 0
while(i == 0 ):
        duty1 = float(sys.argv[1]) / 10.0 + 2.5
        pwmOne.ChangeDutyCycle(duty1)
        time.sleep(0.4)
        break
quit()

