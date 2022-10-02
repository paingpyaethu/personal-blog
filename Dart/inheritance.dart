void main() {
  // var dog = new Dog();
  // dog.eat();
  // String name = "Ag AG";
  // int i = 0;
  // double d = 23.12;
  // bool b = false;
  // Animal ani = new Animal();
  // List<String> lists = <String>["Mg Mg"];
  // lists.add("Ag Ag");
  // List<String> lists2 = ["aa"];

  var aa = run();
  print(aa);
}

List<int> run() {
  List<int> num = <int>[2, 3];
  return num;
}

class Animal {
  // Super class || Parent class
  eat() {
    print('Eating...');
  }
}

class Dog extends Animal {
  // Sub class || Child class
  @override
  eat() {
    // super.eat();
    print('Dog is eating...');
    super.eat();
  }
}
