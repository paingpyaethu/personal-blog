void main() {
  // var name = "Mg Mg";
  // var result = 'Student ${name}';

  // var num = [10, 20, 30];
  // num.remove(10);
  // num.add(40);
  // num.removeAt(2);

  // var name = ['Mg Mg', 'Ag Ag'];
  // name.remove('Mg Mg');

  // var lists = new List.filled(5, 10);
  // lists[0] = 20;
  // lists[1] = 30;
  // lists[2] = 40;
  // lists[3] = 50;
  // print(lists);

  // var dog = new Dog.onlyName('Red');
  // dog.run('Bo Bo');
  // print(Dog.name);
  // Dog.run();

  // var dog = new Dog();
  // dog.getAge();
  // dog.counter();
  // dog.getAge();

  int x = 0;
  int y = 20;

  try {
    int z = y ~/ x;
  } catch (e) {
    print(e);
  }
}

class Dog {
  static var name = "Dog";

  static run() {
    print("I'm running");
  }

  var age = 23;

  counter() {
    this.age++;
  }

  getAge() {
    print(this.age);
  }

  // Dog(color) {
  //   // print("I'm Constructor");
  //   print(color);
  // }
  // Dog.age(color, age) {
  //   print(color);
  //   print(age);
  // }
  // factory Dog.onlyName(color) {
  //   return Dog(color);
  // }

  // var name = "Dog";
  // run(anotherName) {
  //   print(anotherName);
  // }

  // goRun() {
  //   // this.run();
  //   print(this.name);
  // }
}
