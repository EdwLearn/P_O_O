import java.util.ArrayList;
import java.util.Map;

class UberBlack extends Car{
    Map<String, Map<String, Integer>> typeCarAcceted;
    ArrayList<String> seatsMaterial;
    

    public UberBlack(String license, Account driver, Map<String, Map<String, Integer>> typeCarAcceted, ArrayList<String> seatsMaterial) {
        super(license, driver);
        this.typeCarAcceted = typeCarAcceted;
        this.seatsMaterial = seatsMaterial;
    }
}