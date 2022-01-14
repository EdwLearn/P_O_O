var car = new Car("AW456", new Account("Andres Romero", "QWE789"));
car.passenger = 4;
car.printDataCar();

var uberX = new UberX("AW456", new Account("Andrea Ferrari", "ANDA756"), "Chevrolet", "Spark");
uberX.passenger = 4;
uberX.printDataCar();

console.log("*****user***");
var user = new User("Damian", "KLSOA2345", "Dam@hotmial.com", "platzibest");
user.printDataAccount();