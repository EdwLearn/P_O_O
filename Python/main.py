from car import Car
from account import Account
from UberX import UberX
from Driver import Driver
from User import User

if __name__ == "__main__":
    print("Ay juancho!!")
    car = Car("AMS234", Account("Luis Izas", "ANDA567", "Luis@hotmail.com", "efddsaa"))
    print(vars(car))
    print(vars(car.driver))
    
    uberX = UberX("JJJ123", Account("Juanito Perez", "UFF234", "juancho@gmail.com", "sisapa455"), "Hyundai", "S201")
    
    print(vars(uberX))
    print(vars(uberX.driver))
    
    print("Drivers")
    driver = Driver("Maria Jose", "GHJK345", "majo@outlook.com", "12345mlF")
    print(vars(driver))
    
    print("users")
    user = User("Mario", "GY785", "ma@outlook.com", "HDSA345")
    print(vars(user))
    
    
    