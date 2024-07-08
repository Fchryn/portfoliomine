import serial
import sys

def execute_gcode(port, baudrate, command):
    try:
        ser = serial.Serial(port=port, baudrate=baudrate, timeout=1)
        ser.write((command + '\n').encode())
        ser.close()
        print("Command executed successfully.")
    except Exception as e:
        print(f"Error: {e}")

if __name__ == "__main__":
    port = sys.argv[1]
    baudrate = int(sys.argv[2])
    command = sys.argv[3]
    execute_gcode(port, baudrate, command)
