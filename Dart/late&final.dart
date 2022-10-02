void main() {
  Student std = new Student();
  std.run();
}

class Student {
  late String name;

  run() {
    this.name = "Mg Mg";
    print(this.name);
    print("Student");
  }
}
