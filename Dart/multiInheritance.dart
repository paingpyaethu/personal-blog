void main() {
  Dog dog = new Dog();
  dog.run();
  dog.eat();
}

class Animal {
  run() {
    print('Running...');
  }
}

class Fox {
  eat() {
    print('Eating...');
  }
}

class Dog extends Animal with Fox {
  // Mixin
}
