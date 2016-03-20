import RPi.GPIO as GPIO
import time
import sys

GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)
GPIO.setup(13, GPIO.OUT)
#GPIO.setup(11,GPIO.OUT)

#pwmOne = GPIO.PWM(11, 100)
pwmTwo = GPIO.PWM(13, 100)
#pwmOne.start(0)
pwmTwo.start(0)
i = 0
while(i == 0 ):
#       user_input = raw_input("Some input please: ")
        #duty1 = float(sys.argv[1]) / 10.0 + 2.5
        duty2 = float(sys.argv[1]) / 10.0 + 2.5
        #pwmOne.ChangeDutyCycle(duty1)
        pwmTwo.ChangeDutyCycle(duty2)
#       GPIO.clear()
        time.sleep(0.4)
        break
quit()

