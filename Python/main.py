from car import Car

if __name__ == "__main__":
    print("Ay juancho!!")
    car = Car()
    car.license = "AMS234"
    car.driver = "Luis Izas"
    print(vars(car))
    
    car2 = Car()
    car2.license = "QWE456"
    car2.driver = "Jose Antonio"
    print(vars(car2))