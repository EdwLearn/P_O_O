from car import Car
from account import Account
from UberX import UberX

if __name__ == "__main__":
    print("Ay juancho!!")
    car = Car("AMS234", Account("Luis Izas", "ANDA567"))
    print(vars(car))
    print(vars(car.driver))
    
    uberX = UberX("JJJ123", Account("Juanito Perez", "UFF234"), "Hyundai", "S201")
    
    print(vars(uberX))
    print(vars(uberX.driver))