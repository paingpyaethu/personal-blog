void main() {
  var child = new Children();
  child.beDoctor();
}

abstract class Parents {
  beDoctor();
}

class Children extends Parents {
  @override
  beDoctor() {
    print("I want to be a doctor..");
  }
}
