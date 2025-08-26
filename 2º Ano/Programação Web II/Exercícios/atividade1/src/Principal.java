import javax.swing.*;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Principal {
    public static void main(String[] args) {
                try {

                 Vendedor vendedor = new Vendedor();

                    vendedor.setNome(JOptionPane.showInputDialog("Qual seu Nome"));
                    vendedor.setSalariobase(Double.parseDouble(JOptionPane.showInputDialog("Qual e seu salario?")));
                    Double valorvendido = (Double.parseDouble(JOptionPane.showInputDialog("Informe o Valor Vendido: ")));

                    double comisssao = vendedor.calculocomissao(valorvendido);
                    double salario = vendedor.getSalariobase() + comisssao;
                    System.out.println("Nome Do Funcionario: " + vendedor.getNome());
                    System.out.println("Salario Base: "+ vendedor.getSalariobase());
                    System.out.println("Comissao: "+ comisssao);
                    System.out.println("Salario Total: " + salario);
                }
                catch (Exception e){
                    System.out.println("ATENCAO -- DADOS INVALIDOS");

                }
            }
        }

