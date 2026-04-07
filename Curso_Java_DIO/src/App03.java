import java.util.Scanner;

public class App03 {
    public static void main(String[] args) {

        // = e o sinal de atribuição, ou seja, o valor do lado direito é atribuído à variável 
        // do lado esquerdo
        var scanner = new Scanner(System.in);

        System.out.print("Quanto é 2 + 2? ");
        var result = scanner.nextInt();

        // == é o operador de comparação, ou seja, ele compara os valores dos dois lados 
        // e retorna true se forem iguais ou false se forem diferentes
        System.out.printf("O resultado e 4. você acertou? (%s) \n", result == 4);

        // != é o operador de comparação de desigualdade, ou seja, ele compara os valores 
        // dos dois lados e retorna true se forem diferentes ou false se forem iguais
        System.out.printf("O resultado não é 4. você errou? (%s)\n", result != 4);

        System.out.print("Quantos anos você tem? ");
        var age = scanner.nextInt();

        // > é o operador de comparação de maior que, ou seja, ele compara os valores dos dois
        // lados e retorna true se o valor do lado esquerdo for maior que o valor do lado direito
        var canDrive = age > 17;

        System.out.printf("Você pode dirigir? (%s) \n", canDrive);

        // < é o operador de comparação de menor que, ou seja, ele compara os valores dos dois
        // lados e retorna true se o valor do lado esquerdo for menor que o valor do lado direito
        var canNotDrive = age < 18;
        System.out.printf("Você pode dirigir? (%s) \n", !canNotDrive);

        System.out.print("Você é emancipado? ");
        var isEmancipated = scanner.nextBoolean();

        // || é o operador lógico de OR, ou seja, ele retorna true se pelo menos
        //  um dos operandos for true
        canDrive = age >= 18 || isEmancipated;

        System.out.printf("Você pode dirigir? (%s) \n", canDrive);
    }
}
