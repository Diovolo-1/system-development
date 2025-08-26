import javax.swing.*;

public class Principal {
    public static void main(String[] args) {

        try {
            int opcao = 0;

            Caixa caixa = new Caixa();
            do {
                opcao = Integer.parseInt(JOptionPane.showInputDialog("1- Depositar \n2- Sacar \n3- Saldo atual \n0- Sair"));
                switch (opcao){
                    case 1:
                        caixa.entrar();
                        break;
                    case 2:
                        caixa.retirar();
                        break;
                    case 3:
                        caixa.consult();
                    case 0:
                        break;
                    default:JOptionPane.showMessageDialog(null, "Opcao Invalida");
                }
            }
            while (opcao!= 0);
        }
        catch (Exception e){
            JOptionPane.showMessageDialog(null, "ATENCAO -- DADOS INVALIDOS");

        }
    }
}