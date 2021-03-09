# OOP-intro

- Improve your knowledge in object-oriented programming
- Understand Herency
- Understand how to use Abstraction
- Understand what is Polymorphism
- Understand what interfaces are and what they are used for.

# Theoretical part

_The following questions will be answered with my own words to check the understanding of the main OOP concepts:_

- ### What is object-oriented programming in general terms?
Es un paradigma de programación que viene a solventar algunos problemas que aparecen en la programación funcional tales como la reutilización de código o la encapsulación.
Es un cambio en la mentalidad a la hora de programar. La idea es abstraerse y ver cualquier elemento como un objeto que tendrá una serie de características (propiedades) y comportaminetos (métodos).
- ### What is a class?
Una clase es la definición de un objeto o el prototipo de cómo va a ser un objeto de esa clase cuando sea creado
- ### What is an object?
Un objeto es un conjunto de propiedades y métodos que representan o definen un concepto o elemento
- ### What is an instance?
Es un objeto creado a partir de una clase
- ### What is a property?
Son variables dentro de un objeto que representan o definen las características y atributos de dicho objeto
- ### What is a method?
Son funciones dentro de un objeto que definen el comportamiento de ese objeto y las acciones que puede realizar
- ### What is the difference between a function and a method?
Un método está dentro de un objeto y una función fuera
- ### What is a constructor?
Es un método especial que se ejecuta al automáticamente al instanciar un nuevo objeto a partir de una clase
- ### What is the difference between a class, an object and an instance?
Una instancia es un objeto creado a partir de clase. Es decir, una clase es "es un molde" a partir del cual se van a crear nuevas instancias y una instancia es un objeto pero un objeto no tiene por que ser una instancia (por ejemplo si no se ha creado a partir de una clase)
- ### What do we understand by the concept of encapsulation?
Es el proceso de almacenar en una misma sección los elementos de una abstracción que constituyen su estructura y su comportamiento; sirve para separar el interfaz contractual de una abstracción y su implantación.
- ### What do we understand by the concept of abstraction?
Las características especificas de un objeto, aquellas que lo distinguen de los demás tipos de objetos y que logran definir límites conceptuales respecto a quien está haciendo dicha abstracción del objeto.
- ### What do we understand by the concept of inheritance?
Cuando la clase 2 se extiende a partir de la clase 1, la clase 2 hereda como propios las propiedades y los métodos de la clase 1
- ### What do we understand by the concept of polymorphism?
El polimorfismo sucede cuando 2 clases distintas implementan una misma interfaz. Esto desenvoca en que un mismo patrón de partida de lugar a comportamientos distintos y este concepto es el que se denomina como polimorfismo
- ### What do we understand by the concept of Overload?
El overload se da cuando un objeto tiene 2 métodos con el mismo nombre pero con número distinto de argumentos de forma que al llamar a dicho método solo se ejecutara el que corresponda en función del nº de parámetros que se hayan incluido en la llamada al método
- ### What do we understand by the concept of Override?
Overload es redefinir en la clase hija un método de la clase padre. Es decir debe de tener el mismo nombre y el mismo número de argumentos pero sobreescribira su funcionalidad
- ### What differences exist between the concept of Overload and Override?
En el override se sobreescrive el comportamiento de un método de forma que los 2 métodos con el mismo nombre no coexisten ya que ambos tienen el mismo nombre y número de argumentos mientras que con el overloading si que coexisten los métodos ya que aunque ambos tengn el mismo nombre cada uno recibe un nº de parámetros distintos
- ### What is a static class?
Es una clase compuesta exclusivamente por propiedades y métodos abstractos. No pueden instanciar objetos a partir de clases estáticas
- ### Look for 3 advantages over object-oriented programming compared to other programming paradigms
Permite reutilizar código más facilmente
Permite escalar el código más facilmente
Reduce el tiempo de de desarrollo
- ### Look for disadvantages of this paradigm
La curva de aprendizaje es más lenta que en otros paradigmas
Resolver un problema programando bajo este paradigma suele requerir más líneas de código que la programación funcional lo cual aumenta ligeramente el tiempo de ejecución del mismo
