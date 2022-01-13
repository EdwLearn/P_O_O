from car import Car 

class UberBlack(Car):
    typeCarAcceted = []
    seatsMaterial = []
    
    def __init__(self,license, driver, typeCarAcceted, seatsMaterial):
        super().__init__(license, driver)
        self.typeCarAcceted = typeCarAcceted
        self.seatsMaterial = seatsMaterial
        