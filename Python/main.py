from car import Car
from account import Account

if __name__ == "__main__":
    print("Ay juancho!!")
    car = Car("AMS234", Account("Luis Izas", "ANDA567"))
    print(vars(car))
    print(vars(car.driver))