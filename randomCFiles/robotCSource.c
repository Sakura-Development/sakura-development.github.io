// Sensor and motor initilizers
#pragma config(Sensor, in1, lightsensor, sensorReflection)
#pragma config(Sensor, dgtl1, encoder,  sensorQuadEncoder)
#pragma config(Sensor, dgtl3, red, sensorLEDtoVCC)
#pragma config(Sensor, dgtl4, green, sensorLEDtoVCC)
#pragma config(Motor, port3, flashlight, tmotorVexFlashlight, openLoop, reversed)
#pragma config(Motor, port2, motor, tmotorVex393_MC29, openLoop)

// Start the main code
task main()
{
    // Initialize variables
    int waitTime = 2;
    int speed = 40;
    int maxEncode = 115;
    int minEncode = 0;

    // Initializes flashlight and off LED
    turnFlashlightOn(port3,100);
    turnLEDOn(dgtl3);

    // Wait
    wait(waitTime);

    // Essentially while(true) constantly runs
    while(1==1) {
        // Detects when the light sensor is NOT BELOW OR EQUAL TO 52
        if(SensorValue[lightsensor]!>=52) {
            // Toggle LEDs
            turnLEDOff(dgtl3);
            turnLEDOn(dgtl4);

            // Wait
            wait(waitTime);

            // Run motor until encoder hits top
            startMotor(port2,-speed);
            untilEncoderCounts(maxEncode,dgtl1);
            stopMotor(port2);

            // Wait
            wait(waitTime);

            // Run motor until encoder hits bottom
            startMotor(port2,speed);
            untilEncoderCounts(minEncode,dgtl1);
            stopMotor(port2);

            // Toggle LEDs
            turnLEDOn(dgtl3);
            turnLEDOff(dgtl4);
        }
    }
}
