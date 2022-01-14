class Account {
    constructor(name, document, email, password) {
        this.id;
        this.name = name;
        this.document = document;
        this.email = email;
        this.password = password;
    }

    printDataAccount(){
        console.log("Nombre: " +  this.name);
        console.log("Document: " + this.document);
        console.log("Email: " + this.email);
        console.log("Password: " + this.password);
    }
}