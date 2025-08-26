    import javax.swing.*;

    public class Caixa {
        //criando o atributo

        private double saldo;

        //criando o metodo de acesso
        //getter e setter


        public double getSaldo() {
            return saldo;
        }

        public void setSaldo(double saldo) {
            this.saldo = saldo;
        }

        //visibilidade publica sem retorno e sem parametro

        public void entrar(){
            double valor = Double.parseDouble(JOptionPane.showInputDialog("Qual o valor para deposito?"));
            this.saldo = this.saldo + valor;

            JOptionPane.showMessageDialog(null,"Saldo atualizado com sucesso: "+this.saldo);
        }

        public void retirar(){
            double valor = Double.parseDouble(JOptionPane.showInputDialog("Qual o valor para saque?"));

            if (this.saldo >= valor){
                this.saldo = this.saldo - valor;
                JOptionPane.showMessageDialog(null,"Saque realizado com sucesso: "+this.saldo);

            }else {
                JOptionPane.showMessageDialog(null, "Saldo Insuficiente: "+this.saldo);
            }
        }

        public void consult(){
            JOptionPane.showMessageDialog(null,"Este é seu saldo atual: "+this.saldo);
        }
    }


