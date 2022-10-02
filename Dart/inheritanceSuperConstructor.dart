void main() {
  // var dog = new Dog('Aung Net');
  var dog = new Dog();
}

class Animal {
  Animal(name) {
    print("Animal Constructor");
  }
}

class Dog extends Animal {
  // Dog(name) : super(name) {
  //   print("Dog Constructor");
  // }
  Dog() : super('Aung Net') {
    print("Dog Constructor");
  }
}
