class PayPal extends Payment{
        String referencia;
        String sucursal;


        public PayPal(Integer id, String referencia, String sucursal){
        super(id);
        this.referencia = referencia;
        this.sucursal = sucursal;
        }
}