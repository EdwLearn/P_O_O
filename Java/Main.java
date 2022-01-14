class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        Car car = new Car("AMQ123", new Account("Andres Herrera", "AND123","andres@hotmail.com", "12345"));
        car.passenger = 4;
        car.printDataCar();

        Car uberX = new UberX("QWE456", new Account("Juancho Pancho", "ANDA876", "maria3@gmail.com", "56423"), "Toyota", "Corolla");
        uberX.passenger = 3;
        uberX.printDataCar();

        User user = new User("Mariana Valle", "SDF457", "maria@gmail.com", "32erty");
        user.printDataUser();



    }
}