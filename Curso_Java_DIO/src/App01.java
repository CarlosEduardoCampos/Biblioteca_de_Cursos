import java.util.Scanner;

public class App01
{
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Olá, informe seu nome: ");
        String name = scanner.next();

        System.out.print("Informe sua idade: ");
        int age = scanner.nextInt();

        System.out.printf("Olá %s sua idade é %s \n",name, age);
    }
}