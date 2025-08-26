public class Vendedor {
    //criando o atributo

    private String nome;
    private double salariobase;

    //criando o metodo de acesso
    //getter e setter


    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public double getSalariobase() {
        return salariobase;
    }

    public void setSalariobase(double salariobase) {
        this.salariobase = salariobase;
    }

    public double calculocomissao(double valorvendido) {
        double comissao = valorvendido * 10/100;
        return comissao;
    }
}



