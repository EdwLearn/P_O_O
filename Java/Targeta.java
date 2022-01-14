import java.util.Date;
class Efectivo extends Payment{
        String franquicia;
        Date fechaVencimiento;
        String codigoCvv;


        public Efectivo(Integer id, String franquicia, Date fechaVencimiento, String codigoCvv){
        super(id);
        this.franquicia = franquicia;
        this.fechaVencimiento = fechaVencimiento;
        this.codigoCvv = codigoCvv;
        }
}